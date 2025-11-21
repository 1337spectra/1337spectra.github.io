<?php
// Security: Start session for rate limiting (optional but recommended)
session_start();

// Security: Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die('Method not allowed');
}

// Security: Basic rate limiting (max 5 submissions per hour)
$rate_limit_key = 'contact_form_' . $_SERVER['REMOTE_ADDR'];
if (!isset($_SESSION[$rate_limit_key])) {
    $_SESSION[$rate_limit_key] = ['count' => 0, 'time' => time()];
}

$rate_data = $_SESSION[$rate_limit_key];
if (time() - $rate_data['time'] > 3600) {
    // Reset after 1 hour
    $_SESSION[$rate_limit_key] = ['count' => 1, 'time' => time()];
} else if ($rate_data['count'] >= 5) {
    http_response_code(429);
    die('Too many requests. Please try again later.');
} else {
    $_SESSION[$rate_limit_key]['count']++;
}

// Security: Validate and sanitize inputs
if (!isset($_POST["name"]) || !isset($_POST["email"]) || !isset($_POST["message"])) {
    http_response_code(400);
    die('Missing required fields');
}

// Sanitize inputs
$name = htmlspecialchars(trim($_POST["name"]), ENT_QUOTES, 'UTF-8');
$from = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$msg = htmlspecialchars(trim($_POST["message"]), ENT_QUOTES, 'UTF-8');

// Validate name (not empty, reasonable length)
if (empty($name) || strlen($name) > 100) {
    http_response_code(400);
    die('Invalid name');
}

// Validate email
if (!filter_var($from, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    die('Invalid email address');
}

// Validate message (not empty, reasonable length)
if (empty($msg) || strlen($msg) > 5000) {
    http_response_code(400);
    die('Invalid message');
}

// Security: Check for suspicious patterns (basic spam detection)
$suspicious_patterns = ['/\bcc:/i', '/\bbcc:/i', '/content-type:/i', '/mime-version:/i'];
foreach ($suspicious_patterns as $pattern) {
    if (preg_match($pattern, $name) || preg_match($pattern, $from) || preg_match($pattern, $msg)) {
        http_response_code(400);
        die('Suspicious content detected');
    }
}

$receiver = "gndecker@proton.me";
$subject = "Contact form: " . substr($name, 0, 50);

// Build email message
$message = "
<html>
<head>
<title>Contact Form Submission</title>
</head>
<body>
<table width='50%' border='0' align='center' cellpadding='0' cellspacing='0'>
  <tr>
    <td colspan='2' align='center' valign='top'><img src='https://gabrielledecker.com/images/logo.png' width='140' height='140' alt='Logo'></td>
  </tr>
  <tr>
    <td width='50%' align='right'>&nbsp;</td>
    <td align='left'>&nbsp;</td>
  </tr>
  <tr>
    <td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Name:</td>
    <td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>" . $name . "</td>
  </tr>
  <tr>
    <td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Email:</td>
    <td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>" . $from . "</td>
  </tr>
  <tr>
    <td align='right' valign='top' style='border-top:1px solid #dfdfdf; border-bottom:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Message:</td>
    <td align='left' valign='top' style='border-top:1px solid #dfdfdf; border-bottom:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>" . nl2br($msg) . "</td>
  </tr>
  <tr>
    <td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:11px; color:#666; padding:7px 5px 7px 0;'>IP Address:</td>
    <td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:11px; color:#666; padding:7px 0 7px 5px;'>" . htmlspecialchars($_SERVER['REMOTE_ADDR']) . "</td>
  </tr>
  <tr>
    <td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:11px; color:#666; padding:7px 5px 7px 0;'>Timestamp:</td>
    <td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:11px; color:#666; padding:7px 0 7px 5px;'>" . date('Y-m-d H:i:s') . "</td>
  </tr>
</table>
</body>
</html>
";

// Security: Set safe email headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: Portfolio Contact Form <noreply@gabrielledecker.com>" . "\r\n";
$headers .= "Reply-To: " . $from . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Send email
if (mail($receiver, $subject, $message, $headers)) {
    echo "The message has been sent!";
} else {
    http_response_code(500);
    echo "The message could not be sent!";
}
?>

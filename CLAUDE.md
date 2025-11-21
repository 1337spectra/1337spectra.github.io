# CLAUDE.md - AI Assistant Guide

## Repository Overview

**Project Name:** 1337spectra.github.io
**Type:** Personal Portfolio Website (GitHub Pages)
**Owner:** Gabrielle Decker
**Domain:** gabrielledecker.com
**Purpose:** Professional cybersecurity portfolio showcasing skills, experience, education, and projects

This is a static website built with vanilla HTML, CSS, and JavaScript, designed to present a comprehensive professional portfolio for a cybersecurity specialist and creative technologist.

---

## Project Structure

```
1337spectra.github.io/
├── .github/
│   └── workflows/
│       └── codesee-arch-diagram.yml    # CodeSee architecture diagram workflow
├── css/
│   ├── carousel.css                     # Image carousel styling
│   ├── font-awesome.css                 # Icon font styles
│   ├── normalize.css                    # CSS reset
│   ├── portfolio.css                    # Portfolio grid gallery styles
│   ├── responsive.css                   # Mobile/tablet responsive styles
│   ├── scroll.css                       # Page scrolling effects
│   └── style.css                        # Main stylesheet
├── fonts/                               # Custom font files
├── images/                              # Profile images, logos, signatures, project screenshots
├── js/
│   ├── jquery-2.0.3.min.js             # jQuery library
│   ├── jquery.*.js                      # Various jQuery plugins
│   ├── progressbar.js                   # Skills progress bars
│   ├── sendemail.js                     # Contact form AJAX handler
│   ├── settings.js                      # Main JavaScript configuration
│   ├── grid_gallery.js                  # Portfolio grid gallery functionality
│   ├── carousel.js                      # Image carousel
│   └── text.rotator.js                  # Rotating text effects
├── projects/
│   ├── (MASTER)DECKER, Gabrielle-Resume.pdf
│   ├── 2021 - Gabby's Cybersecurity Awareness Tips for Friends & Family.pdf
│   ├── 2022 - Decker, Gabrielle - Cybersecurity Awareness Month.pdf
│   ├── Decker, Gabrielle - CS-2743-MW01F - Enterprise Security Management Plan.pdf
│   ├── InfoSecAuditReport_Redacted.pdf
│   ├── ITD-3453 Course Project Gabrielle Decker.pdf
│   └── ITD-3543 Course Project Gabrielle Decker.pdf
├── CNAME                                # Custom domain configuration
├── README.md                            # Basic repository information
├── favicon.ico                          # Site favicon
├── index.html                           # Main portfolio page
└── send-email.php                       # Contact form email handler
```

---

## Technology Stack

### Frontend
- **HTML5** - Semantic markup
- **CSS3** - Styling with Flexbox/Grid
- **Vanilla JavaScript** - Core functionality
- **jQuery 2.0.3** - DOM manipulation and AJAX

### Libraries & Plugins
- **Font Awesome 6.7.2** - Icon library
- **Google Fonts** - Roboto & Oswald fonts
- **Easy Pie Chart** - Circular skill charts
- **Owl Carousel** - Image carousel
- **jScrollPane** - Custom scrollbar
- **Masonry** - Portfolio grid layout
- **ImagesLoaded** - Image loading detection
- **FitVids** - Responsive video embeds

### Backend
- **PHP** - Contact form email processing (send-email.php)

### Analytics
- **Google Analytics** - Tracking ID: G-TE1XRZ3SJ7

### Hosting
- **GitHub Pages** - Static site hosting
- **Custom Domain** - gabrielledecker.com

---

## Key Files and Their Purpose

### index.html (45,610 bytes)
The main portfolio page containing all content sections:
- **Introduction** (`#chapterintroduction`) - Hero section with name and title
- **About** (`#chapterabout`) - Biography, philosophy, resume download
- **Skills** (`#chapterskills`) - Technical skills, knowledge areas, certifications
- **Experience** (`#chapterexperience`) - Work history, NCL achievements, certifications
- **Education** (`#chaptereducation`) - Academic background, honors
- **Portfolio** (`#chapterportfolio`) - Featured projects, publications, presentations
- **Contact** (`#chaptercontact`) - Contact form and social links

**Key Characteristics:**
- Single-page application with scroll-based navigation
- Responsive design for mobile, tablet, desktop
- Google Analytics integration at the top of `<head>`
- Left sidebar navigation with active state tracking
- Social media links: LinkedIn, GitHub, CodePen

### send-email.php (2,117 bytes)
**Purpose:** Processes contact form submissions via POST
**Configuration:**
- Receiver: `gndecker@proton.me`
- Subject: "Contact form details"
- Format: HTML email with table layout
- Fields: name, email, message

**Security Note:** Currently uses basic PHP `mail()` function. Consider implementing:
- Input sanitization
- CSRF protection
- Rate limiting
- reCAPTCHA integration

### js/sendemail.js (47 lines)
**Purpose:** Client-side form validation and AJAX submission
**Validation Rules:**
- Name: Required, not empty
- Email: Must match pattern `(.+)@(.+){2,}\.(.+){2,}`
- Message: Required, not empty

**Important Configuration Note:**
- Line 30: `url: "http://www.yourdomain.com/send-email.php"`
- This needs to be updated to the actual domain for the contact form to work
- Should be: `url: "https://gabrielledecker.com/send-email.php"` or `url: "send-email.php"`

### CNAME
Contains: `gabrielledecker.com`
**Purpose:** GitHub Pages custom domain configuration

---

## Content Sections

### Professional Identity
- **Name:** Gabrielle Decker
- **Title:** Cybersecurity Specialist / Creative Technologist
- **Email:** gndecker@proton.me
- **Location:** Edmond, OK, USA
- **Descriptors:** leader, visionary, innovative, determined

### Core Competencies
**Technical Skills (Advanced):**
- Kali Linux (85%)
- Bash (85%)
- Nmap (80%)
- Wireshark (70%)

**Knowledge Areas:**
- AI & Automation
- Cryptography
- Log Analysis
- Network Traffic Analysis
- Password Cracking
- Scanning & Reconnaissance
- REST API
- Phishing
- Metasploit
- Git/GitHub/GitLab
- OSINT
- Prompt Engineering

**General Skills:**
- Vulnerability Assessments (Advanced)
- Penetration Testing (Advanced)
- Prompt Engineering (Intermediate)

### Certifications
1. AWS Academy Cloud Foundations (Oct 2022)
2. Certified Linux Pro (Jul 2022)
3. Computer Support (Jul 2022)
4. CompTIA Strata IT Fundamentals FC0-U61 (May 2022)

### Featured Projects
1. **Rogue.sh** - Penetration Testing Automation Tool
   - GitHub: https://github.com/1337spectra/rogue
2. **C++ IDE & Quiz** - Interactive Learning Platform
   - URL: https://gabrielledecker.com/cpp-honors/
3. **World Anvil API Documentation** - Swagger/OpenAPI documentation
4. **Enterprise Security Management Plan** - NIST SP 800-61 compliance
5. **Information Security Audit** - Vulnerability assessment
6. **Cybersecurity Awareness Booklets** - Community education resources

### Publications
- Cybersecurity Awareness Month (The Journal Record, Oct 2023)
- What Can I Do to Keep Myself Safe Online? (The Journal Record, Oct 2023)
- Cybersecurity Career Paths for Students (The Journal Record, Oct 2023)

---

## Development Workflows

### Making Content Updates

#### 1. Update Profile Information
**Location:** `index.html` lines 106-115 (About section)

```html
<li><b>Name:</b> Gabrielle Decker</li>
<li><b>Email:</b> <a href="mailto:gndecker@proton.me">gndecker@proton.me</a></li>
<li><b>Location:</b> Edmond, OK, USA</li>
```

#### 2. Add New Skills
**Location:** `index.html` lines 128-191 (Skills section)

For circular progress charts (lines 131-159):
```html
<div class="col-6 margin-bottom50">
  <div class="col-6"><span class="chart" data-percent="85"><span class="percent"></span></span></div>
  <div class="col-6 chart-text">
    <h4>Skill Name</h4>
    <p>Proficiency Level</p>
  </div>
</div>
```

For knowledge areas list (lines 166-189):
```html
<li>New Skill</li>
```

For progress bars (lines 197-215):
```html
<div class="progressbar-main margin-top40">
  <div class="progress-bar-description"><b>Skill Name</b> | Level</div>
  <div id="progressBar#" class="progress">
    <div class="progress-value"></div>
  </div>
</div>
```

#### 3. Add Work Experience
**Location:** `index.html` lines 237-298 (Experience section)

Template:
```html
<div class="full-divider"></div>
<div class="experience-details">
  <div class="col-6 margin-bottom50 margin-top50">
    <div class="col-3 icon-block"><i class="fa fa-icon-name"></i></div>
    <div class="flot-left">
      <h5>Company/Organization</h5>
      <h4>Job Title</h4>
      <span>Date Range</span>
    </div>
  </div>
  <div class="col-6 margin-bottom50 margin-top50 no-margin-top">
    Job description and achievements...
  </div>
</div>
```

#### 4. Add Portfolio Projects
**Location:** `index.html` lines 410-581 (Portfolio section)

**Step 1:** Add thumbnail to grid (lines 413-491):
```html
<li>
  <figure>
    <img src="path/to/image.png" alt="Project Name"/>
    <figcaption>
      <div class="figcaption-details">
        <img src="images/icon-plus.png" height="82" width="82" alt=""/>
        <h3>Project Title</h3>
        <span>Project Subtitle</span>
      </div>
    </figcaption>
  </figure>
</li>
```

**Step 2:** Add detailed description to lightbox (lines 496-571):
```html
<li>
  <figure>
    <figcaption>
      <h3>Project Title</h3>
      <span>Project Subtitle</span>
      <p>Detailed description...</p>
      <p>Links and additional info...</p>
    </figcaption>
    <img src="path/to/image.png" alt="Project Name"/>
    <!-- OR for videos: -->
    <iframe width="560" height="315" src="youtube-embed-url" ...></iframe>
  </figure>
</li>
```

#### 5. Update Resume
**Location:** `/projects/(MASTER)DECKER, Gabrielle-Resume.pdf`
- Replace the PDF file with the new version
- Keep the filename consistent or update the link in `index.html` line 115:
```html
<a href="projects/(MASTER)DECKER, Gabrielle-Resume.pdf" class="button">Download resume (PDF)</a>
```

#### 6. Update Navigation Links
**Location:** `index.html` lines 57-63

Current sections:
```html
<a href="#chapterintroduction"><span id="link_introduction">Home</span></a>
<a href="#chapterabout"><span id="link_about">About</span></a>
<a href="#chapterskills"><span id="link_skills">Skills</span></a>
<a href="#chapterexperience"><span id="link_experience">Experience</span></a>
<a href="#chaptereducation"><span id="link_education">Education</span></a>
<a href="#chapterportfolio"><span id="link_portfolio">Portfolio</span></a>
<a href="#chaptercontact"><span id="link_contact">Contact</span></a>
```

---

## Styling Conventions

### CSS Architecture
- **normalize.css** - Browser consistency baseline
- **style.css** - Main styles, layout, typography
- **responsive.css** - Media queries for mobile/tablet
- **scroll.css** - Page scrolling animations
- **portfolio.css** - Portfolio grid gallery
- **carousel.css** - Image carousel
- **font-awesome.css** - Icon fonts

### Color Scheme
Reference: `css/style.css`
- Review the stylesheet for the current color palette
- Maintain consistency when adding new elements

### Responsive Breakpoints
Reference: `css/responsive.css`
- Mobile: < 768px
- Tablet: 768px - 1024px
- Desktop: > 1024px

### Grid System
Uses custom grid classes:
- `.container-sub` - Content container
- `.row` - Row wrapper
- `.col-2`, `.col-3`, `.col-4`, `.col-6` - Column widths based on divisions of the container

---

## JavaScript Configuration

### Main Settings (js/settings.js)
Initializes:
- Easy Pie Chart for skill percentages
- Owl Carousel for image slideshows
- Text Rotator for animated descriptors
- Responsive video embeds with FitVids
- Orientation change detection

### Page Navigation (js/jquery.page.js)
- Single-page scrolling navigation
- Hash-based routing (`#chapter*`)
- Active state management for nav links
- Mouse wheel scrolling
- Touch-friendly mobile navigation

### Contact Form (js/sendemail.js)
**Action Required:** Update the AJAX URL on line 30:
```javascript
// Current (incorrect):
url: "http://www.yourdomain.com/send-email.php"

// Should be:
url: "send-email.php"  // Relative path
// OR
url: "https://gabrielledecker.com/send-email.php"  // Absolute path
```

---

## Deployment Process

### GitHub Pages Configuration
- **Branch:** Main branch (default)
- **Directory:** Root (`/`)
- **Custom Domain:** gabrielledecker.com (configured via CNAME file)
- **HTTPS:** Enforced by GitHub Pages

### Deployment Steps
1. Make changes to local files
2. Test locally (use a local web server for testing PHP functionality)
3. Commit changes to the current branch:
   ```bash
   git add .
   git commit -m "Descriptive commit message"
   ```
4. Push to remote:
   ```bash
   git push -u origin claude/claude-md-mi9bc6cic0e42vfu-01SapurUNA3gQ59BosTQGKFK
   ```
5. Create pull request to merge to main branch
6. GitHub Pages will automatically rebuild and deploy

### Testing Checklist Before Deployment
- [ ] All links work correctly (internal and external)
- [ ] Images load properly
- [ ] Contact form validates input
- [ ] Contact form submits successfully
- [ ] Resume PDF downloads correctly
- [ ] Responsive design works on mobile/tablet/desktop
- [ ] Navigation scrolls to correct sections
- [ ] Portfolio lightbox opens and closes correctly
- [ ] Google Analytics tracking code is present
- [ ] No console errors in browser developer tools

---

## Common Tasks

### Task 1: Add a New Certification
**Location:** `index.html` lines 228-236

```html
<li>
  <a href="certification-verification-url">Certification Name</a>,
  <i>Issuing Organization (Month Year)</i>
</li>
```

### Task 2: Update Social Media Links
**Location:** `index.html` lines 65-75 (sidebar) and 614-624 (contact section)

```html
<a href="profile-url" target="_blank" class="platform-name" rel="noopener noreferrer" title="Platform Name">
  <i class="fa fa-icon-name"></i>
</a>
```

### Task 3: Update NCL Scouting Reports
**Location:** `index.html` lines 269-277

```html
<li>
  <b>Season Year:</b>
  <a href="individual-report-url">Individual</a> |
  <a href="team-report-url">Team</a>
</li>
```

### Task 4: Change Hero Title/Subtitle
**Location:** `index.html` lines 89-91

```html
<h2><span>Hello, I'm</span><br>Gabrielle Decker</h2>
<span class="title">Cybersecurity Specialist / Creative Technologist</span>
```

### Task 5: Update Rotating Descriptors
**Location:** `index.html` lines 653-658

```html
<div id="rotate" class="rotate">
  <div><span>descriptor1.</span></div>
  <div><span>descriptor2.</span></div>
  <div><span>descriptor3.</span></div>
  <div><span>descriptor4.</span></div>
</div>
```

### Task 6: Add Project PDF
**Steps:**
1. Add PDF file to `/projects/` directory
2. Add link in portfolio section (index.html)
3. Commit and push changes

### Task 7: Update Profile Images
**Location:** `/images/` directory
- `about.png`, `about2.png`, `about3.png` - Hero carousel images
- `logo.png` - Sidebar logo and email logo
- `signature.png` - About section signature

**Steps:**
1. Replace image files (maintain filenames or update references in HTML)
2. Optimize images for web (compress without quality loss)
3. Test loading on different devices

---

## Contact Form Configuration

### Current Configuration Issues
**Problem:** The contact form AJAX handler references a placeholder URL
- File: `js/sendemail.js`
- Line 30: `url: "http://www.yourdomain.com/send-email.php"`

### Fix Required
Update line 30 to:
```javascript
url: "send-email.php"
```

### Email Configuration
**Recipient:** gndecker@proton.me (configured in send-email.php line 6)

### Form Fields
- **Name** (`#name`) - Text input, required
- **Email** (`#email`) - Email input, required, validated with regex
- **Message** (`#message`) - Textarea, required

### Success/Error Messages
Displayed in `#successmsg` div (line 639)
- Success: "The message has been sent!"
- Error: "The message could not been sent!"

---

## Security Considerations

### Current Security Issues

1. **Contact Form (send-email.php)**
   - ❌ No input sanitization
   - ❌ No CSRF protection
   - ❌ No rate limiting
   - ❌ Vulnerable to header injection
   - ❌ Email spoofing possible

   **Recommendations:**
   - Sanitize all POST inputs with `filter_var()` and `htmlspecialchars()`
   - Implement CSRF tokens
   - Add rate limiting (e.g., max 5 submissions per hour per IP)
   - Use a third-party service like Formspree or SendGrid
   - Validate email headers to prevent injection

2. **External Resources**
   - ⚠️ Mixed content: Some Google Fonts loaded via HTTP (line 21)
   - **Fix:** Change `http://fonts.googleapis.com/` to `https://fonts.googleapis.com/`

3. **Email Display**
   - ⚠️ Email address visible in plain text (spam risk)
   - **Consideration:** Implement email obfuscation or contact form only

4. **PDF Security**
   - ✅ PDFs are properly redacted (e.g., InfoSecAuditReport_Redacted.pdf)
   - ⚠️ Ensure no metadata leaks in PDF files

5. **Analytics Privacy**
   - ✅ Google Analytics properly configured with GA4
   - ℹ️ Consider adding privacy policy/cookie notice

### Best Practices Applied
- ✅ Links use `rel="noopener noreferrer"` for external links
- ✅ HTTPS enforced via GitHub Pages
- ✅ SEO meta tags present
- ✅ Favicon configured

---

## Asset Management

### Images
**Location:** `/images/`
**Guidelines:**
- Use descriptive filenames
- Optimize for web (compress without quality loss)
- Recommended formats: PNG for graphics/logos, JPG for photos
- Keep file sizes under 500KB for optimal loading

### Fonts
**Location:** `/fonts/`
**External Fonts:**
- Google Fonts: Roboto (400, 300, 500, 700, 900 weights) and Oswald (300, 400, 700)
- Font Awesome 6.7.2 (CDN)

### Project Files
**Location:** `/projects/`
**Naming Convention:**
- Use descriptive names
- Include author name and purpose
- Example: `DECKER, Gabrielle-Resume.pdf`
- Maintain consistent format: `YYYY - Author - Title.pdf`

### JavaScript Libraries
**Location:** `/js/`
**External Dependencies:**
- jQuery 2.0.3 (local)
- All plugins are self-hosted for performance and reliability
- No CDN dependencies (except Font Awesome and Google Fonts)

---

## Browser Compatibility

### Tested Browsers
- Chrome/Edge (Chromium)
- Firefox
- Safari
- Mobile Safari (iOS)
- Chrome Mobile (Android)

### Known Issues
- Older browsers (IE11 and below) may not support some CSS3 features
- jQuery 2.x does not support IE8 and below

### Progressive Enhancement
- Site degrades gracefully without JavaScript
- Content remains accessible if CSS fails to load
- Images have descriptive alt text

---

## Performance Optimization

### Current Optimizations
- Minified JavaScript libraries (`*.min.js`)
- Font Awesome CDN for icon delivery
- Lazy loading for portfolio images
- FitVids for responsive video embeds

### Recommendations for Improvement
1. **Image Optimization**
   - Convert images to WebP format with fallbacks
   - Implement lazy loading for images below the fold
   - Use responsive images with `srcset`

2. **CSS Optimization**
   - Minify CSS files
   - Combine CSS files to reduce HTTP requests
   - Remove unused CSS

3. **JavaScript Optimization**
   - Defer non-critical JavaScript
   - Combine JavaScript files
   - Update jQuery to latest 3.x version (or migrate to vanilla JS)

4. **Caching Strategy**
   - Leverage browser caching with cache headers
   - Use service workers for offline functionality

---

## Accessibility (a11y)

### Current Accessibility Features
- ✅ Semantic HTML5 elements
- ✅ Descriptive link text
- ✅ Alt text on images
- ✅ Keyboard-navigable interface
- ✅ Proper heading hierarchy

### Recommendations for Improvement
1. **ARIA Labels**
   - Add `aria-label` to icon-only links
   - Add `aria-expanded` to navigation menu
   - Add `role` attributes to portfolio gallery

2. **Color Contrast**
   - Verify color contrast ratios meet WCAG AA standards
   - Test with tools like axe DevTools or WAVE

3. **Focus Indicators**
   - Ensure visible focus indicators on all interactive elements
   - Don't suppress outlines without replacement styles

4. **Screen Reader Testing**
   - Test with NVDA, JAWS, or VoiceOver
   - Ensure content order makes sense when read linearly

---

## SEO Optimization

### Current SEO Elements
- ✅ Page title: "Gabrielle Decker - Creative Technologist"
- ✅ Meta viewport for mobile
- ✅ Meta robots: INDEX, FOLLOW
- ✅ Semantic HTML structure
- ✅ Custom domain with HTTPS

### Recommendations for Improvement
1. **Meta Tags**
   - Add `<meta name="description" content="...">`
   - Add Open Graph tags for social sharing
   - Add Twitter Card tags
   - Add structured data (JSON-LD) for Person schema

2. **Content Optimization**
   - Add heading tags throughout (H1, H2, H3)
   - Improve keyword density for target terms
   - Add more descriptive alt text to images

3. **Performance**
   - Improve page load speed (affects SEO ranking)
   - Optimize Core Web Vitals (LCP, FID, CLS)

---

## Analytics & Tracking

### Google Analytics 4
- **Tracking ID:** G-TE1XRZ3SJ7
- **Location:** `index.html` lines 4-11 (in `<head>`)
- **Configuration:** Default GA4 setup with gtag.js

### Events to Track (Recommendations)
- Resume downloads
- External link clicks (GitHub, LinkedIn, etc.)
- Project portfolio item clicks
- Contact form submissions
- Scroll depth
- Time on page

### Implementation Example
```javascript
// Track resume download
gtag('event', 'resume_download', {
  'event_category': 'engagement',
  'event_label': 'PDF Resume'
});

// Track external links
gtag('event', 'click', {
  'event_category': 'outbound',
  'event_label': url
});
```

---

## Troubleshooting

### Issue 1: Contact Form Not Working
**Symptoms:** Form submits but no email received

**Possible Causes:**
1. Incorrect URL in `js/sendemail.js` line 30
2. PHP mail not configured on server
3. Email caught in spam filter

**Solutions:**
1. Update AJAX URL to correct path
2. Test PHP mail function with a simple test script
3. Check spam folder
4. Consider using a third-party email service (SendGrid, Mailgun, etc.)

### Issue 2: Images Not Loading
**Symptoms:** Broken image icons

**Possible Causes:**
1. Incorrect file path
2. File not committed to Git
3. Case-sensitive filename mismatch

**Solutions:**
1. Verify image paths in HTML
2. Check Git status: `git status`
3. Ensure filenames match exactly (case-sensitive on Linux servers)

### Issue 3: JavaScript Not Working
**Symptoms:** Portfolio gallery, carousel, or forms not functioning

**Possible Causes:**
1. JavaScript error (check console)
2. jQuery not loaded
3. Script load order issue

**Solutions:**
1. Open browser console (F12) and check for errors
2. Verify jQuery loads before other scripts
3. Check script paths are correct

### Issue 4: Custom Domain Not Working
**Symptoms:** Site loads on github.io but not custom domain

**Possible Causes:**
1. CNAME file missing or incorrect
2. DNS records not configured
3. GitHub Pages not enabled

**Solutions:**
1. Verify CNAME contains: `gabrielledecker.com`
2. Check DNS A records point to GitHub Pages IPs:
   - 185.199.108.153
   - 185.199.109.153
   - 185.199.110.153
   - 185.199.111.153
3. Verify GitHub Pages is enabled in repository settings

### Issue 5: Styles Not Applied
**Symptoms:** Page displays unstyled or with broken layout

**Possible Causes:**
1. CSS files not loaded (404 errors)
2. Syntax error in CSS
3. Browser caching old styles

**Solutions:**
1. Check browser console for 404 errors
2. Validate CSS with W3C CSS Validator
3. Hard refresh browser (Ctrl+Shift+R)

---

## Git Workflow

### Branch Strategy
- **Main Branch:** Production-ready code
- **Feature Branches:** Format: `claude/claude-md-*` for AI assistant work
- **Current Branch:** `claude/claude-md-mi9bc6cic0e42vfu-01SapurUNA3gQ59BosTQGKFK`

### Commit Message Conventions
Use clear, descriptive commit messages:
- **feat:** New feature (e.g., "feat: Add new project to portfolio")
- **fix:** Bug fix (e.g., "fix: Correct contact form email URL")
- **docs:** Documentation (e.g., "docs: Update README with setup instructions")
- **style:** Formatting/styling (e.g., "style: Improve mobile responsive layout")
- **refactor:** Code refactoring (e.g., "refactor: Simplify navigation JavaScript")
- **chore:** Maintenance tasks (e.g., "chore: Update dependencies")

### Example Workflow
```bash
# Check current status
git status

# Stage changes
git add .

# Commit with descriptive message
git commit -m "feat: Add CLAUDE.md documentation for AI assistants"

# Push to feature branch
git push -u origin claude/claude-md-mi9bc6cic0e42vfu-01SapurUNA3gQ59BosTQGKFK

# Create pull request via GitHub UI
```

---

## AI Assistant Guidelines

### When Making Changes

1. **Always Read First**
   - Read `index.html` to understand current content structure
   - Review `css/style.css` for styling conventions
   - Check existing patterns before adding new content

2. **Maintain Consistency**
   - Follow existing HTML structure and class naming
   - Match writing style and tone (professional, concise)
   - Use existing icon sets (Font Awesome)
   - Keep grid layout patterns consistent

3. **Test Thoroughly**
   - Verify HTML syntax is valid
   - Check responsive design at multiple breakpoints
   - Test all links and form submissions
   - Validate CSS and JavaScript

4. **Document Changes**
   - Write clear commit messages
   - Update this CLAUDE.md if workflow changes
   - Note any configuration changes in PR description

5. **Security First**
   - Never commit sensitive information (API keys, passwords)
   - Sanitize user inputs
   - Validate URLs and file paths
   - Keep dependencies updated

### Common Requests

**"Add a new project to the portfolio"**
→ See "Task: Add Portfolio Projects" above

**"Update my resume"**
→ See "Task: Update Resume" above

**"Add a skill to my skills section"**
→ See "Task: Add New Skills" above

**"Fix the contact form"**
→ Update `js/sendemail.js` line 30 URL

**"Update my work experience"**
→ See "Task: Add Work Experience" above

**"Change my bio"**
→ Edit `index.html` lines 111-115

---

## Resources & References

### Documentation
- [GitHub Pages Documentation](https://docs.github.com/en/pages)
- [Font Awesome Icons](https://fontawesome.com/icons)
- [jQuery API Documentation](https://api.jquery.com/)
- [Google Analytics 4](https://support.google.com/analytics/answer/10089681)

### Portfolio Resources
- **GitHub:** https://github.com/1337spectra
- **LinkedIn:** https://www.linkedin.com/in/gabrielle-decker
- **CodePen:** https://codepen.io/gndecker

### External Projects
- Rogue.sh: https://github.com/1337spectra/rogue
- C++ IDE & Quiz: https://gabrielledecker.com/cpp-honors/
- World Anvil API: https://www.worldanvil.com/api/external/boromir/swagger-documentation

---

## Maintenance Checklist

### Weekly
- [ ] Check Google Analytics for traffic/issues
- [ ] Monitor contact form submissions
- [ ] Review and respond to GitHub issues/PRs

### Monthly
- [ ] Update resume if needed
- [ ] Add new projects or achievements
- [ ] Check for broken links
- [ ] Review and update skills section

### Quarterly
- [ ] Update dependencies (jQuery, Font Awesome)
- [ ] Review SEO performance
- [ ] Test on latest browser versions
- [ ] Audit accessibility with WAVE or axe
- [ ] Check page speed with Lighthouse

### Annually
- [ ] Review entire content for accuracy
- [ ] Update certifications and education
- [ ] Refresh portfolio projects
- [ ] Audit security practices
- [ ] Review and update CLAUDE.md

---

## Contact & Support

**Owner:** Gabrielle Decker
**Email:** gndecker@proton.me
**Repository:** https://github.com/1337spectra/1337spectra.github.io

For questions, issues, or collaboration opportunities, please reach out via email or GitHub.

---

**Last Updated:** November 2025
**Version:** 1.0
**Maintained by:** Claude (AI Assistant)

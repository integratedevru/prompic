# CLAUDE.md

## Project Overview

PHP website for the SPB branch of PP-DOM (wooden house construction). No database, no framework. Simple router + component includes + form handlers.

## Key Commands

```bash
composer install    # Install PHP dependencies
npm install         # Install frontend dependencies (jQuery, Slick)
```

## Architecture

- **Router**: `index.php` maps URL path to `pages/{path}.php`, falls back to 404
- **Bootstrap**: `bootstrap.php` loads Composer autoloader + `.env` via phpdotenv
- **Pages**: Full HTML pages in `pages/`, included by the router
- **Components**: Reusable PHP partials in `components/` (header, footer, sidebar)
- **Handlers**: `handlers/` contains form POST endpoints, accessed directly (not through router)

## Environment Variables

All credentials are in `.env` (see `.env.example` for keys). Never hardcode credentials.

Key env vars:
- `SMTP_*` - Gmail SMTP configuration
- `MAIL_TO`, `MAIL_BCC` - Email recipients (BCC is comma-separated)
- `RECAPTCHA_SITE_KEY` - Main reCAPTCHA key (used in footer forms + script tag)
- `RECAPTCHA_SITE_KEY_ALT` - Alternative key (used in homepage inline form)
- `RECAPTCHA_SECRET_KEY` - Server-side verification key

## Important Notes

- `.htaccess` rewrites unknown paths to `index.php` but skips existing files (handlers work because they are real files)
- Forms in `components/footer.php` and `pages/homepage.php` POST to `/handlers/send_email*.php`
- jQuery and Slick are installed via npm - HTML references `/node_modules/` paths directly
- Two different reCAPTCHA site keys are used: one for footer forms, another for the homepage inline form

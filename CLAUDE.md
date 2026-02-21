# CLAUDE.md

## Project Overview

Monorepo for PP-DOM wooden house construction website. Serves two site variants (orig = pp-dom.ru, spb = spb.pp-dom.ru) from a single codebase, selected via `SITE_VARIANT` env var. No database, no framework. Simple router + component includes + form handlers.

## Key Commands

```bash
composer install    # Install PHP dependencies
npm install         # Install frontend dependencies (jQuery, Slick, lightGallery)
npm run dev         # Start local dev server at http://localhost:8080
```

## Architecture

- **Router**: `index.php` resolves pages via three-tier lookup: `pages/{variant}/` → `pages/shared/` → 404
- **Bootstrap**: `bootstrap.php` loads Composer autoloader, `.env` via phpdotenv, and `$siteConfig` from `config/site.php`
- **Config**: `config/site.php` contains all variant-specific settings (region text, email prefix, meta titles, Yandex Metrika IDs, cross-links, page registries)
- **Pages**: Organized in `pages/shared/` (both variants), `pages/orig/` (orig-only), `pages/spb/` (spb-only)
- **Components**: Reusable PHP partials in `components/` (header, footer, sidebar). Navigation links dispatch to variant-specific partials in `components/nav/`
- **Handlers**: `handlers/` contains form POST endpoints, accessed directly (not through router). Use `$siteConfig['email_prefix']` for branch identification

## Site Variants

| Setting | orig (pp-dom.ru) | spb (spb.pp-dom.ru) |
|---------|-------------------|----------------------|
| Navigation | Multi-page links | Single-page scroll |
| Pages | 12+ pages (catalogs, gallery, about, etc.) | 3 pages (homepage, politika, 404) |
| Email prefix | (none) | (Спб) |
| Region | Псковская область | Санкт-Петербург |
| Cross-link | → spb.pp-dom.ru | → pp-dom.ru |

## Environment Variables

All credentials are in `.env` (see `.env.example` for keys). Never hardcode credentials.

Key env vars:
- `SITE_VARIANT` - `orig` or `spb` (determines which site variant to serve)
- `SMTP_*` - Gmail SMTP configuration
- `MAIL_TO`, `MAIL_BCC` - Email recipients (BCC is comma-separated)
- `RECAPTCHA_SITE_KEY` - Main reCAPTCHA key (used in footer forms + script tag)
- `RECAPTCHA_SITE_KEY_ALT` - Alternative key (used in homepage inline form)
- `RECAPTCHA_SECRET_KEY` - Server-side verification key

## Important Notes

- `.htaccess` rewrites unknown paths to `index.php` but skips existing files (handlers work because they are real files)
- Forms in `components/footer.php` and homepage pages POST to `/handlers/send_email*.php`
- jQuery, Slick, and lightGallery are installed via npm - HTML references `/node_modules/` paths directly
- Two different reCAPTCHA site keys are used: one for footer forms, another for the homepage inline form
- Navigation components dispatch to `components/nav/sidebar_links_{variant}.php` and `components/nav/header_links_{variant}.php`
- The `orig/` and `spb/` root folders contain legacy reference code (not served by the router)

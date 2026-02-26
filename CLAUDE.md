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
- `CAPTCHA_SITE_KEY` - Yandex SmartCaptcha client key (used in form widgets + script tag)
- `CAPTCHA_SECRET_KEY` - Yandex SmartCaptcha server-side verification key

## Hosting & Deployment

- **Hosting**: reg.ru shared hosting (AlmaLinux 8, PHP 8.2, Apache behind nginx)
- **Server**: `31.31.196.248`, user `u2527108`
- **Antibot/CDN**: Solar Space — sits in front of the sites; caches responses and may cache 301 redirects. Be careful with `.htaccess` changes that produce redirects, as Solar Space will cache them and they persist even after the `.htaccess` is fixed
- **Document roots**: `~/www/pp-dom.ru` (orig), `~/www/spb.pp-dom.ru` (spb)
- **Symlinks**: `www.pp-dom.ru` → `pp-dom.ru`, `www.spb.pp-dom.ru` → `spb.pp-dom.ru`
- **Deploy**: Both site directories are git clones of this repo. To update: `cd ~/www/pp-dom.ru && git pull` (same for spb)
- **Backups**: Old legacy sites stored in `~/www/pp-dom.ru.bak` and `~/www/spb.pp-dom.ru.bak`
- Each directory has its own `.env` with `SITE_VARIANT=orig` or `SITE_VARIANT=spb`
- Nginx serves static files directly; for unknown paths, falls through to Apache which uses `.htaccess` to rewrite to `index.php`
- Node.js on server is v10.24 (old but sufficient for static npm packages)

## Agent Behavior

- Always paste relevant command output directly in response text — the VS Code extension collapses Bash tool output, so the user cannot see it otherwise.

## Important Notes

- `.htaccess` rewrites unknown paths to `index.php` but skips existing files (handlers work because they are real files)
- Solar Space antibot/CDN caches 301 redirects aggressively — never deploy a broken `.htaccess` with `[R=301]` rules, as the cached redirect will persist
- Forms in `components/footer.php` and homepage pages POST to `/handlers/send_email*.php`
- jQuery, Slick, and lightGallery are installed via npm — HTML references `/node_modules/` paths directly
- Yandex SmartCaptcha is used for form spam protection (widget via `smartcaptcha.cloud.yandex.ru/captcha.js`, server validation via `smartcaptcha.cloud.yandex.ru/validate`)
- Navigation components dispatch to `components/nav/sidebar_links_{variant}.php` and `components/nav/header_links_{variant}.php`
- The `orig/` and `spb/` root folders contain legacy reference code (not served by the router)

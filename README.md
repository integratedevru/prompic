# PP-DOM Monorepo

Monorepo for the PP-DOM wooden house construction website. Serves two site variants from a single codebase:

- **pp-dom.ru** (orig) — multi-page site with catalogs, gallery, about, etc.
- **spb.pp-dom.ru** (spb) — single-page site with scroll navigation

The active variant is selected via the `SITE_VARIANT` environment variable.

## Requirements

- PHP >= 7.4
- Composer
- Node.js / npm
- Apache with mod_rewrite enabled (production) or PHP built-in server (development)

## Setup

1. Install dependencies:

```bash
composer install
npm install
```

2. Create environment file from template and set `SITE_VARIANT`:

```bash
cp .env.example .env
```

3. Fill in the `.env` file with actual credentials:
   - `SITE_VARIANT` — `orig` or `spb`
   - SMTP settings (Gmail app password)
   - reCAPTCHA keys (each variant uses its own set)
   - Email recipients

4. Start the dev server or point Apache's document root to the project directory:

```bash
npm run dev    # http://localhost:8080
```

## Project Structure

```
.
├── index.php                  # Router (three-tier page resolution)
├── bootstrap.php              # Autoloader, .env, site config
├── router.php                 # PHP built-in server router
├── .htaccess                  # Apache URL rewriting
├── .env / .env.example        # Environment variables
├── config/
│   └── site.php               # Variant-specific config (region, meta, email prefix, etc.)
├── pages/
│   ├── shared/                # Pages served by both variants
│   │   ├── politika.php
│   │   └── error404.php
│   ├── orig/                  # ORIG-only pages (12+ pages)
│   │   ├── homepage.php
│   │   ├── catalog-domov.php
│   │   ├── catalog-bani.php
│   │   ├── catalog-besedki.php
│   │   ├── gallery.php
│   │   ├── about-company.php
│   │   ├── production.php
│   │   ├── tehnology.php
│   │   ├── dostavka_i_oplata.php
│   │   └── stroitelniye_uslugi.php
│   └── spb/                   # SPB-only pages
│       └── homepage.php       # Single-page with scroll sections
├── components/
│   ├── sidebar.php            # Shared shell, dispatches nav links per variant
│   ├── header_adaptive.php    # Shared shell, dispatches nav links per variant
│   ├── footer.php             # Shared (forms, contact info)
│   ├── error404_component.php
│   └── nav/                   # Variant-specific navigation partials
│       ├── sidebar_links_orig.php   # Page links (catalog, gallery, etc.)
│       ├── sidebar_links_spb.php    # Scroll anchors
│       ├── header_links_orig.php    # Mobile page links
│       └── header_links_spb.php     # Mobile scroll anchors
├── handlers/                  # Form POST endpoints (not routed through index.php)
│   ├── send_email1.php        # Project quote request
│   ├── send_email2_callback.php
│   └── helpers.php            # reCAPTCHA verification
├── css/style.css              # Unified stylesheet (shared + _spb utility classes)
├── js/                        # Custom JavaScript
├── img/, icons/               # Shared assets
├── node_modules/              # npm: jQuery, Slick, lightGallery (not in git)
├── vendor/                    # Composer: PHPMailer, phpdotenv (not in git)
├── orig/                      # Legacy reference code (not served)
└── spb/                       # Legacy reference code (not served)
```

## How the Variant System Works

### Router (`index.php`)

The router resolves page slugs with a three-tier lookup:

1. `pages/{variant}/{slug}.php` — variant-specific page
2. `pages/shared/{slug}.php` — shared page
3. 404 fallback

A page registry in `config/site.php` whitelists valid slugs per variant, so ORIG-only URLs (e.g., `/catalog-domov`) return 404 on the SPB variant.

### Config (`config/site.php`)

Returns an array for the active variant with:

| Key | Example (orig) | Example (spb) |
|-----|----------------|---------------|
| `email_prefix` | `''` | `'(Спб)'` |
| `region` | `'Пскове и Псковской области'` | `'Санкт-Петербурге и области'` |
| `cross_link_url` | `'https://spb.pp-dom.ru/'` | `'https://pp-dom.ru/'` |
| `cross_link_text` | `'Мы в СПб'` | `'Основной сайт'` |
| `nav_type` | `'links'` | `'scroll'` |
| `yandex_metrika_id` | `'97837041'` | `'93882072'` |
| `meta` | Per-page titles/descriptions | Per-page titles/descriptions |

### Navigation Components

Sidebar and header share the same shell (logo, social icons, phone, buttons) but dispatch navigation links to variant-specific partials:

- **ORIG**: `<a href="/catalog-domov">` style page links
- **SPB**: `<div class="scrollButtonDesktop" data-target-desktop="targetElement1">` scroll anchors

### Email Handlers

Both handlers use `$siteConfig['email_prefix']` to prepend branch identification to email subjects. SPB emails arrive as `(Спб)Запрос от ...`, ORIG emails have no prefix.

## Variant Differences

| Aspect | orig (pp-dom.ru) | spb (spb.pp-dom.ru) |
|--------|-------------------|----------------------|
| Navigation | Multi-page links | Single-page scroll anchors |
| Pages | 12+ (catalogs, gallery, about, etc.) | 3 (homepage, politika, 404) |
| Email prefix | (none) | (Спб) |
| Region text | Псковская область | Санкт-Петербург |
| Cross-link | "Мы в СПб" → spb.pp-dom.ru | "Основной сайт" → pp-dom.ru |
| Yandex Metrika | 97837041 | 93882072 |

## Forms

Two contact forms submit to handlers via POST:
- **Project quote** (`handlers/send_email1.php`) — name, email, phone
- **Callback request** (`handlers/send_email2_callback.php`) — name, phone

Both use Google reCAPTCHA Enterprise for validation and PHPMailer for SMTP delivery.

## Frontend Libraries

- jQuery 3.6.4 (npm, served from `node_modules/`)
- Slick Carousel 1.8.1 (npm, served from `node_modules/`)
- lightGallery (npm, served from `node_modules/`)
- Google Fonts — Inter (loaded via CDN)

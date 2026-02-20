# spb.pp-dom.ru

Website for the Saint Petersburg branch of PP-DOM wooden house construction company.

## Requirements

- PHP >= 7.4
- Composer
- Apache with mod_rewrite enabled

## Setup

1. Install PHP dependencies:

```bash
composer install
```

2. Create environment file from template:

```bash
cp .env.example .env
```

3. Fill in the `.env` file with actual credentials:
   - SMTP settings (Gmail app password)
   - reCAPTCHA keys
   - Email recipients

4. Point your web server's document root to the project directory.

## Project Structure

```
.
├── index.php              # Main router / entry point
├── bootstrap.php          # Autoloader and .env loading
├── composer.json          # PHP dependencies
├── package.json           # Frontend dependency versions (documentation)
├── .htaccess              # Apache URL rewriting
├── .env                   # Environment variables (not in git)
├── .env.example           # Environment template
├── pages/                 # Page templates
│   ├── homepage.php
│   ├── politika.php
│   └── error404.php
├── components/            # Reusable PHP components
│   ├── header_adaptive.php
│   ├── sidebar.php
│   ├── footer.php
│   └── error404_component.php
├── handlers/              # Form submission handlers
│   ├── send_email1.php    # Project quote request
│   ├── send_email2_callback.php  # Callback request
│   └── helpers.php        # reCAPTCHA verification
├── css/                   # Stylesheets
├── js/                    # JavaScript
├── img/                   # Images
├── icons/                 # Icons
├── jquery/                # jQuery 3.6.4
├── slick-1.8.1/           # Slick carousel
└── vendor/                # Composer dependencies (not in git)
```

## Routing

The site uses a simple PHP router in `index.php`. URLs map to files in `pages/`:
- `/` -> `pages/homepage.php`
- `/politika` -> `pages/politika.php`
- Any unknown path -> `pages/error404.php` (404 response)

## Forms

Two contact forms submit to handlers via POST:
- **Project quote** (`handlers/send_email1.php`) - name, email, phone
- **Callback request** (`handlers/send_email2_callback.php`) - name, phone

Both use Google reCAPTCHA Enterprise for validation and PHPMailer for SMTP delivery.

## Frontend Libraries

- jQuery 3.6.4 (vendored in `jquery/`)
- Slick Carousel 1.8.1 (vendored in `slick-1.8.1/`)
- Google Fonts (Inter, loaded via CDN)

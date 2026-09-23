# Ana Tavares

Personal website of Ana Tavares, developer marketing strategist. Live at [anamargaridatavares.com](https://anamargaridatavares.com).

## Pages

| Route | View | What it is |
| --- | --- | --- |
| `/` | `welcome.blade.php` | Intro, about, selected results |
| `/how-i-think` | `how-i-think.blade.php` | Approach to developer marketing |
| `/portfolio` | `portfolio/index.blade.php` | List of case studies |
| `/portfolio/{laravel,tigerdata,outsystems}` | `portfolio/*.blade.php` | Individual case studies |

Shared pieces live in `resources/views/layouts/app.blade.php` (meta tags, fonts, footer), `partials/nav.blade.php` (header and LinkedIn button) and `portfolio/partials/` (results list and link groups).

## Design

Swiss-style: white background, black text, one red accent, all on a 12-column grid. Colours, fonts and the `wrap`, `swiss-grid` and `label` utilities are defined in `resources/css/app.css`. Text is set in Inter Tight, and small labels in JetBrains Mono.

## Stack

Laravel 12, Blade, Tailwind CSS 4 and Vite. There's no database content; every page is a static Blade view.

## Running locally

Requires PHP 8.2+, Composer and Node.

```bash
composer setup   # install dependencies, create .env, build assets
composer dev     # start the app and Vite dev server
```

Run tests with `composer test`.

## Deployment

Hosted on Laravel Cloud, deployed from the `main` branch.

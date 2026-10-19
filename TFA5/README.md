# Pointline POS

A simple four-page Laravel POS foundation with customer and staff directories.

## Requirements

- PHP 8.3 or newer
- Composer

## Run locally

1. Open a terminal in this folder.
2. Run `composer install`.
3. Copy `.env.example` to `.env` if `.env` does not exist.
4. Run `php artisan key:generate`.
5. Run `php artisan serve` and open the local URL shown in the terminal.

The site has Home, About, Customer Accounts, and User Accounts pages. The customer and staff records are PHP arrays in their controllers and are displayed with Blade loops. No database is needed to run the pages.

`database/export.sql` is included as a supplementary SQL export for the submission. It creates matching tables and sample rows, but the application does not read from those tables.

## Hosting

Upload the prepared hosting package contents into the hosting `htdocs` directory. Keep `.env` private and set the hosting PHP version to 8.3 or newer. The hosted package uses file-based cache and sessions, so it does not need database credentials.

This package targets the `htdocs` root and will replace same-named files there. Back up the current site first if you need to keep it.

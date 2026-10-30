# Pointline POS

A four-page Laravel directory for customers and staff. Customer and user records are stored in a database and displayed through Eloquent models.

## Requirements

- PHP 8.3 or newer with the PDO driver for your database
- Composer
- MySQL or SQLite for local development

## Run locally

1. Run `composer install` in this folder.
2. Copy `.env.example` to `.env` and run `php artisan key:generate`.
3. Configure the database in `.env`. For SQLite, set `DB_CONNECTION=sqlite` and create an empty `database/database.sqlite` file. For MySQL, set `DB_CONNECTION=mysql` and the `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` values.
4. Run `php artisan migrate --seed`.
5. Run `php artisan serve` and open the URL printed in the terminal.

The pages are `/`, `/about`, `/customers`, and `/users`. The migrations create the `customers` and `users` tables, and `DatabaseSeeder` adds five records to each. Running the seeder again does not duplicate those sample records.

## InfinityFree

1. Create an empty MySQL database in the InfinityFree control panel and note its exact host, database name, username, and password.
2. In phpMyAdmin, select that database and import `database/export.sql` once. This is the hosting alternative to running `php artisan migrate --seed`; do not run both against the same database.
3. Set the hosted `.env` to `APP_ENV=production`, `APP_DEBUG=false`, `APP_URL=https://pointlinepos.infinityfreeapp.com`, `DB_CONNECTION=mysql`, and your actual `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD`. Keep the existing generated `APP_KEY`.
4. Upload and extract the hosting ZIP into `/pointlinepos.infinityfreeapp.com/htdocs`, replacing the TFA5 files. Confirm that `app`, `bootstrap`, `public`, `resources`, `routes`, `storage`, and `vendor` are present. The root `index.php` and `.htaccess` are included.
5. Check `/`, `/about`, `/customers`, and `/users` on the hosted domain. Customer and user pages should each show five records.

`database/export.sql` contains only the two tables and ten sample records. The application reads the database through Eloquent; it does not load the SQL file at runtime. Back up the current hosted files and database before replacing them if you need to keep their contents.

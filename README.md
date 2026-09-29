# LabDesk POS

LabDesk POS is a CodeIgniter 4 account directory with database-backed records, validated forms, editing workflows, and user profile images.

## Pages and workflows

- `/` — landing page
- `/about` — about page
- `/customers` — customer records
- `/customers/new` — create a customer
- `/customers/edit/{id}` — edit a customer
- `/users` — user records with profile images
- `/users/new` — create a user
- `/users/edit/{id}` — edit a user and upload an avatar

## Local setup

Requirements: PHP 8.2+ with `mysqli` and `gd`, Composer, and MySQL/MariaDB through XAMPP.

1. Start Apache and MySQL in XAMPP.
2. Import `database/export.sql` into the selected `labdesk_pos` database.
3. Confirm the database values in `.env`.
4. Install dependencies and start CodeIgniter:

```bash
composer install
php spark serve
```

Open `http://localhost:8080/` and test the account forms. Customer and user validation errors redisplay the submitted values. User avatars accept JPG or PNG files up to 2MB, create a 256px square JPEG copy, and save only the generated filename in the database.

## Hosting

Create or select the MySQL database in the hosting control panel, import `database/export.sql`, set the database values in `.env`, and upload the package contents into `htdocs`. The `public/uploads/avatars` directory must be writable by the server.

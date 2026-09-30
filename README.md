# LabDesk POS

LabDesk POS is a CodeIgniter 4 account directory with database records, validated forms, user avatars, sessions, and login protection.

## Pages and workflows

- `/` — landing page
- `/about` — about page
- `/login` — staff login
- `/logout` — end the current session
- `/customers` — protected customer records
- `/customers/new` — protected customer creation form
- `/customers/edit/{id}` — protected customer edit form
- `/users` — protected user records
- `/users/new` — protected user creation form
- `/users/edit/{id}` — protected user edit form and avatar upload

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

The sample login is:

```text
Username: amartinez
Password: labdesk123
```

Customer and user account routes require a valid session. Passwords are stored as hashes and checked with `password_verify()`. User avatars accept JPG or PNG files up to 2MB, create a 256px square JPEG copy, and save only the generated filename in the database.

## Hosting

Create or select the MySQL database in the hosting control panel, import `database/export.sql`, set the database values in `.env`, and upload the package contents into `htdocs`. The `public/uploads/avatars` directory must be present and writable by the server.

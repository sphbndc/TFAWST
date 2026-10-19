CREATE TABLE IF NOT EXISTS customers (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL
);

CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    role VARCHAR(50) NOT NULL
);

INSERT IGNORE INTO customers (full_name, email, phone) VALUES
('Mara Santos', 'mara.santos@example.com', '0917 555 0142'),
('Paolo Reyes', 'paolo.reyes@example.com', '0918 555 0228'),
('Angela Dela Cruz', 'angela.delacruz@example.com', '0920 555 0316'),
('Luis Villanueva', 'luis.villanueva@example.com', '0919 555 0477'),
('Bea Navarro', 'bea.navarro@example.com', '0922 555 0589');

INSERT IGNORE INTO users (username, full_name, role) VALUES
('amartinez', 'Ari Martinez', 'Administrator'),
('jlim', 'Jonah Lim', 'Cashier'),
('rgarcia', 'Rina Garcia', 'Cashier'),
('tromero', 'Theo Romero', 'Inventory Clerk'),
('ncastillo', 'Nica Castillo', 'Manager');

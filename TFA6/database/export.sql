CREATE TABLE IF NOT EXISTS customers (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NULL,
    created_at DATETIME NOT NULL
);

CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO customers (full_name, email, phone, created_at) VALUES
('Mara Santos', 'mara.santos@example.com', '0917 555 0142', NOW()),
('Paolo Reyes', 'paolo.reyes@example.com', '0918 555 0228', NOW()),
('Angela Dela Cruz', 'angela.delacruz@example.com', '0920 555 0316', NOW()),
('Luis Villanueva', 'luis.villanueva@example.com', '0919 555 0477', NOW()),
('Bea Navarro', 'bea.navarro@example.com', '0922 555 0589', NOW());

INSERT INTO users (username, full_name, created_at) VALUES
('amartinez', 'Ari Martinez', NOW()),
('jlim', 'Jonah Lim', NOW()),
('rgarcia', 'Rina Garcia', NOW()),
('tromero', 'Theo Romero', NOW()),
('ncastillo', 'Nica Castillo', NOW());

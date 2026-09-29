CREATE TABLE IF NOT EXISTS customers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  full_name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  phone VARCHAR(20),
  created_at DATETIME NOT NULL
);

CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  full_name VARCHAR(100) NOT NULL,
  avatar VARCHAR(255) NULL,
  created_at DATETIME NOT NULL
);

ALTER TABLE users ADD COLUMN IF NOT EXISTS avatar VARCHAR(255) NULL;

INSERT INTO customers (full_name, email, phone, created_at) SELECT 'Mara Santos', 'mara.santos@northstarlab.ph', '0917 555 0142', '2026-09-01 09:00:00' WHERE NOT EXISTS (SELECT 1 FROM customers WHERE email = 'mara.santos@northstarlab.ph');
INSERT INTO customers (full_name, email, phone, created_at) SELECT 'Dr. Paolo Reyes', 'paolo.reyes@medcore.ph', '0918 555 0228', '2026-09-02 09:30:00' WHERE NOT EXISTS (SELECT 1 FROM customers WHERE email = 'paolo.reyes@medcore.ph');
INSERT INTO customers (full_name, email, phone, created_at) SELECT 'Angela Dela Cruz', 'angela.delacruz@qc-research.edu.ph', '0920 555 0316', '2026-09-03 10:00:00' WHERE NOT EXISTS (SELECT 1 FROM customers WHERE email = 'angela.delacruz@qc-research.edu.ph');
INSERT INTO customers (full_name, email, phone, created_at) SELECT 'Luis Villanueva', 'luis.villanueva@pacificquality.ph', '0919 555 0477', '2026-09-04 10:30:00' WHERE NOT EXISTS (SELECT 1 FROM customers WHERE email = 'luis.villanueva@pacificquality.ph');
INSERT INTO customers (full_name, email, phone, created_at) SELECT 'Bea Navarro', 'bea.navarro@greenfieldfoods.ph', '0922 555 0589', '2026-09-05 11:00:00' WHERE NOT EXISTS (SELECT 1 FROM customers WHERE email = 'bea.navarro@greenfieldfoods.ph');

INSERT IGNORE INTO users (username, full_name, created_at) VALUES
('amartinez', 'Ari Martinez', '2026-09-01 08:30:00'),
('jlim', 'Jonah Lim', '2026-09-01 08:45:00'),
('rgarcia', 'Rina Garcia', '2026-09-02 09:15:00'),
('tromero', 'Theo Romero', '2026-09-03 09:45:00'),
('ncastillo', 'Nica Castillo', '2026-09-04 10:15:00');

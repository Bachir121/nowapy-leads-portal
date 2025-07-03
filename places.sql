CREATE DATABASE IF NOT EXISTS your_db_name;
USE your_db_name;

CREATE TABLE leads (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(150),
  phone VARCHAR(20),
  location TEXT,
  source VARCHAR(50),
  captured_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO leads (name, phone, location, source) VALUES
('Empire Hotel', '+1 212-123-4567', 'Upper West Side, NYC', 'Hotel'),
('Boutique Inn', '+1 646-222-3333', 'Chelsea, NYC', 'Hotel');

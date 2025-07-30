-- Database: event_booking_system

CREATE DATABASE IF NOT EXISTS event_booking_system;
USE event_booking_system;

-- Table: users
CREATE TABLE IF NOT EXISTS users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('user', 'admin') DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table: events
CREATE TABLE IF NOT EXISTS events (
    event_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    description TEXT,
    event_date DATE NOT NULL,
    event_time TIME NOT NULL,
    location VARCHAR(150),
    capacity INT NOT NULL,
    created_by INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (created_by) REFERENCES users(user_id) ON DELETE SET NULL
);

-- Table: bookings
CREATE TABLE IF NOT EXISTS bookings (
    booking_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    event_id INT,
    booking_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE,
    FOREIGN KEY (event_id) REFERENCES events(event_id) ON DELETE CASCADE
);

-- Sample data insert
-- Users
INSERT INTO users (name, email, password, role) VALUES 
('Alice Johnson', 'alice@example.com', 'hashedpassword1', 'user'),
('Bob Smith', 'bob@example.com', 'hashedpassword2', 'admin');

-- Events
INSERT INTO events (title, description, event_date, event_time, location, capacity, created_by) VALUES
('Tech Talk: AI in 2025', 'A discussion on the role of AI in shaping future industries.', '2025-08-20', '14:00:00', 'Auditorium A', 100, 2),
('Art Workshop: Watercolors', 'Hands-on session exploring watercolor painting techniques.', '2025-08-22', '10:30:00', 'Studio Room 3', 30, 2);

-- Bookings
INSERT INTO bookings (user_id, event_id) VALUES
(1, 1),
(1, 2);

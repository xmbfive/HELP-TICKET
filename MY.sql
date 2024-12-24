CREATE DATABASE support_system;

USE support_system;

CREATE TABLE tickets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    problem_name VARCHAR(255) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

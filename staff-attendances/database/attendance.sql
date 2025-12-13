CREATE DATABASE staff_attendance;
USE staff_attendance;

CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50)
);

INSERT INTO admin (username, password) VALUES ('admin', 'admin123');

CREATE TABLE staff (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    department VARCHAR(100)
);

CREATE TABLE attendance (
    id INT AUTO_INCREMENT PRIMARY KEY,
    staff_id INT,
    date DATE,
    status VARCHAR(10),
    FOREIGN KEY (staff_id) REFERENCES staff(id)
);

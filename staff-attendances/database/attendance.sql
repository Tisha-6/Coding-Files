CREATE DATABASE attendance_system;
USE attendance_system;

CREATE TABLE staff (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    department VARCHAR(100) NOT NULL
);

CREATE TABLE attendance (
    id INT AUTO_INCREMENT PRIMARY KEY,
    staff_id INT,
    attendance_date DATE,
    status ENUM('Present','Absent') NOT NULL,
    FOREIGN KEY (staff_id) REFERENCES staff(id)
);

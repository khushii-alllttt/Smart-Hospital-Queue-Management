<head>
    <title>Hospital Queue</title>
    <link rel="stylesheet" href="style.css">
</head>

CREATE DATABASE hospital;
USE hospital;
CREATE TABLE doctor(id INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(50),available INT);
CREATE TABLE patient(id INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(50),age INT,
doctor_id INT,queue_no INT,wait_time INT);
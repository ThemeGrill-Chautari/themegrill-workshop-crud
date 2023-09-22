<?php
/* Connect to a MySQL database */

$mysqli = new mysqli("localhost","root","root","workshop");

// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

$create_student_query = "CREATE TABLE IF NOT EXISTS student (
    ID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    student_name VARCHAR(255),
    phone_number INT,
    bio TEXT,
    remarks TEXT
);";

$users_table_query = "CREATE TABLE IF NOT EXISTS users (
    ID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    username VARCHAR(255) UNIQUE NOT NULL,
    email varchar(255) UNIQUE  NOT NULL,
    password TEXT
    );";

$mysqli->real_query($create_student_query);
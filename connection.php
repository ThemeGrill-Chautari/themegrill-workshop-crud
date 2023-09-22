<?php
if (!defined('THEMEGRILL_WORKSHOP')) {
    die("Cheating? huh?");

}
    $db_connection = new mysqli("localhost", "root", "", "workshop");

// Check connection
    if ($db_connection->connect_errno) {
        echo "Failed to connect to MySQL: " . $db_connection->connect_error;
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
    password TEXT NOT NULL
    );";

//db_connection()->real_query($create_student_query);

//db_connection()->real_query($users_table_query);


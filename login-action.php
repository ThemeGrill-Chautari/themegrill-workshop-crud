<?php
define('THEMEGRILL_WORKSHOP', true);

if (!isset($_POST['do_login'])) {
    header('location:login.php');
}
require "connection.php";

$username = isset($_POST['username']) ? $_POST['username'] : $_POST['username'];

$password = isset($_POST['password']) ? $_POST['password'] : $_POST['password'];

$hash_password = md5($password);

$login_query = "SELECT * FROM users WHERE username=? AND password=?";

$statement = db_connection()->prepare($login_query);

// and "ss" indicates that both parameters are strings.
$statement->bind_param("ss", $username, $hash_password);

$statement->execute();

# Use get_result() when you expect to retrieve a result set, typically for SELECT queries.
$result = $statement->get_result();

// You can check if the query was successful and fetch data from the result set if needed.
if ($result) {
    while ($row = $result->fetch_assoc()) {
        // Process the data from each row here
    }
}

// Remember to close the statement and any other necessary cleanup.
$statement->close();

// If you want to see the structure of the result set, you can use print_r as you did.
echo '<pre>';
print_r(count($result->fetch_assoc()));
echo '</pre>';





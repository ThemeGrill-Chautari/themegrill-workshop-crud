<?php
if (!defined('THEMEGRILL_WORKSHOP')) {
    die("Cheating? huh?");

}
if(isset($_POST['add_new_user'])){

    $user_name = isset($_POST['username']) ? $_POST['username']: '';

    $email = isset($_POST['email']) ? $_POST['email']: '';

    $password = isset($_POST['password']) ? $_POST['password']: '';

    $hash_password = md5($password);

    $insert_query = "INSERT INTO users(username, email, password) values(?, ?, ?)";

    $user_statement = $db_connection->prepare($insert_query);

    $user_statement->bind_param("sss", $user_name, $email, $hash_password);

    $user_statement->execute();

}
?>
<div class="card">
            <h2>Add New User</h2>
            <form method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username"><br>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email"><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password"><br>
                <button class="add-user-button" name="add_new_user" onclick="addUser()">Add User</button>
            </form>
        </div>

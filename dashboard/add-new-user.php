<?php
if (!defined('THEMEGRILL_WORKSHOP')) {
    die("Cheating? huh?");

}
?>
<div class="card">
            <h2>Add New User</h2>
            <form>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username"><br>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email"><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password"><br>
                <button class="add-user-button" onclick="addUser()">Add User</button>
            </form>
        </div>
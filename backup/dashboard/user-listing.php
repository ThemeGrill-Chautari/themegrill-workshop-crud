<?php
if (!defined('THEMEGRILL_WORKSHOP')) {
    die("Cheating? huh?");

}
?>
<div class="card">
            <h2>User Listing</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>User1</td>
                        <td>user1@example.com</td>
                        <td>
                            <button class="edit-user-button" onclick="editUser()">Edit</button>
                            <button class="delete-user-button" onclick="deleteUser()">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>User2</td>
                        <td>user2@example.com</td>
                        <td>
                            <button class="edit-user-button" onclick="editUser()">Edit</button>
                            <button class="delete-user-button" onclick="deleteUser()">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
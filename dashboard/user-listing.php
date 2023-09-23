<?php
if (!defined('THEMEGRILL_WORKSHOP')) {
    die("Cheating? huh?");

}

$user_query = "SELECT * FROM users;";

$user_statement = $db_connection->prepare($user_query);

// and "ss" indicates that both parameters are strings.
//$statement->bind_param("ss", $username, $hash_password);

$user_statement->execute();

# Use get_result() when you expect to retrieve a result set, typically for SELECT queries.
$user_results = $user_statement->get_result();


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
                   <?php while($user = $user_results->fetch_assoc()){
                    
                        ?>
                    <tr>
                        <td><?php echo $user['ID'] ?></td>
                        <td><?php echo $user['username'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td>
                            <button class="edit-user-button" onclick="editUser()">Edit</button>
                            <button class="delete-user-button" onclick="deleteUser()">Delete</button>
                        </td>
                       
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

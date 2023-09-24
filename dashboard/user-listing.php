<?php
if (!defined('THEMEGRILL_WORKSHOP')) {
    die("Cheating? huh?");

}

$user_query = "SELECT * FROM users";

$user_statement = $db_connection->prepare($user_query);

$user_statement->execute();

# Use get_result() when you expect to retrieve a result set, typically for SELECT queries.
$user_results = $user_statement->get_result();

if(isset($_GET['userdelete'])){
    
    $receivedID=$_GET["userdelete"];

    $delete_query = "DELETE FROM users WHERE ID=?";

    $delete_statement = $db_connection->prepare($delete_query);

    $delete_statement -> bind_param('i', $receivedID);
    $delete_statement -> execute();
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
                    <?php while($user = $user_results->fetch_assoc()){ 
                    ?>        
                    <tr>
                        <td><?php echo $user['ID'] ?></td>
                        <td><?php echo $user['username'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td>
                            <button class="edit-user-button" onclick="location.reload();"><a href="http://localhost/themegrill-workshop-crud/dashboard/index.php/add-new-user.php?update=<?php echo $user['ID']; ?>">Edit</a> </button>
                            <button class="delete-user-button" onclick=""><a href = "index.php/user-listing.php?userdelete=<?php echo $user['ID']; ?>">Delete</a></button>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

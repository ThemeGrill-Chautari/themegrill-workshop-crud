<?php
if (!defined('THEMEGRILL_WORKSHOP')) {
    die("Cheating? huh?");

}
if(isset($_POST['add_new_user'])){

    $username = isset($_POST['username']) ? $_POST['username']: '';

    $email = isset($_POST['email']) ? $_POST['email']: '';

    $password = isset($_POST['password']) ? md5($_POST['password']): '';

    $insert_query = "INSERT INTO users(username, email, password) values(?, ?, ?)";

    $user_statement = $db_connection->prepare($insert_query);

    $user_statement->bind_param("sss", $username, $email, $password);

    $user_statement->execute();

}

if(isset($_GET['update'])){

    $ID = $_GET['update'];

    $select_user_query = "SELECT * FROM users WHERE id=?";

    $select_user_statement = $db_connection->prepare($select_user_query);

    $select_user_statement -> bind_param("i",$ID);

    $select_user_statement->execute();

    $user_results = $select_user_statement->get_result();

    $otherUser=$user_results->fetch_assoc();

    if(isset($_POST['update_user'])){

    $username = isset($_POST['username']) ? $_POST['username']: '';

    $email = isset($_POST['email']) ? $_POST['email']: '';

    $password = isset($_POST['password']) ? $_POST['password']: '';

    $user_update_query = "UPDATE users SET username = ?, email = ?, password = ? WHERE id = ?";

    $user_update_statement = $db_connection->prepare($user_update_query);

    $user_update_statement -> bind_param("sssi",$username,$email,$password,$ID);

    $user_update_statement -> execute();
    }
    // var_dump($ID);
}
?>
<div class="card">
            <?php if(isset($_GET['update'])){?>
                <h2> Update the User</h2>
            <?php }else{?>
                <h2> Add the User</h2>
            <?php } ?>
            <form method="POST">
            <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="<?php echo isset($otherUser)?$otherUser['username']:'';?>"><br>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="<?php echo isset($otherUser)?$otherUser['email']:'';?>"><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="<?php echo isset($otherUser)?$otherUser['password']:'';?>"><br>
                <?php 
                    if(isset($_GET['update'])){
                ?>
                    <button class="update-student-button" type="submit" name="update_user">Update Student</button>
                <?php 
                    }else{
                ?> 
                <button class="add-student-button" type="submit" name="add_new_user">Add Student</button>
                <?php } ?>
                
            </form>
        </div>
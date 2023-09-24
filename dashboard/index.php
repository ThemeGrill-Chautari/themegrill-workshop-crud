<?php
define('THEMEGRILL_WORKSHOP', true);

session_start();

if(!isset($_SESSION['user'])){
    header('location:../login.php');
    return;
}
require "../connection.php";

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    include_once "inline-style.php";
    ?>
</head>
<body>
    <header>
        <h1>User Dashboard</h1>
    </header>
    <div class="top-bar">
    <a href="logout.php" style="color:#fff"><button class="logout-button">Logout</button></a>
    </div>
    <div class="container">
        <h2>Welcome, <?php echo $user['username'] ?>!</h2>
        <p>This is your user dashboard. You can access your account information and perform various actions here.</p>
    </div>
    <div class="card-container">
        <?php
            include_once "add-new-user.php"; 
            include_once "user-listing.php";
            include_once "add-new-student.php";
            include_once "student-listing.php";

        ?>
    </div>
    <footer>
        &copy; 2023 User Dashboard
    </footer>
</body>
</html>
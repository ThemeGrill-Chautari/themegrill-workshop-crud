<?php
if (!defined('THEMEGRILL_WORKSHOP')) {
    die("Cheating? huh?");

}
if(isset($_POST['add_new_student'])){

    $student_name = isset($_POST['student_name']) ? $_POST['student_name']: '';

    $phone_number = isset($_POST['phone_number']) ? $_POST['phone_number']: '';

    $bio = isset($_POST['bio']) ? $_POST['bio']: '';

    $remarks = isset($_POST['remarks']) ? $_POST['remarks']: '';

    $insert_query = "INSERT INTO students(student_name, phone_number, bio, remarks) values(?, ?, ?, ?)";

    $student_statement = $db_connection->prepare($insert_query);

    $student_statement->bind_param("siss", $student_name, $phone_number, $bio, $remarks);

    $student_statement->execute();

}
?>
<div class="card">
            <h2>Add New Student</h2>
            <form method="POST">
                <label for="student_name">Student Name:</label>
                <input type="text" id="student_name" name="student_name"><br>
                <label for="phone_number">Phone Number:</label>
                <input type="text" id="phone_number" name="phone_number"><br>
                <label for="bio">Bio:</label>
                <textarea id="bio" name="bio"></textarea><br>
                <label for="remarks">Remarks:</label>
                <input type="text" id="remarks" name="remarks"><br>
                <button class="add-student-button" type="submit" name="add_new_student">Add Student</button>
            </form>
        </div>
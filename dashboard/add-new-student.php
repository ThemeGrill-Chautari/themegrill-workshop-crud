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

if(isset($_GET['edit'])){

    $receivedID = $_GET['edit'];

    $select_student_query = "SELECT * FROM students WHERE id=?";

    $select_student_statement = $db_connection->prepare($select_student_query);

    $select_student_statement -> bind_param("i",$receivedID);

    $select_student_statement->execute();

    $student_results = $select_student_statement->get_result();

    $student=$student_results->fetch_assoc();

    if(isset($_POST['update_new_student'])){

    $student_name = isset($_POST['student_name']) ? $_POST['student_name']: '';

    $phone_number = isset($_POST['phone_number']) ? $_POST['phone_number']: '';

    $bio = isset($_POST['bio']) ? $_POST['bio']: '';

    $remarks = isset($_POST['remarks']) ? $_POST['remarks']: '';

    $student_update_query = "UPDATE students SET student_name = ?, phone_number = ?, bio = ? , remarks = ? WHERE id = ?";

    $student_update_statement = $db_connection->prepare($student_update_query);

    $student_update_statement -> bind_param("sissi",$student_name,$phone_number,$bio,$remarks,$receivedID);

    $student_update_statement -> execute();
    }
    // var_dump($ID);
}
?>
<div class="card">
           <?php 
            if(isset($_GET['edit'])){
                    echo "<h2>Update the Student</h2>";
            }else {
                echo "<h2>Add new student</h2>";
            } 
            ?>
            <form method="POST">
                <label for="student_name">Student Name:</label>
                <input type="text" id="student_name" name="student_name" value="<?php echo isset($student)?$student['student_name']:'';?>"><br>
                <label for="phone_number">Phone Number:</label>
                <input type="text" id="phone_number" name="phone_number" value="<?php echo isset($student)?$student['phone_number']:'';?>"><br>
                <label for="bio">Bio:</label>
                <textarea id="bio" name="bio"><?php echo isset($student)?$student['bio']:'';?></textarea><br>
                <label for="remarks">Remarks:</label>
                <input type="text" id="remarks" name="remarks" value="<?php echo isset($student)?$student['remarks']:'';?>"><br>
                <?php 
                    if(isset($_GET['edit'])){
                ?>
                    <button class="update-student-button" type="submit" name="update_new_student">Update Student</button>
                <?php 
                    }else{
                ?> 
                <button class="add-student-button" type="submit" name="add_new_student">Add Student</button>
                <?php } ?>
                
            </form>
        </div>
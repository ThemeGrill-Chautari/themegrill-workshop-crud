<?php
if (!defined('THEMEGRILL_WORKSHOP')) {
    die("Cheating? huh?");

}

$student_query = "SELECT * FROM students";

$student_statement = $db_connection->prepare($student_query);

// and "ss" indicates that both parameters are strings.
//$statement->bind_param("ss", $username, $hash_password);

$student_statement->execute();

# Use get_result() when you expect to retrieve a result set, typically for SELECT queries.
$student_results = $student_statement->get_result();


?>

<div class="card">
            <h2>Student Listing</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Bio</th>
                        <th>Remarks</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($student = $student_results->fetch_assoc()){
                    
                        ?>
                    <tr>
                        <td><?php echo $student['ID'] ?></td>
                        <td><?php echo $student['student_name'] ?></td>
                        <td><?php echo $student['phone_number'] ?></td>
                        <td><?php echo $student['bio'] ?></td>
                        <td><?php echo $student['remarks'] ?></td>
                        <td>
                            <button class="edit-student-button" onclick="editStudent()">Edit</button>
                            <button class="delete-student-button" onclick="deleteStudent()">Delete</button>
                        </td>
                       
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
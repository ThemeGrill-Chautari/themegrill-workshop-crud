<?php
if (!defined('THEMEGRILL_WORKSHOP')) {
    die("Cheating? huh?");

}
?>
<div class="card">
            <h2>Add New Student</h2>
            <form>
                <label for="studentName">Student Name:</label>
                <input type="text" id="studentName" name="studentName"><br>
                <label for="studentAge">Student Age:</label>
                <input type="text" id="studentAge" name="studentAge"><br>
                <button class="add-student-button" onclick="addStudent()">Add Student</button>
            </form>
        </div>
<?php
if (!defined('THEMEGRILL_WORKSHOP')) {
    die("Cheating? huh?");

}
?>

<div class="card">
            <h2>Student Listing</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Student1</td>
                        <td>20</td>
                        <td>
                            <button class="edit-student-button" onclick="editStudent()">Edit</button>
                            <button class="delete-student-button" onclick="deleteStudent()">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Student2</td>
                        <td>22</td>
                        <td>
                            <button class="edit-student-button" onclick="editStudent()">Edit</button>
                            <button class="delete-student-button" onclick="deleteStudent()">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
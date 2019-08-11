<h3>Update Information</h3>

<?php

require('database.php');

if(isset($_GET['sid'])) {
    $stud_id = $_GET['sid'];
    $query = "SELECT * FROM student WHERE ID='$stud_id'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);


    ?>
    <table>
    <form action="studentownedited.php" method="POST">
        <input type="hidden" name="student_id" value=<?= $stud_id ?> >

        <tr>
        <td>Username:</td>
        <td><input type="text" name="username"></td>
        </tr>
        <tr>
        <td>Password:</td>
        <td><input type="password" name="password" ></td>
        </tr>
        <tr>    
        <td></td>
        <td><input type="submit" name="submit" value="Update" class="btn"></td>
        </tr>
    </form>
    </table>
    <?php
}


?>
<h3>Update Information</h3>

<?php

require('database.php');

if(isset($_GET['tid'])) {
    $teacher_id = $_GET['tid'];
    $query = "SELECT * FROM teacher WHERE ID='$teacher_id'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);


    ?>
    <table>
    <form action="teacherownedited.php" method="POST">
        <tr>
        <input type="hidden" name="teacherid" value=<?= $teacher_id ?> >

        <td>Username:</td>
        <td><input type="text" name="username" ></td>
        </tr>
        <tr>
        <td>Password:</td>
        <td><input type="password" name="password" ></td>
        </tr>
        <tr>
        <td></td>
        <td>    
        <input type="submit" name="submit" value="Update" class="btn"></td>
    </form>
    </table>
<?php
}


?>
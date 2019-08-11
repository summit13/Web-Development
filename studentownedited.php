<?php

require ('database.php');

$user = $_POST['username'];
$ps = $_POST['password'];
$id = $_POST['student_id'];

$query="UPDATE student SET Name='$user',Password='$ps'WHERE ID='$id'";

if(mysqli_query($connect,$query))
{
    header('Location:displaystudent.php');
}
else
{
    echo "Could not update student.";
}




?>
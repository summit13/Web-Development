<?php
session_start();
require('database.php');

$id = $_GET['st'];

$query="DELETE FROM student WHERE ID=$id";

if(mysqli_query($connect,$query))
{
	echo "Student has been removed.";
	header('Location:admin.php');
}
else
{
	echo "Could not remove student.".mysqli_error($connect);
}

?>
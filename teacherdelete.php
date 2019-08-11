<?php

require('database.php');

$id=$_GET['tid'];
$query="DELETE FROM teacher WHERE ID=$id";

if (mysqli_query($connect,$query))
{
	echo "Teacher has been removed";
	header('Location:admin.php');
}
else
{
	echo "Could not remove teacher.";
}

?>
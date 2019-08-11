<?php

require ('database.php');
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['teacherid'];

$query="UPDATE teacher SET Name='$username',Password='$password' WHERE ID='$id'";

if(mysqli_query($connect,$query))
{
    header('location:admin.php');
}
else
{
    echo "Could not be updated.";
}

?>
<?php
require ('database.php');
$user = $_POST['username'];
$pass = $_POST['password'];
$id = $_POST['teacherid'];

$query="UPDATE teacher SET Name='$user',Password='$pass' WHERE ID='$id'";
if(mysqli_query($connect,$query))
{
    header('location:displayteacher.php');
}
else
{
    echo "Could not update.";
}




?>
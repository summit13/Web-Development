<?php

require ('database.php');
$username = $_POST['username'];
$password = $_POST['password'];
$id_ = $_POST['studentid'];

$query="UPDATE student SET Name='$username',Password='$password' WHERE ID='$id_'";

if(mysqli_query($connect,$query))
{
    header('location:admin.php?name=$username&password=$password');
}
else
    {
    echo "Could not be updated.";
}

?>
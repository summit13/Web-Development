<?php

$username=$_POST['username'];
$password=$_POST['password'];

if($username=="admin" && $password=="admin")
{
	header('Location:admin.php');
	exit();
}
else if($username=="teacher" && $password=="teacher")
{
	header('Location:teacherlogin.php');
	exit();
}
else if($username=="student" && $password=="student")
{
	header('Location:studentlogin.php');
	exit();
}
else 
{
	header('Location:login.html?username or password is incorrect');
	exit();
}

?>
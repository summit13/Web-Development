<!DOCTYPE html>
<html>
<head>
	<title>Teacher</title>
</head>
<body>
	<form method="POST">
		<table align="center">
			<h1 align="center">Teacher Registration Form</h1>

			<tr>
				<td>Name:</td>
				<td><input type="text" name="name"></td>
			</tr>
			
			<tr>
				<td>Password:</td>
				<td><input type="text" name="password"></td>
			</tr>

			<tr>
				<td>Department:</td>
				<td><input type="text" name="department"></td>
			</tr>
			
			<tr>
				<td>Module:</td>
				<td><input type="text" name="module"></td>
			</tr>

			<tr>
				<td>Salary:</td>
				<td><input type="text" name="salary"></td>
			</tr>

			<tr>
				<td><input type="reset" value="Reset"></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>

		</table>
	</form>
</body>
</html>


<?php


$hostname="localhost";
$username="root";
$password="";

require("database.php");

if($connect)
{
	echo "connection established";
}
else
{
	die("notconnected".mysqli_error());
}

if(isset($_POST['submit']))
{

	$name=$_POST["name"];
	$department=$_POST["department"];
    $module=$_POST["module"];
    $salary=$_POST["salary"];
    $password=$_POST["password"];
   

    if ($name!="" && $department!="" && $module!="" && $salary!="" && $password!="")
    {
        $query = "INSERT INTO teacher (Name, Password, Department, Module, Salary) VALUES ('$name','$password','$department','$module','$salary') ";
        $run_query = mysqli_query($connect, $query);

        if ($run_query ==true) 
        {
            echo "<h3>New teacher added</h3><br>";
            echo "<b>Name:</b>".$name."<br>";
            echo "<b>Password:</b>".$password."<br>";
            echo "<b>Department:</b>".$department."<br>";
            echo "<b>Module:</b>".$module."<br>";
            echo "<b>Salary:</b>".$salary."<br>";
        }
        else
            {
                echo "<b>No data has been added</b><br>" . mysqli_error($connect);
            }
        }
    else
    {
        echo "Fill up all fields first !!!";
    }
}
?>
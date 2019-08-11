<!DOCTYPE html>
<html>
<head>
	<title>Student</title>
</head>
<body>
	<center>
	<form method="POST">
		<table >
			<h1 >Student Registration Form</h1>

			<tr>
				<td>Name:</td>
				<td><input type="text" name="name"></td>
			</tr>

			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
						
			<tr>
				<td>Course:</td>
				<td><select name="course">
					<option value="php">PHP</option>
					<option value="web">Web Design</option>
					<option value="linux">Introduction to Linux</option></select></td>
			</tr>

			<tr>
				<td>Address:</td>
				<td><input type="text" name="address"></td>
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

require("database.php");

$hostname="localhost";
$username="root";
$password="";

// if($connect)
// {
// 	echo "connection established";
// }
// else
// {
// 	die("notconnected".mysqli_error());
// }

if(isset($_POST['submit']))
{

	$name=$_POST["name"];
	$password=$_POST["password"];
	$course=$_POST["course"];
    $address=$_POST["address"];   

    if ($name!="" && $password!="" && $course!="" && $address!="")
    {
        $query = "INSERT INTO student (Name, Password, Course, Address) VALUES ('$name','$password','$course','$address')";
        $run_query = mysqli_query($connect, $query);

        if ($run_query ==true) 
        {

            echo "<h3>New student added</h3>";
          
        }
        else
            {
                echo "No data has been added<br>" . mysqli_error($connect);
            }
        }
    else
    {
        echo "Fill up all fields first !!!";
    }
}

?>
</center>
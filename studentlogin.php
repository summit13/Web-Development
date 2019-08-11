<center>
<h1>Student Login</h1><hr>

<?php
require ('database.php');

if(isset($_SESSION['username']))
{
    header('Location:displaystudent.php');
}

if (isset($_SESSION['username']))
{
    $user=$_POST['username'];
    $pass=$_POST['password'];

    $query="SELECT * FROM student WHERE Name='$user' AND Password='$pass'";

    $result=mysqli_query($connect, $query);

    if (mysqli_num_rows($result))
    {
        $_SESSION['name']=$user;
        $_SESSION['pass']=$pass;
        header('Location:displaystudent.php');
    }
    else
    {
        echo "No student found.";
    }

}

?>
<table>
<form action="displaystudent.php" method="POST">
    <tr>
    <td><b>Name:</b></td>
    <td><input type="text" name="name"></td>
    </tr>
    <tr>
    <td><b>Password:</b></td>
    <td><input type="password" name="password"></td>
	</tr>
    <tr>
    <td></td>
    <td><input type="submit" name="submit" value="Sign In"></td>
	</tr>
</form>
</table>

Not registered yet? <a href="student.php"><input type="button" value="Register Here!"></a>

<hr><hr>
<a href="login.html"><input type="button" value="Go Back"></a>






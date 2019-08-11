



<center>
<h1>Teacher Login</h1><hr>
<?php	
require ('database.php');
if(isset($_SESSION['username']))
{
    header('Location:displayteacher.php');
}

if (isset($_SESSION['username']))
{
    $user=$_POST['username'];
    $pass=$_POST['password'];

    $query="SELECT * FROM teacher WHERE Name='$user' AND Password='$pass'";

    $result=mysqli_query($connect, $query);

    if (mysqli_num_rows($result))
    {
        $_SESSION['name']=$user;
        $_SESSION['pass']=$pass;
        header('Location:displayteacher.php');
    }
    else
    {
        echo "No teacher found.";
    }

}
?>

<table>
<form action="displayteacher.php" method="POST">
    
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
<br><br>
Not registered yet? <a href="teacher.php"><input type="button" value="Register Here!"></a>

<hr><hr>
<a href="login.html"><input type="button" value="Go Back"></a>

</center>







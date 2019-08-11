<?php
require('database.php');

if(isset($_GET['st']))
{
	$stud_ = $_GET['st'];
	$query="SELECT * FROM student WHERE ID='$stud_'";
	$result=mysqli_query($connect, $query);
	$row=mysqli_fetch_assoc($result);

	?>

	<form action="studentupdated.php" method="POST">
		<input type="hidden" name="studentid" value=<?=$stud_ ?> ><br>
		Username:<input type="text" name="username" ><br>
		Password:<input type="password" name="password" ><br>
		<input type="submit" name="submit" value="Update">

	</form>
<?php	
}
?>

<hr><hr>
<a href="admin.php"><input type="button" Value="Go Back"></a>
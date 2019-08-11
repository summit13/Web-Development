<?php
require('database.php');

if(isset($_GET['tid']))
{
	$teacherid=$_GET['tid'];
	$query="SELECT * FROM teacher WHERE ID='$teacherid'";
	$result=mysqli_query($connect,$query);
	$row=mysqli_fetch_assoc($result);

	?>

	<form action="teacherupdated.php" method="POST">
		<input type="hidden" name="teacherid" value=<?=$teacherid ?> ><br>
		Username:<input type="text" name="username" ><br>
		Password:<input type="text" name="password" ><br>
		<input type="submit" name="submit" value="UPDATE">

	</form>
<?php
}

?>
<hr><hr>
<a href="admin.php"><input type="button" Value="Go Back"></a>
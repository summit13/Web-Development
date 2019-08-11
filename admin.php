<?php

require("database.php");
?>
<div style=" margin-bottom: 250px; border: solid; padding-bottom: 330px;">
<center>
<?php
$retrive="SELECT * FROM student";
$result=mysqli_query($connect, $retrive); 
echo "<h2>Student Information</h2>";
if(mysqli_num_rows($result)>0)
{
	echo "<table border=2px>";
	echo "<tr>";
	echo "<th>ID</th>";
	echo "<th>Name</th>";
	echo "<th>Password</th>";
	echo "<th>Course</th>";
	echo "<th>Address</th>";
	echo "<th>Update</th>";
    echo "<th>Delete</th>";

	echo "</tr>";

	while ($row=mysqli_fetch_array($result)) 
	{
		$id_=$row['ID'];
		echo "<tr>";
		echo "<td>".$id_."</td>";
		echo "<td>".$row['Name']."</td>";
		echo "<td>".$row['Password']."</td>";
		echo "<td>".$row['Course']."</td>";
		echo "<td>".$row['Address']."</td>";
		echo "<td><a href='studentupdate.php?st=$id_'>Update</a></td>";
		echo "<td><a href='studentdelete.php?st=$id_'> Delete</a></td>";
		echo "</tr>";
	}
	echo "</table>";

	mysqli_free_result($result);
}
else
{
	echo "There are no data in Student table."."<br>";
}

?>
<a href="student.php"><input type="button" Value="Add Student" style="margin-top: 10px;"></a>

<hr>
<hr>

<?php

$retrive1="SELECT * FROM teacher";
$result1=mysqli_query($connect, $retrive1); 
echo "<h2>Teacher Information</h2>";
if(mysqli_num_rows($result1)>0)
{
	echo "<table border=2px>";
	echo "<tr>";
	echo "<th>ID</th>";
	echo "<th>Name</th>";
	echo "<th>Password</th>";
	echo "<th>Department</th>";
	echo "<th>Module</th>";
	echo "<th>Salary</th>";
	echo "<th>Update</th>";
    echo "<th>Delete</th>";
	
	echo "</tr>";

	while ($row1=mysqli_fetch_array($result1)) 
	{
		$id_1=$row1['ID'];
		echo "<tr>";
		echo "<td>".$id_1."</td>";
		echo "<td>".$row1['Name']."</td>";
		echo "<td>".$row1['Password']."</td>";
		echo "<td>".$row1['Department']."</td>";
		echo "<td>".$row1['Module']."</td>";
		echo "<td>".$row1['Salary']."</td>";
		echo "<td><a href='teacherupdate.php?tid=$id_1'>Update</a></td>";
        echo "<td><a href='teacherdelete.php?tid=$id_1'> Delete</a></td>";		
		echo "</tr>";
	}
	echo "</table>";
	mysqli_free_result($result1);
}
else
{
	echo "There are no data in Teacher table."."<br>";
}

?>
<a href="teacher.php"><input type="button" Value="Add Teacher" style="margin-top: 10px;"></a>

<hr><hr>
<a href="login.html"><input type="button" Value="Exit"></a>
</center>
</div>
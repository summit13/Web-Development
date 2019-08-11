<h2>Teacher Information</h2>

<?php

require ('database.php');

$name=$_POST['name'];

$ps=$_POST['password'];

$query= "SELECT * FROM teacher where Name='$name' and Password='$ps'";
$result= mysqli_query($connect, $query);

if (mysqli_num_rows($result) > 0)
{
    echo "<table style='border: solid'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Password</th>";
    echo "<th>Department</th>";
    echo "<th>Module</th>";
    echo "<th>Salary</th>";
    echo "<th>Update</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_array($result))
    {
     $idd=$row['ID'];
        echo "<tr>";
            echo "<td>" .$row['ID']. "</td>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Password'] . "</td>";
            echo "<td>" . $row['Department'] . "</td>";
            echo "<td>" . $row['Module'] . "</td>";
            echo "<td>" . $row['Salary'] . "</td>";
            echo "<td><a href='teacherownedit.php?tid=$idd'>Update</a></td>";
            echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
}
        else
        {
            echo "No records found";
        }
?>
<br>
<a href="teacherlogin.php"><input type="button" value="Go Back"></a>




<h2>Student Information</h2>

<?php

require ('database.php');

$name=$_POST['name'];

$ps=$_POST['password'];

$query= "SELECT * FROM student where Name='$name' and Password='$ps'";
$result= mysqli_query($connect, $query);

if (mysqli_num_rows($result) > 0)
{
    echo "<table style='border: solid'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Password</th>";
    echo "<th>Course</th>";
    echo "<th>Address</th>";
    echo "<th>Update</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_array($result))
    {
     $idd=$row['ID'];
        echo "<tr>";
            echo "<td>" .$row['ID']. "</td>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Password'] . "</td>";
            echo "<td>" . $row['Course'] . "</td>";
            echo "<td>" . $row['Address'] . "</td>";
            echo "<td><a href='studentownedit.php?sid=$idd'>Update</a></td>";
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

<a href="studentlogin.php"><input type="button" value="Go Back"></a>



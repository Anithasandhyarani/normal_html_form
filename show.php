<?php



$con = mysqli_connect("localhost", "root", "", "sample") or die('cant connect');

//create database

$result = mysqli_query($con, "select * from users");


while ($row = mysqli_fetch_assoc($result)) {
	echo $row['name'] . " " . $row['DOB'] . " " . $row['gender'] ."<br> ";
}


mysqli_close($con);
echo "<a href='user2.html'>Insert New User</a>";

?>

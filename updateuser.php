<?php



$con = mysqli_connect("localhost", "root", "", "sample") or die('cant connect');


$id = $_POST['id'];
$name = $_POST['name'];
$DOB = $_POST['dob'];
$gender = $_POST['gender'];

$sql = "UPDATE users SET name = '$name',DOB='$DOB',gender= '$gender' WHERE id='$id'";



if (mysqli_query($con, $sql)) {
	$upd = "update record successfully";
  header("Location:index.php?msg=$upd");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
echo "<br><a href='user2.html'>Insert New User</a>";
echo "<br><a href='show.php'>Show all records</a>";

<?php

$con=mysqli_connect("localhost","root","","sample") or die('cant connect');
 
//delete the data
$id = $_GET['id'];
 $sql="DELETE FROM users WHERE id='$id'";
 
if ($con->query($sql) === TRUE) {
  $sucmsg = "Record deleted successfully";
  header("Location:index.php?msg=$sucmsg");

} else {
  echo "Error deleting record: " . $con->error;
}

$con->close(); 
echo "<br>";


?>

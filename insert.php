
<?php
session_start();
  $_SESSION['name']=$_POST['name'];
    $_SESSION['dob']=$_POST['dob'];
	 $_SESSION['gender'] = $_POST['gender'];
	  
	$error ="";
		
		if (empty($_POST["name"])) {
			$error=1;
		} else if(!preg_match("/^[a-zA-z]*$/", htmlspecialchars(stripslashes(trim($_POST["name"]))))) {
			$error = 2;
		} else if(empty($_POST['gender'])){
			$error=3;
	    } else if(empty($_POST['dob'])){
		 	$error=4;
		}else if(!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$_POST['dob'])){
			$error=5;
		}	
	
if($error == ""){		
$con=mysqli_connect("localhost","root","","sample") or die('cant connect');//connecting to database
 
   //insert the data  
    $sql="INSERT INTO users(name,DOB,gender) values('".$_POST['name']."','".$_POST['dob']."','".$_POST['gender']."')"; 
	echo
  if (mysqli_query($con, $sql)) {
  $msg = "New record created successfully";
  header("Location:index.php?msg=$msg");
  
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

 

mysqli_close($con);
echo "<br><a href='user2.php'>Insert New User</a>";
echo "<br><a href='index.php'>Show all records</a>";
} else {
	//echo $nameEmp;
	header("location:user2.php?error=".$error);
}
?>


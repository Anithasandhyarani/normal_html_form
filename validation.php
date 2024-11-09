<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["name"])) {
			$nameEmp = "name is required";
		} else {
			$name = htmlspecialchars(stripslashes(trim($_POST["name"])));
			if (!preg_match("/^[a-zA-z]*$/", $name)) {
				$nameEmp = "only characters and spaces will allowed";
			}
		}
	}
?>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
	 if (isset($_POST['gender']) 
 }
	  if(empty($_POST['gender'])){
  echo "Gender selection is required. <br>";
}
 else {
	 $gender = $_POST['gender']; 
 }
?>
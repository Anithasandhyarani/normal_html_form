<?php 

session_start(); 

if(isset($_SESSION["colour"])){ 
echo $_SESSION["colour"];
	
	echo $_SESSION["pet"];
	session_unset();
}
	echo"all session variables destroyed"

?> 

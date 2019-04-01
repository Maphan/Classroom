<?php 
	if(isset($_SESSION['Username']) && $_SESSION['permission']=="0"){
		//yes
	}else{
		header("Location: ".$level."accout/login/login.php");
	}
?>
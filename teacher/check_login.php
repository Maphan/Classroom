<?php 
	if(isset($_SESSION['Username']) && $_SESSION['permission']=="3"){
		//yes
	}else{
		header("Location: ".$level."accout/login/login.php");
	}
?>
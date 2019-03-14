<?php
include("../../Level_page.php");
lavel_Page_L3();
include_once($level."connection/Connection.php");
session_start();

if(isset($_POST['username']) && isset($_POST['pass'])){
	$username=$_POST['username'];
	$pass=$_POST['pass'];
	
	$stmt_login_T=$sql->prepare("SELECT * FROM teacher WHERE email=? AND password=?");
	$stmt_login_T->bindParam(1, $username);
	$stmt_login_T->bindParam(2, $pass);
	$stmt_login_T->execute();

	$stmt_login_S=$sql->prepare("SELECT * FROM student WHERE std_id=? AND password=?");
	$stmt_login_S->bindParam(1, $username);
	$stmt_login_S->bindParam(2, $pass);
	$stmt_login_S->execute();

	if($stmt_login_T->rowCount()>0){ //Teacher login
		$row_user=$stmt_login_T->fetch();		
		$_SESSION['Username']=$row_user['email'];
		$_SESSION['permission']="3";
		echo "T";
		// header("Location: ".$level."dashboard.php");
	}else if($stmt_login_S->rowCount()>0){ //Student login
		$row_user=$stmt_login_S->fetch();
		$_SESSION['Username']=$row_user['email'];
		$_SESSION['permission']=$row_user['permission'];
		// header("Location: ".$level."dashboard.php");
		echo "s";
	}else {
		header("Location: ".$level."accout/login/login.php?flag=username or password is incorrect");
	}
}else{
	header("Location: ".$level."accout/login/login.php?flag=Empty field username or password");
}
?>
<?php
include("../../Level_page.php");
lavel_Page_L3();
include_once($level."connection/Connection.php");
session_start();

if(isset($_POST['username']) && isset($_POST['pass']) && isset($_POST['login_type'])){
	$username=$_POST['username'];
	$pass=$_POST['pass'];
	if(strlen($pass) < 8){
		header("Location: ".$level."accout/login/login.php?flag=username or password is incorrect");
	}
	if($_POST['login_type'] == '0'){
		$username=$username."@kku.ac.th";
		$stmt_login_T=$sql->prepare("SELECT * FROM teacher WHERE email=? AND password=?");
		$stmt_login_T->bindParam(1, $username);
		$stmt_login_T->bindParam(2, $pass);
		$stmt_login_T->execute();

		if($stmt_login_T->rowCount()>0){ //Teacher login
			$row_user=$stmt_login_T->fetch();		
			$_SESSION['Username']=$row_user['email'];
			$_SESSION['permission']="3";		
			header("Location: ".$level."accout/login/login.php");
		}
		else {
			header("Location: ".$level."accout/login/login.php?flag=username or password is incorrect");
		}

	}else if($_POST['login_type'] == '1'){
		$username=$username."@kkumail.com";
		$stmt_login_S=$sql->prepare("SELECT * FROM student WHERE email=? AND password=?");
		$stmt_login_S->bindParam(1, $username);
		$stmt_login_S->bindParam(2, $pass);
		$stmt_login_S->execute();

		if($stmt_login_S->rowCount()>0){ //Student login
			$row_user=$stmt_login_S->fetch();
			$_SESSION['Username']=$row_user['email'];
			$_SESSION['permission']=$row_user['permission'];
			header("Location: ".$level."accout/login/login.php");
		}else {
				header("Location: ".$level."accout/login/login.php?flag=username or password is incorrect");
			}

	}
	else{
		header("Location: ".$level."accout/login/login.php?flag=Incorrect user type.");
	}
	}
else{
	header("Location: ".$level."accout/login/login.php?flag=Empty field username or password");
}
?>
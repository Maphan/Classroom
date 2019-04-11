<?php
include("../../Level_page.php");
lavel_Page_L3();
include_once($level."connection/Connection.php");
session_start();

if(isset($_POST['username']) && isset($_POST['pass']) && isset($_POST['login_type']) && $_POST['username']!= ""){
	$username=$_POST['username'];
	$pass=$_POST['pass'];

	if($_POST['login_type'] == '0'){
		$username=$username."@kku.ac.th";
		$stmt_email_T=$sql->prepare("SELECT * FROM teacher WHERE email =?");
		$stmt_email_T->bindParam(1,$username);
		$stmt_email_T->execute();
		$row_teacher=$stmt_email_T->fetch();
		if($stmt_email_T->rowCount()>0 && $row_teacher['login_status']<3 ){
			$stmt_login_T=$sql->prepare("SELECT * FROM teacher WHERE email=? AND password=?");
			$stmt_login_T->bindParam(1, $username);
			$stmt_login_T->bindParam(2, $pass);
			$stmt_login_T->execute();

			if($stmt_login_T->rowCount()>0){ //Teacher login
				$row_user=$stmt_login_T->fetch();
				$_SESSION['Username']=$row_user['email'];
					$_SESSION['permission']="3";
					$status_login=0;
					$stmt_reset_status=$sql->prepare("UPDATE teacher SET login_status = ? WHERE email=?");
					$stmt_reset_status->bindParam(1, $status_login);
					$stmt_reset_status->bindParam(2, $username);
					$stmt_reset_status->execute();
					header("Location: ".$level."accout/login/login.php");	
			}else {//Increase login_status +1 if failed
				$stmt_select_by_email=$sql->prepare("SELECT * FROM teacher WHERE email=?");
				$stmt_select_by_email->bindParam(1, $username);
				$stmt_select_by_email->execute();
				
				if($stmt_select_by_email->rowCount()>0){
					$row_user=$stmt_select_by_email->fetch();
					$stmt_reset_status=$sql->prepare("UPDATE teacher SET login_status = ? WHERE email=?");
					$status_login=$row_user['login_status']+1;
					$stmt_reset_status->bindParam(1, $status_login);
					$stmt_reset_status->bindParam(2, $username);
					$stmt_reset_status->execute();				
				}
				header("Location: ".$level."accout/login/login.php?flag=Username or password is incorrect.");
			}
			
		}else if($stmt_email_T->rowCount()>0 && $row_teacher['login_status']>=3 ){
			header("Location: ".$level."accout/login/login.php?flag=Account is locked. Please contact admin.");
		}
		else if($stmt_email_T->rowCount()<=0){
			header("Location: ".$level."accout/login/login.php?flag=Username or password is incorrect.");
		}
		else{
			header("Location: ".$level."accout/login/login.php?flag=Please enter username and password.");
		}
		

	}else if($_POST['login_type'] == '1'){
		$username=$username."@kkumail.com";
		$stmt_email_S=$sql->prepare("SELECT * FROM student WHERE email =?");
		$stmt_email_S->bindParam(1,$username);
		$stmt_email_S->execute();
		$row_std=$stmt_email_S->fetch();
		if($stmt_email_S->rowCount()>0 && $row_std['login_status']<3 ){
			$stmt_login_S=$sql->prepare("SELECT * FROM student WHERE email=? AND password=?");
			$stmt_login_S->bindParam(1, $username);
			$stmt_login_S->bindParam(2, $pass);
			$stmt_login_S->execute();
				if($stmt_login_S->rowCount()>0){ //Student login
					$row_user=$stmt_login_S->fetch();
					$_SESSION['Username']=$row_user['email'];
					$_SESSION['permission']=$row_user['permission'];
					$status_login=0;
					
					$stmt_reset_status=$sql->prepare("UPDATE student SET login_status = ? WHERE email=?");
					$stmt_reset_status->bindParam(1, $status_login);
					$stmt_reset_status->bindParam(2, $username);
					$stmt_reset_status->execute();
					header("Location: ".$level."accout/login/login.php");
				}else{//Increase login_status +1 if failed
					$stmt_select_by_email=$sql->prepare("SELECT * FROM student WHERE email=?");
					$stmt_select_by_email->bindParam(1, $username);
					$stmt_select_by_email->execute();
					
					if($stmt_select_by_email->rowCount()>0){
						$row_user=$stmt_select_by_email->fetch();
						$stmt_reset_status=$sql->prepare("UPDATE student SET login_status = ? WHERE email=?");
						$status_login=$row_user['login_status']+1;
						$stmt_reset_status->bindParam(1, $status_login);
						$stmt_reset_status->bindParam(2, $username);
						$stmt_reset_status->execute();
					}
					header("Location: ".$level."accout/login/login.php?flag=Username or password is incorrect.");
				}
		}else if($stmt_email_S->rowCount()<=0){
			header("Location: ".$level."accout/login/login.php?flag=Username or password is incorrect.");
		}
	}else{
		header("Location: ".$level."accout/login/login.php?flag=Incorrect user type.");
	}
}else{
	header("Location: ".$level."accout/login/login.php?flag=Please enter username and password.");
}
?>
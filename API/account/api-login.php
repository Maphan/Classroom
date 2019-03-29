<?php
//API-login
include("../../Level_page.php");
lavel_Page_L3();
include_once($level."connection/Connection.php");
include_once("../../accout/Account_object.php");

if(isset($_POST['username']) && isset($_POST['pass'])){
	$username = $_POST['username'];
	$pass = $_POST['pass'];
	
	$stmt_login_T=$sql->prepare("SELECT * FROM teacher WHERE email=? AND password=?");
	$stmt_login_T->bindParam(1, $username);
	$stmt_login_T->bindParam(2, $pass);
	$stmt_login_T->execute();

	$stmt_login_S=$sql->prepare("SELECT * FROM student WHERE std_id=? AND password=?");
	$stmt_login_S->bindParam(1, $username);
	$stmt_login_S->bindParam(2, $pass);
	$stmt_login_S->execute();
	
	$account_obj=new Account;
	if($stmt_login_T->rowCount()>0){ //Teacher login
		$row_user=$stmt_login_T->fetch();
		
		$account_obj->id=$row_user['t_id'];
		$account_obj->email=$row_user['email'];
		$account_obj->firstname=$row_user['first_name'];
		$account_obj->lastname=$row_user['last_name'];
		$account_obj->permission="3";
		
		echo json_encode($account_obj);
		
	}else if($stmt_login_S->rowCount()>0){ //Student login
		$row_user=$stmt_login_S->fetch();
		
		$account_obj->id=$row_user['std_id'];
		$account_obj->email=$row_user['email'];
		$account_obj->firstname=$row_user['first_name'];
		$account_obj->lastname=$row_user['last_name'];
		$account_obj->permission=$row_user['permission'];
		
		echo json_encode($account_obj);
	}else {
		echo json_encode(false);
	}
}else{
	echo json_encode(false);
}
?>
<?php
// Acount object
include_once("Account_object.php");
function getAccount(){
	$account = new Account;
	if(isset($_SESSION['Username']) && $_SESSION['permission']=="3"){
		$username=$_SESSION['Username'];
		$stmt_login_T=$GLOBALS['sql']->prepare("SELECT * FROM teacher WHERE email=?");
		$stmt_login_T->bindParam(1, $username);
		$stmt_login_T->execute();		
		$row_T=$stmt_login_T->fetch();
		
		$account->id=$row_T['t_id'];
		$account->email=$row_T['email'];
		$account->firstname=$row_T['first_name'];
		$account->lastname=$row_T['last_name'];
		$account->permission="3";
		
	}else if(isset($_SESSION['Username']) && $_SESSION['permission']=="0"){
		$username=$_SESSION['Username'];
		$stmt_login_T=$GLOBALS['sql']->prepare("SELECT * FROM student WHERE email=?");
		$stmt_login_T->bindParam(1, $username);
		$stmt_login_T->execute();		
		$row_T=$stmt_login_T->fetch();
		
		$account->id=$row_T['std_id'];
		$account->email=$row_T['email'];
		$account->firstname=$row_T['first_name'];
		$account->lastname=$row_T['last_name'];
		$account->permission="0";

	}else if(isset($_SESSION['Username']) && $_SESSION['permission'] != "3" && $_SESSION['permission'] != null){
		$username=$_SESSION['Username'];
		$stmt_login_S=$GLOBALS['sql']->prepare("SELECT * FROM student WHERE std_id=?");
		$stmt_login_S->bindParam(1, $username);
		$stmt_login_S->bindParam(2, $pass);
		$stmt_login_S->execute();		
		$row_S=$stmt_login_S->fetch();
		
		$account->id=$row_S['std_id'];
		$account->email=$row_S['email'];
		$account->firstname=$row_S['first_name'];
		$account->lastname=$row_S['last_name'];
		$account->permission=$row_S['permission'];
	}
	
	return($account);
}

?>
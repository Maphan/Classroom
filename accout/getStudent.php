<?php
// Acount object
include_once("Account_object.php");
function getStudent($std_id){
	$account = new Account;
	$username=$_SESSION['Username'];
		$stmt_login_T=$GLOBALS['sql']->prepare("SELECT * FROM student WHERE std_id=?");
		$stmt_login_T->bindParam(1, $std_id);
		$stmt_login_T->execute();		
		$row_T=$stmt_login_T->fetch();
		
		$account->id=$row_T['std_id'];
		$account->email=$row_T['email'];
		$account->firstname=$row_T['first_name'];
		$account->lastname=$row_T['last_name'];
		$account->permission=$row_T['permission'];
	
	return($account);
}

?>
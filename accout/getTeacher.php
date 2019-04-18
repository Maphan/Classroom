<?php
// Acount object
include_once("Account_object.php");
function getTeacher($t_id){
	$account = new Account;
	$username=$_SESSION['Username'];
		$stmt_login_T=$GLOBALS['sql']->prepare("SELECT * FROM teacher WHERE t_id=?");
		$stmt_login_T->bindParam(1, $t_id);
		$stmt_login_T->execute();		
		$row_T=$stmt_login_T->fetch();
		
		$account->id=$row_T['t_id'];
		$account->email=$row_T['email'];
		$account->firstname=$row_T['first_name'];
		$account->lastname=$row_T['last_name'];

	
	return($account);
}

?>
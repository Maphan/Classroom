<?php
function update_permission($email,$permis){
	$stmt=$GLOBALS['sql']->prepare("UPDATE student SET permission = ? WHERE email=?");
	$stmt->bindParam(1, $permis);
	$stmt->bindParam(2, $email);
	if($stmt->execute()){
		return true;
	}else{
		return false;
	}
}
?>
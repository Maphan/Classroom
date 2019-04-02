<?php
include("connection/Connection.php");
if(add_class_member("396dbe7db7","5930204324")){
	echo "success";
}else{
	echo "fail";
}

function add_class_member($class_id, $std_id){
	$stmt_insert_class_member=$GLOBALS['sql']->prepare("INSERT INTO class_member (class_id, std_id) VALUES (?,?)");
	$stmt_insert_class_member->bindParam(1, $class_id);
	$stmt_insert_class_member->bindParam(2, $std_id);
	
	if($stmt_insert_class_member->execute()){
		return(true);
	}else{
		return(false);
	}
}
?>
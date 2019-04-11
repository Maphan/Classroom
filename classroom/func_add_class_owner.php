<?php
function add_class_owner($class_id, $t_id){
	$stmt_insert_class_owner=$GLOBALS['sql']->prepare("INSERT INTO owner_class (class_id, t_id) VALUES (?,?)");
	$stmt_insert_class_owner->bindParam(1, $class_id);
	$stmt_insert_class_owner->bindParam(2, $t_id);
	
	if($stmt_insert_class_owner->execute()){
		return(true);
	}else{
		return(false);
	}
}
?>
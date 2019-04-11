<?php
function add_class_owner($class_id, $t_id){
	$stmt_select=$GLOBALS['sql']->prepare("SELECT * FROM owner_class WHERE class_id=? AND t_id=?");
	$stmt_select->bindParam(1, $class_id);
	$stmt_select->bindParam(2, $t_id);
	$stmt_select->execute();
	if($stmt_select->rowCount()==0){
		$stmt_insert_class_owner=$GLOBALS['sql']->prepare("INSERT INTO owner_class (class_id, t_id) VALUES (?,?)");
		$stmt_insert_class_owner->bindParam(1, $class_id);
		$stmt_insert_class_owner->bindParam(2, $t_id);
		
		if($stmt_insert_class_owner->execute()){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
}
?>
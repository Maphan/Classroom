<?php
function getAll_Classroom_status($std,$class){
	$stmt=$GLOBALS['sql']->prepare("SELECT * FROM class_member WHERE std_id = ? AND class_id = ?");
    $stmt->bindParam(1, $std);
    $stmt->bindParam(2, $class);
    $stmt->execute();
    $row=$stmt->fetch();
	return $row["status"];
}//end func


?>
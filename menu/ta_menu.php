<div class="col-md-3 pt-3 pl-2 bg-dark text_color-W1">
	<div class="border-Hmenu text-center mb-2">Main Menu</div>
	<div class="pl-4">
		<a href="<?=$level;?>student/teacher_assistant/ClassRoom.php?class_id=<?=$_GET['class_id']?>"><p class="link_main2"><i class="ion-arrow-right-b text_color-main2"></i> Main Classroom</p></a>
		<a href="<?=$level;?>student/teacher_assistant/add_class_owner/add_class_owner.php?class_id=<?=$_GET['class_id']?>"><p class="link_main2"><i class="ion-arrow-right-b text_color-main2"></i> เพิ่มอาจารย์ผู้ดูแล</p></a>
		<?php
			$class_id=$_GET['class_id'];
			$teacher_count=$sql->prepare("SELECT * FROM owner_class WHERE class_id=? AND status=1"); 
			$teacher_count->bindParam(1,$class_id);
			$teacher_count->execute();

			if($teacher_count->rowCount()>0){
		?>
		<a href="<?=$level;?>student/teacher_assistant/add_TA/add_teacher_assistant.php?class_id=<?=$_GET['class_id']?>"><p class="link_main2"><i class="ion-arrow-right-b text_color-main2"></i> เพิ่มผู้ช่วยสอน (TA)</p></a>
		<a href="<?=$level;?>student/teacher_assistant/add_student/add_student.php?class_id=<?=$_GET['class_id']?>"><p class="link_main2"><i class="ion-arrow-right-b text_color-main2"></i> เพิ่มนักศึกษา</p></a>
		<?php } ?>
		<a href="<?=$level;?>student/teacher_assistant/edit_class/edit_class.php?class_id=<?=$_GET['class_id']?>"><p class="link_main2"><i class="ion-arrow-right-b text_color-main2"></i> แก้ไขรายละเอียด</p></a>
		<a href="<?=$level;?>student/teacher_assistant/class_admin.php?class_id=<?=$_GET['class_id']?>"><p class="link_main2"><i class="ion-arrow-right-b text_color-main2"></i> ผู้ดูแล</p></a>
	</div>
</div>
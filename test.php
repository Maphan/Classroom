<?php 
for($i=0;$i<100;$i++){
	sleep(0.25);
	echo substr(uniqid(),3)."<br>";
}
?>
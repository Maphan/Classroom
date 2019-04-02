<!-- Navbar L1 -->
<?php 
include_once($level."accout/getAccount.php");
?>
	<nav class="navbar navbar-expand-lg navbar-dark bg_color-main3 text-size-14" style="padding: 5px; border-bottom: 0px solid #FFF; min-height: 60px;">
  	  <div class="container">
		  <a class="navbar-brand" href="#"><img src="<?=$level?>images/logo_icon.png" height="40px"></a>
		  <button class="navbar-toggler text_color-W1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item active">
				<a class="nav-link link_main2" href="<?=$level?>teacher/home.php">หน้าแรก<span class="sr-only"></span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link link_main2" href="<?=$level?>teacher/create_class/create_class.php">สร้างคลาส</a>
			  </li>
			</ul>
			
			<ul class="navbar-nav ml-auto">
				<li class="nav-item" style="margin-left: 20px;">
					<span class="ion-android-person text_color-W1 link_main2">
					<a class="link_main2" href="#"><?php $acc=getAccount(); 
							echo $acc->firstname." ".$acc->lastname;
						?></a></span>
				</li>
				<li class="nav-item" style="margin-left: 20px;">
					<span class="ion-ionic text_color-W1 link_main2">
					<a class="link_main2" href="<?=$level?>accout/login/server-logout.php">ออกจากระบบ</a></span>
				</li>
			</ul>
		  </div>
		</div>
	</nav><!-- END navbar L1 -->
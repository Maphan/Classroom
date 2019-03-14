<!-- Navbar L1 -->
	<nav class="navbar navbar-expand-lg navbar-dark bg_color-main3 text-size-14" style="padding: 5px;">
  	  <div class="container">
		  <a class="navbar-brand pc-hid" href="#">Navbar</a>
		  <button class="navbar-toggler text_color-W1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item active">
				<a class="nav-link link_main2" href="<?=$level?>index.php">หน้าแรก<span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link link_main2" href="<?=$level?>#">สินค้ามาใหม่</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link link_main2" href="<?=$level?>#">โปรโมชั่น</a>
			  </li>
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle link_main2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  ข้อมูลร้าน
				</a>
				<div class="dropdown-menu text-size-14" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item link_main3" href="<?=$level?>#">ผู้ก่อตั่ง</a>
				  <a class="dropdown-item link_main3" href="<?=$level?>#">การชำระเงิน</a>
				  <a class="dropdown-item link_main3" href="<?=$level?>#">การคืนสินค้า</a>
				</div>
			  </li>
			</ul>
			
			<ul class="navbar-nav ml-auto">
				<li class="nav-item" style="margin-left: 20px;">
					<span class="ion-ionic text_color-W1 link_main2">
					<a class="link_main2" href="<?=$level;?>order/search_order.php">ติดตามสถานะสินค้า</a></span>
				</li>
				<?php if(empty($_SESSION['Username'])){?>
				<li class="nav-item" style="margin-left: 20px;">
					<span class="ion-android-person text_color-W1 link_main2">
					<a class="link_main2" href="<?=$level?>accout/login.php">เข้าสู้ระบบ</a></span>
				</li>
				<li class="nav-item" style="margin-left: 20px;">
					<span class="ion-android-person-add text_color-W1 link_main2">
					<a class="link_main2" href="<?=$level?>accout/register.php">สมัครสมาชิก</a></span>
				</li>
				<?php }else{?>
				<li class="nav-item dropdown" style="margin-left: 20px;">
					<a class="dropdown-toggle link_main2 ion-android-person" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  <?=$_SESSION['Username'];?>
					</a>
					<div class="dropdown-menu text-size-14" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item link_main3" href="<?=$level?>#">โปรไฟล์</a>
					  <a class="dropdown-item link_main3" href="<?=$level?>#">รายการของฉัน</a>
					  <a class="dropdown-item link_main3" href="<?=$level?>accout/server_logout.php">ออกจากระบบ</a>
					</div>
			  	</li>
			  	<?php }?>
			</ul>
		  </div>
		</div>
	</nav><!-- END navbar L1 -->
	
	<!-- Navbar L2 -->
	<div id="box-navbar-l2" class=" bg_color-main1">
		<div class="container">
			<div class="row">
				<div class="col-md-3 phoneONhid">
					<a href="<?=$level;?>index.php">
						<img class="img_logo" src="<?=$level?>images/logo-1.png"/>
					</a>
				</div>
				<div class="col-md-6" style="vertical-align: middle;">
					<form action="<?=$level;?>index.php" method="get" name="form-search" class="form-inline" id="form-search">
						<div class="input-group">
						  <input type="text" class="form-control" name="keyword" id="keyword" placeholder="ค้นหาสินค้า..">
						  <span class="input-group-btn">
							  <button class="btn btn-default btn_link_cursor" type="submit" ><i class="ion-ios-search-strong"></i></button>
						  </span>
						</div>
					</form>
				</div>
				<div class="col-md-3" style="padding-left: 30px;">
					<div class="row">
						<a href="<?=$level?>check-out/step-1.php">
							<div class="cart row" data-toggle="tooltip" data-placement="bottom" title="Check Out">
								<span class="badge badge-danger cart_number">0</span>
								<img class="cart-icon" src="<?=$level?>images/cart-1.png">
								<div>
									<div>สินค้าในตะกร้า</div>
									<div class="text_color-B1"><strong>0.00 .-</strong></div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div><!-- END navbar L2 -->
	
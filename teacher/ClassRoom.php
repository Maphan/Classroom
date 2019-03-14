<?php 
	include("Level_page.php");
	lavel_Page_L1();
	include_once($level."connection/Connection.php");
	include($level."include/main.php");
	date_default_timezone_set('Asia/Bangkok');
	session_start();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?=$domain_sub;?> Admin</title>
	
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="css/style-main.css" rel="stylesheet">
	<link href="css/navbar.css" rel="stylesheet">
	<link href="css/product-list.css" rel="stylesheet">
	<link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
	
	<style>
		html,body{
			width: 100%;
			height: 100%;
			padding: 0;
			margin: 0;
		  }
		.carousel-item img{
			min-width: 100%;
		}
		#form_order input{
			height: 35px;
			margin-bottom: 10px;
			font-size: 15px;
			border: 0px;
		}
		#form_order textarea{
			margin-bottom: 10px;
			font-size: 15px;
			border: 0px;
		}		
		.box_dash{
			width: 250px;
			height: 250px;
			border: solid 15px;
			padding-top: 20%;
			transition: 0.2s;
		}
		.box_dash:hover{
			border: solid 2px;
		}
	</style>	
</head>
<body class="font bg_color-W2">

	<?php
		include($level."navbar/navbar-admin.php"); 
	?>
	
	<div class="container-fluid">
		<div class="row">
		
			<?php include("menu/menu.php");?> <!-- include menu.php -->
			
			<div class="col-md-9 bg_color-W3 pb-4" style="min-height: 100vh">
				<div class="row">
					<div class="col-3" ></div>
					<div class="col-6 bg-dark text_color-main1 text-center py-2 mt-0" style="border-radius: 0px 0px 7px 7px">
						<h5><i class="ion-ionic"></i> Dashboard</h5>
					</div>
					<div class="col-3"></div>
				</div>
				<div class="container">
					<hr>
					<div class="row pt-5 pb-3">
						<div class="col-4">
							<center>
								<div class="rounded-circle box_dash bg-dark" style="border-color: #808080 ">
									<center><p class="text-size-26 text_color-W3"><i class="ion-cube"> </i>คลาสของฉัน</p></center>
									<center><b><p class="text-size-34 text_color-main1">
										<!-- ************* -->
										50 คลาส
									</p></b></center>
								</div>
							</center>
						</div>
						<div class="col-4">
							<center>
								<div class="rounded-circle box_dash bg-dark" style="border-color: #808080 ">
									<center><p class="text-size-26 text_color-W3"><i class="ion-ios-cart"> </i>ยอดขายวันนี้</p></center>
									<center><b><p class="text-size-36 text_color-main1">
										<?php
                                            $stmt_qty=$sql->prepare("SELECT SUM(price*amount) sumPrice,SUM(amount) sumQTY FROM `order`,order_item 
                                              WHERE `order`.ord_id = order_item.ord_id AND `order`.date =?");
                                            $date_today=date('Ymd');
                                            $stmt_qty->bindParam(1, $date_today);
                                            $stmt_qty->execute();
                                            $row_qty=$stmt_qty->fetch();
                                           // $stmt_item_order=$sql->fetch();
                                            //echo $row_qty['sumQTY']." ชิ้น";
                                            echo number_format($row_qty['sumQTY'],0,".",",")." ชิ้น";
										 ?>
									</p></b></center>
									<center><b><p class="text-size-12 text_color-W3"><?php echo $row_qty['sumPrice']." บาท"; ?></p></b></center>
								</div>
							</center>
						</div>
						<div class="col-4">
							<center>
								<div class="rounded-circle box_dash bg-dark" style="border-color: #808080 ">
									<center><p class="text-size-26 text_color-W3"><i class="ion-arrow-graph-up-right"> </i>สินค้ายอดนิยม</p></center>
									<center><b><p class="text-size-36 text_color-main1">
										</p></b></center>
								</div>
							<center>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	<script src="<?=$level;?>bootstrap/jquery-3.2.1.slim.min.js"></script>
	<script src="<?=$level;?>bootstrap/popper.min.js"></script>	
	<script src="<?=$level;?>bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=$level;?>js/jquery.min.js"></script>
	
	<script>var level='<?php echo $level?>';</script>
	<script src="<?=$level?>js/count_cart.js"></script>
	<script src="<?=$level?>js/delete_cart.js"></script>
	
</body>
</html>
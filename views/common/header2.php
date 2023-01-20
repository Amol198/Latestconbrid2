<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"
	content="width=device-width, initial-scale=1, user-scalable=no">
<title>CONBRID</title>
<link rel="stylesheet" type="text/css"
	href="<?php echo base_url("assets")?>/css/master.css">
<link rel="stylesheet" type="text/css"
	href="<?php echo base_url("assets")?>/css/color/color-1.css" id="color" />
<link rel="shortcut icon"
	href="<?php echo base_url("assets/images/conbridlogo.jpg")?>">
<link
	href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
	rel="stylesheet" />
<script src="<?php echo base_url("assets")?>/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url("assets")?>/js/bootstrap.min.js"></script>
<script src="<?php echo base_url("assets")?>/js/bootsnav.js"></script>

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
.MultiCarousel {
	float: left;
	overflow: hidden;
	padding: 15px;
	width: 100%;
	position: relative;
}

.MultiCarousel .MultiCarousel-inner {
	transition: 1s ease all;
	float: left;
}

.MultiCarousel .MultiCarousel-inner .item {
	float: left;
}

.MultiCarousel .MultiCarousel-inner .item>div {
	text-align: center;
	padding: 10px;
	margin: 10px;
	background: #f1f1f1;
	color: #666;
}

.MultiCarousel .leftLst, .MultiCarousel .rightLst {
	position: absolute;
	border-radius: 50%;
	top: calc(50% - 20px);
}

.MultiCarousel .leftLst {
	left: 0;
}

.MultiCarousel .rightLst {
	right: 0;
}

.MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over {
	pointer-events: none;
	background: #ccc;
}
</style>
</head>
<body style="font-family: Roboto, san-serif;">

	<!--LOADER -->
	<div class="loader">
		<div class="cssload-thecube">
			<div class="cssload-cube cssload-c1"></div>
			<div class="cssload-cube cssload-c2"></div>
			<div class="cssload-cube cssload-c4"></div>
			<div class="cssload-cube cssload-c3"></div>
		</div>
	</div>
	<!--LOADER -->


	<!--  BACK TO TOP  -->
	<div class="short-msg">
		<a href="#." class="back-to"><i class="icon-arrow-up2"></i></a> <a
			href="#." class="short-topup" data-toggle="modal"
			data-target="#myModal"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
	</div>
	<!-- BACK TO TOP -->


	<!-- HEADER -->
	<header id="main_header" class="header_sev"
		style="background: black; position: fixed">
		<div class="col-md-2 col-sm-2 col-xs-2">
			<label style="color: white; font-size: 30px;"> <img
				src="<?php echo base_url("assets")?>/images/conbridlogo.jpg"
				style="height: 60px; text-align: left;" alt="logo" /></label><br>
		</div>
		<div class="col-md-8 col-sm-8 col-xs-8" style="text-align: center;">
			<label style="color: white; font-size: 30px;"> <b>CONBRID</b></label><br>
		</div>
	
		<div id="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center">

						<label style="color: white; font-size: 24px;">BRIDGING
							CONSTRUCTION PROFESSIONALS</label>
					</div>
				</div>
			</div>
		</div>


	</header>
	<!-- HEADER  -->
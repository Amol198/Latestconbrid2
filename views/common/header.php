<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"
	content="width=device-width, initial-scale=1, user-scalable=no">
<title>CONBRID</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css"
	href="<?php echo base_url("assets")?>/css/bootstrap.min.css"/>

<link rel="stylesheet" type="text/css"
	href="<?php echo base_url("assets")?>/css/master.css">
<link rel="stylesheet" type="text/css"
	href="<?php echo base_url("assets")?>/css/color/color-1.css" id="color" />
<link rel="shortcut icon"
	href="<?php echo base_url("assets/images/conbridlogo.jpg")?>">
<link
	href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
	rel="stylesheet" />
<script src="<?php echo base_url("assets")?>/js/bootstrap.min.js"></script>

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

.preview-images-zone {
    width: 100%;
    border: 1px solid #ddd;
    min-height: 180px;
    /* display: flex; */
    padding: 5px 5px 0px 5px;
    position: relative;
    overflow:auto;
}
.preview-images-zone > .preview-image:first-child {
    height: 185px;
    width: 185px;
    position: relative;
    margin-right: 5px;
}
.preview-images-zone > .preview-image {
    height: 90px;
    width: 90px;
    position: relative;
    margin-right: 5px;
    float: left;
    margin-bottom: 5px;
}
.preview-images-zone > .preview-image > .image-zone {
    width: 100%;
    height: 100%;
}
.preview-images-zone > .preview-image > .image-zone > img {
    width: 100%;
    height: 100%;
}
.preview-images-zone > .preview-image > .tools-edit-image {
    position: absolute;
    z-index: 100;
    color: #fff;
    bottom: 0;
    width: 100%;
    text-align: center;
    margin-bottom: 10px;
    display: none;
}
.preview-images-zone > .preview-image > .image-cancel {
    font-size: 18px;
    position: absolute;
    top: 0;
    right: 0;
    font-weight: bold;
    margin-right: 10px;
    cursor: pointer;
    display: none;
    z-index: 100;
}
.preview-image:hover > .image-zone {
    cursor: move;
    opacity: .5;
}
.preview-image:hover > .tools-edit-image,
.preview-image:hover > .image-cancel {
    display: block;
}
.ui-sortable-helper {
    width: 90px !important;
    height: 90px !important;
}
</style>
</head>
<body style="font-family: Roboto, san-serif;">

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
		<div class="col-md-2 col-sm-2 col-xs-2" style="text-align: center;">
			<label style="color: white; font-size: 16px;"> <b></b></label><br>
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

		<nav class="navbar navbar-default navbar-sticky bootsnav">
			<div class="container">
				<div class="row">
					<div style="margin-left: 200px;">

						<!-- Start Header Navigation -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle"
								data-toggle="collapse" data-target="#navbar-menu">
								<i class="fa fa-bars"></i>
							</button>


						</div>
						<!-- End Header Navigation -->
						<div class="collapse navbar-collapse" id="navbar-menu">
							<ul class="nav navbar-nav" data-in="fadeInDown"
								data-out="fadeOutUp">
<?php if(isset($_SESSION['userdata']['id'])) { ?>
	<li class="dropdown"><a href="#." class="dropdown-toggle"
									data-toggle="dropdown">Profile</a>
									<ul class="dropdown-menu">
														<li><a href="<?php if($_SESSION['userdata']['category']=="Companies") echo base_url('Forms/company_registration'); elseif($_SESSION['userdata']['category']=="Individuals") echo base_url('Forms/individual_registration');elseif($_SESSION['userdata']['category']=="3") echo base_url('Forms/customer_registration');?>">My Profile</a></li>
					<?php if(isset($_SESSION['userdata']['category'])) {?>
						<li><a href="<?php echo base_url("Video_verification")?>">Video Verification</a></li>

		<?php }?>		
					<?php if($_SESSION['userdata']['category']=="Companies") {?>
						<li><a href="<?php echo base_url("Company_images/ongoing_images")?>">Ongoing Projects</a></li>
										<li><a href="<?php echo base_url("Company_images/completed_images")?>">Completed Projects</a></li>
										<li><a href="<?php echo base_url("Company_images/clients")?>">Clients of company</a></li>
										<li></li>
										<?php }?>
										
										<li><a href="<?php echo base_url("Dashboard/logout")?>">Logout</a></li>
									</ul></li>

		
<?php }else{?><li><a
					href="<?php echo base_url("Dashboard/registration")?>">Login</a></li><?php }?>
								<li class="dropdown"><a href="<?php echo base_url("Dashboard");?>"
									>Home</a>
								</li>

								<li class="dropdown"><a href="#." class="dropdown-toggle"
									data-toggle="dropdown">What is CONBRID</a>
									<ul class="dropdown-menu">
										<li><a href="about.html">About Us V - 1</a></li>
										<li><a href="about-2.html">About Us V - 2</a></li>
										<li><a href="about-3.html">About Us V - 3</a></li>
									</ul></li>

								<li class="dropdown"><a href="#." class="dropdown-toggle"
									data-toggle="dropdown">Services Offered</a>
									<ul class="dropdown-menu">
										<li class="dropdown"><a href="#." class="dropdown-toggle"
											data-toggle="dropdown">Property Listing</a>
											<ul class="dropdown-menu">
												<li><a href="listing-1.html">Property Listing V - 1</a></li>
												<li><a href="listing-2.html">Property Listing V - 2</a></li>
											</ul></li>
										<li class="dropdown"><a href="#." class="dropdown-toggle"
											data-toggle="dropdown">Property Details</a>
											<ul class="dropdown-menu">
												<li><a href="property-details-1.html">Property Details V - 1</a></li>
												<li><a href="property-details-2.html">Property Details V - 2</a></li>
												<li><a href="property-details-3.html">Property Details V - 3</a></li>
											</ul></li>
										<li class="dropdown"><a href="#." class="dropdown-toggle"
											data-toggle="dropdown">Creat New Property</a>
											<ul class="dropdown-menu">
												<li><a href="submit-property.html">Creat New Property V - 1</a></li>
												<li><a href="submit-property-2.html">Creat New Property V -
														2</a></li>
											</ul></li>
									</ul></li>



								<li class="dropdown"><a href="#." class="dropdown-toggle"
									data-toggle="dropdown">Innovative Feature</a>
									<ul class="dropdown-menu">
										<li><a href="user-profile.html">User Profile</a></li>
										<li><a href="my-properties.html">My Property</a></li>
										<li><a href="bookmark-properties.html">Bookmark Properties</a></li>
										<li><a href="create-agency.html">Create Account</a></li>
										<li><a href="login.html">User Login</a></li>
										<li><a href="login.html">User Register</a></li>
									</ul></li>


								<li class="dropdown megamenu-fw"><a href="#."
									class="dropdown-toggle" data-toggle="dropdown">Privacy Policy</a>
									<ul class="dropdown-menu megamenu-content" role="menu">
										<li>
											<div class="row">
												<div class="col-menu col-md-2">
													<h5 class="title">Showcase List</h5>
													<div class="content">
														<ul class="menu-col">
															<li><a href="showcase-property.html">Properties List</a></li>
															<li><a href="showcase-property.html">Single Property</a></li>
															<li><a href="showcase-property.html">Search by City</a></li>
															<li><a href="showcase-property.html">Search by Category</a></li>
															<li><a href="showcase-property.html">Search by Type</a></li>
														</ul>
													</div>
												</div>
												<div class="col-menu col-md-2">
													<h5 class="title">Showcase List</h5>
													<div class="content">
														<ul class="menu-col">
															<li><a href="showcase-property.html">Properties List</a></li>
															<li><a href="showcase-property.html">Single Property</a></li>
															<li><a href="showcase-property.html">Search by City</a></li>
															<li><a href="showcase-property.html">Search by Category</a></li>
															<li><a href="showcase-property.html">Search by Type</a></li>
														</ul>
													</div>
												</div>
												<div class="col-menu col-md-8">
													<div class="row">
														<div id="nav_slider" class="owl-carousel">
															<div class="item">
																<div class="image bottom15">
																	<img
																		src="<?php echo base_url("assets")?>/images/nav-slider1.jpg"
																		alt="Featured Property"> <span
																		class="nav_tag yellow text-uppercase">for rent</span>
																</div>
																<h4>
																	<a href="#.">Park Avenue Apartment</a>
																</h4>
																<p>Towson London, MR 21501</p>
															</div>
															<div class="item">
																<div class="image bottom15">
																	<img
																		src="<?php echo base_url("assets")?>/images/nav-slider2.jpg"
																		alt="Featured Property"> <span
																		class="nav_tag yellow text-uppercase">for rent</span>
																</div>
																<h4>
																	<a href="#.">Park Avenue Apartment</a>
																</h4>
																<p>Towson London, MR 21501</p>
															</div>
															<div class="item">
																<div class="image bottom15">
																	<img
																		src="<?php echo base_url("assets")?>/images/nav-slider3.jpg"
																		alt="Featured Property"> <span
																		class="nav_tag yellow text-uppercase">for rent</span>
																</div>
																<h4>
																	<a href="#.">Park Avenue Apartment</a>
																</h4>
																<p>Towson London, MR 21501</p>
															</div>
															<div class="item">
																<div class="image bottom15">
																	<img
																		src="<?php echo base_url("assets")?>/images/nav-slider1.jpg"
																		alt="Featured Property"> <span
																		class="nav_tag yellow text-uppercase">for rent</span>
																</div>
																<h4>
																	<a href="#.">Park Avenue Apartment</a>
																</h4>
																<p>Towson London, MR 21501</p>
															</div>
															<div class="item">
																<div class="image bottom15">
																	<img
																		src="<?php echo base_url("assets")?>/images/nav-slider2.jpg"
																		alt="Featured Property"> <span
																		class="nav_tag yellow text-uppercase">for rent</span>
																</div>
																<h4>
																	<a href="#.">Park Avenue Apartment</a>
																</h4>
																<p>Towson London, MR 21501</p>
															</div>
															<div class="item">
																<div class="image bottom15">
																	<img
																		src="<?php echo base_url("assets")?>/images/nav-slider3.jpg"
																		alt="Featured Property"> <span
																		class="nav_tag yellow text-uppercase">for rent</span>
																</div>
																<h4>
																	<a href="#.">Park Avenue Apartment</a>
																</h4>
																<p>Towson London, MR 21501</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul></li>



							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
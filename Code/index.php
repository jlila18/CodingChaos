<!DOCTYPE html>
     <html class="no-js lt-ie9 lt-ie8 lt-ie7">
     <html class="no-js lt-ie9 lt-ie8">
     <html class="no-js lt-ie9">

<html class="no-js">

<head>
	<title>Homepage</title>
	<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>

</head>

<body>

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">
			<i class="rt-icon2-cross2"></i>
		</span>
	</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form form-inline" action="./">
				<div class="form-group bottommargin_0"> <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input"> </div> <button type="submit" class="theme_button">Search</button> </form>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">

		</div>
	</div>

	<div id="canvas">
		<div id="box_wrapper">

			<?php include('./comnpages/header.php'); ?>

			<section class="intro_section page_mainslider ds color">
				<div class="flexslider" data-dots="true" data-nav="false">
					<ul class="slides">
						<li> <img src="./images/bg1.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer with_corner_border with_padding huge-padding" data-animation="slideExpandUp">
												
													<h5 class="bold"> Book your appointment now! </h5>
													<h2 class="highlight">E-DENT is your clinic! <br> <br> WELCOME! </h2>
                                                    <a href="appoinment.php" class="theme_button color2 inverse margin_0">
                                                        <h4>Book Appointment</h4>
										</a> <span class="bottom_corners"></span> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>

			</section>
			

			<section id="products" class="ds color parallax page_gallery section_padding_top_100 section_padding_bottom_150 columns_padding_25">
				<div class="container">
					<div class="row display_table_md">
						<div class="col-md-6 col-md-push-6 display_table_cell_md"> <img src="images/services/pic7.jpg" alt="" class="rounded"> </div>
						<div class="col-md-6 col-md-pull-6 display_table_cell_md">
							<h2 class="section_header">Our Services</h2>
							<p class="highlight bottommargin_20"><strong>We offer 100+ different services in our clinic.</strong></p>
                            <p>We take care of each of our patients in order for each of them to have the service provided in the best way. Their satisfaction and wellbeing is our main goal. In the services list you can check each of them in details.</p>
							<p class="topmargin_30"> <a href="services.php" class="theme_button color2 inverse">Our Services</a> </p>
						</div>
					</div>
					<div class="row topmargin_30">
						<div class="col-sm-12">
							<div class="owl-carousel gallery-carousel" data-responsive-lg="5" data-responsive-md="4" data-responsive-sm="3" data-responsive-xs="1" data-nav="true">
								<div class="gallery-item rounded">
									<div class="item-media rounded overflow_hidden"> <img src="images/services/pic2.jpg" alt="">
									</div>
								</div>
								<div class="gallery-item rounded">
									<div class="item-media rounded overflow_hidden"> <img src="images/services/pic1.jpg"" alt="">
									</div>
								</div>
								<div class="gallery-item rounded">
									<div class="item-media rounded overflow_hidden"> <img src="images/services/pic6.jpg" alt="">
									</div>
								</div>
								<div class="gallery-item rounded">
									<div class="item-media rounded overflow_hidden"> <img src="images/services/pic5.jpg" alt="">
									</div>
								</div>

								<div class="gallery-item rounded">
									<div class="item-media rounded overflow_hidden"> <img src="images/services/pic3.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


			<section id="features" class="ls section_padding_top_150 section_padding_bottom_130 columns_margin_bottom_30">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<h2 class="section_header">Why should you choose us?</h2> <a href="about.php" class="theme_button color2 inverse min_width_button">About Us</a> </div>
						<div class="col-md-4 col-sm-6">
							<div class="teaser media hover_icon">
								<div class="media-left">
									<div class="teaser_icon rounded main_bg_color size_small"> <i class="rt-icon2-diamond2"></i> </div>
								</div>
								<div class="media-body toppadding_10">
									<h5 class="hover-color2"><a href="#"></a>High Quality Services</h5>
									</div>
							</div>
							<div class="teaser media hover_icon">
								<div class="media-left">
									<div class="teaser_icon rounded main_bg_color size_small"> <i class="rt-icon2-cloud"></i> </div>
								</div>
								<div class="media-body toppadding_10">
									<h5 class="hover-color2"><a href="#"></a>Experienced Doctors</h5>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="teaser media hover_icon">
								<div class="media-left">
									<div class="teaser_icon rounded main_bg_color size_small"> <i class="rt-icon2-tag2"></i> </div>
								</div>
								<div class="media-body toppadding_10">
									<h5 class="hover-color2"><a href="#">Newest Technologies</a></h5>
								</div>
							</div>
							<div class="teaser media hover_icon">
								<div class="media-left">
									<div class="teaser_icon rounded main_bg_color size_small"> <i class="rt-icon2-cloud"></i> </div>
								</div>
								<div class="media-body toppadding_10">
									<h5 class="hover-color2"><a href="#">High Customer Satisfaction</a></h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="cs gradient section_padding_top_65 section_padding_bottom_50 columns_margin_bottom_20 ">
				<div class="container ">
					<div class="row">
						<div class="col-md-20.1 col-sm-4 col-xs-6 col-xxs-12">
							<div class="teaser text-center">
								<h3 class="counter" data-from="0" data-to="18" data-speed="2100">0</h3>
								<p>Years of Experience</p>
							</div>
						</div>
						<div class="col-md-20 col-sm-4 col-xs-6 col-xxs-12">
							<div class="teaser text-center">
								<h3 class="counter" data-from="0" data-to="10" data-speed="2100">0</h3>
								<p>Doctors</p>
							</div>
						</div>
						<div class="col-md-20 col-sm-4 col-xs-6 col-xxs-12">
							<div class="teaser text-center">
								<h3 class="counter" data-from="0" data-to="62" data-speed="2100">0</h3>
								<p>Qualifications</p>
							</div>
						</div>
						<div class="col-md-20 col-sm-6 col-xs-6 col-xxs-12">
                            <div class="teaser text-center">
                                <h3 class="counter-wrap"> <span class="counter" data-from="0" data-to="21" data-speed="2100"></span>
                                    <span class="counter-add">k</span> </h3>
                                <p>Happy Patients</p>
                            </div>
						</div>
						</div>
					</div>
				</div>
			</section>
			

			<?php include('./comnpages/footer.php'); ?>
		</div>
    </div>

	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
<!DOCTYPE html>
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
<html class="no-js lt-ie9 lt-ie8">
<html class="no-js lt-ie9"> <![endif]-->

<html class="no-js">


<head>
	<title>Book Appoinment</title>
	<meta charset="utf-8">
	 <?php
($_GET);


	?>
     

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css">
	<link rel="stylesheet" type="text/css" href="./css/inbox.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<style>
		
		.inpbox{
			 
			border:1px solid #ddd;

		}
	</style>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>

</head>

<body>

	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal"> 
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
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

		<?php // include('./comnpages/header.php'); ?>

			
			
			<section class="page_breadcrumbs ls ms section_padding_25 bg_image">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="small">Book Appointment</h2>
						</div>
					</div>
					<ol class="breadcrumb bottom_breadcrumbs">
						<li> <a href="./">
						Home
						</a> </li>						 
						<li class="active">Book Appointment</li>
					</ol>
				</div>
			</section>
			 
			 
			<section class="ls columns_padding_25 section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="module-header">Book Appoinment </h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 to_animate" data-animation="scaleAppear">
							<form method="post" action="appoinmentadd.php">
								<div class="row">
									<div class="col-sm-12">
										<div   class="inpbox" >
											&nbsp <i class="fa fa-user highlight2"></i>
									      <input type="text" style="border:none"  size="30"	 name="name" placeholder="Full Name">
									    </div>
									</div>
									<div class="col-sm-6">
										<div  class="inpbox" > 
											&nbsp <i class="fa fa-phone highlight2" aria-hidden="true"></i>
											<input type="Number" style="border:none;"    name="phone" placeholder="Phone Number">											
									    </div>
									</div>
									<div class="col-sm-6">
										<div    class="inpbox"  >
											&nbsp <i class="fa fa-envelope highlight2" aria-hidden="true"></i>
											<input type="email" style="border:none;"  name="email" placeholder="Email Address">											
									    </div>
									</div>
									<div class="col-sm-6">
										<div    class="inpbox"  >
											&nbsp <i class="fa fa-flag highlight2" aria-hidden="true"></i>
											<input type="date" size="30" style="border:none;" name="date" placeholder="date">											
										</div>
									</div>
                                    <div class="col-sm-6">
                                    	<div       >
											 
											        <select name="app_time" class="col-sm-12" style="margin: 0px;padding: 0px;border:1px solid #ddd;border-radius: 0px"   >
																<option disabled>Select Preferred Time</option>
                                                                <option>10:00 - 10:15 AM </option>
                                                                <option>10:15 - 10:30 AM </option>
                                                                <option>10:30 - 10:45 AM </option>
                                                                <option>10:45 - 11:00 PM </option>
																<option>11:00 - 11:15 AM </option>
																<option>11:15 - 11:30 AM </option>
																<option>11:30 - 11:45 AM </option>
																<option>11:45 - 12:00 PM </option>
																<option>12:00 - 12:15 PM </option>
																<option>12:15 - 12:30 PM </option>
																<option>12:30 - 12:45 PM </option>
																<option>12:45 - 01:00 PM </option>
																<option>01:00 - 01:15 PM </option>
																<option>01:15 - 01:30 PM </option>
																<option>01:30 - 01:45 PM </option>
																<option>01:45 - 02:00 PM </option>
																<option>02:00 - 02:15 PM </option>
																<option>02:15 - 02:30 PM </option>
																<option>02:30 - 02:45 PM </option>
																<option>02:45 - 03:00 PM </option>
																<option>03:00 - 03:15 PM </option>
																<option>03:15 - 03:30 PM </option>
																<option>03:30 - 03:45 PM </option>
																<option>03:45 - 04:00 PM </option>
																<option disabled>Booking After 4:00 PM  Not Applicable on Sunday</option>
																
																<option>04:00 - 04:15 PM </option>
																<option>04:15 - 04:30 PM </option>
																<option>04:30 - 04:45 PM </option>
																<option>04:45 - 05:00 PM </option>
																<option>05:00 - 05:15 PM </option>
																<option>05:15 - 05:30 PM </option>
																<option>05:30 - 05:45 PM </option>
																<option>05:45 - 05:00 PM </option>
																<option>06:00 - 06:15 PM </option>
																<option>06:15 - 06:30 PM </option>
																<option>06:30 - 06:45 PM </option>
																<option>06:45 - 07:00 PM </option>
																<option>07:00 - 07:15 PM </option>
																<option>07:15 - 07:30 PM </option>
																<option>07:30 - 07:45 PM </option>
																<option>07:45 - 08:00 PM </option>
													</select>
										</div>
	                                                
									</div> 


									<div class="col-sm-12">
										 
											<div class="contact-form-message form-group bottommargin_0 inpbox"   > 
												<!--<label for="message">Message</label>-->
												<!--&nbsp <i class="fa fa-comment highlight2" aria-hidden="true"></i>--> 
												<textarea  rows="3" cols="45" style="width:100%;background:url(images.png)no-repeat;border:none;" name="message"  placeholder="Message"></textarea> 
											</div>
									</div>
								 
									<div class="col-sm-12 bottommargin_0 ">
										<div >
											<input type="hidden" name="cid" value="<?php echo $_GET['cid'] ?>" >
											<button type="submit" id="contact_form_submit" name="btn_reg" class="theme_button color2 wide_button margin_0">Book Appoinment </button> </div>
										</div>
									</div>
							</form>
						</div>
						<div class="col-md-4 to_animate" data-animation="scaleAppear">
							<ul class="list1 no-bullets no-top-border no-bottom-border">
								<li>
									<div class="media">
										<div class="media-left"> <i class="rt-icon2-shop highlight2 fontsize_18"></i> </div>
										<div class="media-body">
                                            <h5 class="media-heading grey">Address:</h5>Dritan Hoxha Street, Tirane, Albania </div>
									</div>
								</li>
								<li>
									<div class="media">
										<div class="media-left"> <i class="rt-icon2-phone5 highlight2 fontsize_18"></i> </div>
										<div class="media-body">
                                            <h5 class="media-heading grey">Phone: </h5> 0 (355) 42 484177 </div>
                                    </div>
								</li>
								<li>
									<div class="media">
										<div class="media-left"> <i class="rt-icon2-mail highlight2 fontsize_18"></i> </div>
										<div class="media-body greylinks">
                                            <h5 class="media-heading grey">Email:</h5> <a href="mailto:e-dentclinic@gmail.com">e-dentclinic@gmail.com</a> </div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			

			<?php // include('./comnpages/footer.php'); ?>
			<

			</div>
	</div>
	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
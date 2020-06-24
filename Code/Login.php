<?php session_start();?>
<!DOCTYPE html>
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
<html class="no-js lt-ie9 lt-ie8">
<html class="no-js lt-ie9">
<html class="no-js">


<head>
	<title>Log-in</title>
	<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
</head>

<body>

        <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
		</div>
	</div>
	<div id="canvas">
		<div id="box_wrapper">
            <?php include('./comnpages/header.php'); ?>
			
			<section class="page_breadcrumbs ls ms section_padding_25 bg_image">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="small">Login</h2>
						</div>
					</div>
					<ol class="breadcrumb bottom_breadcrumbs">
						<li> <a href="./">Home</a> </li>
						<li class="active">Login</li>
					</ol>
				</div>
			</section>
			<section class="ls section_padding_top_100 section_padding_bottom_75 columns_padding_25">
				<div class="container">
					<div class="row">

                        <center>

							<form class="form-horizontal checkout shop-checkout" action="testlogin.php" method="post" role="form">

								<div class="form-group validate-required" id="billing_first_name_field"> <label for="billing_first_name" class="col-sm-3 control-label">
							<span class="grey"><b>Email:</b></span>
						</label>
									<div class="col-sm-6">
									<input type="email" class="form-control " name="email" id="billing_first_name" placeholder="" value=""> </div>
								</div>
								<div class="form-group validate-required" id="billing_last_name_field"> <label for="billing_last_name" class="col-sm-3 control-label">
							<span class="grey"><b>Password:</b></span>

						</label>
									<div class="col-sm-6"> <input type="password" class="form-control " name="password" id="billing_last_name" placeholder="" value=""> </div>
								</div>

								<div class="form-group">

									<div class="col-sm-11">
									<input type="submit" id="sub" name="btn_login" value="Login" />
                                    <br> <br><a href="#"> Forgot Password.</a>
                                    <br>  If you don't have an account please register <a href="register.php">here</a> !
                                        </div>
                                </div>
								</div>
							</form>
                        </center>
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
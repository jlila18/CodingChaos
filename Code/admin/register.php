<?php
session_start();
$s=false; //if it is submitted
$err=false; //error check
$out=""; //echo variable
if(isset($_POST['submit'])) {
    $s=true; $msg=array(); $clean=array();
    if(isset($_POST['name']) ){
        $clean['name']=$_POST['name'];
    } else { $err=true;
        
    }
  if(isset($_POST['pass']))
    {
        $clean['pass']=$_POST['pass'];
    } else { $err=true;
        
    }
    if(isset($_POST['email']) ){
        $clean['email']=$_POST['email'];
    } else { $err=true;
        $msg[5]="<sub style='color:red'>Email must be in email format...</sub><br />";
    }
   /* if(isset($_POST['phone']) && preg_match("/.[\d]./",$_POST['phone'])){
        $clean['phone']=$_POST['phone'];
    } else { $err=true;
        $msg[6]="<sub style='color:red'>Phone number must conatin only digits</sub><br />";}*/


    if(isset($_POST['user_type']) ){
        $clean['user_type']=$_POST['user_type'];
    } else { $err=true;
   
    }
}
if(!$err&&$s) {
    echo "<h1>Request Successfully Sent</h1>";

$date= date("F j, Y \a\t g:ia");
    include_once('config.php');
  
    $sql="INSERT INTO `tbl_logindetails` (`user_name`, `user_pass`, `user_email`,`user_type`,`status`,`createDate`) 
	VALUES ('{$clean['name']}', '{$clean['pass']}', 
	'{$clean['email']}','{$clean['user_type']}', '1','{$date}');";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    echo $out;

    header("Location: ./index.php");
} else {
    ?>

<!DOCTYPE html>
<html>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
<br>  
<hr>
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p class="text-center">Get started with your free account</p>
	<p>
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
	</p>
	<p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
	<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name" value="<?=isset($_POST['name'])?$_POST['name']:""?>" class="form-control" placeholder="Full name" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email"  value="<?=isset($_POST['email'])?$_POST['email']:""?>"class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select name="phone" class="custom-select" style="max-width: 120px;">
		    <option selected="">+355</option>
		    <option value="1">+972</option>
		    <option value="2">+198</option>
		    <option value="3">+701</option>
		</select>
    	<input name="" class="form-control" placeholder="Phone number" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
		<select name="user_type" class="form-control">
			<option selected=""> Select job type</option>
			<option value="5-Dentist">Dentist</option>
			<option value="2-Receptionist">Receptionist</option>
			<option value="4-Economist">Economist</option>
		</select>
	</div> <!-- form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="pass" value="<?=isset($_POST['pass'])?$_POST['pass']:""?>" class="form-control" placeholder="Create password" type="password">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Repeat password" type="password">
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
                                                   
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>
</html>
<?php } ?>
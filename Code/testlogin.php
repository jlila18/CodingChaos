<?php
if(isset($_POST['btn_login']))
{
	
require('./comnpages/config.php');
//require('./admin/login.php');

$email=$_POST['email'];
$password=$_POST['password'];

echo$sql="SELECT * FROM tbl_logindetails WHERE user_email='$email' AND user_pass='$password'";
	
$data=mysqli_query($conn,$sql);  
	
   if(mysqli_num_rows($data)>0)
	{	

         session_start();
		 
		$row=mysqli_fetch_array($data);
		 
		 $_SESSION['user_id']=$row['user_id'];
		 $_SESSION['user_type']=$row['user_type'];
		 echo  $_SESSION['user_type'];
		header('Location:index.php');
	}
	else
	{
	header('Location:login.php?error=invalidUSER');
}
if ($_SESSION['user_type']=='3-Admin'){
	
	header("Location:./admin/index.php");
	
}else
if($_SESSION['user_type']== '2-Receptionist'){
	
	header("Location:./receptionist/index.php");
	
}else
if($_SESSION['user_type']== '5-Dentist'){
	
	header("Location:./doctor/index.php");
	
}else
if($_SESSION['user_type']== '1-Patient'){
	
	header('Location:./patient/index.php');
	
}else
if($_SESSION['user_type']== '4-Economist'){
	
	header('Location:./economist/index.php');
	
}else {echo "no";}

	
	
	
	
}
?>
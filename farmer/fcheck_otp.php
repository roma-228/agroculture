<?php
session_start();

$con=pg_connect('localhost','root','','agriculture_portal');
$otp=$_POST['otp'];
$email=$_SESSION['farmer_login_user'];
$res=pg_query($con,"select * from farmerlogin where email='$email' and otp='$otp'");
$count=pg_num_rows($res);
if($count>0){
	pg_query($con,"update farmerlogin set otp='' where email='$email'");
	$_SESSION['IS_LOGIN']=$email;
	echo "yes";
}else{
	echo "not_exist";
}
?>
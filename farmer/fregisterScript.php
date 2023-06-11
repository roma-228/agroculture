<?php

session_start(); // Starting Session

require('../sql.php'); // Includes Login Script
global $error;

// function for email validation
function is_valid_email($email)
{
	global $conn;
	global $error;
	
     $slquery = "SELECT farmer_id FROM farmerlogin WHERE email = '$email'";
     $selectresult = pg_query($conn, $slquery);
	 $rowcount=pg_num_rows($selectresult);
	   
	 if ($rowcount==true) {
		 
		$error = '
		
		<div class="alert alert-info alert-dismissible fade show text-center" id="popup" role="alert">
			<strong class="text-center text-dark ">Ця адреса електронної вже існує</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
		
		';

		return false;		
 }
    else  {
        return true;
     }

}


 
// function for password verification
function is_valid_passwords($password,$cpassword) 
{
	global $error;
	
if ($password != $cpassword) {
	
$error = '
		
		<div class="alert alert-info alert-dismissible fade show text-center" id="popup" role="alert">
			<strong class="text-center text-dark ">Ваші паролі не збігаються. Введіть уважно</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
		
		';
		
         return false;
     }
 else  {
        return true;
     }
}
$statename = null;
$district = null;
// function for creating user
function create_user($name, $password, $email, $mobile, $gender, $dob, $statename, $district, $city) 
{
	global $conn;
	
      $query = "INSERT INTO   farmerlogin   (farmer_name, password, email, phone_no, F_gender, F_birthday, F_State, F_District, F_Location) 
	  VALUES ('$name', '$password', '$email', '$mobile', '$gender', '$dob', '$statename', '$district', '$city');";
      $result = pg_query($conn, $query);
      if($result){
          return true; // Success
      }else{
          return false; // Error somewhere
      }
}


// Code execution starts here after submit
if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmpassword'])){

    // Reading form values
    $name = $_POST['name'];
    $email = $_POST['email'];	
	$mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
	$dob = $_POST['dob'];
    $state = null;
	$district = null;
    $city = $_POST['city'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
	
	
	$query5 = "SELECT StateName from state where StCode ='$state'";
	$ses_sq5 = pg_query($conn, $query5);
              $row5 = pg_fetch_assoc($ses_sq5);
              

    if (is_valid_email($email) == true && is_valid_passwords($password,$cpassword) == true)
    {	
		$statename = null;
		$district = null;
        if (create_user($name, $password, $email, $mobile, $gender, $dob, $statename, $district, $city )) {
			$_SESSION['farmer_login_user']=$email; // Initializing Session    
        header("location: ftwostep.php");
        }else{	
		
			$error = '
		
		<div class="alert alert-info alert-dismissible fade show text-center" id="popup" role="alert">
			<strong class="text-center text-dark ">Помилка під час реєстрації користувача</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
		
		';

        }
    }
}
    // You don't need to write another 'else' since this is the end of PHP code 
?>
<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

require('../sql.php'); // Includes Login Script

if(isset($_POST ['farmerlogin'])) {
  $farmer_email=$_POST['farmer_email'];
  $farmer_password=$_POST['farmer_password'];
  //$farmer_password=SHA1($farmer_password);


  $farmerquery = "SELECT * from farmerlogin where email='".$farmer_email."' and password='".$farmer_password."' ";
  $result = pg_query($conn, $farmerquery);
  $rowcount=pg_num_rows($result);
  if ($rowcount==true) {
    $_SESSION['farmer_login_user']=$farmer_email; // Initializing Session
    
    echo '<script>window.location.href = "fprofile.php";</script>';

   // header("Location: fprofile.php"); // Redirecting To Other Page
    } 
    else  {
       $error = "Username or Password is invalid";
     }
    
 pg_close($conn); // Closing Connection

}

?>

<?php
session_start();
$error = ''; // Variable To Store Error Message

require('../sql.php'); // Includes Login Script


if(isset($_POST ['adminlogin'])) {
  $aname=$_POST['admin_name'];
  $apassword=$_POST['admin_password'];
  //$farmer_password=SHA1($farmer_password);


  $adminquery = "SELECT * FROM admin WHERE admin_name='".$aname."' AND admin_password='".$apassword."'";
  $result = pg_query($conn, $adminquery);
  $rowcount=pg_num_rows($result);
  


  if ($rowcount==true) {
    $_SESSION['admin_login_user']=$aname; // Initializing Session
    
//echo '<script type="text/javascript">alert("'.$_SESSION['admin_login_user'].'");</script>';

   header("Location: aprofile.php"); // Redirecting To Other Page
    } 
    else  {
       $error = "Username or Password is invalid";
     }
    
 pg_close($conn); // Closing Connection
 
}
?>

<?php
session_start();
require('../sql.php'); // Includes SQL connection script

if (isset($_POST['crops']) && isset($_POST['quantity'])) {

  $crop=$_POST['crops'];
  $quantity=$_POST['quantity'];
  
 $query="SELECT msp from farmer_crops_trade where Trade_crop='$crop'";
  $result = pg_query($conn, $query);
  $row = pg_fetch_assoc($result);
  $x=$row["msp"]*$quantity;
  
   echo ($x);
}
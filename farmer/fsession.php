<?php
require('../sql.php');
session_start();
$user_check = $_SESSION['farmer_login_user'];
$query = "SELECT farmer_name from farmerlogin where email = '$user_check'";
$ses_sql = pg_query($conn, $query);
$row = pg_fetch_assoc($ses_sql);
$login_session = $row['farmer_name'];
$CustID=$user_check;
?>


<?php
// pg_connect() function opens a new connection to the MySQL server.
require('../sql.php');
session_start();// Starting Session
// Storing Session
$user_check = $_SESSION['customer_login_user'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT cust_name from custlogin where email = '$user_check'";
$ses_sql = pg_query($conn, $query);
$row = pg_fetch_assoc($ses_sql);
$login_session = $row['cust_name'];
$CustID=$user_check;
?>


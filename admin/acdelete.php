<?php
session_start();// Starting Session
require('../sql.php'); // Includes Login Script

    $id = $_GET['id'];
    $sql = "DELETE FROM custlogin WHERE cust_id = $id";
    if (pg_query($conn, $sql)) {
		
	echo 
"<script type='text/javascript'>alert('Клієнта успішно видалено');
      window.location='acustomers.php';</script>";
    } 
?>
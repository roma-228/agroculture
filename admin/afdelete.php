<?php
session_start();// Starting Session
require('../sql.php'); // Includes Login Script

    $id = $_GET['id'];
    $sql = "DELETE FROM farmerlogin WHERE farmer_id = $id";
    if (pg_query($conn, $sql)) {
		
	echo 
"<script type='text/javascript'>alert('Фермер успішно видалено');
      window.location='afarmers.php';</script>";
    } 
?>
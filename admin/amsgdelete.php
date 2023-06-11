<?php
session_start();// Starting Session
require('../sql.php'); // Includes Login Script

    $id = $_GET['id'];
    $sql = "DELETE FROM contactus WHERE c_id = $id";
    if (pg_query($conn, $sql)) {
		
	echo 
"<script type='text/javascript'>alert('Запит успішно видалено');
      window.location='aviewmsg.php';</script>";
    } 
?>
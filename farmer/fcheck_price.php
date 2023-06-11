<?php 
session_start(); 
require('../sql.php'); // Includes SQL connection script

$crops = $_POST['crops'];    
$x = 0.0;    
$y = 0;

$query = "SELECT costperkg FROM farmer_crops_trade WHERE Trade_crop='$crops'";
$result = pg_query($conn, $query);

while($row = pg_fetch_assoc($result)) {
	$x = $x + $row["costperkg"];
	$y++;
}

if ($y != 0) {
    $x = CEIL($x / $y);
} else {
    $x = 0; // or handle the error in some other way
}

echo $x; 
?> 

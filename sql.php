<?php
$host = "dpg-chvibhpmbg5b5p8pdnl0-a.frankfurt-postgres.render.com";
$port = "5432";
$dbname = "roma_dmc6";
$user = "roma";
$password = "O0FUhYy1KbFsO2eGsG3FSlAHvY0yaUlu";
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
if (!$conn) {
    echo "Помилка підключення до бази даних: " . pg_last_error();
    exit;
}
    // connect to database
//$servername="localhost";
//$username="test";
//$password="00375237";
//$dbname="agriculture_portal";
  // $conn = pg_connect('us-cdbr-east-03.cleardb.com','b310794f5353e9','d9f40fcf','heroku_f1cacb29cd6455f');
    // if(!$conn){
    //     echo 'Connection error' . pg_connect_error();
    // } 
?>


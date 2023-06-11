<?php
session_start();
date_default_timezone_set("Asia/Calcutta"); 
$userlogin=$_SESSION['customer_login_user'];
$servername="localhost";
$username="root";
$password="";
$dbname="agriculture_portal";

//Create Connection 
$conn =pg_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$query1="SELECT * from cart";
$result1=pg_query($conn,$query1);
$date=date('d/m/Y');

while($row1=pg_fetch_assoc($result1)){

   $x=$row1['quantity'];



   $query2="UPDATE production_approx SET quantity=  quantity  - '".$row1['quantity']."' WHERE crop='".$row1['cropname']."' ";
   $result2=pg_query($conn,$query2);


      while(true){


         $query3="SELECT * from farmer_crops_trade WHERE Trade_crop='".$row1['cropname']."' Limit 1 ";
         $result3=pg_query($conn,$query3);
         $row3=pg_fetch_assoc($result3);


         if($row3['Crop_quantity']==$x){

            $query11="INSERT INTO   farmer_history  (  farmer_id  ,  farmer_crop  ,  farmer_quantity  ,  farmer_price  ,  date  ) VALUES ('".$row3['farmer_fkid']."',
            '".$row3['Trade_crop']."','".$row3['Crop_quantity']."','".$row1['price']."','".$date."'); ";
            $result11=pg_query($conn,$query11);

            $query4="DELETE from farmer_crops_trade WHERE trade_id='".$row3['trade_id']."' " ;
            $result4=pg_query($conn,$query4);
            break;
         }

         if($row3['Crop_quantity']>$x){

            $query12="INSERT INTO   farmer_history  (  farmer_id  ,  farmer_crop  ,  farmer_quantity  ,  farmer_price  ,  date  ) VALUES ('".$row3['farmer_fkid']."',
            '".$row3['Trade_crop']."','".$x."','".$x."'*'".$row3['msp']."','".$date."'); ";
            $result12=pg_query($conn,$query12);          

            $query5="UPDATE  farmer_crops_trade SET Crop_quantity=Crop_quantity - '".$x."' WHERE trade_id='".$row3['trade_id']."' " ;
            $result5=pg_query($conn,$query5);
            break;

         }

         if($row3['Crop_quantity']<$x){

            $x=$x-$row3['Crop_quantity'];

            $query13="INSERT INTO   farmer_history  (  farmer_id  ,  farmer_crop  ,  farmer_quantity  ,  farmer_price  ,  date  ) VALUES ('".$row3['farmer_fkid']."',
            '".$row3['Trade_crop']."','".$row3['Crop_quantity']."','".$row3['Crop_quantity']."'*'".$row3['msp']."','".$date."'); ";
            $result13=pg_query($conn,$query13);    


            $query6="DELETE from farmer_crops_trade WHERE trade_id='".$row3['trade_id']."' " ;
            $result6=pg_query($conn,$query6);

         }


      }


      $a=0.0;
      $y=0;
      $query="SELECT costperkg from farmer_crops_trade where Trade_crop='".$row1['cropname']."' ";
      $result = pg_query($conn, $query);
      while($row = pg_fetch_assoc($result)) {
          $a=$a+$row["costperkg"];
          $y++;
      }
  
      $a=CEIL($a/$y);
      $a=$a+CEIL($a*0.5);
  
      $query7="UPDATE farmer_crops_trade SET msp='$a' where Trade_crop='".$row1['cropname']."' ";
      $result7 = pg_query($conn, $query7);
  

header("location: cmoney_transfered.php");


}



?>
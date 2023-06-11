<?php
session_start();// Starting Session
require('../sql.php'); // Includes Login Script

// Storing Session
$user = $_SESSION['admin_login_user'];

if(!isset($_SESSION['admin_login_user'])){
header("location: ../index.php");} // Redirecting To Home Page
$query4 = "SELECT * from admin where admin_name ='$user'";
              $ses_sq4 = pg_query($conn, $query4);
              $row4 = pg_fetch_assoc($ses_sq4);
              $para1 = $row4['admin_id'];
              $para2 = $row4['admin_name'];
			  $para3 = $row4['admin_password'];
			  	  
?>


<!doctype html>
<html lang="en">
<?php require ('aheader.php');  ?>

  <body class="bg-white" id="top">
  
<?php require ('anav.php');  ?>
 	
  <section class="section section-shaped section-lg">
    <div class="shape shape-style-1 shape-primary">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
<!-- ======================================================================================================================================== -->


<div class="container-fluid ">
    
    	 <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-danger badge-pill mb-3">ЗАМОВНИКИ</span>
          </div>
        </div>
		
          <div class="row row-content">
            <div class="col-md-12 mb-3">

				<div class="card text-white bg-gradient-secondary mb-3">
				  <div class="card-header">
				  <span class=" text-default display-4" > Список клієнтів  </span>
				  
					
				  </div>
				  
				  <div class="card-body text-dark">
				<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">

    <thead>
					<tr class="font-weight-bold text-default">
            <th><center>ID</center></th>
					<th><center>Ім'я фермера</center></th>
					<th><center>Email </center></th>
					<th><center>Номер телефону</center></th>
					<th><center>Місто</center></th>
					<th><center>Адреса</center></th>
					<th><center>Код</center></th>
					<th><center>Видалити</center></th>
        </tr>
    </thead>
    <tbody>
  						<?php 
$sql = "SELECT cust_name, cust_id, email, phone_no, state, city, address, pincode FROM custlogin";

								$query = pg_query($conn,$sql);

								while($res = pg_fetch_array($query)){	
				 ?>		  
						  
		 <tr class="text-center">
							 <td> <?php echo $res['cust_id'];  ?> </td>
							 <td> <?php echo $res['cust_name'];  ?> </td>
							 <td> <?php echo $res['email'];  ?> </td>
							 <td> <?php echo $res['phone_no'];  ?> </td>
							 <td> <?php echo $res['city'];  ?> </td>
							 <td> <?php echo $res['address'];  ?> </td>
							  <td> <?php echo $res['pincode'];  ?> </td>
							  
							<td > <button class="btn btn-sm btn-danger" > <a href="acdelete.php?id=<?php echo $res['cust_id']; ?>"  class=" nav-link text-white">Видалити</a> </button> </td>


							</tr>

							 <?php 
							 }
							  ?>
    </tbody>
</table>

</div>
				</div>				 		  
            </div>
          </div>
        </div>
		 
</section>
	   <?php require("footer.php");?>

	   <script>
				$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

</body>
</html>
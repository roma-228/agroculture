<?php
include ('fsession.php');

ini_set('memory_limit', '-1');

if(!isset($_SESSION['farmer_login_user'])){
header("location: ../index.php");} // Redirecting To Home Page
$query4 = "SELECT * from farmerlogin where email='$user_check'";
              $ses_sq4 = pg_query($conn, $query4);
              $row4 = pg_fetch_assoc($ses_sq4);
              $para1 = $row4['farmer_id'];
              $para2 = $row4['farmer_name'];
			  
?>

<!DOCTYPE html>
<html>
<?php include ('fheader.php');  ?>

  <body class="bg-white" id="top">
  
<?php include ('fnav.php');  ?>
 	
 	
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



<div class="container ">
    
    	 <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-danger badge-pill mb-3">Торгівля</span>
          </div>
        </div>
		
          <div class="row row-content">
            <div class="col-md-12 mb-3">

				<div class="card text-white bg-gradient-warning mb-3">
				  <div class="card-header">
				  <span class=" text-warning display-4" > Наявність урожаю </span>
				  
					
				  </div>
				  
				  <div class="card-body text-white">
				<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">
				
				    <thead>
		<tr class="font-weight-bold text-default">
						
								
					<th><center>Назва культури</center></th>
					<th><center>Кількість (в кг)</center></th>
												
						</tr>
			</thead>
				
		<tbody>	  
							  
						<?php 
	$sql = "SELECT crop, quantity FROM production_approx where quantity > 0";

								$query = pg_query($conn,$sql);

								while($res = pg_fetch_array($query)){	
				 ?>		  
						  
		 <tr class="text-center">
							 <td> <?php echo $res['crop'];  ?> </td>
							 <td> <?php echo $res['quantity'];  ?> </td>
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


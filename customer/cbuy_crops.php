<?php
include ('csession.php');
include ('../sql.php');

ini_set('memory_limit', '-1');

if(!isset($_SESSION['customer_login_user'])){
header("location: ../index.php");} // Redirecting To Home Page
$query4 = "SELECT * from custlogin where email='$user_check'";
              $ses_sq4 = pg_query($conn, $query4);
              $row4 = pg_fetch_assoc($ses_sq4);
              $para1 = $row4['cust_id'];
              $para2 = $row4['cust_name'];
		  
?>

<!DOCTYPE html>
<html>
<?php include ('cheader.php');  ?>

  <body class="bg-white" id="top">
  
<?php include ('cnav.php');  ?>
 	
 	
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
            <span class="badge badge-danger badge-pill mb-3">Покупки</span>
          </div>
        </div>
		
          <div class="row row-content">
            <div class="col-md-12 mb-3">

				<div class="card text-white bg-gradient-danger mb-3">
				  <div class="card-header">
				  <span class=" text-danger display-4" > Купити Культури </span>
				  
					
				  </div>
				  
				  <div class="card-body ">
			

				                                                                                                                         

                <table class="table table-striped table-bordered table-responsive-md btn-table  ">

                    <thead class=" text-white text-center">
                    <tr>
					
                        <th>Назва культури</th>
                        <th>Кількість (в кг)</th>
                        <th>Ціна (в гривнях)</th>
						<th>Додати товар</th>
	
                    </tr>
                    </thead>

                    <tbody>
					
                    <tr>
					
			
						 
<form method="POST" action="cbuy_redirect.php">

						<td>
                        <div class="form-group" >						
									<?php  									
						// query database table for crops with quantity greater than zero
						$sql = "SELECT crop FROM production_approx where quantity > 0 ";
						$result = pg_query($conn,$sql);

						// populate dropdown menu options with the crop names
						echo "<select id='crops' name='crops' class='form-control text-dark'>";
						echo "<option value=' '>Вибрати культуру</option>";
						while($row = pg_fetch_assoc($result)) {							
							echo "<option value='" . $row["crop"] . "'>" . $row["crop"] . "</option>";
						}
						echo "</select>";
						

						?>	
											
						</div>					
						</td>
			
			
<input hidden name="tradeid" id="tradeid"  value="">



						<td>   
						  <div class="form-group">     
							<input id="quantity" type="number" placeholder="Доступна кількість" max="10000" name="quantity" required class="form-control text-dark">   
						  </div> 
						</td>


                        <td>
                        <div class="form-group" >
                        <input id="price" type="text" value="0" name="price"  readonly class="form-control text-dark">
                        </div>
						</td>	
						
						
						 
						<td>
						 <div class="form-group" >
						<button class="btn btn-success form-control" name="add_to_cart" type="submit" disabled >Додати в кошик </button>
						</div>
						</td>
							    
	</form>
	
		
						</tr>
						</tbody>
                        </table> 

			<h3 class=" text-white">Деталі замовлення</h3>
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-responsive-md btn-table display" id="myTable">
					<tr class=" bg-dange">
						<th width="40%">Назва виробу</th>
						<th width="10%">Кількість (в кг)</th>
						<th width="20%">Ціна (в гривнях)</th>				
						<th width="5%">Дія</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>

	
					<tr class=" bg-white">
						<td><?php echo ucfirst($values["item_name"]); ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>₴ <?php echo $values["item_price"]; ?> </td>
				
					<td><a href="cbuy_crops.php?action=delete&id=<?php echo $values["item_id"]; ?>" type="button" class="btn btn-warning btn-block"  >Видалити</a></td>
					
					</tr>

<?php

		if(isset($_GET["action"]))
		{
			if($_GET["action"] == "delete")
			{
				foreach($_SESSION["shopping_cart"] as $keys => $values)
				{
					if($values["item_id"] == $_GET["id"])
					{
						
						
						
						$count=$values["item_quantity"];
						$item_id_update=$_GET["id"];
					
						$queryUpdate="UPDATE production_approx set quantity = quantity + '$count' where crop = (SELECT trade_crop from farmer_crops_trade where trade_id = '$item_id_update')";
						$resultUpdate=pg_query($conn,$queryUpdate);
						$b=$_GET["id"];

						$query5="SELECT Trade_crop from farmer_crops_trade where trade_id= $b";
						$result5 = pg_query($conn, $query5);
						$row5 = pg_fetch_assoc($result5); 
						$a=$row5['trade_crop'];
						
						
						$query6="DELETE FROM   cart   WHERE   cropname   = '".$a."'";
						$result6 = pg_query($conn, $query6); 
						unset($_SESSION["shopping_cart"][$keys]);
						echo '<script>alert("Елемент видалено")</script>';
						echo '<script>window.location="cbuy_crops.php"</script>';
		

					     
						
					}
				}
			}
		}
?>

					<?php
							$total = $total +  $values["item_price"];
							$_SESSION['Total_Cart_Price']=$total;
						}
					?>
					<tr class="text-dark">
						<td colspan="2" align="right" >Всього</td>
						<td align="right">₴ <?php echo number_format($total,2); ?></td>

						<td>
						
			
						<button class="btn btn-info form-control" name="pay" type="submit" id="checkout-button" onclick="openPage()">Оплатити</button>

						<script>
						function openPage() {
							<?php
							
							if(!empty($_SESSION["shopping_cart"]))
							{
								
								foreach($_SESSION["shopping_cart"] as $keys => $values)
								{
									$namecrop = $values["item_name"];
									$countDel = $values["item_quantity"];
									$queryDelet="UPDATE   production_approx   SET   quantity  =  quantity  -$countDel WHERE   crop  ='$namecrop' ";
									$resultDelet = pg_query($conn, $queryDelet);
								}}
							
							?>
						window.location.href = "cmoney_transfered.php";
						
						}
						</script>
											
						
						</td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>








</div>
				</div>				 		  
            </div>
          </div>
        </div>
		 
</section>
	   <?php require("footer.php");?>

													<script src="https://js.stripe.com/v3/"></script>
												<script>
												const stripe = Stripe('<?php echo $stripeDetails['publishableKey']; ?>');

												const checkoutButton = document.getElementById('checkout-button');

												checkoutButton.addEventListener('click', () => {
												  stripe.redirectToCheckout({
													sessionId: '<?php echo $session->id; ?>'
												  }).then(function (result) {
													if (result.error) {
													  alert(result.error.message);
													}
												  });
												});
												</script>
												
												
<script>


				$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

						
<script> 
document.getElementById("crops").addEventListener("change", function() {   
  var crops = jQuery('#crops').val();   
  jQuery.ajax({     
    url: 'ccheck_quantity.php',     
    type: 'post',     
    data: 'crops=' + crops,     
    success: function(result) { 
		      try {
				 var result = JSON.parse(result);
				  
				 var cquantity = parseInt(result.quantityR);
				 var TradeId = parseInt(result.TradeIdR);  
				  console.log(result);

				 if (cquantity > 0) {         
						document.getElementById("quantity").placeholder = cquantity;         
					   
						document.getElementById("tradeid").value = TradeId;
					  } else {         
						document.getElementById("quantity").placeholder = "Select Crop";       
					  } 

			} catch (error) {
				  console.log('Error:', error);
			}

	  
    }   
  }); 
}); 
</script>    

<script>
  document.getElementById("quantity").addEventListener("change", function() {
const addToCartBtn = document.querySelector('[name="add_to_cart"]');
    var quantity = jQuery('#quantity').val();
	  var crops = jQuery('#crops').val();
		
    jQuery.ajax({
      url: 'ccheck_price.php',
      type: 'post',
      data: { crops: crops, quantity: quantity },
      success: function(result) {
			var cprice = parseInt(result);
			if(cprice>0){
				document.getElementById("price").value = cprice;
				addToCartBtn.removeAttribute('disabled');
			}
			else{
				document.getElementById("price").value = "0";
			}
		}
	});
});
</script>

	<script>

const quantityInput = document.getElementById("quantity");

quantityInput.addEventListener("change", () => {
  const max = document.getElementById("quantity").placeholder;
  console.log(quantityInput.value);
  console.log(+max);
  if (+quantityInput.value > +max) {
    alert(  `Перевищено максимальну кількість. Будь ласка, введіть кількість, меншу або рівну ${max}.`  );
    quantityInput.value = max;
  }
});
</script>
	
</body>
</html>						
           
<?php
include ('csession.php');
ini_set('memory_limit', '-1');

if(!isset($_SESSION['customer_login_user'])){
header("location: ../index.php");} // Redirecting To Home Page
$query4 = "SELECT * from custlogin where email='$user_check'";
              $ses_sq4 = pg_query($conn, $query4);
              $row4 = pg_fetch_assoc($ses_sq4);
              $para1 = $row4['cust_id'];
              $para2 = $row4['cust_name'];
              $para3 = $row4['password'];
			  $para5 = $row4['email'];
			  $para6 = $row4['phone_no'];
			  $para7 = $row4['state'];
			  $para8 = $row4['city'];
			  $para9 = $row4['address'];
			  $para10 = $row4['pincode'];

		  
if(isset($_POST['custupdate']))
  {
	  $id = ($_POST['id']);
	  $name = ($_POST['name']);
	  $email = ($_POST['email']);
	  $mobile = ($_POST['mobile']);
	  $state = null;
		$city = ($_POST['city']);
		$address = ($_POST['address']);
		$pincode = ($_POST['pincode']);
		$pass = ($_POST['pass']);

//$query5 = "SELECT StateName from state where StCode ='$state'";
	//$ses_sq5 = pg_query($conn, $query5);
      //        $row5 = pg_fetch_assoc($ses_sq5);
              $statename = null;
			  
    $updatequery1 = "UPDATE custlogin set  cust_name='$name', email='$email', phone_no='$mobile',  state='$statename',  city='$city',  address='$address', pincode='$pincode', password='$pass'  where cust_id='$id'";pg_query($conn, $updatequery1);
	 header("location: cprofile.php");
  }			  
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
            <span class="badge badge-danger badge-pill mb-3">Профіль</span>
          </div>
        </div>
		
          <div class="row row-content">
            <div class="col-md-4 mb-3">
			
			
				<div class="card">
                <div class="card-body bg-gradient-warning">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="../assets/img/customers.png" alt="student" class="rounded-circle img-fluid" width="202px">
                    <div class="mt-3">
                      <h4>                Привіт     <?php echo $login_session ?></h4>
                      		  <button data-toggle="modal" data-target="#edit" class="btn btn-danger">Змінити профіль</button>


                    </div>
                  </div>
                </div>
              </div>			 		  
            </div>
			
			
                <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body bg-gradient-success">
				
                  <div class="row mb-1">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">ID клієнта</h6>
                    </div>
                    <div class="col-sm-9 text-dark">
                      <?php echo $para1 ?>
                    </div>
                  </div>
				
                  
				  
                  <div class="row mb-1">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Ім'я клієнта</h6>
                    </div>
                    <div class="col-sm-9 text-dark">
                      <?php echo $para2 ?>
                    </div>
                  </div>
              
				  
                  <div class="row mb-1">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Email </h6>
                    </div>
                    <div class="col-sm-9 text-dark">
                      <?php echo $para5 ?>
                    </div>
                  </div>
                 
				   
				    <div class="row mb-1">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Номер телефону</h6>
                    </div>
                    <div class="col-sm-9 text-dark">
                      <?php echo $para6 ?>
                    </div>
                  </div>
               
				   
			  
				       <div class="row mb-1">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Місто</h6>
                    </div>
                    <div class="col-sm-9 text-dark">
                      <?php echo $para8 ?>
                    </div>
                  </div>
				  
				     <div class="row mb-1">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Адреса</h6>
                    </div>
                    <div class="col-sm-9 text-dark">
                      <?php echo $para9 ?>
                    </div>
                  </div>
				  
				     <div class="row mb-1">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Код</h6>
                    </div>
                    <div class="col-sm-9 text-dark">
                      <?php echo $para10 ?>
                    </div>
                  </div>
				  
				  
				     <div class="row mb-1">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Пароль</h6>
                    </div>
                    <div class="col-sm-9 text-dark">
                      ******** 
                    </div>
                  </div>
                   

				  
                </div>
              </div>
            </div>				

<!-- Edit Profile  Modal -->

    <div id="edit" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" role="content">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Змінити профіль</h4>
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <div class="modal-body bg-gradient-danger">
		  
		  
            <form
              class="col s12 l5 white-text"
              method="POST"
              autocomplete="new-password"
			 
            >
			
              <div class="form-group row">
                <label
                  for="name"
                  class="col-md-3 col-form-label text-white"
                  >ID клієнта</label
                >
                <div class="col-md-9">
                  <input
				  name="id"
                    class="form-control "
                    value="<?php echo "$para1"?>"
                    readonly
                  />
                </div>
              </div>
			  
			   <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" > Ім'я клієнта </label>
                <div class="col-md-9">
                  <input class="form-control" type="text" name="name" value="<?php echo "$para2"?>" />
                </div>				
              </div>
			  
			  <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" > Email  </label>
                <div class="col-md-9">
                  <input class="form-control" type="email" name="email" value="<?php echo "$para5"?>" readonly />
                </div>
              </div>
			  
			  <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" > Номер телефону </label>
                <div class="col-md-9">
                  <input class="form-control" type="phone"  pattern="^[0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}$" title="Введіть дійсний 10-значний номер мобільного телефону (наприклад, 066-ххх-хх-хх)" min="0" name="mobile" value="<?php echo "$para6"?>" />
                </div>
              </div>
			  
			  
			  
			  
			  
			    <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" > Місто </label>
                <div class="col-md-9">
                <input class="form-control" type="text" name="city" value="<?php echo "$para8"?>" />
                </div>
              </div>
			  
			  <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" > Адреса </label>
                <div class="col-md-9">
                  <input class="form-control" type="text" name="address" value="<?php echo "$para9"?>" />
                </div>
              </div>
			  
			 <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" > Код </label>
                <div class="col-md-9">
                  <input class="form-control" type="phone" pattern="^[0-9]{5}" title="Будь ласка, код в такому форматі 40ххх" min="0" min="6" name="pincode" value="<?php echo "$para10"?>" />
                </div>
              </div>
			  
			  
			  		 <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" > Пароль </label>
			   <div class="col-9">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
              </div>
              <input name="pass" type="password" value="<?php echo "$para3"?>" class="input form-control" id="password" placeholder="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
              <div class="input-group-append">
                <span class="input-group-text" onclick="password_show_hide();">
                  <i class="fas fa-eye" id="show_eye"></i>
                  <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                </span>
              </div>
            </div>
          </div>
		   </div>
			  
			  
			   <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" >  </label>
                <div class="col-md-9">
            <button name="custupdate" class=" btn-block btn btn-success"><span class="glyphicon glyphicon-edit"></span> Надіслати</button>		
                </div>		
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
 
  
			
          </div>
        </div>
		 
</section>
    <?php require("footer.php");?>
	
</body>
  <script>
  function password_show_hide() {
  var x = document.getElementById("password");
  var show_eye = document.getElementById("show_eye");
  var hide_eye = document.getElementById("hide_eye");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}
</script>

		  <script>
function getdistrict(val) {
	$.ajax({
	type: "POST",
	url: "cget_district.php",
	data:'state_id='+val,
	success: function(data){
		$("#district-list").html(data);
	}
	});
}

</script>	
</html>
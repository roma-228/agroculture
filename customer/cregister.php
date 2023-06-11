<?php
include('cregisterScript.php'); // Includes Login Script
require_once("../sql.php");
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="../assets/img/logo.png" />
    <title>Agriculture Portal</title>

  <!--     Fonts and icons     -->
  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
	integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	
	<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css "/>
	
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

 
  <link rel="stylesheet" href="../assets/css/creativetim.min.css" type="text/css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>


		  <script>


//cget_district.php
</script>	
</head>

  <body class="bg-white" id="top" >
    <!-- Navbar -->
    <nav
      id="navbar-main"
      class="
        navbar navbar-main navbar-expand-lg
        bg-default
        navbar-light
        position-sticky
        top-0
        shadow
        py-0
      "
    >
      <div class="container">
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
          <li class="nav-item dropdown">
            <a href="../index.php" class="navbar-brand mr-lg-5 text-white">
                               <img src="../assets/img/nav.png" />
            </a>
          </li>
        </ul>

        <button
          class="navbar-toggler bg-white"
          type="button"
          data-toggle="collapse"
          data-target="#navbar_global"
          aria-controls="navbar_global"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon text-white"></span>
        </button>
        <div class="navbar-collapse collapse bg-default" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-10 collapse-brand">
                <a href="../index.html">
                  <img src="../assets/img/nav.png" />
                </a>
              </div>
              <div class="col-2 collapse-close bg-danger">
                <button
                  type="button"
                  class="navbar-toggler"
                  data-toggle="collapse"
                  data-target="#navbar_global"
                  aria-controls="navbar_global"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>

          <ul class="navbar-nav align-items-lg-center ml-auto">
		  
		   <li class="nav-item">
              <a href="../contact.php" class="nav-link">
                <span class="text-white nav-link-inner--text"
                  ><i class="text-white fas fa-address-card"></i> Контакти</span
                >
              </a>
            </li>
			
			
			  <li class="nav-item">
			   <div class="dropdown show ">
		  <a class="nav-link dropdown-toggle text-white " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                  <span class="text-white nav-link-inner--text"
                  ><i class="text-white fas fa-user-plus"></i> Зареєструватися</span
                >
		  </a>

		  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			<a class="dropdown-item" href="../farmer/fregister.php">Фермер</a>
			<a class="dropdown-item" href="cregister.php">Покупець</a>
		  </div>
		</div>
			</li>
			
		  
				  <li class="nav-item">
			   <div class="dropdown show ">
		  <a class="nav-link dropdown-toggle text-white " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                  <span class="text-white nav-link-inner--text"
                  ><i class="text-white fas fa-sign-in-alt"></i> Увійти</span
                >
		  </a>

		  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			<a class="dropdown-item" href="../farmer/flogin.php">Фермер</a>
			<a class="dropdown-item" href="clogin.php">Покупець</a>
			<a class="dropdown-item" href="../admin/alogin.php">Адміністратор </a>
		  </div>
		</div>
			</li>
			
          
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
 	
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

<div class="container">

 <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-info badge-pill mb-3">Зареєструватися</span>
          </div>
        </div> 
      
<div class="row">
<div class="col-sm-12 mb-3">  
			  
  <div class="nav nav-tabs nav-fill bg-gradient-default" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active font-weight-bold text-warning" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Реєстрація користувача</a>

  </div>
                  
                		  
      <div class="tab-content py-3 px-3 px-sm-0 bg-gradient-inf" id="nav-tabContent">

 
         <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
           <div class="card card-body bg-gradient-warning">
 


<form name="insert" action="" method="post">	
		
		  <div id="success"> <?php echo $error; ?>    </div>
		 <script>		
			$("#success").fadeTo(2000, 500).slideUp(500, function(){
    $("#success").slideUp(500);
});
 </script>

			   <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" > Ім'я клієнта <strong class="text-default"> *</strong></label>
                <div class="col-md-9">
                  <input class="form-control" type="text" name="name"  required="true"/>
                </div>				
              </div>
			  
			  <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" > Email <strong class="text-default"> *</strong></label>
                <div class="col-md-9">
                  <input class="form-control" type="email" name="email" required="true" />
				    
                </div>

              </div>
			  
			  <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" > Мобільний номер <strong class="text-default"> *</strong></label>
                <div class="col-md-9">
                  <input class="form-control" name="mobile" type="phone"  pattern="^[0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}$" title="Введіть дійсний 10-значний номер мобільного телефону (наприклад, 066-ххх-хх-хх)" required="true" />
                </div>
              </div>
			  
			  
			  
              <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" > Місто <strong class="text-default"> *</strong></label>
                <div class="col-md-9">
                  <input class="form-control" type="text" name="city" required="true" />
				    
                </div>

              </div>
			  
			  			  <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" > Адреса <strong class="text-default"> *</strong></label>
                <div class="col-md-9">
                  <input class="form-control" type="text" name="address" required="true" />
                </div>
              </div>
			  
			  	  <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" > Код <strong class="text-default"> *</strong></label>
                <div class="col-md-9">
                  <input class="form-control" type="phone" pattern="^[0-9]{5}" title="Будь ласка, код в такому форматі 40ххх" min="0" min="6" name="pincode" required="true" />
                </div>
              </div>
			  
			  		 <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" > Пароль <strong class="text-default"> *</strong></label>
			   <div class="col-9">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
              </div>
              <input name="password" type="password"  class="input form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="password" placeholder="Пароль" required="true" aria-label="password" aria-describedby="basic-addon1" />
              <div class="input-group-append">
                <span class="input-group-text" onclick="password_show_hide();">
                  <i class="fas fa-eye" id="show_eye"></i>
                  <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                </span>
              </div>
			  			  <span class="text-white d-block"> Використовуйте щонайменше 8 символів із принаймні 1 цифрою, великою та малою літерою,  та спеціальним символом.  </span>
            </div>		
          </div>
		   </div>
	
			  		 <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" >Підтвердьте пароль <strong class="text-default"> *</strong></label>
			   <div class="col-9">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
              </div>
              <input name="confirmpassword" type="password"  class="input form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="cpassword" placeholder="Пароль" required="true" aria-label="password" aria-describedby="basic-addon1" />
              <div class="input-group-append">
                <span class="input-group-text" onclick="password_show_hide2();">
                  <i class="fas fa-eye" id="show_eye2"></i>
                  <i class="fas fa-eye-slash d-none" id="hide_eye2"></i>
                </span>
              </div>
            </div>
          </div>
		  					   

		   </div>
		   
			  
			   <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" >  </label>
                <div class="col-md-9">
            <button name="customerregister" class=" btn-block btn btn-success">
			<span class="glyphicon glyphicon-edit"></span> Надіслати</button>		
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

  function password_show_hide2() {
  var x = document.getElementById("cpassword");
  var show_eye = document.getElementById("show_eye2");
  var hide_eye = document.getElementById("hide_eye2");
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

</html>

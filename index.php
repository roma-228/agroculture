<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="assets/img/logo.png" />
    <title>Аграрний портал</title>

  <!--     Fonts and icons     -->
  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
	integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	
	<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css "/>
	
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />

 
  <link rel="stylesheet" href="assets/css/creativetim.min.css" type="text/css">

</head>

  <body class="bg-white" id="top" onload="myFunction()">
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
            <a href="index.php" class="navbar-brand mr-lg-5 text-white">
                               <img src="assets/img/nav.png" />
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
                <a href="index.html">
                  <img src="assets/img/nav.png" />
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
              <a href="contact.php" class="nav-link">
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
			<a class="dropdown-item" href="farmer/fregister.php">Фермер</a>
			<a class="dropdown-item" href="customer/cregister.php">Покупець</a>
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
			<a class="dropdown-item" href="farmer/flogin.php">Фермер</a>
			<a class="dropdown-item" href="customer/clogin.php">Покупець</a>
			<a class="dropdown-item" href="admin/alogin.php">Адміністратор </a>
		  </div>
		</div>
			</li>
			
          
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

<div class="wrapper" >

    <div class="wrapper">
      <header class="jumbotron bg-gradient-warning">
        <div class="container">
          <div class="row row-header">
            <div class="col-12 col-sm-6">
              <h1 class="text-white">Аграрний портал</h1>
              <p class="text-white">
              Справжній твій друг фермера.
              </p>
              <div class="cg">
                <div class="card card-body bg-gradient-success">
                  <blockquote cite="blockquote">
                    <h6 class="mb-0 text-dark">
                      <em><b  id="quote"> “Землеробство виглядає дуже легким, коли твій плуг — це олівець, а ти за тисячу миль від кукурудзяного поля...”</b ></em>
                    </h6>
                    <br />

                    <footer class="blockquote-footer vg text-dark"  >
                      <span id="author"> ДУАЙТ Д. ЕЙЗЕНХАУЕР	</span>	
					<button id="sendButton" class="btn btn-sm btn-outline-secondary pull-right mx-auto mr-auto bg-gradient-danger" onclick="myFunction()">
					  <i class="fa fa-refresh text-white"></i>
					</button>					  
                    </footer>				
                  </blockquote>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-3 offset-sm-2 align-self-center">
              <img src="assets/img/plant-bulb.png" class="img-fluid" alt="" />
            </div>
          </div>
        </div>
      </header>
<!-- Page Content -->

<!-- ======================================================================================================================================== -->

    <div class="section features-6 text-dark bg-white" id="services">
      <div class="container ">

        <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <span class="badge badge-primary badge-pill mb-3">Уявлення</span>
                    <h3 class="display-3 ">Майбутне</h3>
                </div>
            </div>
			<br>
        <div class="row align-items-center">
		
          <div class="col-lg-6">
            <div class="info info-horizontal info-hover-success">
              <div class="description pl-4">
                <h3 class="title" >Фермери</h3>
           <p class=" ">Фермери можуть отримати рекомендації щодо внесення добрив для сільськогосподарських культур і навіть передбачити погоду та отримувати новини, пов’язані з сільським господарством. Фермери можуть безпосередньо продавати врожай клієнтам.</p>
                        
              </div>
            </div>

          </div>
		  
		  
          <div class="col-lg-6 col-10 mx-md-auto d-none d-md-block">
            <img class="ml-lg-5  pull-right" src="assets/img/agri.png" width="100%">
          </div>
        </div>
		
		
		        <div class="row align-items-center">
				  <div class="col-lg-6 col-10 mx-md-auto d-none d-md-block">
            <img class="ml-lg-5" src="assets/img/customers.png" width="80%">
          </div>
     
		
		
          <div class="col-lg-6">
			
            <div class="info info-horizontal info-hover-warning mt-5">
              <div class="description pl-4">
                <h3 class="title">Покупці</h3>
                <p class=" ">Клієнти можуть купувати врожай безпосередньо у фермерів без залучення будь-яких посередників.</p>
              </div>
            </div>
      
          </div>
   </div>
      </div>
    </div>


     
<!-- ======================================================================================================================================== -->

      <div class="section features-2 text-dark bg-white" id="features"> 
        <div class="container"> 
          <div class="row align-items-center"> 
            <div class="col-lg-5 col-md-8 mr-auto text-left"> 
              <div class="pr-md-5"> 
                <div class="icon icon-lg icon-shape icon-shape-primary shadow rounded-circle mb-5"> <i class="ni ni-favourite-28"> </i></div>
                <h3 class="display-3 text-justify">Майбутне</h3>
                <p>Настав час для наступного кроку у сільському господарстві. Ми пропонуємо вам майбутнє фермерства разом із чудовими інструментами для допомоги фермерам.</p>
                <ul class="list-unstyled mt-5"> 
                  <li class="py-2"> 
                    <div class="d-flex align-items-center"> 
                      <div>
                        <div class="badge badge-circle badge-primary mr-3"> <i class="ni ni-settings-gear-65"> </i></div>
                      </div>
                      <div>
                        <h6 class="mb-0">Дуже надійний і точний.</h6>
                      </div>
                    </div>
                  </li>
                  <li class="py-2"> 
                    <div class="d-flex align-items-center"> 
                      <div>
                        <div class="badge badge-circle badge-primary mr-3"> <i class="ni ni-html5"> </i></div>
                      </div>
                      <div>
                        <h6 class="mb-0">Швидший і чуйний веб-сайт.</h6>
                      </div>
                    </div>
                  </li>
                  <li class="py-2"> 
                    <div class="d-flex align-items-center"> 
                      <div>
                        <div class="badge badge-circle badge-primary mr-3"> <i class="ni ni-satisfied"> </i></div>
                      </div>
                      <div>
                        <h6 class="mb-0">Завжди актуальні дані.</h6>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
			

		  
            <div class="col-lg-7 col-md-12 pl-md-0"> 
 <img class="img-fluid ml-lg-5" src="assets/img/features.png" width="100%">
 </div>
			
			
          </div>
        </div>
        <span > </span>
      </div>
     
	<!-- ======================================================================================================================================== -->
 
	 

<?php require("footer.php");?>

<script>

const apiKey = "sk-xxxxxxxxxxxxxxxxxxx";   // Enter your apikey here
const chatbox = document.getElementById("quote");
const authorN = document.getElementById("author");

let messages = [];

function myFunction(){
	const msg = "give me a quote related to agriculture and farming";
    if (msg) {
        messages.push({
            "role": "user",
            "content": msg
        });
        fetchMessages();
    }
};

function fetchMessages() {
    try {
        var settings = {
            url: "https://api.openai.com/v1/chat/completions",
            method: "POST",
            timeout: 0,
            headers: {
                Authorization: "Bearer " + apiKey,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                model: "gpt-3.5-turbo",
                messages: messages
            })
        };
        $.ajax(settings).done(function(response) {
			chatbox.innerHTML = '';  
			authorN.innerHTML = ''; 

			const message = response.choices[0].message;
            messages.push({
                "role": message.role,
                "content": message.content
            });					
            Rquote=message.content;	

			parts = Rquote.split(" - ")
			QuoteR = parts[0]
			authorName = parts[1]

			chatbox.append(QuoteR);
			authorN.append(authorName);
			
        }).fail(function(jqXHR, textStatus, errorThrown) {
			chatbox.innerHTML = '';  
			let errorMessage = 'Землеробство виглядає дуже легким, коли ваш плуг — це олівець, а ви за тисячу миль від кукурудзяного поля.';
			chatbox.append(errorMessage);
        });
    } catch (error) {
		chatbox.innerHTML = '';  
		let errorMessage2 = 'Землеробство виглядає дуже легким, коли ваш плуг — це олівець, а ви за тисячу миль від кукурудзяного поля.';
		chatbox.append(errorMessage2);
    }
}
 </script>

</body>

</html>
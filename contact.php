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

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css">

  <link rel="stylesheet" href="assets/css/creativetim.min.css" type="text/css">

</head>

  <body class="bg-white" id="top">
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
	
	
    <div class="text-gray-100 " >
        <form action="contact-script.php" method="post">
            <div class="max-w-screen-xl px-8 grid gap-8 grid-cols-1 md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 py-16 mx-auto bg-gray-100 text-gray-900 rounded-lg shadow-lg">
                <div class="flex flex-col justify-between">
                    <div class="mt-2">
                        <h2 class="text-4xl lg:text-5xl font-bold leading-tight">Давайте поговоримо про все!</h2>
                    </div>
                    <div class="mt-2">
                        <span class="uppercase text-sm text-gray-600 font-bold">Повне ім'я</span>
                        <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" id="user_name" name="user_name" placeholder="Введіть Ваше повне ім'я">
                    </div>
                    <div class="mt-2">
                        <span class="uppercase text-sm text-gray-600 font-bold">Номер мобільного</span>
                        <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="phone" id="user_mobile" name="user_mobile" pattern="^[0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}$" title="Введіть дійсний 10-значний номер мобільного телефону (наприклад, 066-ххх-хх-хх)" placeholder="Введіть свій номер мобільного телефону">
                    </div>
                    <div class="mt-2">
                        <span class="uppercase text-sm text-gray-600 font-bold">Email</span>
                        <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="email" id="user_email" name="user_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Введіть дійсний ідентифікатор електронної пошти (наприклад, test@gmail.com)" placeholder="Введіть свою електронну адресу">
                    </div>
                </div>
                <div class="flex flex-col justify-between">
                    <div class="mt-2">
                        <span class="uppercase text-sm text-gray-600 font-bold">Адреса</span>
                        <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" id="user_address" name="user_address" title="Введіть назву свого міста або код" placeholder="Введіть своє місто/код">
                    </div>
 
                    <div class="mt-2">
                        <span class="uppercase text-sm text-gray-600 font-bold">Повідомлення</span>
                        <textarea class="w-full h-32 bg-gray-300 text-gray-900 mt-2 p-7 rounded-lg focus:outline-none focus:shadow-outline" rows="8" id="user_message" name="user_message" title="Введіть детальну інформацію про проблему" placeholder="Введіть свою проблему" required="" autofocus=""></textarea>
                    </div>
                    <div class="mt-2">
                        <button class="uppercase text-sm font-bold tracking-wide bg-indigo-500 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline" type="submit" name="submit" value="Submit">
                            Надіслати повідомлення
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="modal fade" id="mysuccessModal" data-backdrop="static" style="position: fixed;width: 100%;height: 100%;overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content" style="position: relative;margin: auto;padding: 0;border: 1px solid #888;width: 100%;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);">
                <!-- Modal Header -->
                <div class="modal-header" style="background-color: #1A4E85;color: white;">
                    <h4 class="modal-title">Повідомлення</h4>
                    <button type="button" class="close" onclick="pagesuccessRedirect()">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <h3>Дякуємо, що звернулися до нас.</h3>
                    <h6>Ви дуже важливі для нас, вся отримана інформація завжди залишатиметься конфіденційною. Ми зв’яжемося з вами, щойно розглянемо ваше повідомлення.</h6>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer" style="padding:2px 16px;background-color: #1A4E85;color: white;">
                    <button type="button" class="btn btn-danger" onclick="pagesuccessRedirect()">Закрити</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myunsuccessModal" data-backdrop="static" style="position: fixed;width: 100%;height: 100%;overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content" style="position: relative;margin: auto;padding: 0;border: 1px solid #888;width: 100%;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);">
                <!-- Modal Header -->
                <div class="modal-header" style="background-color: #1A4E85;color: white;">
                    <h4 class="modal-title" style = 'color:white'>Повідомлення</h4>
                    <button type="button" class="close" onclick="pageunsuccessRedirect()">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                Помилка при відправці повідомлення!!! Будь ласка спробуйте ще раз.
                </div>
                <!-- Modal footer -->
                <div class="modal-footer" style="padding:2px 16px;background-color: #1A4E85;color: white;">
                    <button type="button" class="btn btn-danger" onclick="pageunsuccessRedirect()">Close</button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require("footer.php");?>

</body>

</html>
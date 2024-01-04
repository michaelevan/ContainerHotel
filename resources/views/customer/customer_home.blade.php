<!DOCTYPE html>
<html lang="en" class="no-js">
  <!-- Head -->
  <head>
    <title>Container</title>

    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Gym website, Bootstrap Theme, Freebies, UI Kit, MIT license">
    <meta name="description" content="Bootstrap 4 Template by WebThemez">
    <meta name="author" content="webthemez.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Vendor Styles -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/slick-carousel/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/magnific-popup/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="assets/css/hovereffects.css">
    <!-- Theme Styles -->
    <link href="assets/css/scrolling-nav.css" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
  </head>
  <!-- End Head -->

  <style>
    #content{
      margin: auto;
      width: 100%;
      height: 100%;
      background-color: aqua;
      text-align: center;
    }
    .carousel-caption{
        margin-top: -15%;
    }
  </style>
  <body>
    <header id="top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top" id="mainNav">
		<div class="container">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="ti-menu"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger active" href="home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="profile">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="fasilitas">Fasilitas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="aboutUs">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="team">Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ url('/logout') }}">Logout</a>
            </li>
			</ul>
		  </div>
		</div>
	  </nav>

		<section class="hero-large hero">
			<div id="demo" class="carousel slide" data-ride="carousel" >
			  <ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
				<li data-target="#demo" data-slide-to="3"></li>
				<li data-target="#demo" data-slide-to="4"></li>
			  </ul>
			  <div class="carousel-inner">
				<div class="carousel-item active">
				  <img src="assets/img/intro/bg3.png" alt="Los Angeles" width="1100" height="500" >
				  <div class="container">
				   <div class="carousel-caption">
					<h2 style="font-size: 50px;">Welcome , {{ session()->get("login")->nama}}</h2>
                    <h3 style="font-size: 30px;">What would you like to do?</h3> <br><br>
                    <a href="booking"><button class="btn btn-outline-primary" style="font-size: 40px; font-weight: bolder;">BOOK NOW</button><br><br></a>
                    <a href="fasilitas"><button class="btn btn-outline-primary" style="font-size: 40px; font-weight: bolder;">SEE OUR FACILITIES</button><br><br></a>
				  </div>
				  </div>

				</div>
                <div class="carousel-item">
                <img src="assets/img/hotel/swimming.jpg" alt="Chicago" width="1100" height="500">
                    <div class="container">
                <div class="carousel-caption">
                    <h2>Best swimming pool</h2>
                    <p>warm and clean water</p>
                </div>
                </div>
                </div>
                <div class="carousel-item">
                <img src="assets/img/hotel/gym.jpg" alt="New York" width="1100" height="500">
                    <div class="container">
                <div class="carousel-caption">
                    <h2>No Pain No Gain</h2>
                    <p>gain your strength</p>
                </div>
                </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/hotel/resto.jpg" alt="New York" width="1100" height="500">
                    <div class="container">
                    <div class="carousel-caption">
                    <h2>Eat Pray Love</h2>
                    <p>Enjoy food with best views</p>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                <img src="assets/img/hotel/hotel2.jpg" alt="New York" width="1100" height="500">
                    <div class="container">
                <div class="carousel-caption">
                    <h2>Comfortable & Nice</h2>
                    <p>Stays in our best rooms </p>
                </div>
                </div>
                </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
                </div>
		</section>

    </main>


    <!-- JS Script Files -->
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/vendors/jquery.migrate.min.js"></script>
    <script src="assets/vendors/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/jquery-easing/jquery.easing.min.js"></script>

    <!-- Components Vendor  -->
    <script src="assets/vendors/slick-carousel/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/counters/waypoint.min.js"></script>
    <script src="assets/vendors/counters/counterup.min.js"></script>

	<script src="assets/contact/jqBootstrapValidation.js"></script>
	<script src="assets/contact/contact_me.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    <!--Plugin Initialize-->
    <script src="assets/js/global.js"></script>

    <!-- Theme Components and Settings -->
    <script src="assets/vendors/carousel.js"></script>
    <script src="assets/vendors/counters.js"></script>

    <!-- END JAVASCRIPTS -->

  </body>
  <!-- End Body -->
</html>

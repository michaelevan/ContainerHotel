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
        margin-top: 100px;
        width: 100%;
        height: 100%;
        align-items: center;
    }
  </style>
  <body>
    <header id="top">

        <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top" id="mainNav">
            <div class="container">
              <a class="navbar-brand js-scroll-trigger" href="#page-top">Welcome, {{ session()->get("login")->nama}}</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="booking" class="btn btn-pill btn-outline-primary mr-3">Book Now</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger active" href="fasilitas">Fasilitas</a>
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

      <div  id="content">
          <h1 style="text-align: center; margin-top: 150px;">Facilities</h1>
            <div class="row" style="margin-top: 50px;">
                <div class="col" style="width: 500px; margin-left: 10px;">
                <div class="card" style="width: 100%;" >
                    <img src="/assets/img/hotel/gym.jpg" class="card-img-top" alt="..." style="width: 100%; height: 400px;" >
                    <div class="card-body">
                        <h2 class="card-title" style="color: wheat;">GYM</h2>
                        <h3 style="color: white;">Open From 07 AM - 09 PM</h3>
                        <h5>Taking a break from your daily routine does not have to mean taking a break from your exercise routine. Travel and fitness can work together to create a happier, healthier you. Maximize your stay when you use our state-of-the-art fitness equipment in Flex & Fit, our fitness centre located</h5>
                        <h5 style="color: white;">Rules : Must use Boots</h5>
                    </div>
                </div>
                </div>
                <div class="col" style="width: 500px; ">
                <div class="card" style="width: 100%;">
                <img src="/assets/img/hotel/swimming.jpg" class="card-img-top" alt="..." style="width: 100%; height: 400px;">
                    <div class="card-body">
                        <h2 class="card-title" style="color: wheat;">SWIMMING POOL</h2>
                        <h3 style="color: white;">Open From 07 AM - 09 PM</h3>
                        <h5>Located on the 5th floor, our outdoor swimming pool, which is available exclusively for hotel guests, offers the perfect venue to simply enjoy a refreshing dip. Four comfortable poolside sofas provide an interesting twist to this unique outdoor space. Our adult pool is 1.5 meters in depth…</h5>
                        <h5 style="color: white;">Rules : Must use Proper Swimming Suit</h5>
                    </div>
                </div>
                </div>
                <div class="col" style="width: 500px; margin-right: 10px;">
                <div class="card" style="width: 100%; height: 700px;">
                    <img src="/assets/img/hotel/resto.jpg" class="card-img-top" alt="..." style="width: 100%; height: 400px;">
                    <div class="card-body">
                        <h2 class="card-title" style="color: wheat;">RESTO</h2>
                        <h3 style="color: white;">Open 24 Hour</h3>
                        <h5>The Restaurant is located on the 2nd floor and Exclusively designed for our discerning guests who wants to try our gorgeous Menu and chill out .</h5>
                    </div>
                </div>
                </div>
            </div>
        </div>
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

<!DOCTYPE html>
<html lang="en" class="no-js">

  <head>
    <title>Container</title>

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
          background-color: whitesmoke;
          height: fit-content;
          width: 60%;
          margin: auto;
          margin-top: 200px;
          border: 6px solid grey;
          border-radius: 25px;
      }
      #profile{
          width: 500px;
          margin: auto;
      }
      #profilePic{
          width: 200px;
          height: 200px;
          display: block;
          margin: auto;
          margin-top: 60px;
          margin-bottom: 20px;
      }

  </style>
  <body>
    <header id="top">

        <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top" id="mainNav">
            <div class="container">
              <a class="navbar-brand js-scroll-trigger" href="#page-top">Welcome , {{ session()->get("login")->nama}}</a>
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
                    <a class="nav-link js-scroll-trigger active" href="profile">Profile</a>
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
                    <a class="nav-link js-scroll-trigger" href="{{ url('/') }}">Logout</a>
                </li>
                </ul>
              </div>
            </div>
          </nav>

    <div id="content">
        <div id="profile">
            <img src="/assets/img/avatarL.png" class="rounded" alt="..." id="profilePic">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                <span  class="input-group-text" id="basic-addon1">Email</span>
                <input type="text" class="form-control" name="email" readonly value="{{ session()->get("login")->email }}">
                </div>

                <div class="input-group mb-3">
                <span  class="input-group-text" id="basic-addon1">Nama</span>
                    <input type="text" class="form-control" readonly name="nama" value="{{ session()->get("login")->nama }}">
                </div>
                <H1></H1>
                <div class="input-group mb-3">
                <?php

                    # code...
                 if ($dataCust[0]['NIK'] == "" && $dataCust[0]['Asal']== "" && $dataCust[0]['Telepon']== "") {
                ?>
                    <span  class="input-group-text" id="basic-addon1">NIK</span>
                        <input type="text" class="form-control" name="NIK" >
                    </div>
                    <div class="input-group mb-3">
                    <span  class="input-group-text" id="basic-addon1">Asal</span>
                        <input type="text" class="form-control" name="asal" >
                    </div>
                    <div class="input-group mb-3">
                    <span  class="input-group-text" id="basic-addon1">No Telepon</span>
                        <input type="text" class="form-control" name="telepon">
                    </div>
                <?php
                     }
                     else{
                ?>
                    <span  class="input-group-text" id="basic-addon1">NIK</span>
                    @if (count($dataCust) > 0)
                    <input type="text" class="form-control" name="NIK" value="<?= $dataCust[0]['NIK'] ?>">
                    @endif

                    </div>
                    <div class="input-group mb-3">
                    <span  class="input-group-text" id="basic-addon1">Asal</span>
                    @if (count($dataCust) > 0)
                    <input type="text" class="form-control" name="asal" value="<?= $dataCust[0]['Asal'] ?>">
                    @endif

                    </div>
                    <div class="input-group mb-3">
                    <span  class="input-group-text" id="basic-addon1">No Telepon</span>
                    @if (count($dataCust) > 0)
                    <input type="text" class="form-control" name="telepon" value="<?= $dataCust[0]['Telepon'] ?>">
                    @endif

                    </div>
                <?php
                     }
                ?>
                <div class="input-group mb-3">
                <span  class="input-group-text" id="basic-addon1">Password</span>
                    <input type="text" id="inpTelp" class="form-control" name="pass" value="{{ session()->get("login")->password }}">
                </div>
                <div class="input-group mb-3">
                <span  class="input-group-text" id="basic-addon1">Konfirmasi Password</span>
                <input type="text" id="inpEmail" class="form-control" name="pass_confirmation">
                </div>
                <br>
                <div class="input-group mb-3" style="margin-top: 5%;">
                    <button class="btn btn-primary" id="saveInfo" type="submit" style="width: 100%;" >Save</button>
                </div>
            </form>
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

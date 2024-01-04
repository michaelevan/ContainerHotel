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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

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
    <link rel="stylesheet" href="text/css" media="screen" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>


  </head>
  <!-- End Head -->

  <body>
    <!-- Header -->
    <header id="top">
      <!-- Navbar -->
	  <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top" id="mainNav">
		<div class="container">
		  <a class="navbar-brand" href="#page-top">Hotel Kontainer</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="ti-menu"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="dashboardResepsionis">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="customerResepsionis">Booking</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger active" href="kamarResepsionis">Kamar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="fasilitasResepsionis">Fasilitas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ url('/logout') }}">Logout</a>
            </li>
			</ul>
		  </div>
		</div>
	  </nav>
      <!-- End Navbar -->
    </header>
    <!-- End Header -->

    <section class="wt-section" id="team" style="margin-left:20%; margin-right:20%">
    <h1 style="text-align:center">Daftar Kamar</h1>
    <br>
        {{-- <div class="container">
            <div class="row" style="text-align:center">
                <div class="col-sm border border-dark rounded">
                    Jenis Kamar
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jeniskamar" id="standard">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Standard
                        </label>
                        </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jeniskamar" id="deluxe" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Deluxe
                        </label>
                    </div>

                </div>
                <div class="col-sm border border-dark rounded">
                    Status
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="tersedia">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Tersedia
                        </label>
                        </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="tidaktersedia" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Tidak Tersedia
                        </label>
                    </div>
                </div>
            </div>
        </div> --}}
        <br>
        <table class="table table-striped table-bordered" id="kamar">
            <thead class="thead-dark">
                <tr>
                <th scope="col">No Kamar</th>
                <th scope="col">Jenis Kamar</th>
                <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @if (count($datakamar) > 0)
                @foreach ($datakamar as $data)
                        <tr>
                            <td>{{$data->Nokamar}}</td>

                            @if ( $data->Kodejenis == "D01")
                                <td>Deluxe</td>
                            @else
                                <td>Standard</td>
                            @endif

                            @if ( $data->Status == "1")
                                <td>Tersedia</td>
                            @else
                                <td>Tidak Tersedia</td>
                            @endif
                        </tr>
                @endforeach
                @endif

            </tbody>
        </table>

    </section>
    <script>
        $(document).ready(function() {
            $('#kamar').DataTable();
        } );
    </script>
    <!-- JS Script Files -->
    {{-- <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/vendors/jquery.migrate.min.js"></script>
    <script src="assets/vendors/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/jquery-easing/jquery.easing.min.js"></script> --}}

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

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

  <body>
    <!-- Header -->
    <header id="top">
      <!-- Navbar -->
	  <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top" id="mainNav">
		<div class="container">
		  <a class="navbar-brand js-scroll-trigger" href="#page-top">Hotel Kontainer</a>
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
                <a class="nav-link js-scroll-trigger" href="kamarResepsionis">Kamar</a>
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

    <h1 style="text-align:center; margin-top: 60px;">Tambah Fasilitas</h1>
    <div class="container">
    <div class="row">
        <div class="col-sm">
        <section class="wt-section" id="dashboard" style="margin-left:20px; padding-top: 20px;">
            <form action="" method="POST">
                <div class="form-group">
                    <label>No Kamar</label>
                    <select class="browser-default custom-select" name="nokamar">
                        @foreach ($datakamar as $data)
                            <option value="{{$data->Nokamar}}">{{$data->Nokamar}}</option>
                        @endforeach
                    </select>
                    <label>Fasilitas</label>
                    <select class="browser-default custom-select" name="fasilitas" id="fasilitas">
                        @foreach ($datafasilitas as $data)
                            <option value="{{$data->Kodefasilitas}}">{{$data->Namafasilitas}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="number" class="form-control" name="jumlah" id="jumlah">
                </div>
                {{-- <label id="subtotal">0</label> --}}


            </form>

            <button type="button" class="btn btn-success" id="btntambah" style="float:left; margin-right: 10px;">Tambah</button>
            <button type="button" class="btn btn-warning" id="btntambah" style="float:left; margin-right: 10px;">Checkout</button>
            <a href="dashboardResepsionis"><button type="button" class="btn btn-secondary" style="float:left">Back</button></a>
        </section>
        </div>
        <div class="col-sm">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Kode Fasilitas</th>
                    <th scope="col">Nama Fasilitas</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Subtotal</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        </div>
    </div>
    </div>

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


    <script>
        $(document).ready(function(){
          $("#btntambah").click(function(){
            var kode = $("#fasilitas").val();
            var fasilitas = $("#fasilitas :selected").text();
            var jumlah = $("#jumlah").val();
            var row = "<tr><td>" + kode + "</td><td>" + fasilitas + "</td><td>"+jumlah +"</td></tr>";
            $("table tbody").append(row);
          });
        });
    </script>

  </body>
  <!-- End Body -->
</html>

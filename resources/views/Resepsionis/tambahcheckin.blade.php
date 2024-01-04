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

    <h1 style="text-align:center; margin-top: 20px;">Detail Check-in</h1>
    <section class="wt-section col-lg-5" id="dashboard" style="margin-left:20px; padding-top: 20px;">
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama : </label>
                <input type="text" class="form-control" name="nama" style="font-size:14pt;">
                @if($errors->first('nama'))
                <span style='font-size:10px; color: red;'>{{ $errors->first('nama') }}</span>
                @endif
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label>NIK</label>
                        <input type="text" class="form-control" name="NIK" style="font-size:14pt;">
                        @if($errors->first('NIK'))
                        <span style='font-size:10px; color: red;'>{{ $errors->first('NIK') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label>Asal</label>
                        <input type="text" class="form-control" name="asal" style="font-size:14pt;">
                        @if($errors->first('asal'))
                        <span style='font-size:10px; color: red;'>{{ $errors->first('asal') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label>No. Telp</label>
                        <input type="text" class="form-control" name="notelp" style="font-size:14pt;">
                        @if($errors->first('notelp'))
                        <span style='font-size:10px; color: red;'>{{ $errors->first('notelp') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label>Tanggal Check-in</label>
                        <input type="date" class="form-control" name="tglcheckin" style="font-size:14pt;">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label>Tanggal Check-out</label>
                        <input type="date" class="form-control" name="tglcheckout" style="font-size:14pt;">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Jenis Kamar</label>
                <select class="browser-default custom-select" name="jenis" id="jenis">
                    <option value="S01">Standard</option>
                    <option value="D01">Deluxe</option>
                </select>
            </div>
            <div class="form-group">
                <label>No Kamar</label>
                <select class="browser-default custom-select" name="nokamarstandard" id="nokamarstandard">
                    @foreach ($standard as $data)
                        <option value="{{$data->Nokamar}}">{{$data->Nokamar}}</option>
                    @endforeach
                </select>

                <select class="browser-default custom-select" name="nokamardeluxe" id="nokamardeluxe">
                    @foreach ($deluxe as $data)
                        <option value="{{$data->Nokamar}}">{{$data->Nokamar}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" name="btnTambah" class="btn btn-primary" style="float:left; margin-right: 10px;">Tambah</button>
        </form>



        <a href="dashboardResepsionis"><button type="button" class="btn btn-secondary" style="float:left">Back</button></a>
    </section>

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
    <script>
        $(document).ready(function(){
            $("#nokamarstandard").show();
            $("#nokamardeluxe").hide();
            $("#jenis").on('change', (function(){

                if ($(this).val()=="S01") {
                    $("#nokamarstandard").show();
                    $("#nokamardeluxe").hide();
                }
                else if ($(this).val()=="D01") {
                    $("#nokamarstandard").hide();
                    $("#nokamardeluxe").show();
                }

                // var jenis = $(this).val()
                // $.post("/xampp/htdocs/kontainer/app/Http/Controllers/tes.php",{
                //     jenis : jenis,
                //     action : "tes"
                // }, function(data, status){
                //     $("#nokamar").html(data);
                // });
            }));

        });
    </script>

  </body>
  <!-- End Body -->
</html>

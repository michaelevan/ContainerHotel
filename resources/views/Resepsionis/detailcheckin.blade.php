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
    <section class="wt-section col-lg-5" id="dashboard" style="margin-left:20px;">
    <h1 style="text-align:center">Detail Check-in</h1>
        <form action="" method="POST">
            @csrf
            <?php
            $datacustomer = DB::table('customer')->where('kodecust',$datacheckin[0]->Kodecust)->get();
            ?>
            <div class="form-group">
                <label>Nama : </label>
                <input type="text" class="form-control" name="nama" style="font-size:14pt;" value="{{$datacustomer[0]->Nama}}">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label>NIK</label>
                        <input type="text" class="form-control" name="NIK" style="font-size:14pt;" value="{{$datacustomer[0]->NIK}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label>Asal</label>
                        <input type="text" class="form-control" name="alamat" style="font-size:14pt;" value="{{$datacustomer[0]->Asal}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label>No. Telp</label>
                        <input type="text" class="form-control" name="notelp" style="font-size:14pt;" value="{{$datacustomer[0]->Telepon}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label>Tanggal Check-in</label>
                        <input type="date" class="form-control" name="tglcheckin" style="font-size:14pt;" value="{{$datacheckin[0]->Tglcin}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label>Tanggal Check-out</label>
                        <input type="date" class="form-control" name="tglcheckout" style="font-size:14pt;" value="{{$datacheckin[0]->Tglcout}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Jenis Kamar</label>
                @if ($datacheckin[0]->Tipekamar == "S01")
                <select class="browser-default custom-select" name="jenis" id="jenis">
                    <option value="S01" selected>Standard</option>
                    <option value="D01">Deluxe</option>
                </select>

                @elseif ($datacheckin[0]->Tipekamar == "D01")
                <select class="browser-default custom-select" name="jenis" id="jenis">
                    <option value="S01" >Standard</option>
                    <option value="D01" selected >Deluxe</option>
                </select>
                @endif

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
            <button type="submit" name="btnUpdate" class="btn btn-warning" style="float:left; margin-right: 10px;">Update</button>

        </form>

        <a href="{{url("checkout/".$datacheckin[0]->Kodecin."")}}"><button type="button" class="btn btn-primary" style="float:left">Checkout</button></a>
        <a href="{{url("dashboardResepsionis")}}"><button type="button" class="btn btn-secondary" style="float:left; margin-left: 10px">Back</button></a>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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

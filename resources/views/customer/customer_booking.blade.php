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
    <link href="css/t-datepicker.min.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT"
            crossorigin="anonymous"></script>
    <script src="js/t-datepicker.min.js"></script>
    <link href="css/themes/t-datepicker-bluegrey.css" rel="stylesheet" type="text/css">
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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  </head>
  <!-- End Head -->

  <style>
      #content{
          width: 100%;
          padding-top: 10px;
          height: 800px;
          margin-top: 120px;

      }
      #kiri{
        width: 70%;
        float: left;
        margin-left: 10px;
      }
      #kanan{
          width: 25%;
          padding-right: 30px;
          float:right;
          height: 700px;
          font-weight: bold;
      }
      #Standard{
        height: 700px;
        /* border-radius: 15%; */
      }
      #Deluxe{
        height: 700px;
        margin-left: 10px;
        /* border-radius: 15%; */
      }
      #btnBook{
        width: 80%;
        font-size: x-large;
      }
  </style>
  <body>
    <header id="top">

	  <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top" id="mainNav">
		<div class="container">
		  <a class="navbar-brand js-scroll-trigger" href="#page-top">Welcome,JakselAbis</a>
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

      <div id="content">
          <div id="kiri">
          <div class="card-group">
                <div class="card rounded-3" id="Standard">
                    <img src="/assets/img/hotel/hotel2.jpg" class="card-img-top" alt="..." style="width: 100%; height: 50%;">
                    <div class="card-body">
                    <h2  class="card-title" style="color: wheat;">Standard Room | 2 Guest<br>
                    Rp.110.000
                  </h2>
                    <h3 class="card-text" style="color: white;">Single Bed</h3>
                    <h5 class="card-text" style="color: white;">Fasilitas Umum : </h5>
                    <h5 class="card-text" style="color: white;">- Free Wifi</h5>
                    <h5 class="card-text" style="color: white;">- AC Room</h5>
                    <h5 class="card-text" style="color: white;">- Restaurant</h5>
                    <h5 class="card-text" style="color: white;">- GYM</h5>
                    <h5 class="card-text" style="color: white;">- Swimming Pool</h5>
                    </div>
                </div>
                <div class="card rounded-3 border-5" id="Deluxe">
                    <img src="/assets/img/hotel/hotel1.jpg" class="card-img-top" alt="..." style="width: 100%; height: 50%;">
                    <div class="card-body">
                    <h2 class="card-title" style="color: wheat;">Deluxe Room | 2 Guest<br>
                    Rp.175.000</h2>
                    <h3 class="card-text" style="color: white;">King Size Bed</h3>
                    <h5 class="card-text" style="color: white;">Fasilitas Umum : </h5>
                    <h5 class="card-text" style="color: white;">- Free Wifi</h5>
                    <h5 class="card-text" style="color: white;">- AC Room</h5>
                    <h5 class="card-text" style="color: white;">- Restaurant</h5>
                    <h5 class="card-text" style="color: white;">- GYM</h5>
                    <h5 class="card-text" style="color: white;">- Swimming Pool</h5>
                    </div>
                </div>
            </div>
          </div>
          <div id="kanan">
            <div id="awal">
            <form action="" method="post">
            @csrf
              <label for="tipe-kamar">
                <h1>Pilih Tipe Kamar</h1>
              </label>
              <br>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="rb" id="r1" value="S01">
                <label class="form-check-label" for="flexRadioDefault1">
                  <h3>STANDARD</h3>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="rb" id="r2" value="D01">
                <label class="form-check-label" for="flexRadioDefault2">
                  <h3>DELUXE</h3>
                </label>
              </div>
              Room : <input type="number" name="JumlahRoom" id="inpJRoom" min="1" required>
              <div class="form-check form-switch" style="margin-left: 20px;"><br>
                <input class="form-check-input" type="checkbox" role="switch" id="inpBf" name="bf">
                <label class="form-check-label" for="flexSwitchCheckDefault">Breakfast</label>
              </div>
              <br>
              <label for="tglCheckIn" min="2022-08-08" max="2022-12-31">
                <h5>From : </h5>
              </label>
              <input type="date" id="tglCheckIn" name="tglcin" required > <br>
              <label for="tglCheckOut">
                <h5>To : </h5>
              </label>
              <input type="date" id="tglCheckOut" name="tglcout" required> <br>
              <div class="form-check" id="req">
                <label for="req">Special Request</label>
                <div id="extra-bed">
                  <input class="form-check-input" type="checkbox" value="" id="rextra-bed" name="extra-bed">
                  <label class="form-check-label" for="extra-bed" >
                    Extra Bed + 50.000;
                  </label>
                </div>
              </div>
              <br><br>
              <button class="btn btn-primary" id="btnBook">Continue</button>
            </div>
            <div id="confirm">
                <button class="btn btn-secondary" id="btnBack">Back</button>
                <h1>Your Order</h1>
                <h4 id="totalRoom"></h4>
                <h4 id="chckin"></h4>
                <h4 id="chckout"></h4>
                <h6 id="SpecialReq">Special Request : </h6>
                <input type="text" id="inpVou"> <button class="btn btn-primary" id="btn_checkVoucher">Check Voucher</button>
              <br>
              <p style="color: red;" id="msg"></p>
                <h1 id="totalHarga"></h1>
                <button class="btn btn-primary" id="btnPayment" type="submit">Payment</button>
                <input type="number" name="subtotal" id="Hsubtotal" hidden>
                <input type="text" name="jamcin" id="jamcin" hidden>
              </div>
            </div>
          </form>
    </main>


    <!-- JS Script Files -->
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/vendors/jquery.migrate.min.js"></script>
    <script src="assets/vendors/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

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
      $( function() {
        var potongan = 0;
        $("#confirm").hide();
          // $( "#tglCheckIn" ).datepicker({
          // });
          // $( "#tglCheckOut" ).datepicker({
          // });

          function tglskrg(){
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = today.getFullYear();

            today = mm + '/' + dd + '/' + yyyy;
            return today;
          };
          function checkSum(){
            var dateFrom = "15/04/2022";
            var dateTo = "21/09/2022";
            var dateCheck = tglskrg();

            var d1 = dateFrom.split("/");
            var d2 = dateTo.split("/");
            var c = dateCheck.split("/");

            var from = new Date(d1[2], parseInt(d1[1])-1, d1[0]);  // -1 because months are from 0 to 11
            var to   = new Date(d2[2], parseInt(d2[1])-1, d2[0]);
            var check = new Date(c[2], parseInt(c[1])-1, c[0]);

            if (check > from && check < to && $("#inpVou").val() == "VOO1") {
              $("#msg").css('color','red');
              $("#msg").text("Kamu dapat potongan sebesar 200.000");
              potongan = 100000;
            }else{
              $("#msg").css('color','red');
              $("#msg").text("not eligible");
            }
          }
          function checkBlck(){
            var dateFrom = "22/04/2022";
            var dateTo = "27/04/2022";
            var dateCheck = tglskrg();

            var d1 = dateFrom.split("/");
            var d2 = dateTo.split("/");
            var c = dateCheck.split("/");

            var from = new Date(d1[2], parseInt(d1[1])-1, d1[0]);  // -1 because months are from 0 to 11
            var to   = new Date(d2[2], parseInt(d2[1])-1, d2[0]);
            var check = new Date(c[2], parseInt(c[1])-1, c[0]);

            if (check > from && check < to && $("#inpVou").val() == "VOO2") {
              $("#msg").css('color','green');
              $("#msg").text("Kamu dapat potongan sebesar 100.000");
              potongan = 350000;
            }else{
              $("#msg").css('color','red');
              $("#msg").text("not eligible");
            }
          }

          $("#btn_checkVoucher").on('click',function(e){
            e.preventDefault();
            checkBlck();
            checkSum();
          });

          function jumlahHari(start,end){
            days = (end- start) / (1000 * 60 * 60 * 24);
            return days;
          }


          $("#req").hide();

          $("#btnBack").click(function(e){
            e.preventDefault();
            $("#confirm").hide();
            $("#awal").show();
          });
          // $("#extra-bed").hide();
          if($('#r2').on('click',function(){
            $("#req").show();
          }))
          if($('#r1').on('click',function(){
            $("#req").hide();
          }))

          $("#btnBook").on('click',(function(e){
            e.preventDefault();
            var date = new Date($('#tglCheckIn').val());
            var day = date.getDate();
            var month = date.getMonth() + 1;
            var year = date.getFullYear();

            var dateout = new Date($('#tglCheckOut').val());
            var dayout = dateout.getDate();
            var monthout = dateout.getMonth() + 1;
            var yearout = dateout.getFullYear();

            $("#awal").hide();
            $("#confirm").show();


            //if standard check
            if ($('#r1').is(':checked')) {
              var bf = "";
              var total = 0;
              var JumlahRoom = $("#inpJRoom").val();
              var jmlhhari = jumlahHari(date,dateout);
              if ($('#inpBf').is(':checked')) {
                bf = " With Breakfast";
                total += 50000;
              }else{
                bf = "";
              }

              $("#totalRoom").text(
                "("+JumlahRoom+"X) " + "Standard" +" Room"+bf
                );
                $("#chckin").text("Check In :"+ [day, month, year].join('/'));
                $("#chckout").text("Check out :"+ [dayout, monthout, yearout].join('/'));

                total += JumlahRoom * 110000;
                total += 110000 * jmlhhari;
                if (potongan != 0) {
                  $("#totalHarga").text("Total Harga : " + total);
                }else{
                  $("#totalHarga").text("Total Harga : " + total);
                }

            }//if deluxe checked
            else if($('#r2').is(':checked')){
              var bf = "";
              var total = 0;
              var JumlahRoom = $("#inpJRoom").val();
              var jmlhhari = jumlahHari(date,dateout);
              if ($('#inpBf').is(':checked')) {
                bf = " With Breakfast";
                total += 50000 *JumlahRoom;
              }else{
                bf = "";
              }
              $("#totalRoom").text(
                "("+JumlahRoom+"X) " + "Deluxe" +" Room"+bf
              );
              $("#chckin").text("Check in : "+[day, month, year].join('/'));
              $("#chckout").text("Check out : "+ [dayout, monthout, yearout].join('/'));
              // $("#extra-bed").show();
              if ( $('#rextra-bed').is(":checked")){
                cek = "Special Request :-Extra Bed";
                total += 50000 *JumlahRoom;
              }else{
                cek = "Special Request : -";
              }
              var Hjumlahroom = JumlahRoom * 175000;
              total += Hjumlahroom * jmlhhari;
              if (potongan != 0) {
                $("#SpecialReq").text(cek);
                $("#totalHarga").text("Total Harga : " + (total-potongan));
              }else{
                $("#SpecialReq").text(cek);
                $("#totalHarga").text("Total Harga : " + total);
              }
            }
          }));
          // $("#btnPayment").on("click",function(e){
          //   var dt = new Date();
          //   var dd = String(dt.getDate()).padStart(2, '0');
          //   var mm = String(dt.getMonth() + 1).padStart(2, '0'); //January is 0!
          //   var yyyy = dt.getFullYear();
          //   today = mm + '/' + dd + '/' + yyyy;
          //   var time =dd+"-"+mm+"-"+yyyy+" "+dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
          //   $("#jamcin").val(time);

          // });
      } );
  </script>
  </body>
</html>

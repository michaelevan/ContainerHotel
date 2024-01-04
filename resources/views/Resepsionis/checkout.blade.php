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
    <section class="wt-section" id="dashboard" style="margin-left:20%; margin-right: 20%;">
    <h1 style="text-align:center">Check Out</h1>
        <form action="" method="POST">
            @csrf
            <label>No Kamar : {{$datacheckin[0]->NoKamar}}</label><br>
            <?php
            $tglcin = $datacheckin[0]->Tglcin;
            $tglcout = $datacheckin[0]->Tglcout;
            $tglcin1 = new DateTime($tglcin);
            $tglcout1 = new DateTime($tglcout);
            $interval = $tglcin1->diff($tglcout1);
            $finaldays = $interval->format('%a');


            ?>
            <label>Lama Inap : {{$finaldays}} hari</label>
            <br>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label>Total Biaya</label>
                        <?php
                        $tglcin = $datacheckin[0]->Tglcin;
                        $tglcout = $datacheckin[0]->Tglcout;
                        $tglcin1 = new DateTime($tglcin);
                        $tglcout1 = new DateTime($tglcout);
                        $interval = $tglcin1->diff($tglcout1);
                        $finaldays = $interval->format('%a');
                        $biayakamar = DB::table('kamar')->where('nokamar',$datacheckin[0]->NoKamar)->value('harga');
                        $total = $biayakamar * $finaldays;
                        ?>
                        <input type="text" class="form-control" name="total" style="font-size:14pt;" value="{{$total}}">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label>Detail Biaya</label><br>
                        <textarea name="" id="" cols="40" rows="5">{{$detail}}</textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success" style="float:left">Confirm</button>
        </form>
        <br><br>
        <a href="{{url("dashboardResepsionis")}}"><button type="button" class="btn btn-secondary" style="float:left">Back</button></a>
        <input type="button" style="margin-left:95%" class="btn btn-primary" onclick="printDiv('print')" value="Print" /><br>
        <div id="print" style="display:none;">
            <h1 style="text-align:center;" id="report">Nota Checkout</h1><br>
            <div>
                @foreach ($listTransaksi as $transaksi)
                    <h5>No Nota         :{{ $transaksi->Kodecin }} &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; Tanggal Checkin :{{ $transaksi->Tglcin }}</h5>
                    <h5>Nama Customer   :{{ $transaksi->Kodecin }} &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Tanggal Chekout :{{ $transaksi->Tglcout }}</h5>
                    <h5>No Kamar        :{{ $transaksi->NoKamar }}</h5>
                    <h5>Tipe Kamar      :{{ $transaksi->Tipekamar }}</h5>
                    <h5>Harga           :{{ $transaksi->subtotal }}</h5><br><br>
                @endforeach
            </div>
            <div class="table-responsive-lg">
                <table class="table table-striped table-bordered table-hover" id="example">
                    <thead class="table-dark">
                        <tr>
                            <th>Jenis</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($listTransaksi) <= 0)
                        <tr>
                            <td colspan="6">Tidak ada data transaksi</td>
                        </tr>
                        @else
                        @foreach ($listTransaksi as $transaksi)
                            <tr>
                                <td>Kamar</td>
                                <td>1</td>
                                <td>{{ "Rp. " . number_format($transaksi->subtotal) }}</td>
                                {{-- <td>{{ $transaksi->Tglcin }}</td>
                                @if ($transaksi->Tipekamar == "S01")
                                    <td>Standard</td>
                                @elseif ($transaksi->Tipekamar == "D01")
                                    <td>Deluxe</td>
                                @endif

                                <td>{{ $transaksi->Jamcin }}</td>
                                <td>{{ $transaksi->NoKamar }}</td>
                                <td>{{ $transaksi->Tglcout }}</td> --}}
                                <td>{{ "Rp. " . number_format($transaksi->subtotal) }}</td>

                            </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
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

        function printDiv(divName) {
            document.getElementById('print').style.display = "block";
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
            document.getElementById('print').style.display = "none";
        }
        // $(document).ready(function() {
        //     $('#example').DataTable();
        // }
        // });
    </script>
  </body>
  <!-- End Body -->
</html>

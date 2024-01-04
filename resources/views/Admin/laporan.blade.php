<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Laporan</title>
        <!-- Bootstrap Styles-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FontAwesome Styles-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Morris Chart Styles-->
        <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- Custom Styles-->
        <link href="assets/css/custom-styles.css" rel="stylesheet" />
        <!-- Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css">
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css"> --}}

        {{-- wayahe --}}
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="text/css" media="screen" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

    </head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboardAdmin"><strong>Hotel Kontainer</strong></a>

		        <div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
            </div>
        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="{{ url("/dashboardAdmin") }}"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ url("/transaksiAdmin") }}"><i class="fa fa-exchange"></i> Transaksi</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-fw fa-user"></i> User<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ url("/listCustomerAdmin") }}">Customer</a>
                            </li>
                            <li>
                                <a href="{{ url("/listResepsionisAdmin") }}">Resepsionis</a>
                            </li>
                            <li>
                                <a href="{{ url("/listRestoAdmin") }}">Resto</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url("/tambahKamar") }}"><i class="fa fa-archive"></i> Kamar</a>
                    </li>
                    <li>
                        <a class="active-menu" href="{{ url("/tambahFasilitas") }}"><i class="fa fa-building-o"></i> Fasilitas</a>
                    </li>
                    <li>
                        <a href="{{ url("/tambahVoucher") }}"><i class="fa fa-gift"></i> Voucher</a>
                    </li>
                    <li>
                        <a href="{{ url("/laporan") }}"><i class="fa fa-file"></i> Laporan</a>
                    </li>
                    <li>
                        <a href="{{ url("/logout") }}"><i class="fa fa-sign-out"></i> Logout</a>
                    </li>
                </ul>

            </div>

        </nav>
        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    Hasil Akhir Laporan
                </h1>
            </div>
            <div id="page-inner">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <h4>Laporan Pemasukan</h4>
                            <input type="button" style="margin-left:95%" class="btn btn-primary" onclick="printDiv('printPemasukan')" value="Print" /><br>
                        </div>
                        <div class="form-group">
                            <h4>Laporan booking & checkin</h4>
                            <input type="button" style="margin-left:95%" class="btn btn-primary" onclick="printDiv('printCheckin')" value="Print" /><br>
                        </div>
                        <div class="form-group">
                            <h4>Laporan Peminjaman Fasilitas</h4>
                            <input type="button" style="margin-left:95%" class="btn btn-primary" onclick="printDiv('printFasilitas')" value="Print" /><br>
                        </div>
                        <div class="form-group">
                            <h4>Laporan Pemakaian Kamar</h4>
                            <input type="button" style="margin-left:95%" class="btn btn-primary" onclick="printDiv('printKamar')" value="Print" /><br>
                        </div>
                        <div class="form-group">
                            <h4>Laporan Pemakaian Voucher</h4>
                            <input type="button" style="margin-left:95%" class="btn btn-primary" onclick="printDiv('printVoucher')" value="Print" /><br>
                        </div>
                    </form>
                </div>

                {{-- LAPORAN PEMASUKAN --}}

                <div id="printPemasukan" style="display:none;">
                    <h1 style="text-align:center;" id="report">Laporan Pemasukan</h1>
                    <br>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="example">
                            <thead>
                                <tr>
                                    <th>Kode Checkout</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Grandtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($laporanPemasukan) <= 0)
                                <tr>
                                    <td colspan="3">Tidak ada data laporan pemasukan</td>
                                </tr>
                                @else
                                @foreach ($laporanPemasukan as $masuk)
                                    <tr>
                                        <td>{{ $masuk->Kodecheckout }}</td>
                                        <td>{{ $masuk->Tglcheckout }}</td>
                                        <td>{{ $masuk->grandtotal }}</td>
                                    </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- LAPORAN BOOKING & CHECKIN --}}

                <div id="printCheckin" style="display:none;">
                    <h1 style="text-align:center;" id="report">Laporan Booking & Checkin</h1>
                    <br>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="example">
                            <thead>
                                <tr>
                                    <th>Email Customer</th>
                                    <th>Nama Customer</th>
                                    <th>Total Transaksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($laporanCheckin) <= 0)
                                <tr>
                                    <td colspan="4">Tidak ada data laporan booking & checkin</td>
                                </tr>
                                @else
                                @foreach ($laporanCheckin as $checkin)
                                    <tr>
                                        <td>{{ $checkin->email }}</td>
                                        <td>{{ $checkin->nama }}</td>
                                        <td>{{ count($checkin->Kodecust) }}</td>
                                    </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                  {{-- LAPORAN PEMINJAMAN FASILITAS --}}

                  <div id="printFasilitas" style="display:none;">
                    <h1 style="text-align:center;" id="report">Laporan Peminjaman Fasilitas</h1>
                    <br>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="example">
                            <thead>
                                <tr>
                                    <th>Nama Fasilitas</th>
                                    <th>Total Peminajaman Fasilitas</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($laporanfasilitas) <= 0)
                                <tr>
                                    <td colspan="5">Tidak ada data laporan peminjaman fasilitas</td>
                                </tr>
                                @else
                                @foreach ($laporanfasilitas as $fasilitas)
                                    <tr>
                                        <td>{{ $fasilitas->Namafasilitas }}</td>
                                        <td>{{ $fasilitas->Jumlah }}</td>
                                    </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                  {{-- LAPORAN PEMAKAIAN KAMAR --}}

                  <div id="printKamar" style="display:none;">
                    <h1 style="text-align:center;" id="report">Laporan Pemakaian Kamar</h1>
                    <br>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="example">
                            <thead>
                                <tr>
                                    <th>Jenis Kamar</th>
                                    <th>Total Peminjaman Kamar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($laporanCheckin) <= 0)
                                <tr>
                                    <td colspan="5">Tidak ada data laporan pemakaian kamar</td>
                                </tr>
                                @else
                                @foreach ($laporanCheckin as $kamar)
                                    <tr>
                                        @if ($kamar->Tipekamar == "S01")
                                            <td>Standard</td>
                                            <td>{{ count($std) }}</td>

                                        @elseif ($kamar->Tipekamar == "D01")
                                            <td>Deluxe</td>
                                            <td>{{ count($dlx) }}</td>

                                        @endif
                                    </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                  {{-- LAPORAN PEMAIKAIAN VOUCHER --}}

                  <div id="printVoucher" style="display:none;">
                    <h1 style="text-align:center;" id="report">Laporan Pemakaian Voucher</h1>
                    <br>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="example">
                            <thead>
                                <tr>
                                    <th>Kode Voucher</th>
                                    <th>Total Pemakaian Voucher</th>
                                </tr>
                            </thead>
                            {{-- <tbody>
                                @if (count($listTransaksi) <= 0)
                                <tr>
                                    <td colspan="5">Tidak ada data transaksi</td>
                                </tr>
                                @else
                                @foreach ($listTransaksi as $transaksi)
                                    <tr>
                                        <td>{{ $transaksi->Kodecheckout }}</td>
                                        <td>{{ $transaksi->Kodecin }}</td>
                                        <td>{{ $transaksi->Tglcheckout }}</td>
                                        <td>{{ "Rp. " . number_format($transaksi->grandtotal) }}</td>
                                    </tr>
                                @endforeach
                                @endif
                            </tbody> --}}
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>

    {{-- DISABLE --}}
    {{-- <script src="assets/js/jquery-1.10.2.js"></script> --}}


    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>


	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>

	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );

        function printDiv(divName) {
            document.getElementById('printPemasukan').style.display = "block";
            document.getElementById('printCheckin').style.display = "block";
            document.getElementById('printFasilitas').style.display = "block";
            document.getElementById('printKamar').style.display = "block";
            document.getElementById('printVoucher').style.display = "block";
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
            document.getElementById('printPemasukan').style.display = "none";
            document.getElementById('printCheckin').style.display = "none";
            document.getElementById('printFasilitas').style.display = "none";
            document.getElementById('printKamar').style.display = "none";
            document.getElementById('printVoucher').style.display = "none";
        }
    </script>
</body>
</html>

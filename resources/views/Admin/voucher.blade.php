<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Add Voucher</title>
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
                        <a href="{{ url("/tambahFasilitas") }}"><i class="fa fa-building-o"></i> Fasilitas</a>
                    </li>
                    <li>
                        <a class="active-menu" href="{{ url("/tambahVoucher") }}"><i class="fa fa-gift"></i> Voucher</a>
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
                    Tambah Voucher
                </h1>
            </div>
            <div id="page-inner">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="kode" value="{{ $result }}" readonly>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Voucher" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="potongan" placeholder="Potongan Harga" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" name="tglAwal" placeholder="Tanggal Awal">
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" name="tglAkhir" placeholder="Tanggal Akhir">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="kuota" placeholder="Jumlah kuota" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-success">Tambah Voucher</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 5%">
                    <div class="panel panel-default">
                        <center><div class="panel-heading">
                            <h3 style="font-weight: bold">List Voucher</h3>
                        </div></center>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="example">
                                    <thead>
                                        <tr>
                                            <th>Kode Voucher</th>
                                            <th>Nama Voucher</th>
                                            <th>Tanggal Awal</th>
                                            <th>Tanggal Akhir</th>
                                            <th>Potongan Voucher</th>
                                            <th>Kuota</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($listVoucher) <= 0)
                                            <tr>
                                                <td colspan="7">Tidak ada data Voucher</td>
                                            </tr>
                                        @else
                                            @foreach ($listVoucher as $Voucher)
                                                <tr>
                                                    <td>{{ $Voucher->kode }}</td>
                                                    <td>{{ $Voucher->nama }}</td>
                                                    <td>{{ $Voucher->tglAwal }}</td>
                                                    <td>{{ $Voucher->tglAkhir }}</td>
                                                    <td>{{ $Voucher->potongan }}</td>
                                                    <td>{{ $Voucher->kuota }}</td>
                                                    <td>
                                                        <a href="{{ url("detailVoucherAdmin/".$Voucher->kode."") }}"><button class="btn btn-primary" type="button">Edit</button></a>
                                                        <a href="{{ url("deleteVoucher/".$Voucher->kode."") }}"><button class="btn btn-danger" type="button">Delete</button></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ url("/disableVoucher")}}" style="font-style: italic; float: right">Lihat Disable Voucher</a>
            </div>
        </div>
    </div>

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
    </script>
</body>
</html>

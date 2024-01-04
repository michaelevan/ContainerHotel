<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
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
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a class="active-menu" href="{{ url("/dashboardAdmin") }}"><i class="fa fa-dashboard"></i> Dashboard</a>
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
        <!-- /. NAV SIDE  -->

		<div id="page-wrapper">
		    <div class="header">
                <h1 class="page-header">
                    Dashboard <small>Selamat Datang {{ session()->get("login")->nama}}</small>
                </h1>
		    </div>
            <div id="page-inner">

                <!-- /. ROW  -->

		{{-- <div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Profit</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="82" ><span class="percent">82%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Sales</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="55" ><span class="percent">55%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Customers</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="84" ><span class="percent">84%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>No. of Visits</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="46" ><span class="percent">46%</span>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder blue">
                    <div class="panel-left pull-left blue">
                        <i class="fa fa-eye fa-5x"></i>

                    </div>
                    <div class="panel-right">
                        <h3>16,150</h3>
                    <strong> Daily Visits</strong>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder blue">
                    <div class="panel-left pull-left blue">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>

                    <div class="panel-right">
                    <h3>25,550 </h3>
                    <strong> Sales</strong>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder blue">
                    <div class="panel-left pull-left blue">
                        <i class="fa fa fa-comments fa-5x"></i>

                    </div>
                    <div class="panel-right">
                    <h3>11,225 </h3>
                    <strong> Comments </strong>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder blue">
                    <div class="panel-left pull-left blue">
                        <i class="fa fa-users fa-5x"></i>

                    </div>
                    <div class="panel-right">
                    <h3>72,525 </h3>
                    <strong>No. of Visits</strong>

                    </div>
                </div>
            </div>
        </div> --}}

        {{-- <div class="row">
        <div class="col-md-5">
                <div class="panel panel-default">
                <div class="panel-heading">
                    Line Chart
                </div>
                <div class="panel-body">
                    <div id="morris-line-chart"></div>
                </div>
            </div>
            </div>

                <div class="col-md-7">
            <div class="panel panel-default">
            <div class="panel-heading">
                        Bar Chart Example
                    </div>
                    <div class="panel-body">
                        <div id="morris-bar-chart"></div>
                    </div>

            </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    Area Chart
                </div>
                <div class="panel-body">
                    <div id="morris-area-chart"></div>
                </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Donut Chart Example
                    </div>
                    <div class="panel-body">
                        <div id="morris-donut-chart"></div>
                    </div>
                </div>
            </div>

        </div> --}}

                <!-- /. ROW  -->

                {{-- <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Tasks Panel
                            </div>
                            <div class="panel-body">
                                <div class="list-group">

                                    <a href="#" class="list-group-item">
                                        <span class="badge">7 minutes ago</span>
                                        <i class="fa fa-fw fa-comment"></i> Commented on a post
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">16 minutes ago</span>
                                        <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">36 minutes ago</span>
                                        <i class="fa fa-fw fa-globe"></i> Invoice 653 has paid
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has been added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1.23 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">yesterday</span>
                                        <i class="fa fa-fw fa-globe"></i> Saved the world
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">More Tasks <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div> --}}
                <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
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

      </script>

</body>

</html>

@extends('Resto.Awal')
@section('title')
    <title>Home Resto</title>
@endsection
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

<style>
/* .card{
    width: 95%;
    height: 85vh;
    border: 2px solid black;
    margin: 25px;
    padding: 30px 20px;
    overflow: auto;
}

h2{
    font-size: 24px;
}

.field{
    margin: 20px 0px;
}

table{
    width: 100%;
    border-collapse: collapse;
}

tr{
    height: 8vh;
}
td, th{
    border: 2px solid black;
    font-size: 18px;
} */

</style>

@section('content')
<br>
<br>
<br>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3>List Menu Pesanan Customer</h3>
    </div>
    <div class="panel-body" style="margin: 5%">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Menu</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <th>Alexandar</th>
                        <th>Nasi goreng</th>
                        <th>Tidak pedas</th>
                        <th><Button> Done </Button></th>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>


{{-- <br>
<div class="card">
    <h2>To Do List</h2>
    <div class="field">
        <table id="toDoList">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Menu</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="tbodyTodoList">
                <tr class="box" id="box">
                    <th>Alexandar</th>
                    <th>Nasi goreng</th>
                    <th>Tidak pedas</th>
                    <th><Button> Done </Button></th>
                </tr>
                <tr class="box" id="box">
                    <th>Alexandar</th>
                    <th>Nasi goreng</th>
                    <th>Tidak pedas</th>
                    <th><Button> Done </Button></th>
                </tr>
                <tr class="box" id="box">
                    <th>Alexandar</th>
                    <th>Nasi goreng</th>
                    <th>Tidak pedas</th>
                    <th><Button> Done </Button></th>
                </tr>
                <tr class="box" id="box">
                    <th>Alexandar</th>
                    <th>Nasi goreng</th>
                    <th>Tidak pedas</th>
                    <th><Button> Done </Button></th>
                </tr>
                <tr class="box" id="box">
                    <th>Alexandar</th>
                    <th>Nasi goreng</th>
                    <th>Tidak pedas</th>
                    <th><Button> Done </Button></th>
                </tr>
                <tr class="box" id="box">
                    <th>Alexandar</th>
                    <th>Nasi goreng</th>
                    <th>Tidak pedas</th>
                    <th><Button> Done </Button></th>
                </tr>
                <tr class="box" id="box">
                    <th>Alexandar</th>
                    <th>Nasi goreng</th>
                    <th>Tidak pedas</th>
                    <th><Button> Done </Button></th>
                </tr>
                <tr class="box" id="box">
                    <th>Alexandar</th>
                    <th>Nasi goreng</th>
                    <th>Tidak pedas</th>
                    <th><Button> Done </Button></th>
                </tr>

            </tbody>
        </table>
    </div>
</div> --}}

@endsection



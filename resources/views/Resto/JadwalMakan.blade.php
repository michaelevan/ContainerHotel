@extends('Resto.Awal')
@section('title')
    <title>Jadwal Makan</title>
@endsection


<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"/>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}


<style>
    .card {
        width: 100%;
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 23px;
        margin-top: 50px

    }

    .card-product-grid .info-wrap {
        overflow: hidden;
        padding: 18px 20px
        }

    h3{
        text-align: center;
    }

    .center {
    text-align: center;
}
</style>


@section('content')
<br>
<br>

<div class="container d-flex justify-content-center" style="margin-top: 5%" id="selectoption">
    <select class="form-select" aria-label="Default select example" name="pilihKategori" id="pilihKategori">
       <option style="text-align: center">--Select--</option>
       @foreach($listKategori as $kategori)
            <option  style="text-align: center" id="selectKategori">{{ $kategori->kategorimenu }}</option>
        @endforeach
    </select>
</div>



<div id="isian" class="container d-flex justify-content-center" >
    <div id="appetizer" >
        <figure class="card card-product-grid card-lg" style="margin: 2%" >
            <figcaption class="info-wrap">
                <h3>Appetizer</h3>
                <table class="table table-striped table-bordered table-hover" id="Tappetizer">
                    <thead>
                        <tr>
                            <th style="display: none">Kode</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Pilih</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($apetaser) <= 0)
                        <tr>
                            <td colspan="3">Tidak ada Resepsionis</td>
                        </tr>
                        @else
                            @foreach ($apetaser as $ap)
                                <tr>
                                    <td style="display: none">{{$ap->Kodemenu}}</td>
                                    <td>{{ $ap->Namamenu }}</td>
                                    <td>{{ $ap->Harga }}</td>
                                    <td><input type="checkbox"  id="Appetizer" name="Appetizer" value={{$ap->Kodemenu}}></td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </figcaption>
        </figure>
    </div>

    <div id="main_course">
        <figure class="card card-product-grid card-lg" style="margin: 2%">
            <figcaption class="info-wrap">
                <h3>Main Course</h3>
                <table class="table table-striped table-bordered table-hover" id="Tmain">
                    <thead>
                        <tr>
                            <th style="display: none">Kode</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Pilih</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($maincourse) <= 0)
                        <tr>
                            <td colspan="3">Tidak Ada Menu</td>
                        </tr>
                        @else
                            @foreach ($maincourse as $mc)
                                <tr>
                                    <td style="display: none">{{$ap->Kodemenu}}</td>
                                    <td>{{ $mc->Namamenu }}</td>
                                    <td>{{ $mc->Harga }}</td>
                                    <td><input type="checkbox" id="Main_Course" name="Main_Course" value={{ $mc->Kodemenu }}></td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </figcaption>
        </figure>
    </div>
    <div id="dessert">
        <figure class="card card-product-grid card-lg" style="margin: 2%">
            <figcaption class="info-wrap">
                <h3>Dessert</h3>
                <table class="table table-striped table-bordered table-hover" id="Tdessert">
                    <thead>
                        <tr>
                            <th style="display: none">Kode</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Pilih</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($dessert) <= 0)
                        <tr>
                            <td colspan="3">Tidak Ada Menu</td>
                        </tr>
                        @else
                            @foreach ($dessert as $ds)
                                <tr>
                                    <td style="display: none">{{$ap->Kodemenu}}</td>
                                    <td>{{ $ds->Namamenu }}</td>
                                    <td>{{ $ds->Harga }}</td>
                                    <td><input type="checkbox" id="Dessert" name="Dessert" value={{ $ds->Kodemenu }}></td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </figcaption>
        </figure>
    </div>
    <div id="beverages">
        <figure class="card card-product-grid card-lg" style="margin: 2%">
            <figcaption class="info-wrap">
                <h3>Beverages</h3>
                <table class="table table-striped table-bordered table-hover" id="Tbeverages">
                    <thead>
                        <tr>
                            <th style="display: none">Kode</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Pilih</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($beverages) <= 0)
                        <tr>
                            <td colspan="3">Tidak Ada Menu</td>
                        </tr>
                        @else
                            @foreach ($beverages as $bv)
                                <tr>
                                    <td style="display: none">{{$ap->Kodemenu}}</td>
                                    <td>{{ $bv->Namamenu }}</td>
                                    <td>{{ $bv->Harga }}</td>
                                    <td><input type="checkbox" id="Beverages" name="Beverages" value={{ $bv->Kodemenu }}></td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </figcaption>
        </figure>
    </div>
</div>
<form action="" method="POST">
    @csrf
    <div class="form-group">
        <input type="text" name="cart" id="carts" hidden>
    </div>
    <div class="form-group" style="margin-left: 8%; margin-right: 8%">
        <button onclick="tambah()" class="btn btn-success" style="width: 100%;">ADD</button>
    </div>
</form>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script>

    $(function(){
        $("#appetizer").hide();
        $("#main_course").hide();
        $("#dessert").hide();
        $("#beverages").hide();

        $('#pilihKategori').on("change",function(){
            var terpilih = $('#pilihKategori').find(":selected").text();
            if(terpilih=="--Select--"){
                $("#appetizer").hide();
                $("#main_course").hide();
                $("#dessert").hide();
                $("#beverages").hide();
            };

            if(terpilih=="appetizer"){
                $("#main_course").hide();
                $("#dessert").hide();
                $("#beverages").hide();
                $("#appetizer").show();
            };

            if(terpilih=="main course"){
                $("#appetizer").hide();
                $("#dessert").hide();
                $("#beverages").hide();
                $("#main_course").show();
            };

            if(terpilih=="dessert"){
                $("#appetizer").hide();
                $("#main_course").hide();
                $("#beverages").hide();
                $("#dessert").show();
            };

            if(terpilih=="beverages"){
                $("#appetizer").hide();
                $("#main_course").hide();
                $("#dessert").hide();
                $("#beverages").show();
            };
        });
    });


    function tambah() {
        var message = "";
        $("#Tappetizer input[type=checkbox]:checked").each(function() {
            var rowAp = $(this).closest("tr")[0];
            message += rowAp.cells[0].innerHTML;
        });
        $("#Tmain input[type=checkbox]:checked").each(function() {
            var rowM = $(this).closest("tr")[0];
            message += rowM.cells[0].innerHTML;
        });
        $("#Tdessert input[type=checkbox]:checked").each(function() {
            var rowD = $(this).closest("tr")[0];
            message += rowD.cells[0].innerHTML;
        });
        $("#Tbeverages input[type=checkbox]:checked").each(function() {
            var rowB = $(this).closest("tr")[0];
            message += rowB.cells[0].innerHTML;
        });
        alert(message);
        $('#carts').val(message);
    }

</script>


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
@endsection

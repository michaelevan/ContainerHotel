<?php
use Illuminate\Support\Facades\DB;


if ($_POST["action"] == "tes") {
    $jenis = $_POST["jenis"];
    $kamar = DB::table('kamar')->where('Kodejenis',$jenis)->get();
    echo $kamar;
    if (isset($_POST['jenis'])) {
        $jenis = $_POST['jenis'];
    }
    // foreach ($kamar as $key) {
    //     echo "
    //     // <option value="{{$data->Kodefasilitas">{{$data->Namafasilitas}}</option>
    //     ";
    // }
}
?>

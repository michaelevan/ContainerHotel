<?php

namespace App\Http\Controllers;

use App\Models\Checkin;
use App\Models\Checkout;
use App\Models\Customer;
use App\Models\Kamar;
use App\Models\Users;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResepsionisController extends Controller
{
    public function dashboard(){
        $datacheckin = DB::table('hcheckin')->where('status',1)->get();
        // dd(count($datacheckin));
        return view("Resepsionis.dashboard",[
            "datacheckin" => $datacheckin
        ]);
    }

    public function kamar(){
        $datakamar = DB::table('kamar')->get();

        // dd(count($datacheckin));
        return view("Resepsionis.kamar",[
            "datakamar" => $datakamar
        ]);
    }

    public function checkin()
    {

        $datates = DB::table('kamar')->get();
        $standard = DB::table('kamar')->where('Kodejenis','S01')->where('Status', 1)->get();
        $deluxe = DB::table('kamar')->where('Kodejenis','D01')->where('Status', 1)->get();
        return view("Resepsionis.tambahcheckin",[
            "datakamar" => $datates,
            "standard" => $standard,
            "deluxe" => $deluxe
        ]);
    }


    public function tambahcheckin(Request $request){

        if ($request->validate([
            'nama' => ['required'],
            'asal' => ['required'],
            'NIK' => ['required', 'numeric', 'min:16'],
            'notelp' => ['required', 'numeric', 'min:12']
        ],
        [
            'nama.required' => 'Nama Tidak Boleh Kosong',
            'asal.required' => 'Asal Tidak Boleh Kosong',
            'NIK.required' => 'NIK Tidak Boleh Kosong',
            'NIK.numeric' => 'NIK Harus Angka',
            'NIK.min' => 'NIK Harus 16 Angka',
            'notelp.required' => 'No Telp Tidak Boleh Kosong',
            'notelp.numeric' => 'No Telp Harus Angka',
            'notelp.min' => 'No Telp Harus 12 Angka',
        ])) {
            $nama = $request->nama;
            $asal = $request->asal;
            $nik = $request->NIK;
            $notelp = $request->notelp;
            $tipe = $request->jenis;
            if ($tipe == "S01") {
                $nokamar = $request->nokamarstandard;
            }
            else if ($tipe == "D01") {
                $nokamar = $request->nokamardeluxe;
            }

            $tglcheckin = new DateTime($request->tglcheckin);
            $tglcheckout = new DateTime($request->tglcheckout);
            $tanggalcin = date_format($tglcheckin, "Y-m-d");
            $tanggalcout = date_format($tglcheckout, "Y-m-d");

            $customer = new Customer();
            $customer->nama = $nama;
            $customer->NIK = $nik;
            $customer->asal = $asal;
            $customer->telepon = $notelp;
            $customer->save();


            $kodecust = DB::table('customer')->where('nama',$nama)->value('kodecust');
            $updatekamar = DB::table('kamar')->where("nokamar", $nokamar)->update(["Status" => 0]);
            $biayakamar = DB::table('kamar')->where('nokamar',$nokamar)->value('harga');

            $interval = $tglcheckin->diff($tglcheckout);
            $finaldays = $interval->format('%a');
            $biayakamar = DB::table('kamar')->where('nokamar',$nokamar)->value('harga');
            $total = $biayakamar * $finaldays;

            $checkin = new Checkin();
            $checkin->Kodecust = $kodecust;
            $checkin->Tglcin = $tanggalcin;
            $checkin->TipeKamar = $tipe;
            $checkin->Nokamar = $nokamar;
            $checkin->Tglcout = $tanggalcout;
            $checkin->Subtotal = $total;
            $checkin->Status = 1;

            $checkin->save();

            return redirect('/tambahcheckin');
        }

    }
    public function detailcheckin($id){
        $datacheckin = DB::table('hcheckin')->where('kodecin',$id)->get();
        $standard = DB::table('kamar')->where('Kodejenis','S01')->where('Status', 1)->get();
        $deluxe = DB::table('kamar')->where('Kodejenis','D01')->where('Status', 1)->get();
        return view("Resepsionis.detailcheckin",[
            "datacheckin" => $datacheckin,
            "standard" => $standard,
            "deluxe" => $deluxe
        ]);
    }
    public function checkout($id){
        $datacheckin = DB::table('hcheckin')
        ->join('customer', 'hcheckin.Kodecust', '=', 'customer.Kodecust')
        ->select(
            'hcheckin.Kodecin',
            'hcheckin.Tglcin',
            'hcheckin.Tipekamar',
            'hcheckin.Nokamar',
            'hcheckin.Tglcout',
            'hcheckin.subtotal',
            'customer.Nama',
        )
        ->where('kodecin',$id)
        ->get();

        $datacheckin = DB::table('hcheckin')->where('kodecin',$id)->get();
        $tglcin = $datacheckin[0]->Tglcin;
        $tglcout = $datacheckin[0]->Tglcout;
        $tglcin1 = new DateTime($tglcin);
        $tglcout1 = new DateTime($tglcout);
        $interval = $tglcin1->diff($tglcout1);

        $finaldays = $interval->format('%a');
        $biayakamar = DB::table('kamar')->where('nokamar',$datacheckin[0]->NoKamar)->value('harga');
        $total = $biayakamar * $finaldays;
        $detail = "";
        if ($datacheckin[0]->Tipekamar == "S01") {
            $detail = "Kamar Standard x ". $finaldays . " = Rp. " . $total;
        }
        else if ($datacheckin[0]->Tipekamar == "D01") {
            $detail = "Kamar Deluxe x ". $finaldays . " = Rp. " . $total;
        }

        return view("Resepsionis.checkout",[
            "datacheckin" => $datacheckin,
            "detail" => $detail,
            "listTransaksi" => $datacheckin,
        ]);



    }
    public function confirmCheckout($id){
        $datacheckin = DB::table('hcheckin')->where('kodecin',$id)->get();
        $biayakamar = DB::table('kamar')->where('nokamar',$datacheckin[0]->NoKamar)->value('harga');

        $tglcin = $datacheckin[0]->Tglcin;
        $tglcout = $datacheckin[0]->Tglcout;
        $tglcin1 = new DateTime($tglcin);
        $tglcout1 = new DateTime($tglcout);
        $interval = $tglcin1->diff($tglcout1);
        $finaldays = $interval->format('%a');

        $checkout = new Checkout();
        $checkout->Kodecin = $id;
        $checkout->grandtotal =$biayakamar * $finaldays;
        $checkout->save();
        $updateUser = DB::table('hcheckin')->where("kodecin", $id)->update(["Status" => 2]);
        $updatekamar = DB::table('kamar')->where("nokamar", $datacheckin[0]->NoKamar)->update(["Status" => 1]);
        return redirect('/dashboardResepsionis');
    }

    public function booking(){
        $databooking = DB::table('hcheckin')->where('status',0)->get();
        // dd(count($datacheckin));
        return view("Resepsionis.customer",[
            "databooking" => $databooking
        ]);
    }

    public function tambahfasilitas(){
        $datakamar = DB::table('kamar')->where('status',0)->get();
        $datafasilitas = DB::table('fasilitas')->get();
        return view("Resepsionis.tambahfasilitas",[
            "datakamar" => $datakamar,
            "datafasilitas" => $datafasilitas
        ]);
    }

    public function detailbooking($id){

        $datacheckin = DB::table('hcheckin')->where('kodecin',$id)->get();
        session()->put("kodecheckin", $datacheckin[0]);
        $datakamar = DB::table('kamar')->where('status',1)->get();
        $standard = DB::table('kamar')->where('Kodejenis','S01')->where('Status', 1)->get();
        $deluxe = DB::table('kamar')->where('Kodejenis','D01')->where('Status', 1)->get();
        // $updatecheckin = DB::table('kamar')->where("nokamar", $datacheckin[0]->NoKamar)->update(["Status" => 1]);
        return view("Resepsionis.detailbooking",[
            "datacheckin" => $datacheckin,
            "standard" => $standard,
            "deluxe" => $deluxe
        ]);
    }
    public function checkinbooking(Request $request){
        $id = session()->get("kodecheckin")->Kodecin;
        $asal = $request->asal;
        $nik = $request->NIK;
        $notelp = $request->notelp;
        $tipe = $request->jenis;
        if ($tipe == "S01") {
            $nokamar = $request->nokamarstandard;
        }
        else if ($tipe == "D01") {
            $nokamar = $request->nokamardeluxe;
        }
        $datacheckin = DB::table('hcheckin')->where('kodecin',$id)->get();

        $updatecustomer = DB::table('customer')->where("Kodecust", session()->get("kodecheckin")->Kodecust)->update(["Asal" => $asal, "NIK" => $nik, "Telepon" => $notelp]);
        $updatecheckin = DB::table('hcheckin')->where("kodecin", $id)->update(["Status" => 1 ,"NoKamar" => $nokamar]);
        $updatekamar = DB::table('kamar')->where("nokamar", $nokamar)->update(["Status" => 0]);
        return redirect('/dashboardResepsionis');
    }

    public function updatecheckin($id, Request $request){
        $datacheckin = DB::table('hcheckin')->where('kodecin',$id)->get();
        $tglcheckin = new DateTime($request->tglcheckin);
        $tanggalcin = date_format($tglcheckin, "Y-m-d");
        $tglcheckout = new DateTime($request->tglcheckout);
        $tanggalcout = date_format($tglcheckout, "Y-m-d");
        $interval = $tglcheckin->diff($tglcheckout);
        $finaldays = $interval->format('%a');
        $biayakamar = DB::table('kamar')->where('Nokamar',$datacheckin[0]->NoKamar)->value('harga');
        $total = $biayakamar * $finaldays;
        $extend = DB::table('hcheckin')->where("Kodecin", $id)->update(["Tglcout" => $tanggalcout, "subtotal" => $total]);
        return redirect('/dashboardResepsionis');

    }
}

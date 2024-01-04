<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Carbon\Carbon;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function formProfile(){
        $dataCust = DB::table('customer')
        ->join('users', 'customer.fk_userid', '=', 'users.userid')
        ->select(
            'users.email',
            'users.nama',
            'customer.NIK',
            'customer.Asal',
            'customer.Telepon',
        )
        ->where('fk_userid', session()->get("login")->userid)
        ->get();
        $datacustomer = [];

        foreach ($dataCust as $obj) {
            $datacustomer[]=(array)$obj;
        }
        return view("customer.customer_profile", [
            "dataCust" => $datacustomer,
        ]);
    }

    public function addBooking(Request $request){

        if ($request->submit == "btn_checkVoucher") {

        }
        $nama = DB::table('users')->where('userid',session()->get("login")->userid)->value('nama');
        $customer = new Customer();
        $customer->nama = $nama;
        $customer->NIK = "";
        $customer->asal = "";
        $customer->telepon = "";
        $customer->save();

        $kodecust = DB::table('customer')->where('nama',$nama)->value('kodecust');

        $result = DB::table('hcheckin')->insert(
            [
                "KodeCust" => $kodecust,
                "Tglcin" => $request->input("tglcin"),
                "TipeKamar" => $request->input("rb"),
                "NoKamar" => "",
                "Tglcout" => $request->input("tglcout"),
                "Subtotal" => $request->input("subtotal"),
                "Status" => 0
            ]
        );
        if ($result){
            return redirect()->back()->with("success", "Berhasil Update Profile!");
        }
        else{
            return redirect()->back()->withErrors("Gagal Update Profile!");
        }
    }

    public function profileData(Request $request){
        // $request->validate([
        //     "nama" => "required|alpha|max:30",
        //     "pass" => "required|alpha_num|max:30",
        //     "pass_confirmation" => "required",
        //     "NIK" => "required|numeric|max:16",
        //     "asal" => "required|alpha",
        //     "telepon" => "required|numeric|max:11",
        // ]);

        // dd($request->telepon);
        $result = DB::table('users')->where("userid",session()->get("login")->userid)->update([
            "email" => $request->email,
            "nama" => $request->nama,
            "password" => $request->pass,
        ]);

        $akhir = DB::table('customer')->where("fk_userid",session()->get("login")->userid)->update([
            "Nama" => $request->nama,
            "NIK" => $request->NIK,
            "Asal" => $request->asal,
            "Telepon" => $request->telepon,
        ]);

        if ($result && $akhir){
            session()->forget("login");
            session()->put("login", $akhir);
            return redirect()->back()->with("success", "Berhasil Update Profile!");
        }
        else{
            return redirect()->back()->withErrors("Gagal Update Profile!");
        }
    }
}

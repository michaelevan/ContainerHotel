<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestoController extends Controller
{
    public function formHomeResto() {
        return view("Resto.HomeResto");
    }

    // public function homeResto() {
    //     return view("Resto.HomeResto");
    // }

    public function formMenuToday() {
        return view("Resto.MenuToday");
    }

    // public function menuToday() {
    //     return view("Resto.MenuToday");
    // }

    public function formJadwalMakan() {
        $listKategori = DB::table('kategorimenu')->get();

        $apetaser = DB::table('menu')->where('Kodekategorimenu', 'KM001') ->get();
        $maincourse = DB::table('menu')->where('Kodekategorimenu', 'KM002') ->get();
        $dessert = DB::table('menu')->where('Kodekategorimenu', 'KM003') ->get();
        $beverages = DB::table('menu')->where('Kodekategorimenu', 'KM004') ->get();

        return view("Resto.JadwalMakan", [
            "listKategori" => $listKategori,
            "apetaser" => $apetaser,
            "dessert" => $dessert,
            "maincourse" => $maincourse,
            "beverages" => $beverages,

        ]);
    }



    public function TambahOrder(Request $request) {
        $card = $request->cart;
        $split = str_split($card,4);

        dd($split);
        foreach($split as $pilihan){
            $nemuuu = DB::table('menu')->where('Kodemenu',$pilihan)->get()->first();
            $result = DB::table('detailmenu')->where('Kodemenu',$pilihan)->insert([
                    "Kodemenu" => $pilihan,
                    "Jumlah" => 1,
                    "Harga" => $nemuuu->Harga,
                    "Subtotal" => $nemuuu->Harga
                ]);
        }
        if ($result){
            return redirect()->back()->with("success", "Berhasil unbanned user");
        }
        else{
            return redirect()->back()->withErrors("Gagal unbanned user");
        }
    }

    public function formAddMenu() {
        $listVoucher = DB::table('menu')->get();
        $kodeVoucher = DB::table('menu')->select('Kodemenu')->orderByDesc('Kodemenu')->value('Kodemenu');

        $belakang = strrev($kodeVoucher);
        $depan = substr($belakang, 3);
        $arr = substr($kodeVoucher, 1);
        $tempVoucher = $arr + 1;
        $strKode = (string)$tempVoucher;

        if ($tempVoucher < 9) {
            $result = $depan . "00" . $strKode;
        }
        else if ($tempVoucher < 99  )  {
            $result = $depan . "0" . $strKode;
        }


        // dd($listMenu);
        $listKategori = DB::table('kategorimenu')->get();

        return view("Resto.AddMenu", [
            "listVoucher" => $listVoucher,
            "listKategori" => $listKategori,
            "result" => $result
        ]);
    }

    public function addMenu(Request $request) {
        $request->validate([
            "kodemenu" => "required",
            "kategori" => "required",
            "harga" => "required",
            "nama" => "required",
        ]);

        $menucode =  $request->kodemenu;
        $kategori = $request->kategori;
        $harga = $request->harga;
        $nama = $request->nama;

        $add = new Menu();
        $add->Kodemenu = $menucode;
        $add->Kodekategorimenu = $kategori;
        $add->Harga = $harga;
        $add->Namamenu = $nama;
        $result = $add->save();


        if ($result){
            return redirect()->back()->with("success", "Berhasil Tambah Users!");
        }
        else{
            return redirect()->back()->withErrors("Gagal Tambah Users!");
        }
    }
}

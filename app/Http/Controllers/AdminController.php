<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\JenisKamar;
use App\Models\Kamar;
use App\Models\Users;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function formTransaksi() {
        $listTransaksi = DB::table('checkout')->get();
        // dd($listTransaksi);

        return view("Admin.transaksi", [
            "listTransaksi" => $listTransaksi,
        ]);
    }

    public function listCustomer() {
        $listCustomer = Users::where("role", "customer")->get();

        return view("Admin.customer", [
            "listCustomer" => $listCustomer,
        ]);
    }

    public function listResepsionis() {
        $listResepsionis = Users::where("role", "resepsionis")->get();
        return view("Admin.resepsionis", [
            "listResepsionis" => $listResepsionis,
        ]);
    }

    public function listResto() {
        $listResto = Users::where("role", "resto")->get();

        return view("Admin.resto", [
            "listResto" => $listResto,
        ]);
    }

    public function detailCustomer($userid) {
        $dataCust = DB::table('customer')
        ->join('users', 'customer.fk_userid', '=', 'users.userid')
        ->select(
            'users.email',
            'users.nama',
            'customer.NIK',
            'customer.Asal',
            'customer.Telepon',
        )
        ->where('fk_userid', $userid)
        ->get();
        // dd($dataCust);

        return view("admin.detailCustomer", [
            "dataCust" => $dataCust
        ]);
    }

    public function formTambahResepsionis() {
        return view("Admin.tambahResepsionis");
    }

    public function tambahResepsionis(Request $request){
        $request->validate([
            "email" => "required|email|max:30|unique:users,email",
            "nama" => "required|alpha|max:30",
            "pass" => "required|alpha_num|max:30",
            "pass_confirmation" => "required",
        ]);

        $users = new Users();
        $users->email = $request->input("email");
        $users->password = $request->input("pass");
        $users->nama = $request->input("nama");
        $users->role = "resepsionis";
        $result = $users->save();

        if ($result){
            return redirect()->back()->with("success", "Berhasil Tambah Resepsionis!");
        }
        else{
            return redirect()->back()->withErrors("Gagal Tambah Resepsionis!");
        }
    }

    public function formTambahResto() {
        return view("Admin.tambahResto");
    }

    public function tambahResto(Request $request){
        $request->validate([
            "email" => "required|email|max:30|unique:users,email",
            "nama" => "required|alpha|max:30",
            "pass" => "required|alpha_num|max:30",
            "pass_confirmation" => "required",
        ]);

        $users = new Users();
        $users->email = $request->input("email");
        $users->password = $request->input("pass");
        $users->nama = $request->input("nama");
        $users->role = "resto";
        $result = $users->save();

        if ($result){
            return redirect()->back()->with("success", "Berhasil Tambah Resto!");
        }
        else{
            return redirect()->back()->withErrors("Gagal Tambah Resto!");
        }
    }

    public function formTambahKamar(){
        $listJenisKamar = DB::table('jeniskamar')->get();
        $jk = DB::table('jeniskamar')->value('Kodejenis');
        // dd($jkStandard);

        $listKamar = DB::table('kamar')
        ->join('jeniskamar', 'kamar.Kodejenis', '=', 'jeniskamar.Kodejenis')
        ->select(
            'kamar.Nokamar',
            'jeniskamar.Namajenis',
            'kamar.Harga',
            'kamar.Status',
        )
        ->where('kamar.is_active', 0)
        ->get();

        $standard = DB::table('kamar')
        ->join('jeniskamar', 'kamar.Kodejenis', '=', 'jeniskamar.Kodejenis')
        ->select(
            'kamar.Nokamar',
        )
        ->where('kamar.Kodejenis', 'S01')
        ->orderByDesc('Nokamar')->value('Nokamar');

        $deluxe = DB::table('kamar')
        ->join('jeniskamar', 'kamar.Kodejenis', '=', 'jeniskamar.Kodejenis')
        ->select(
            'kamar.Nokamar',
        )
        ->where('kamar.Kodejenis', 'D01')
        ->orderByDesc('Nokamar')->value('Nokamar');

        // STANDARD
        $belakangS = strrev($standard);
        $depanS = substr($belakangS, 3);
        $arrS = substr($standard, 1);
        $tempKamarS = $arrS + 1;
        $strKodeS = (string)$tempKamarS;

        if ($tempKamarS < 9) {
            $resultS = $depanS . "00" . $strKodeS;
        }
        else if ($tempKamarS < 99) {
            $resultS = $depanS . "0" . $strKodeS;
        }
        else if ($tempKamarS < 999) {
            $resultS = $depanS . $strKodeS;
        }

        // DELUXE
        $belakangD = strrev($deluxe);
        $depanD = substr($belakangD, 3);
        $arrD = substr($deluxe, 1);
        $tempKamarD = $arrD + 1;
        $strKodeD = (string)$tempKamarD;

        if ($tempKamarD < 9) {
            $resultD = $depanD . "00" . $strKodeD;
        }
        else if ($tempKamarD < 99) {
            $resultD = $depanD . "0" . $strKodeD;
        }

        else if ($tempKamarD < 999) {
            $resultD = $depanD . $strKodeD;
        }

        return view("Admin.kamar", [
            "jk" => $jk,
            "resultS" => $resultS,
            "resultD" => $resultD,
            "listKamar" => $listKamar,
            "listJenisKamar" => $listJenisKamar,
        ]);
    }

    public function tambahKamar(Request $request){
        $kodeS = $request->input('kodeS');
        $kodeD = $request->input('kodeD');
        $jk = $request->get('jeniskamar');
        // dd($jk);
        $kamar = new Kamar();
        if ($jk == 'D01') {
            $kamar->Nokamar = $kodeD;
            $kamar->Kodejenis = 'D01';
            $kamar->harga = 175000;

        }
        else if ($jk == 'S01') {
            $kamar->Nokamar = $kodeS;
            $kamar->Kodejenis = 'S01';
            $kamar->harga = 110000;
        }
        $kamar->status = "0";
        $kamar->is_active = 0;
        $result = $kamar->save();

        if ($result){
            return redirect()->back()->with("success", "Berhasil Tambah Kamar!");
        }
        else{
            return redirect()->back()->withErrors("Gagal Tambah Kamar!");
        }
    }

    public function detailKamar($Nokamar) {
        $dataKamar = DB::table('kamar')
        ->join('jeniskamar', 'kamar.Kodejenis', '=', 'jeniskamar.Kodejenis')
        ->select(
            'kamar.Nokamar',
            'jeniskamar.Kodejenis',
            'kamar.Harga',
            'kamar.Status',
        )
        ->where('kamar.Nokamar', $Nokamar)
        ->get()->first();
        // dd($Nokamar);
        // dd($dataKamar);

        return view("admin.detailKamar", [
            "dataKamar" => $dataKamar,
        ]);
    }

    public function detailKamarData($Nokamar, Request $request) {
        $request->validate([
            "nokamar" => "required|unique:kamar,Nokamar",
            "harga" => "required|numeric|min:0",
        ]);

        $result = DB::table('kamar')->where("Nokamar",$Nokamar)->update([
            "Nokamar" => $request->input("nokamar"),
            "Harga" => $request->input("harga"),
        ]);

        if ($result){
            return redirect('/tambahKamar');
        }
        else{
            return redirect()->back()->withErrors("Gagal update kamar");
        }
    }

    public function formTambahFasilitas(){
        $kodeFasilitas = DB::table('fasilitas')->select('Kodefasilitas')->orderByDesc('Kodefasilitas')->value('Kodefasilitas');
        $listFasilitas = DB::table('fasilitas')->where('is_active', 0)->get();
        $belakang = strrev($kodeFasilitas);
        $depan = substr($belakang, 3);
        $arr = substr($kodeFasilitas, 1);
        $tempKamar = $arr + 1;
        $strKode = (string)$tempKamar;

        if ($tempKamar < 9) {
            $result = $depan . "00" . $strKode;
        }
        else if ($tempKamar < 99) {
            $result = $depan . "0" . $strKode;
        }

        return view("Admin.fasilitas", [
            "result" => $result,
            "listFasilitas" => $listFasilitas,
        ]);
    }

    public function tambahFasilitas(Request $request){
        $kodeFasilitas = DB::table('fasilitas')->select('Kodefasilitas')->orderByDesc('Kodefasilitas')->value('Kodefasilitas');
        $belakang = strrev($kodeFasilitas);
        $depan = substr($belakang, 3);
        $arr = substr($kodeFasilitas, 1);
        $tempFasilitas = $arr + 1;
        $strKode = (string)$tempFasilitas;

        if ($tempFasilitas < 9) {
            $result = $depan . "00" . $strKode;
        }
        else if ($tempFasilitas < 99) {
            $result = $depan . "0" . $strKode;
        }

        $fasilitas = new Fasilitas();
        $fasilitas->Kodefasilitas = $result;
        $fasilitas->Namafasilitas = $request->input("nama");
        $fasilitas->Jumlah = $request->input("jumlah");
        $fasilitas->Harga = $request->input("harga");
        $fasilitas->is_active = 1;
        $akhir = $fasilitas->save();

        if ($akhir){
            return redirect()->back()->with("success", "Berhasil Tambah Fasilitas!");
        }
        else{
            return redirect()->back()->withErrors("Gagal Tambah Fasilitas!");
        }
    }

    public function detailFasilitas($Kodefasilitas) {
        $dataFasilitas = DB::table('fasilitas')->where('Kodefasilitas', $Kodefasilitas)->get()->first();
        // dd($dataFasilitas);

        return view("Admin.detailFasilitas", [
            "dataFasilitas" => $dataFasilitas,
        ]);
    }

    public function detailFasilitasData($Kodefasilitas, Request $request) {
        $request->validate([
            "nama" => "required|alpha|max:20",
            "stok" => "required|numeric|min:0",
            "harga" => "required|numeric|min:0",
        ]);

        $result = DB::table('fasilitas')->where("Kodefasilitas",$Kodefasilitas)->update([
            "Namafasilitas" => $request->input("nama"),
            "Jumlah" => $request->input("stok"),
            "Harga" => $request->input("harga"),
        ]);

        if ($result){
            return redirect('/tambahFasilitas');
        }
        else{
            return redirect()->back()->withErrors("Gagal update fasilitas");
        }
    }

    public function formTambahvoucher(){
        $listVoucher = DB::table('voucher')->where('is_active', 0)->get();
        $kodeVoucher = DB::table('voucher')->select('kode')->orderByDesc('kode')->value('kode');
        $belakang = strrev($kodeVoucher);
        $depan = substr($belakang, 3);
        $arr = substr($kodeVoucher, 1);
        $tempVoucher = $arr + 1;
        $strKode = (string)$tempVoucher;

        if ($tempVoucher < 9) {
            $result = $depan . "00" . $strKode;
        }
        else if ($tempVoucher < 99) {
            $result = $depan . "0" . $strKode;
        }

        return view("Admin.voucher", [
            "result" => $result,
            "listVoucher" => $listVoucher,
        ]);
    }

    public function tambahVoucher(Request $request){
        $kodeVoucher = DB::table('voucher')->select('kode')->orderByDesc('kode')->value('kode');
        $belakang = strrev($kodeVoucher);
        $depan = substr($belakang, 3);
        $arr = substr($kodeVoucher, 1);

        $tempVoucher = $arr + 1;
        $strKode = (string)$tempVoucher;

        if ($tempVoucher < 9) {
            $result = $depan . "00" . $strKode;
        }
        else if ($tempVoucher < 99) {
            $result = $depan . "00" . $strKode;
        }

        $voucher = new Voucher();
        $voucher->kode = $result;
        $voucher->nama = $request->input("nama");
        $voucher->potongan = $request->input("potongan");
        $voucher->tglAwal = $request->input("tglAwal");
        $voucher->tglAkhir = $request->input("tglAkhir");
        $voucher->kuota = $request->input("kuota");
        $voucher->status = 1;
        $voucher->is_active = 0;
        $akhir = $voucher->save();

        if ($akhir){
            return redirect()->back()->with("success", "Berhasil Tambah voucher!");
        }
        else{
            return redirect()->back()->withErrors("Gagal Tambah voucher!");
        }
    }

    public function detailVoucher($kode) {
        $dataVoucher = DB::table('voucher')->where('kode', $kode)->get()->first();
        // dd($dataVoucher);

        return view("Admin.detailVoucher", [
            "dataVoucher" => $dataVoucher,
        ]);
    }

    public function detailVoucherData($kode, Request $request) {
        $request->validate([
            "nama" => "required|alpha|max:100",
            "potongan" => "required|numeric|min:0",
            "kuota" => "required|numeric|min:0",
        ]);

        $result = DB::table('voucher')->where("kode",$kode)->update([
            "nama" => $request->input("nama"),
            "potongan" => $request->input("potongan"),
            "tglAwal" => $request->input("tglAwal"),
            "tglAkhir" => $request->input("tglAkhir"),
            "kuota" => $request->input("kuota"),
        ]);

        if ($result){
            return redirect('/tambahVoucher');
        }
        else{
            return redirect()->back()->withErrors("Gagal update Voucher");
        }
    }

    public function banned($userid) {
        $result = DB::table('users')->where("userid",$userid)->update([
            "is_active" => 0
        ]);
        if ($result){
            return redirect()->back()->with("success", "Berhasil banned user");
        }
        else{
            return redirect()->back()->withErrors("Gagal banned user");
        }
    }

    public function unbanned($userid) {
        $result = DB::table('users')->where("userid",$userid)->update([
            "is_active" => 1
        ]);
        if ($result){
            return redirect()->back()->with("success", "Berhasil unbanned user");
        }
        else{
            return redirect()->back()->withErrors("Gagal unbanned user");
        }
    }

    public function deleteKamar($Nokamar) {
        $result = DB::table('kamar')->where("Nokamar",$Nokamar)->update([
            "is_active" => 1
        ]);
        if ($result){
            return redirect()->back()->with("success", "Berhasil disable kamar");
        }
        else{
            return redirect()->back()->withErrors("Gagal disable kamar");
        }
    }

    public function restoreKamar($Nokamar) {
        $result = DB::table('kamar')->where("Nokamar",$Nokamar)->update([
            "is_active" => 0
        ]);
        if ($result){
            return redirect()->back()->with("success", "Berhasil disable kamar");
        }
        else{
            return redirect()->back()->withErrors("Gagal disable kamar");
        }
    }

    public function deleteFasilitas($Kodefasilitas) {
        $result = DB::table('fasilitas')->where("Kodefasilitas",$Kodefasilitas)->update([
            "is_active" => 1
        ]);
        if ($result){
            return redirect()->back()->with("success", "Berhasil disable fasilitas");
        }
        else{
            return redirect()->back()->withErrors("Gagal disable fasilitas");
        }
    }

    public function restoreFasilitas($Kodefasilitas) {
        $result = DB::table('fasilitas')->where("Kodefasilitas",$Kodefasilitas)->update([
            "is_active" => 0
        ]);
        if ($result){
            return redirect()->back()->with("success", "Berhasil disable fasilitas");
        }
        else{
            return redirect()->back()->withErrors("Gagal disable fasilitas");
        }
    }

    public function deleteVoucher($kode) {
        $result = DB::table('voucher')->where("kode",$kode)->update([
            "is_active" => 1
        ]);
        if ($result){
            return redirect()->back()->with("success", "Berhasil disable voucher");
        }
        else{
            return redirect()->back()->withErrors("Gagal disable voucher");
        }
    }

    public function restoreVoucher($kode) {
        $result = DB::table('voucher')->where("kode",$kode)->update([
            "is_active" => 0
        ]);
        if ($result){
            return redirect()->back()->with("success", "Berhasil disable voucher");
        }
        else{
            return redirect()->back()->withErrors("Gagal disable voucher");
        }
    }

    public function formDisableKamar(){
        $listKamar = DB::table('kamar')
        ->join('jeniskamar', 'kamar.Kodejenis', '=', 'jeniskamar.Kodejenis')
        ->select(
            'kamar.Nokamar',
            'jeniskamar.Namajenis',
            'kamar.Harga',
            'kamar.Status',
        )
        ->where('kamar.is_active', 1)
        ->get();

        return view("Admin.disableKamar", [
            "listKamar" => $listKamar,
        ]);
    }

    public function formDisableFasilitas(){
        $listFasilitas = DB::table('fasilitas')->where('is_active', 1)->get();

        return view("Admin.disableFasilitas", [
            "listFasilitas" => $listFasilitas,
        ]);
    }

    public function formDisableVoucher(){
        $listVoucher = DB::table('voucher')->where('is_active', 1)->get();

        return view("Admin.disableVoucher", [
            "listVoucher" => $listVoucher,
        ]);
    }

    // public function filter(Request $request)
    // {
    //     if (isset($request->status)) {
    //         $history = DB::table('checkout')->where('status',$request->status)->get();
    //     }
    //     else {
    //         $history = DB::table('checkout')->whereBetween('created_at', [$request->date1, $request->date2])->get();
    //     }
    //     return response(view("customer.history", [
    //         "history" => $history,
    //     ]));
    // }

    public function formLaporan(Request $request)
    {
        $laporanPemasukan = DB::table('checkout')->get();
        $laporanCheckin = DB::table('customer')
        ->join('users', 'customer.fk_userid', '=', 'users.userid')
        ->join('hcheckin', 'customer.Kodecust', '=', 'hcheckin.Kodecust')
        ->select(
            'users.email',
            'users.nama',
            'hcheckin.Kodecust',
        )
        ->orderByDesc('hcheckin.Kodecust')
        ->get();
        // dd($laporanCheckin);

        $laporanfasilitas = DB::table('fasilitas')
        ->join('detailfas', 'fasilitas.Kodefasilitas', '=', 'detailfas.Kodefasilitas')
        ->select(
            'fasilitas.Namafasilitas',
            'detailfas.Jumlah',
        )
        ->get();

        $laporanKamar = DB::table('hcheckin')->get();
        $std = DB::table('hcheckin')->where("Tipekamar", "S01")->get();
        $dlx = DB::table('hcheckin')->where("Tipekamar", "D01")->get();

        return response(view("Admin.laporan", [
            "laporanPemasukan" => $laporanPemasukan,
            "laporanCheckin" => $laporanCheckin,
            "laporanfasilitas" => $laporanfasilitas,
            "laporanKamar" => $laporanKamar,
            "std" => $std,
            "dlx" => $dlx,
        ]));
    }
}

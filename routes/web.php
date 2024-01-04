<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResepsionisController;
use App\Http\Controllers\RestoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// login
Route::get('/login', [LoginController::class, "formLogin"])->middleware("logout");
Route::post('/login', [LoginController::class, "Login"]);

// Logout
Route::get('/logout', [LoginController::class, "logout"]);

// ADMIN
Route::view('/dashboardAdmin', 'admin.dashboard')->middleware("login");

Route::get('/transaksiAdmin', [AdminController::class, "formTransaksi"])->middleware("login");
Route::post('/transaksiAdmin', [AdminController::class, "transaksiData"]);

Route::get('/listCustomerAdmin', [AdminController::class, "listCustomer"])->middleware("login");
Route::get('/listResepsionisAdmin', [AdminController::class, "listResepsionis"])->middleware("login");
Route::get('/listRestoAdmin', [AdminController::class, "listResto"])->middleware("login");

Route::get('/detailCustomerAdmin/{id}', [AdminController::class, "detailCustomer"])->middleware("login");
Route::get('/detailFasilitasAdmin/{id}', [AdminController::class, "detailFasilitas"])->middleware("login");
Route::post('/detailFasilitasAdmin/{id}', [AdminController::class, "detailFasilitasData"]);
Route::get('/detailKamarAdmin/{id}', [AdminController::class, "detailKamar"])->middleware("login");
Route::post('/detailKamarAdmin/{id}', [AdminController::class, "detailKamarData"]);
Route::get('/detailVoucherAdmin/{id}', [AdminController::class, "detailVoucher"])->middleware("login");
Route::post('/detailVoucherAdmin/{id}', [AdminController::class, "detailVoucherData"]);

Route::get('/tambahResepsionisAdmin', [AdminController::class, "formTambahResepsionis"])->middleware("login");
Route::post('/tambahResepsionisAdmin', [AdminController::class, "tambahResepsionis"]);

Route::get('/tambahRestoAdmin', [AdminController::class, "formTambahResto"])->middleware("login");
Route::post('/tambahRestoAdmin', [AdminController::class, "tambahResto"]);

Route::get('/banned/{id}', [AdminController::class, "banned"])->middleware("login");
Route::get('/unbanned/{id}', [AdminController::class, "unbanned"])->middleware("login");

Route::get('/tambahKamar', [AdminController::class, "formTambahKamar"])->middleware("login");
Route::post('/tambahKamar', [AdminController::class, "tambahKamar"]);
Route::get('/deleteKamar/{id}', [AdminController::class, "deleteKamar"])->middleware("login");
Route::get('/restoreKamar/{id}', [AdminController::class, "restoreKamar"])->middleware("login");


Route::get('/tambahFasilitas', [AdminController::class, "formTambahFasilitas"])->middleware("login");
Route::post('/tambahFasilitas', [AdminController::class, "tambahFasilitas"]);
Route::get('/deleteFasilitas/{id}', [AdminController::class, "deleteFasilitas"])->middleware("login");
Route::get('/restoreFasilitas/{id}', [AdminController::class, "restoreFasilitas"])->middleware("login");

Route::get('/tambahVoucher', [AdminController::class, "formTambahVoucher"])->middleware("login");
Route::post('/tambahVoucher', [AdminController::class, "tambahVoucher"]);
Route::get('/deleteVoucher/{id}', [AdminController::class, "deleteVoucher"])->middleware("login");
Route::get('/restoreVoucher/{id}', [AdminController::class, "restoreVoucher"])->middleware("login");

Route::get('/disableKamar', [AdminController::class, "formDisableKamar"])->middleware("login");
Route::get('/disableFasilitas', [AdminController::class, "formDisableFasilitas"])->middleware("login");
Route::get('/disableVoucher', [AdminController::class, "formDisableVoucher"])->middleware("login");

Route::get('/laporan', [AdminController::class, "formLaporan"])->middleware("login");
Route::post('/laporan', [AdminController::class, "filter"]);


// CUSTOMER
Route::view('/home', 'customer.customer_home')->middleware("login");
Route::get('/profile', [CustomerController::class, "formProfile"])->middleware("login");
Route::post('/profile', [CustomerController::class, "profileData"]);

Route::view('/booking', 'customer.customer_booking')->middleware("login");
Route::post('/booking', [CustomerController::class,'addBooking']);

Route::view('/fasilitas', 'customer.customer_fasilitas')->middleware("login");
Route::view('/aboutUs', 'customer.customer_aboutus')->middleware("login");
Route::view('/team', 'customer.customer_team')->middleware("login");

// RESEPSIONIS

Route::get('/dashboardResepsionis', [ResepsionisController::class, "dashboard"])->middleware("login");
Route::get('/tambahcheckin', [ResepsionisController::class, "checkin"])->middleware("login");
Route::post('/tambahcheckin', [ResepsionisController::class, "tambahcheckin"]);
Route::get('/tambahfasilitas', [ResepsionisController::class, "tambahfasilitas"])->middleware("login");
Route::get('/customerResepsionis', [ResepsionisController::class, "booking"])->middleware("login");
Route::get('/detailbooking/{id}', [ResepsionisController::class, "detailbooking"])->middleware("login");
Route::get('/kamarResepsionis', [ResepsionisController::class, "kamar"])->middleware("login");
Route::view('/fasilitasResepsionis', 'resepsionis.fasilitas')->middleware("login");
Route::view('/detailfasilitas', 'resepsionis.detailfasilitas')->middleware("login");
Route::view('/detailcheckin', 'resepsionis.detailcheckin')->middleware("login");
Route::get('/detailcheckin/{id}', [ResepsionisController::class, "detailcheckin"])->middleware("login");
Route::post('/detailcheckin/{id}', [ResepsionisController::class, "updatecheckin"]);
Route::get('/detailbooking/{id}', [ResepsionisController::class, "detailbooking"])->middleware("login");
Route::post('/detailbooking/{id}', [ResepsionisController::class, "checkinbooking"]);
Route::get('/checkout/{id}', [ResepsionisController::class, "checkout"])->middleware("login");
Route::post('/checkout/{id}', [ResepsionisController::class, "confirmCheckout"]);

// RESTO
Route::get('/HomeResto', [RestoController::class, "formHomeResto"])->middleware("login");
Route::post('/HomeResto', [RestoController::class, "homeResto"]);

Route::get('/JadwalMakan', [RestoController::class, "formJadwalMakan"])->middleware("login");
Route::post('/JadwalMakan', [RestoController::class, "TambahOrder"]);

Route::get('/AddMenu', [RestoController::class, "formAddMenu"])->middleware("login");
Route::post('/AddMenu', [RestoController::class, "addMenu"]);

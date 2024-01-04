<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function formLogin() {
        session()->forget("login");
        return view("login");
    }

    public function Login(Request $request)
    {
        if ($request->has('btnLogin')) {
            $email = $request->input("email");
            $pass = $request->input("pass");
            if($email == null || $pass == null){
                return response(view("login", ["msg" => "email atau password kosong! cek kembali inputan anda!"]));
            }
            else {
                $listUsers = Users::all();
                $idx = -1;
                for ($i=0; $i < count($listUsers); $i++) {
                    if ($email == $listUsers[$i]->email) {
                        $idx = $i;
                    }
                }
                if ($idx == -1) {
                    return response(view("login", ["msg" => "email / password tidak ada!"]));
                }
                else {
                    if ($listUsers[$idx]->is_active == 0) {
                        return response(view("login", ["msg" => "akun anda telah diban!"]));
                    }
                    else if ($listUsers[$idx]->is_active == 1) {
                        if ($pass == $listUsers[$idx]->password) {
                            session()->put("login", $listUsers[$idx]);
                            if ($listUsers[$idx]->role == "customer") {
                                return redirect("/home");
                            }
                            else if ($listUsers[$idx]->role == "resepsionis") {
                                return redirect("/dashboardResepsionis");
                            }
                            else if ($listUsers[$idx]->role == "resto") {
                                return redirect("/HomeResto");
                            }
                            else if ($listUsers[$idx]->role == "admin") {
                                return redirect("/dashboardAdmin");
                            }
                        }
                        else {
                            return response(view("login", ["msg" => "email / password salah!"]));
                        }
                    }
                }
            }
        }
        if ($request->has('btnRegister')) {
            $request->validate([
                "email" => "required|email|max:30|unique:users,email",
                "nama" => "required|alpha|max:30",
                "password" => "required|alpha_num|max:30",
            ]);

            $users = new Users();
            $users->email = $request->input("email");
            $users->password = $request->input("password");
            $users->nama = $request->input("nama");
            $users->role = "customer";
            $users->is_active = 1;
            $result = $users->save();

            if ($result){
                $userid = Users::where("userid", $users->userid)->value('userid');
                $cust = new Customer();
                $cust->kodecust = 0;
                $cust->fk_userid = $userid;
                $cust->nama = $request->input("nama");
                $cust->save();
                return redirect()->back()->with("success", "Berhasil Tambah Users!");
            }
            else{
                return redirect()->back()->withErrors("Gagal Tambah Users!");
            }
        }

    }

    public function logout(){
        session()->forget("login");
        return redirect('/');
    }
}

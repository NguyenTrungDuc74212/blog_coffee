<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Userregister;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
	public function Login()
	{
		return view('auth.login');
	}
	public function get_register()
	{
		return view('auth.register');
	}
	public function submitLogin(Request $req)
    {
         $username = $req->input('email');
         $password = $req->input('pass');

         if (Auth::attempt([
            'email'=>$username,
            'password'=>$password,

         ])) {
            // Auth::loginUsingId(Auth::id());
             return redirect()->route('dashboard')->with('thongbao','đăng nhập thành công');
         }
         else {
             return redirect()->back()->with('loi','Đăng nhập thất bại');
         }

    }
    public function submitformregister(Userregister $req)
    {
         $user = new User;
         $user->name = $req->input('name');
         $user->address = $req->input('address');
         $user->email = $req->input('email');
         $user->password =bcrypt($req->input('password'));
         $user->save();
       return redirect('login')->with('thongbao','Đăng ký thành công');

    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

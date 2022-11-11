<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use phpDocumentor\Reflection\Types\This;

class AdminController extends Controller
{
    public function AuthLogin(){
        $id = Session::get('id');
        if($id){
            return redirect() -> route('dashboard');
        }
        else{
            return redirect() -> route('admin'); 
        }
    }
    public function index(){
        return view('admin.login');
    }

    public function show_dashboard(){
        $this->AuthLogin();
        return view('admin.dashboard');
    }

    public function dashboard(Request $request){
        $email = $request -> email;
        $password = md5($request -> password);

        $result = DB::table('tbl_admin') -> where('email',$email)->where('password',$password)->first();
        if($result){
            Session::put('name', $result -> name);
            Session::put('id', $result -> id);
            return redirect() -> route('dashboard');
        }else{
            Session::put('msg','Tài khoản mật khẩu không chính xác');
            return redirect() -> route('admin'); 
        }
    }

    public function logout(){
        $this->AuthLogin();
        Session::put('name', null);
        Session::put('id', null);
        return redirect() -> route('admin');
    }
}

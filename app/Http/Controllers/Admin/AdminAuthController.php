<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;

class AdminAuthController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function loginAction(){
        $rememberme = request('rememberme')== 1 ?true: false ;
        if (auth()->guard('admin')->attempt(['email'=>request('email'), 'password'=>request('password')])){
            return \redirect('admin');
        }else{
            \session()->flash('error',trans('admin.incorrect_information_login'));
            return \redirect('admin/login');
        }

    }
    public function logout()
    {
        # code...
        auth()->guard('admin')->logout();
        return \redirect('admin/login');

    }
}

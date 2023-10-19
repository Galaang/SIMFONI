<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //
    public function index(){
        return view('signin');
    }

    public function login_proses(Request $request){
        $request->validate([
            'npm' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'npm' =>$request->npm,
            'password' =>$request->password,
        ];

        if(Auth::attempt($data)){
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->route('login');
        }
    }
}

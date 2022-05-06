<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function login(){
        return view('login');
    }

    public function logar(Request $request){
        if ($request->email == 'adm@gmail.com' && $request->senha == '123456')
            return redirect()->route('index');
        else if ($request->email == 'func@gmail.com' && $request->senha == '654321')
            return redirect()->route('index');
        else
            return redirect()->route('login');

    }
}

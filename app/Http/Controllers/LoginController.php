<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function login(){
        return view('login');
    }

    public function logar(Request $request){
        if ($request->email == 'adm@gmail.com' && $request->senha == '123456'){
            session(['usuario' => 'Melquisedeque de Moura Ataide']);
            return redirect()->route('index');
        }elseif ($request->email == 'func@gmail.com' && $request->senha == '654321'){
        session(['usuario' => 'Irineu Berg da Silva']);
            return redirect()->route('index');
        }else
            return redirect()->route('login');

    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect()->route('login');
    }
}

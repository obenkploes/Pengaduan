<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetugasController extends Controller
{
    public function index(){
        return view('Administrator.index');
    }

    public function login(){
        return view('Administrator.Login');
    }
    public function postLogin(Request $request){
        $this->validate($request,[
            'username'=>'required',
            'password'=> 'required'
        ]);

        $cek = Auth::guard('petugas')->attempt(['username'=>$request->input('username'),'password'=>$request->input('password')]);

        if($cek){
            $request->session()->regenerate();
            return response()->json($request->session()->all());
        }
        return response()->json($request->all());
    }

}

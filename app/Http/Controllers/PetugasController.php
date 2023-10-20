<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetugasController extends Controller
{
    public function index(){
        $aduan = new Pengaduan();
        $data = [
            "jumlah_masuk"=> $aduan->all()->count(),
            "jumlah_proses"=> $aduan->where('status','proses')->count(),
            "jumlah_selesai"=>$aduan->where('status','selesai')->count(),
        ];
        return view('Administrator.index',$data);
    }

    public function login(Request $request){
        // return response()->json($request->is('admin/*'));
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
            return redirect('/admin');
        }
        return back();
    }

    public function logout(Request $request){
        Auth::guard('petugas')->logout();
        return redirect('admin/login');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Petugas;
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
        $p = new Petugas();
        $p= $p->where('username',$request->username)->where('password',$request->password);
        if($p->exists()){
            $p = $p->first();
            session([
                'id'=>$p->id,
                'username'=>$p->username,
                'password'=>$p->password,
                'level'=>$p->level
            ]);
            return redirect('admin');
        }
       
        return back();
    }

    public function logout(Request $request){
        session()->flush();
        return redirect('admin');
    }

}

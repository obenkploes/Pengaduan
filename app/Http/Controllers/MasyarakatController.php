<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index(){
        $aduan = new Pengaduan();
        $data = [
            "jumlah_masuk" => $aduan->all()->count(),
            "jumlah_proses" => $aduan->where('status', 'proses')->count(),
            "jumlah_selesai" => $aduan->where('status', 'selesai')->count(),
        ];
        return view('Masyarakat.Index',$data);
    }
    public function laporkan(Request $request){
        // siapkan variable untuk menampung file
        $foto = $request->file('foto');
        
        // tentukan path file akan disimpan
        $folder = 'upload_data';

        // pindahkan file ke target folder
        $foto->move($folder, $foto->getClientOriginalName());
        return "sukses bro";
    }

    
}

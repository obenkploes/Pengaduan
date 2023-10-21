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
    public function laporkan(){
        return view('Masyarakat.laporkan');
    }
}

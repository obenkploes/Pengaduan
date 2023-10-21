<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetugasController extends Controller
{
    public function index()
    {
        $aduan = new Pengaduan();
        $data = [
            "jumlah_masuk" => $aduan->all()->count(),
            "jumlah_proses" => $aduan->where('status', 'proses')->count(),
            "jumlah_selesai" => $aduan->where('status', 'selesai')->count(),
        ];
        return view('Administrator.index', $data);
    }

    public function login(Request $request)
    {
        // return response()->json($request->is('admin/*'));
        return view('Administrator.Login');
    }
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);
        $p = new Petugas();
        $p = $p->where('username', $request->username)->where('password', $request->password);
        if ($p->exists()) {
            $p = $p->first();
            session([
                'id' => $p->id,
                'username' => $p->username,
                'password' => $p->password,
                'level' => $p->level
            ]);
            return redirect('admin');
        }

        return back();
    }

    public function logout(Request $request)
    {
        session()->flush();
        return redirect('admin');
    }


    // data petugas
    public function list()
    {
        $petugas = new Petugas();
        return view('Administrator.Petugas.index', ['petugas' => $petugas->all()]);
    }
    public function add()
    {
        return view('Administrator.Petugas.add');
    }
    public function create(Request $request)
    {
        $this->validate($request, [
            'nama_petugas' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);
        $petugas = new Petugas();
        if ($petugas->create($request->all())) {
            return redirect('admin/petugas')->with('pesan', 'Petugas berhasil ditambahkan');
        }
        return back()->with('pesan', 'Petugas gagal ditambahkan');
    }
    public function show($id)
    {
        $petugas = new Petugas();
        $petugas = $petugas->find($id);
        return view('Administrator.Petugas.edit', ['petugas' => $petugas]);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_petugas' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);
        $petugas = new Petugas();
        if ($petugas->find($id)->update($request->all())) {
            return redirect('admin/petugas')->with('pesan', 'Petugas ' . $request->input('nama_petugas') . ' berhasil diperbaharui');
        }
        return back()->with('pesan', 'Petugas gagal diperbaharui');
    }

    public function delete($id)
    {
        $petugas = Petugas::find($id);
        return view('Administrator.Petugas.hapus', ['petugas' => $petugas]);
    }
    public function destroy($id)
    {
        $petugas = Petugas::find($id);
        if (session('id') != $petugas->id) {
            $petugas->delete();
            return redirect('admin/petugas')->with('pesan','Petugas ' . $petugas->nama_petugas . ' berhasil dihapus');
        }
        return redirect('admin/petugas')->with('pesan', 'Petugas yang sedang aktif tidak dapat dihapus');
    }
}

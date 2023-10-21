@extends('Layout')

@section('title', 'Data Petugas')

@section('content')
    <div class="card shadow-sm ">
        <div class="card-header text-bg-primary bg-gradient d-flex justify-content-between">
            <span class="card-title ">List</span>
            <a href="/admin/petugas" class="btn btn-light btn-sm"><i class="bi bi-backspace"></i> Kembali</a>
        </div>
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <div class="mb-3 row">
                    <label for="nama_petugas" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text"  class="form-control" id="nama_petugas" name="nama_petugas" value="{{$petugas->nama_petugas}}" autofocus/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="username" class="col-sm-2 col-form-label">Nama Pengguna</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text"  class="form-control" id="username" name="username" value="{{$petugas->username}}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="password" class="col-sm-2 col-form-label">Kata sandi</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text"  class="form-control" id="password" name="password" value="{{$petugas->password}}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="level" class="col-sm-2 col-form-label">Level</label>
                    <div class="col-sm-10 col-md-6">
                        <select name="level" id="level" class="form-select">
                            <option value="admin" {{$petugas->level=='admin'?'selected':''}}>Admin</option>
                            <option value="petugas" {{$petugas->level=='petugas'?'selected':''}}>Petugas</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary bg-gradient btn-sm">
                        Simpan
                        <i class="bi bi-floppy-fill"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@extends('Layout')

@section('title', 'Data Petugas')

@section('content')
    <div class="card shadow">
        <div class="card-header text-bg-danger">
            <span class="card-title">
                Peringatan
                <i class="bi bi-exclamation-square"></i>
            </span>
        </div>
        <div class="card-body">
            Apakah anda yakin akan menghapus data petugas <strong>{{$petugas->nama_petugas}}</strong>
            <a href="/admin/petugas/hapus/confirm/{{$petugas->id}}" class="btn btn-sm border-0 btn-outline-danger">
                <i class="bi bi-trash"></i>Hapus
            </a>
            <a href="/admin/petugas" class="btn btn-sm btn-success">Batal</a>
        </div>
    </div>
@endsection

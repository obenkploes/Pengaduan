@extends('Layout')

@section('title', 'Data Petugas')

@section('content')
    @if (session('pesan'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{session('pesan')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
   <div class="card shadow-sm ">
        <div class="card-header text-bg-primary bg-gradient d-flex justify-content-between">
            <span class="card-title ">List</span>
            <a href="/admin/petugas/tambah" class="btn btn-light btn-sm"><i class="bi bi-plus"></i> Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-sm table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Lengkap</th>
                        <th>Level</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($petugas as $item)
                        <tr class="align-middle">
                            <td>{{$item->id}}</td>
                            <td>{{$item->nama_petugas}}</td>
                            <td>{{$item->level}}</td>
                            <td>
                                <a href="/admin/petugas/edit/{{$item->id}}" class="btn btn-sm  btn-outline-success">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="/admin/petugas/hapus/{{$item->id}}" class="btn btn-sm  btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
   </div>
@endsection

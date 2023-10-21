@extends('Layout')

@section('title', 'Data Petugas')

@section('content')
    @if (session('pesan'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{session('pesan')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
   
@endsection

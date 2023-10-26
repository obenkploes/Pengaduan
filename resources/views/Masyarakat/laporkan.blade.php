@extends('Masyarakat.LayoutMasyarakat')

@section('title')
    Laporkan
@endsection

@section('isi_halaman')
   <form action="" method="post" enctype="multipart/form-data">
    @csrf
        <input type="file" name="foto" id="foto">
        <button>kirim</button>
   </form>
@endsection

@section('css')
  
@endsection

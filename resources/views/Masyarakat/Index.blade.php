@extends('Masyarakat.LayoutMasyarakat')

@section('title')
    Laporkan
@endsection

@section('isi_halaman')
    <section id="tagline" class="text-bg-dark">
        <div class="container align-items-center d-flex justify-content-center  flex-column   ">
            <h1 class="h1 text-center mx-auto">
                <span class="text-white-50">Ada masalah di lingkungan anda ,</span>
                <span class="text-white fw-bold">Laporkan!!!</span>
            </h1>
            <a href="/laporkan" class="btn btn-primary bg-gradient d-lg-block btn-lg mt-3">
                Tulis Laporan
                <i class="bi bi-pencil-square"></i>
            </a>
        </div>
    </section>
@endsection

@section('css')
    <style>
        #tagline {
            width: 100%;
        }

        #tagline .container {
            height: 350px;
        }

        #tagline .container .h1 {
            max-width: 600px;
        }
    </style>
@endsection

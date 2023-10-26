@extends('Masyarakat.LayoutMasyarakat')

@section('title')
    Laporkan
@endsection

@section('isi_halaman')
    <section id="tagline" class="text-bg-dark shadow">
        
        <div class="container align-items-center d-flex justify-content-center  flex-column   ">
            <h1 class="h1 text-center mx-auto">
                <span class="text-white-50">Ada masalah di lingkungan anda ,</span>
                <span class="text-white fw-bold">Laporkan!!!</span>
            </h1>
            <a href="#laporan" class="btn btn-primary bg-gradient d-lg-block btn-lg mt-3">
                Tulis Laporan
                <i class="bi bi-pencil-square"></i>
            </a>
        </div>
    </section>
    <section id="jumlahlaporan">
        <div class="container-laporan mx-auto mb-4">
            <div class="row ">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body text-bg-primary bg-gradient">
                            <div class="row">
                                <div class="col-auto text-end">
                                    <i class="bi bi-chat-square-text" @style(['font-size:72px'])></i>
                                </div>
                                <div class="col-auto justify-content-center align-content-center flex-column d-flex">
                                    <h4 class="h1">{{ $jumlah_masuk }}</h4>
                                    <h5 class="h5 text-white">Aduan Masuk</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    {{-- Total staus prose --}}
                    <div class="card">
                        <div class="card-body text-bg-info bg-gradient">
                            <div class="row">
                                <div class="col-auto text-end">
                                    <i class="bi bi-person-lines-fill" @style(['font-size:72px'])></i>
                                </div>
                                <div class="col-auto justify-content-center align-content-center flex-column d-flex">
                                    <h4 class="h1">{{ $jumlah_proses }}</h4>
                                    <h5 class="h5 ">Status Proses</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    {{-- Total status selesai --}}
                    <div class="card">
                        <div class="card-body text-bg-success bg-gradient">
                            <div class="row">
                                <div class="col-auto text-end">
                                    <i class="bi bi-check-square-fill" @style(['font-size:72px'])></i>
                                </div>
                                <div class="col-auto justify-content-center align-content-center flex-column d-flex">
                                    <h4 class="h1">{{ $jumlah_selesai }}</h4>
                                    <h5 class="h5 text-white">Status Selesai</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="laporan" class="pt-3">
        <div class="container">
            <div class="card border-0">
                <div class="card-body">
                    <h1 class="h2 text-black-50 text-center mb-4">Kirim aduan anda</h1>
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="isi_laporan" class="form-label">Isi Aduan</label>
                            <textarea name="isi_laporan" id="isi_laporan" class="form-control" rows="5"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Upload foto</label>
                            <input type="file" name="foto" id="foto" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button class="btn form-control btn-primary" {{ session('username') ? '' : '' }}>Kirim
                                aduan</button>
                            @if (!session('username'))
                                <span class="form-text">Anda belum login , klik <a href="login">masuk</a> untuk mulai
                                    membuat laporan</span>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    <style>
        #tagline {
            width: 100%;
            padding-bottom: 100px;
        }

        #tagline .container {
            height: 350px;
        }

        #tagline .container .h1 {
            max-width: 600px;
        }
        #jumlahlaporan .container-laporan{
            max-width: 900px;
            margin-top: -75px;
        }

        #laporan .card {
            max-width: 600px;
            margin-left: auto;
            margin-right: auto
        }
    </style>
@endsection

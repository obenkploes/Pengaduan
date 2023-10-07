@extends('Layout')

@section('title', 'Dashboard Admin')

@section('content')
    <div class="row ">
        <div class="col-4">
            <div class="card">
                <div class="card-body text-bg-primary bg-gradient">
                    <div class="row">
                        <div class="col-auto text-end">
                            <i class="bi bi-chat-square-text" @style(['font-size:72px'])></i>
                        </div>
                        <div class="col-auto justify-content-center align-content-center flex-column d-flex">
                            <h4 class="h1">100</h4>
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
                            <h4 class="h1">100</h4>
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
                            <h4 class="h1">100</h4>
                            <h5 class="h5 text-white">Status Selesai</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

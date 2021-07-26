@extends('layouts.app')
@section('content')
<section class="container border rounded flex-md-row shadow position-relative mt-10" style="box-sizing: border-box; ">
    <div class="content-2-2 mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
        <div class="text-center title-text">
            <h1 class="text-title">Galeri Kearsipan Kota Bandung</h1>
        </div>
        <div class="row ml-4 mr-4">
            <div class="img-gallery mb-4" style="height: 300px;">
                <a href="{{ url('detail-galery') }}/1" class="h-100">
                    <img class="img-gallery-image" style="height: 250px;" src="{{ asset('img/galeri-arsip/1.jpg') }}">
                    <div class="card-body">
                        <h5 class="card-subtitle mb-2 text-muted text-center">Foto Perpustakaan</h5>
                    </div>
                    <div class="img-gallery-overlay"></div>
                    <div class="img-gallery-details fadeIn-bottom">
                        <p class="img-gallery-text"> Description </p>
                    </div>
                </a>
            </div>
            <div class="img-gallery mb-4" style="height: 300px;">
                <a href="{{ url('detail-galery') }}/2" class="h-100">
                    <img class="img-gallery-image" style="height: 250px;" src="{{ asset('img/galeri-arsip/2.jpg') }}">
                    <div class="card-body">
                        <h5 class="card-subtitle mb-2 text-muted text-center">Foto Jalan</h5>
                    </div>
                    <div class="img-gallery-overlay"></div>
                    <div class="img-gallery-details fadeIn-bottom">
                        <p class="img-gallery-text"> Description </p>
                    </div>
                </a>
            </div>
            <div class="img-gallery mb-4" style="height: 300px;">
                <a href="{{ url('detail-galery') }}/3" class="h-100">
                    <img class="img-gallery-image" style="height: 250px;" src="{{ asset('img/galeri-arsip/3.jpg') }}">
                    <div class="card-body">
                        <h5 class="card-subtitle mb-2 text-muted text-center">Foto Pohon</h5>
                    </div>
                    <div class="img-gallery-overlay"></div>
                    <div class="img-gallery-details fadeIn-bottom">
                        <p class="img-gallery-text"> Description </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="row ml-4 mr-4">
            <div class="img-gallery mb-4" style="height: 300px;">
                <a href="{{ url('detail-galery') }}/4" class="h-100">
                    <img class="img-gallery-image" style="height: 250px;" src="{{ asset('img/galeri-arsip/1.jpg') }}">
                    <div class="card-body">
                        <h5 class="card-subtitle mb-2 text-muted text-center">Foto Perpustakaan</h5>
                    </div>
                    <div class="img-gallery-overlay"></div>
                    <div class="img-gallery-details fadeIn-bottom">
                        <p class="img-gallery-text"> Description </p>
                    </div>
                </a>
            </div>
            <div class="img-gallery mb-4" style="height: 300px;">
                <a href="{{ url('detail-galery') }}/5" class="h-100">
                    <img class="img-gallery-image" style="height: 250px;" src="{{ asset('img/galeri-arsip/2.jpg') }}">
                    <div class="card-body">
                        <h5 class="card-subtitle mb-2 text-muted text-center">Foto Perpustakaan</h5>
                    </div>
                    <div class="img-gallery-overlay"></div>
                    <div class="img-gallery-details fadeIn-bottom">
                        <p class="img-gallery-text"> Description </p>
                    </div>
                </a>
            </div>
            <div class="img-gallery mb-4" style="height: 300px;">
                <a href="{{ url('detail-galery') }}/6" class="h-100">
                    <img class="img-gallery-image" style="height: 250px;" src="{{ asset('img/galeri-arsip/3.jpg') }}">
                    <div class="card-body">
                        <h5 class="card-subtitle mb-2 text-muted text-center">Foto Perpustakaan</h5>
                    </div>
                    <div class="img-gallery-overlay"></div>
                    <div class="img-gallery-details fadeIn-bottom">
                        <p class="img-gallery-text"> Description </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="row ml-4 mr-4">
            <div class="img-gallery mb-4" style="height: 300px;">
                <a href="{{ url('detail-galery') }}/7" class="h-100">
                    <img class="img-gallery-image" style="height: 250px;" src="{{ asset('img/galeri-arsip/1.jpg') }}">
                    <div class="card-body">
                        <h5 class="card-subtitle mb-2 text-muted text-center">Foto Perpustakaan</h5>
                    </div>
                    <div class="img-gallery-overlay"></div>
                    <div class="img-gallery-details fadeIn-bottom">
                        <p class="img-gallery-text"> Description </p>
                    </div>
                </a>
            </div>
            <div class="img-gallery mb-4" style="height: 300px;">
                <a href="{{ url('detail-galery') }}/8" class="h-100">
                    <img class="img-gallery-image" style="height: 250px;" src="{{ asset('img/galeri-arsip/2.jpg') }}">
                    <div class="card-body">
                        <h5 class="card-subtitle mb-2 text-muted text-center">Foto Perpustakaan</h5>
                    </div>
                    <div class="img-gallery-overlay"></div>
                    <div class="img-gallery-details fadeIn-bottom">
                        <p class="img-gallery-text"> Description </p>
                    </div>
                </a>
            </div>
            <div class="img-gallery mb-4" style="height: 300px;">
                <a href="{{ url('detail-galery') }}/9" class="h-100">
                    <img class="img-gallery-image" style="height: 250px;" src="{{ asset('img/galeri-arsip/3.jpg') }}">
                    <div class="card-body">
                        <h5 class="card-subtitle mb-2 text-muted text-center">Foto Perpustakaan</h5>
                    </div>
                    <div class="img-gallery-overlay"></div>
                    <div class="img-gallery-details fadeIn-bottom">
                        <p class="img-gallery-text"> Description </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
</div>
@endsection
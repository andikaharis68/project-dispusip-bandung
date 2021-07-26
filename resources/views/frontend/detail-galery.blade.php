@extends('layouts.app')
@section('content')
<section class="container border rounded flex-md-row shadow position-relative mt-10" style="box-sizing: border-box; font-family: 'Poppins', sans-serif">
    <div class="content-2-2 mx-auto position-relative">
        <div class="mt-5 mt-sm-0 text-center title-text">
            <h1 class="text-title">Detail Galeri</h1>
        </div>
        <div class="container px-md-5">
            <div class="card">
                <div class="row gy-4 gy-md-0">
                    <div class="col-md-6">
                        <div class="d-flex justify-content-center">
                            <img class="img-gallery-image" style="width: 250px;" src="{{ asset('img/galeri-arsip/1.jpg') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-row mb-2">
                            <img height=20 width=20 src="{{ asset('svg/info.svg') }}" alt="">
                            <p class="mx-2">project status: complete</p>
                        </div>
                        <div class="d-flex flex-row mb-2">
                            <img height=20 width=20 src="{{ asset('svg/map.svg') }}" alt="">
                            <p class="mx-2">location: bali, indonesia</p>
                        </div>
                        <div class="pl-4 pr-3">
                            <p class="mx-2">in a plot with large trees, the client sought to live in proximity to nature, that it must become a characteristic part of the architecture and that it gets inhabited as well as the built object.dkanwkdnawkdnawlknfd,jewfehvfhjegfwadajdabjdhjdgwvwadadjgdvwhjdhwfdygqwygdywgdyuvwdmabvhd</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ml-4 mr-4 mt-5">
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
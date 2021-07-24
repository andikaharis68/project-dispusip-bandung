@extends('layouts.app')

@section('content')

<main>

    <section style="background-color: #ffffff; margin: 30px; ">
        <div class="d-flex container flex-lg-row flex-column align-items-center card shadow mt-10">
            <div class="p-2 m-2">
                <h1 class="display-5 fw-bold">
                    Struktur Organisasi DISPUSIP Kota Bandung</h1>
                Terwujudnya Kota Bandung yang Unggul, Nyaman, Sejahtera dan Agamis.
            </div>
            <div class="p-2 m-2 d-flex justify-content-center">
                <img class="d-block w-100" src="{{ secure_asset('img/') }}/gambar.jpg.jpg" alt="">
            </div>
        </div>
    </section>

</main>

@endsection
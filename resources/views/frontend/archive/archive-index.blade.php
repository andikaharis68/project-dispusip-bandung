@extends('layouts.app')
@section('content')

<main class="mt-5">
    <section style="background-color: #ffffff;">
        <div class="container border rounded overflow-hidden flex-md-row mt-10 mb-4 shadow h-md-250 position-relative">
            <div class="row">
                <div class="col p-sm-3 p-3 mx-sm-4 mx-3 mt-sm-0 mt-3">
                    <div class="px-3 py-4">
                        <h2>
                            <b>Indeks Kepuasan Masyarakat (IKM) Terhadap Layanan Kearsipan</b>
                        </h2>
                        <br />
                        <div class="d-flex flex-row align-items-center mt-5">
                            <img height=20 width=20 src="{{ asset('svg/like.svg') }}" alt="">
                            <span class="ms-3 border rounded-sm px-2">0</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
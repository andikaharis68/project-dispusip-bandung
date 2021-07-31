@extends('layouts.app')
@section('content')

<main class="mt-5">
    <section style="background-color: #ffffff;">
        <div class="container border rounded overflow-hidden flex-md-row mt-10 mb-4 shadow h-md-250 position-relative">
            <div class="row">
                <div class="col p-sm-3 p-3 mx-sm-4 mx-3 mt-sm-0 mt-3">
                    <div class="px-3 py-4">
                        <h2 class="mb-3">
                            <b>DAFTAR PENELUSURAN ARSIP SEJARAH YANG TELAH DILAKUKAN DINAS PERPUSTAKAAN DAN KEARSIPAN KOTA BANDUNG</b>
                        </h2>
                        <br />
                        <div class="px-lg-4">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" style="vertical-align : middle;">NO</th>
                                        <th scope="col"  style="vertical-align : middle;">JUDUL KHASANAH ARSIP</th>
                                        <th scope="col">TAHUN PENELUSURAN</th>
                                        <th scope="col" style="vertical-align : middle;">LEMBAGA PELAKSANA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Penelusuran Sumber Sejarah Tokoh Walikota Bandung XIV Ir. R. Oekar Bratakoesoemah</td>
                                        <td>2017</td>
                                        <td>Dinas Perpustakaan dan Kearsipan Kota Bandung bekerja sama dengan Fakultas Ilmu Budaya Universitas Padjadjaran</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Penelusuran Sumber Sejarah Morfologi Kota Bandung Abad XIX – XX</td>
                                        <td>2017</td>
                                        <td>Dinas Perpustakaan dan Kearsipan Kota Bandung bekerja sama dengan Fakultas Ilmu Budaya Universitas Padjadjaran</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Penelusuran Arsip Sumber Sejarah Tokoh Seniman Sunda, Nano S.</td>
                                        <td>2018</td>
                                        <td>Dinas Perpustakaan dan Kearsipan Kota Bandung bekerja sama dengan Fakultas Ilmu Budaya Universitas Padjadjaran</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Penelusuran Arsip Sejarah Tokoh Emma Poeradiredja</td>
                                        <td>2019</td>
                                        <td>Dinas Perpustakaan dan Kearsipan Kota Bandung bekerja sama dengan Institut Seni Budaya Indonesia Bandung</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Penelusuran Arsip Sejarah Cikapundung sebagai tempat Ikonik Bersejarah di Kota Bandung</td>
                                        <td>2019</td>
                                        <td>Dinas Perpustakaan dan Kearsipan Kota Bandung bekerja sama dengan Institut Seni Budaya Indonesia Bandung</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
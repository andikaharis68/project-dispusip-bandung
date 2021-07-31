@extends('layouts.app')
@section('content')

<main class="mt-5">
    <section style="background-color: #ffffff;">
        <div class="container border rounded overflow-hidden flex-md-row mt-10 mb-4 shadow h-md-250 position-relative">
            <div class="row">
                <div class="col p-sm-3 p-3 mx-sm-4 mx-3 mt-sm-0 mt-3">
                    <div class="px-3 py-4">
                        <h2 class="mb-3">
                            <b>Rekapitulasi Daftar Arsip Statis</b>
                        </h2>
                        <br />
                        <p class="text-center">Data Organisasi Perangkat Daerah yang Telah Menyelenggarakan Kearsipan Secara Baku Pada Tahun</p>
                        <div class="dropdown text-center mb-4">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Pilih Tahun
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">2017</a></li>
                                <li><a class="dropdown-item" href="#">2018</a></li>
                                <li><a class="dropdown-item" href="#">2019</a></li>
                                <li><a class="dropdown-item" href="#">2020</a></li>
                                <li><a class="dropdown-item" href="#">2021</a></li>
                            </ul>
                        </div>
                        <div class="px-lg-4">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">NO</th>
                                        <th scope="col">JENIS KHASANAH ARSIP</th>
                                        <th scope="col">KURUN WAKTU</th>
                                        <th scope="col">JUMLAH</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Peraturan Daerah</td>
                                        <td>1931 - 1959</td>
                                        <td>57</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Surat Keputusan Walikota</td>
                                        <td>1964 - 1998</td>
                                        <td>4953</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Izin Mendirikan Bangunan Sejarah</td>
                                        <td>1918 - 1973</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Gedung Bangunan Bersejarah</td>
                                        <td>1917 - 1988</td>
                                        <td>35</td>
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
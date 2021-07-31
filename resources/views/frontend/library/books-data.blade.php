@extends('layouts.app')
@section('content')

<main class="mt-5">
    <section style="background-color: #ffffff;">
        <div class="container border rounded overflow-hidden flex-md-row mt-10 mb-4 shadow h-md-250 position-relative">
            <div class="row">
                <div class="col p-sm-3 p-3 mx-sm-4 mx-3 mt-sm-0 mt-3">
                    <div class="px-3 py-4">
                        <h2>
                            <b>Data Buku Dispusip Kota Bandung</b>
                        </h2>
                        <br />
                        <div class="d-flex flex-row flex-wrap mb-3">
                            <div class="dropdown me-2">
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
                            <div class="dropdown me-2">
                                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Januari
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Februari</a></li>
                                    <li><a class="dropdown-item" href="#">Maret</a></li>
                                    <li><a class="dropdown-item" href="#">April</a></li>
                                    <li><a class="dropdown-item" href="#">Mei</a></li>
                                    <li><a class="dropdown-item" href="#">Juni</a></li>
                                    <li><a class="dropdown-item" href="#">Juli</a></li>
                                    <li><a class="dropdown-item" href="#">Agustus</a></li>
                                    <li><a class="dropdown-item" href="#">September</a></li>
                                    <li><a class="dropdown-item" href="#">Oktober</a></li>
                                    <li><a class="dropdown-item" href="#">November</a></li>
                                    <li><a class="dropdown-item" href="#">Desember</a></li>
                                </ul>
                            </div>
                            <div class="dropdown me-2">
                                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Januari
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Februari</a></li>
                                    <li><a class="dropdown-item" href="#">Maret</a></li>
                                    <li><a class="dropdown-item" href="#">April</a></li>
                                    <li><a class="dropdown-item" href="#">Mei</a></li>
                                    <li><a class="dropdown-item" href="#">Juni</a></li>
                                    <li><a class="dropdown-item" href="#">Juli</a></li>
                                    <li><a class="dropdown-item" href="#">Agustus</a></li>
                                    <li><a class="dropdown-item" href="#">September</a></li>
                                    <li><a class="dropdown-item" href="#">Oktober</a></li>
                                    <li><a class="dropdown-item" href="#">November</a></li>
                                    <li><a class="dropdown-item" href="#">Desember</a></li>
                                </ul>
                            </div>
                            <button type="button" class="btn btn-light btn-outline-info text-dark">Tampil</button>
                        </div>
                        <br />
                        <p class="text-center mb-2">Sampai dengan Tahun 2017</p>
                        <p class="text-center mb-2">Jumlah Total Buku Fisik = 5.619</p>
                        <p class="text-center mb-2">Jumlah Eksemplar Buku Fisik = 16.841</p>
                        <p class="text-center mb-2">Jumlah Total Buku Elektronik = 0</p>
                        <p class="text-center mb-2">Jumlah Eksemplar Buku Elektronik = 0</p>
                        <br />
                        <div class="px-lg-4 table-responsive">
                            <table class="table table-hover">
                                <thead >
                                    <tr>
                                        <th scope="col" class="border-secondary" rowspan="2" style="vertical-align : middle;">NO</th>
                                        <th scope="col" class="border-secondary" rowspan="2" style="vertical-align : middle;">BULAN</th>
                                        <th scope="col" class="border-secondary" colspan="2">KOLEKSI BUKU FISIK (MONOGRAF)</th>
                                        <th scope="col" class="border-secondary" colspan="2">KOLEKSI BUKU ELEKTRONIK (E-PUSTAKA)</th>
                                        <th scope="col" class="border-secondary" rowspan="2" style="vertical-align : middle;">KETERANGAN</th>
                                    </tr>
                                    <tr>
                                        <th scope="col" class="border-secondary">JUMLAH JUDUL</th>
                                        <th scope="col" class="border-secondary">JUMLAH EKSEMPLAR</th>
                                        <th scope="col" class="border-secondary">JUMLAH JUDUL</th>
                                        <th scope="col" class="border-secondary">JUMLAH EKSEMPLAR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Januari</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Februari</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Maret</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>April</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Mei</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Juni</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Juli</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Agustus</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>September</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td>Oktober</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td>November</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td>Desember</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
                                        <td>6.481</td>
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
@extends('layouts.app')

@section('content')

<style>
      .no-underline {
            text-decoration: none !important
      }

      tr>td:nth-child(3),
      tr>td:nth-child(1),
      tr>th:nth-child(1),
      tr>th:nth-child(3) {
            text-align: center;
      }

      tr>th:nth-child(1) {
            width: 50px;
      }
</style>

<main>
      <section style="background-color: #ffffff; margin: 30px;">
            <div class="d-flex container card shadow p-5 mt-10 mb-3">
                  <div class="row">
                        <div class="col-md-12">

                              <div class="mb-5">
                                    <p class="h3"><b>PPID PEMBANTU</b></p>
                              </div>

                              <table class="table table-bordered table-hover">
                                    <tr>
                                          <th>No</th>
                                          <th>Nama File</th>
                                          <th>Tautan</th>
                                    </tr>
                                    <tbody>
                                          <tr>
                                                <td>1</td>
                                                <td>
                                                      PPID pada PPID Pembantu dan Satker Pendidikan sudah membentuk Pejabat Pengelola Informasi dan Dokumentasi (PPID) Pembantu & Satker Pendidikan.</td>
                                                <td>
                                                      <a href="" class="btn btn-outline-dark">View</a>
                                                </td>
                                          </tr>
                                          <tr>
                                                <td>2</td>
                                                <td>
                                                      PPID pada PPID Pembantu dan Satker Pendidikan sudah membuat peraturan mengenai standar prosedur operasional layanan Informasi Publik.
                                                </td>
                                                <td>
                                                      <a href="" class="btn btn-outline-dark">View</a>
                                                </td>
                                          </tr>
                                          <tr>
                                                <td>3</td>
                                                <td>
                                                      PPID pada PPID Pembantu dan Satker Pendidikan sudah memiliki Struktur PPID pada PPID Pembantu dan Satker Pendidikan.
                                                </td>
                                                <td>
                                                      <a href="" class="btn btn-outline-dark">View</a>
                                                </td>
                                          </tr>
                                          <tr>
                                                <td>4</td>
                                                <td>
                                                      PPID pada PPID Pembantu dan Satker Pendidikan sudah mengkoordinasikan penyimpanan dan pendokumentasian seluruh Informasi Publik dengan PPID Utama Kota Bandung.
                                                </td>
                                                <td>
                                                      <a href="" class="btn btn-outline-dark">View</a>
                                                </td>
                                          </tr>
                                          <tr>
                                                <td>5</td>
                                                <td>
                                                      PPID pada PPID Pembantu dan Satker Pendidikan di Badan Publik sudah mengembangkan kapasitas pejabat fungsional dan/atau petugas informasi dalam rangka peningkatan kualitas layanan Informasi Publik.
                                                </td>
                                                <td>
                                                      <a href="" class="btn btn-outline-dark">View</a>
                                                </td>
                                          </tr>
                                          <tr>
                                                <td>6</td>
                                                <td>
                                                      PPID pada PPID Pembantu dan Satker Pendidikan sudah memiliki petugas informasi/pejabat fungsional yang membantu PPID Pembantu dan Satker Pendidikan dalam memberikan layanan informasi publik.
                                                </td>
                                                <td>
                                                      <a href="" class="btn btn-outline-dark">View</a>
                                                </td>
                                          </tr>
                                          <tr>
                                                <td>7</td>
                                                <td>
                                                      PPID pada PPID Pembantu dan Satker Pendidikan sudah mengalokasikan anggaran untuk membiayai peningkatan kapasitas PPID Pembantu dan Satker Pendidikan serta kegiatan layanan informasi publik.
                                                </td>
                                                <td>
                                                      <a href="" class="btn btn-outline-dark">View</a>
                                                </td>
                                          </tr>
                                    </tbody>
                              </table>

                        </div>
                  </div>
            </div>
      </section>
</main>

@endsection
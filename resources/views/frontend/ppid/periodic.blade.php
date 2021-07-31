@extends('layouts.app')
@section('content')

<style>
      .no-underline {
            text-decoration: none !important
      }

      .accordion-item .no-underline:hover {
            color: #1C8DCF !important;
      }
</style>

<main>
      <section style="background-color: #ffffff; margin: 30px;">
            <div class="d-flex container flex-lg-row flex-column align-items-center card shadow p-5 mt-10 mb-3">
                  <div class="row">
                        <div class="col-md-12">
                              <p class="h3 mb-5"><b>Informasi yang Wajib Disediakan dan Diumumkan Secara Berkala</b></p>
                              <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                      1. Informasi Tentang Dinas Arsip dan Perpustakaan Kota Bandung
                                                </button>
                                          </h2>
                                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                      <ul>
                                                            <li><a href="" class="no-underline text-dark color-hover">Informasi tentang sejarah Dinas Arsip dan Perpustakaan</a></li>
                                                            <li><a href="" class="no-underline text-dark color-hover">Visi dan misi</a></li>
                                                            <li><a href="" class="no-underline text-dark color-hover">Struktur organisasi Dinas Arsip dan Perpustakaan</a></li>
                                                      </ul>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                      2. Ringkasan informasi tentang program dan/atau kegiatan yang sedang dijalankan dalam lingkup badan publik
                                                </button>
                                          </h2>
                                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                      <ul>
                                                            <li><a href="" class="no-underline text-dark color-hover">Rencana Kerja dan Anggaran</a></li>
                                                            <li><a href="" class="no-underline text-dark color-hover">Penanggungjawab Program Kegiatan </a></li>
                                                            <li><a href="" class="no-underline text-dark color-hover">Rencana Kerja Tahunan Dinas Arsip dan Perpustakaan</a></li>
                                                            <li><a href="" class="no-underline text-dark color-hover">Agenda DISARPUS</a></li>
                                                            <li><a href="" class="no-underline text-dark color-hover">Informasi khusus lainnya yang berkaitan dengan hak-hak masyarakat</a></li>
                                                      </ul>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                      3. Ringkasan informasi tentang kinerja DISARPUS
                                                </button>
                                          </h2>
                                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                      <ul>
                                                            <li><a href="" class="no-underline text-dark color-hover">LKIP</a></li>
                                                      </ul>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                      4. Ringkasan Laporan Keuangan
                                                </button>
                                          </h2>
                                          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                      <ul>
                                                            <li><a href="" class="no-underline text-dark color-hover">Laporan Keuangan</a></li>
                                                            <li><a href="" class="no-underline text-dark color-hover">Catatan Atas Laporan Keuangan</a></li>
                                                            <li><a href="" class="no-underline text-dark color-hover">Neraca Disarpus</a></li>
                                                            <li><a href="" class="no-underline text-dark color-hover">Daftar Aset</a></li>
                                                      </ul>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="accordion-item p-3">
                                          <a href="" class="h6 no-underline text-dark">
                                                5. Ringkasan laporan akses informasi publik
                                          </a>
                                    </div>
                                    <div class="accordion-item p-3">
                                          <a href="" class="h6 no-underline text-dark">
                                                6. Waktu Pelayanan
                                          </a>
                                    </div>
                                    <div class="accordion-item p-3">
                                          <p class="h6">7. Informasi tentang peraturan, keputusan, dan/atau kebijakan yang mengikat dan/atau berdampak bagi publik yang dikeluarkan</p>
                                    </div>
                                    <div class="accordion-item p-3">
                                          <a href="" class="h6 no-underline text-dark">
                                                8. Laporan Akses Informasi Publik
                                          </a>
                                    </div>
                                    <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingNine">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                      9. Informasi tentang hak dan tata cara memperoleh Informasi Publik, serta tata cara pengajuan keberatan serta proses penyelesaian sengketa Informasi Publik berikut pihak-pihak yang bertanggungjawab yang dapat dihubungi 
                                                </button>
                                          </h2>
                                          <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                      <ul>
                                                            <li><a href="" class="no-underline text-dark color-hover">Alamat kontak PPID </a></li>
                                                      </ul>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="accordion-item p-3">
                                          <p class="h6">10. Informasi tentang pengumuman pengadaan barang jasa</p>
                                    </div>
                                    <div class="accordion-item p-3">
                                          <a href="" class="h6 no-underline text-dark">
                                                11. Informasi tentang prosedur peringatan dini dan prosedur evakuasi keadaan darurat  
                                          </a>
                                    </div>
                                    <div class="accordion-item p-3">
                                          <p class="h6">12. Informasi tentang kegiatan pelayanan informasi publik</p>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </section>
</main>

@endsection
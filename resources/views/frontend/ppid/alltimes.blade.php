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
                              <p class="h3 mb-5"><b>Informasi yang Wajib Disediakan Setiap Saat</b></p>
                              <div class="accordion" id="accordionExample">
                                    <div class="accordion-item p-3">
                                          <a href="" class="h6 no-underline text-dark">
                                                1. Daftar Informasi Publik
                                          </a>
                                    </div>
                                    <div class="accordion-item p-3">
                                          <a href="" class="h6 no-underline text-dark">
                                                2. Informasi tentang peraturan, keputusan, dan/atau kebijakan yang dikeluarkan oleh Pemerintah Daerah
                                          </a>
                                    </div>
                                    <div class="accordion-item p-3">
                                          <a href="" class="h6 no-underline text-dark">
                                                3. Daftar rancangan peraturan perundang-undangan yang akan dikeluarkan Dinas Arsip dan Perpustakaan
                                          </a>
                                    </div>
                                    <div class="accordion-item p-3">
                                          <p class="h6">4. Informasi tentang surat-surat perjanjian dengan pihak ketiga berikut dokumen pendukungnya (Hardcopy)</p>
                                    </div>
                                    <div class="accordion-item p-3">
                                          <p class="h6">5. Surat menyurat pimpinan atau pejabat Disarpus dalam rangka pelaksanaan tugas pokok dan fungsinya (Hardcopy) </p>
                                    </div>
                                    <div class="accordion-item p-3">
                                          <p class="h6">6. Syarat-syarat perizinan/pelayanan yang diberikan Disarpus (Hardcopy) </p>
                                    </div>
                                    <div class="accordion-item p-3">
                                          <a href="" class="h6 no-underline text-dark">
                                                7. Daftar Inventarisasi Barang
                                          </a>
                                    </div>
                                    <div class="accordion-item p-3">
                                          <a href="" class="h6 no-underline text-dark">
                                                8. Rencana Strategis Disarpus
                                          </a>
                                    </div>
                                    <div class="accordion-item p-3">
                                          <a href="" class="h6 no-underline text-dark">
                                                9. Rencana Kerja Disarpus
                                          </a>
                                    </div>
                                    <div class="accordion-item p-3">
                                          <a href="" class="h6 no-underline text-dark">
                                                10. Agenda Pimpinan Badan Publik
                                          </a>
                                    </div>
                                    <div class="accordion-item p-3">
                                          <a href="" class="h6 no-underline text-dark">
                                                11. Pelayanan Informasi Publik melalui website “Standar Pelayanan”
                                          </a>
                                    </div>
                                    <div class="accordion-item p-3">
                                          <p class="h6">12. Jumlah, jenis, dan gambaran umum pelanggaran yang dilaporkan oleh masyarakat serta laporan penindakannya </p>
                                    </div>
                                    <div class="accordion-item p-3">
                                          <p class="h6">13. Data Statistik </p>
                                    </div>
                                    <div class="accordion-item p-3">
                                          <p class="h6">14. Laporan Hasil Pengawasan Kearsipan  </p>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </section>
</main>

@endsection
<section class="h-100 w-100 bg-white" style="box-sizing: border-box">
      <div class="header-4-2 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif;">
            <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="navbar-toggler container border-outline-1 bg-white fixed-top p-4" style="border-color:#1C8DCF; box-shadow:0 0 32px -4px rgba(0,0,0,.15);">
                        <a class="modal-title" id="targetModalLabel">
                              <img src="{{ asset('img/') }}/Logo-DISPUSIP-Kota-Bandung.png" height="50" width="50" alt="" />
                        </a>
                        <button class="border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
                              <span class="navbar-toggler-icon"></span>
                        </button>
                  </div>

                  <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog" aria-labelledby="targetModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                              <div class="modal-content bg-white border-0 p-4">
                                    <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                                          <div class="modal-header border-0" >
                                                <a class="modal-title" id="targetModalLabel">
                                                      <img src="{{ asset('img/') }}/Logo-DISPUSIP-Kota-Bandung.png" height="50" width="50" alt="" />
                                                </a>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                                                <li class="nav-item">
                                                      <a class="nav-link" href="/" style="color:black">
                                                            <b>Perpustakaan & Kearsipan</b> <br>
                                                            Kota Bandung
                                                      </a>
                                                </li>
                                                <li class="nav-item dropdown @if(Request::segment(1) == 'profile') active @endif">
                                                      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Profile</a>
                                                      <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                                            <li><a class="dropdown-item" href="{{ route('organizational structure') }}">Struktur Organisasi</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('vision and mission') }}">Visi dan misi</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('main task and function') }}">Tugas pokok dan Fungsi</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('goal and target') }}">Tujuan dan sasaran</a></li>
                                                      </ul>
                                                </li>

                                                <li class="nav-item dropdown @if(Request::segment(1) == 'ppid') active @endif">
                                                      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">PPID</a>
                                                      <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                                            <li><a class="dropdown-item" href="{{ route('organizational structure') }}">Pembentukan dan Struktur PPID </a></li>
                                                            <li><a class="dropdown-item" href="{{ route('vision and mission') }}">PPID Pembantu</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('main task and function') }}">Informasi Wajib Berkala</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('goal and target') }}">Keuangan</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('goal and target') }}">Informasi Wajib Setiap Saat</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('goal and target') }}">Informasi Serta Merta</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('goal and target') }}">Kelengkapan</a></li>
                                                      </ul>
                                                </li>

                                                <li class="nav-item dropdown @if(Request::segment(1) == 'news') active @endif">
                                                      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">NEWS</a>
                                                      <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                                            <li><a class="dropdown-item" href="{{ route('organizational structure') }}">Jurnal</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('vision and mission') }}">Artikel</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('main task and function') }}">Press Release</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('goal and target') }}">Kegiatan</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('goal and target') }}">Pengumuman</a></li>
                                                      </ul>
                                                </li>


                                                <li class="nav-item dropdown @if(Request::segment(1) == 'news') active @endif">
                                                      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Perpustakaan</a>
                                                      <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                                            <li><a class="dropdown-item" href="{{ route('organizational structure') }}">Keanggotaan</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('vision and mission') }}">Katalog</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('main task and function') }}">Data Perpustakaan</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('goal and target') }}">Indeks Kepuasan Masyarakat (IKM) <br> Terhapdap Layanan Perpustakaan</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('goal and target') }}">Kuesoner Indeks Minat <br> Baca Kota Bandung</a></li>
                                                      </ul>
                                                </li>

                                                <li class="nav-item dropdown @if(Request::segment(1) == 'news') active @endif">
                                                      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Kearsipan</a>
                                                      <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                                            <li><a class="dropdown-item" href="{{ route('organizational structure') }}">Data Kearsipan</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('vision and mission') }}">Galeri Arsip</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('main task and function') }}">Khazanah Arsip</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('goal and target') }}">Indeks Kepuasan Masyarakat (IKM) <br> Terhadapan Layanan Kearsipan</a></li>
                                                      </ul>
                                                </li>



                                                <!-- <li class="nav-item @if(Request::segment(1) == 'information') active @endif">
                                          <a class="nav-link" href="{{ route('information') }}">Informasi</a>
                                    </li>
                                    <li class="nav-item @if(Request::segment(1) == 'article') active @endif">
                                          <a class="nav-link" href="{{ route('article') }}">Berita</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="{{ route('information') }}">Perpustakkan</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="{{ route('article') }}">Kearsipan</a>
                                    </li>
                                    <li class="gap-3">
                                          <a href="{{ route('contact') }}">
                                                <button class="btn btn-fill text-white">Kontak kami</button>
                                          </a>
                                    </li> -->
                                          </ul>
                                    </div>
                              </div>
                        </div>
                  </div>


                  <div class="collapse navbar-collapse bg-white fixed-top border-outline-1" style="padding: 40px; flex: 1; justify-content: space-between; height: 60px; box-shadow:0 0 32px -4px rgba(0,0,0,.15); " id="navbarTogglerDemo">
                        <div class="container" style="flex: 1;">
                              <a href="#">
                                    <img style="margin-right: 1rem" src="{{ asset('img/') }}/Logo-DISPUSIP-Kota-Bandung.png" height="45" width="45" alt="" />
                              </a>
                              <div class="nav-item" style="flex: 1; align-items: center;">
                                    <a class="nav-link" href="/" style="color:black">
                                          <b>Perpustakaan & Kearsipan</b> <br>
                                          Kota Bandung
                                    </a>
                              </div>
                              <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                                    <li class="nav-item dropdown @if(Request::segment(1) == 'profile') active @endif">
                                          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Profile</a>
                                          <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                                <li><a class="dropdown-item" href="{{ route('organizational structure') }}">Struktur Organisasi</a></li>
                                                <li><a class="dropdown-item" href="{{ route('vision and mission') }}">Visi dan misi</a></li>
                                                <li><a class="dropdown-item" href="{{ route('main task and function') }}">Tugas pokok dan Fungsi</a></li>
                                                <li><a class="dropdown-item" href="{{ route('goal and target') }}">Tujuan dan sasaran</a></li>
                                          </ul>
                                    </li>

                                    <li class="nav-item dropdown @if(Request::segment(1) == 'ppid') active @endif">
                                          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">PPID</a>
                                          <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                                <li><a class="dropdown-item" href="{{ route('organizational structure') }}">Pembentukan dan Struktur PPID </a></li>
                                                <li><a class="dropdown-item" href="{{ route('vision and mission') }}">PPID Pembantu</a></li>
                                                <li><a class="dropdown-item" href="{{ route('main task and function') }}">Informasi Wajib Berkala</a></li>
                                                <li><a class="dropdown-item" href="{{ route('goal and target') }}">Keuangan</a></li>
                                                <li><a class="dropdown-item" href="{{ route('goal and target') }}">Informasi Wajib Setiap Saat</a></li>
                                                <li><a class="dropdown-item" href="{{ route('goal and target') }}">Informasi Serta Merta</a></li>
                                                <li><a class="dropdown-item" href="{{ route('goal and target') }}">Kelengkapan</a></li>
                                          </ul>
                                    </li>

                                    <li class="nav-item dropdown @if(Request::segment(1) == 'news') active @endif">
                                          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">NEWS</a>
                                          <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                                <li><a class="dropdown-item" href="{{ route('organizational structure') }}">Jurnal</a></li>
                                                <li><a class="dropdown-item" href="{{ route('vision and mission') }}">Artikel</a></li>
                                                <li><a class="dropdown-item" href="{{ route('main task and function') }}">Press Release</a></li>
                                                <li><a class="dropdown-item" href="{{ route('goal and target') }}">Kegiatan</a></li>
                                                <li><a class="dropdown-item" href="{{ route('goal and target') }}">Pengumuman</a></li>
                                          </ul>
                                    </li>


                                    <li class="nav-item dropdown @if(Request::segment(1) == 'news') active @endif">
                                          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Perpustakaan</a>
                                          <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                                <li><a class="dropdown-item" href="{{ route('organizational structure') }}">Keanggotaan</a></li>
                                                <li><a class="dropdown-item" href="{{ route('vision and mission') }}">Katalog</a></li>
                                                <li><a class="dropdown-item" href="{{ route('main task and function') }}">Data Perpustakaan</a></li>
                                                <li><a class="dropdown-item" href="{{ route('goal and target') }}">Indeks Kepuasan Masyarakat (IKM) <br> Terhapdap Layanan Perpustakaan</a></li>
                                                <li><a class="dropdown-item" href="{{ route('goal and target') }}">Kuesoner Indeks Minat <br> Baca Kota Bandung</a></li>
                                          </ul>
                                    </li>

                                    <li class="nav-item dropdown @if(Request::segment(1) == 'news') active @endif">
                                          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Kearsipan</a>
                                          <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                                <li><a class="dropdown-item" href="{{ route('organizational structure') }}">Data Kearsipan</a></li>
                                                <li><a class="dropdown-item" href="{{ route('vision and mission') }}">Galeri Arsip</a></li>
                                                <li><a class="dropdown-item" href="{{ route('main task and function') }}">Khazanah Arsip</a></li>
                                                <li><a class="dropdown-item" href="{{ route('goal and target') }}">Indeks Kepuasan Masyarakat (IKM) <br> Terhadapan Layanan Kearsipan</a></li>
                                          </ul>
                                    </li>



                                    <!-- <li class="nav-item @if(Request::segment(1) == 'information') active @endif">
                                          <a class="nav-link" href="{{ route('information') }}">Informasi</a>
                                    </li>
                                    <li class="nav-item @if(Request::segment(1) == 'article') active @endif">
                                          <a class="nav-link" href="{{ route('article') }}">Berita</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="{{ route('information') }}">Perpustakkan</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="{{ route('article') }}">Kearsipan</a>
                                    </li>
                                    <li class="gap-3">
                                          <a href="{{ route('contact') }}">
                                                <button class="btn btn-fill text-white">Kontak kami</button>
                                          </a>
                                    </li> -->
                              </ul>
                        </div>
                  </div>
            </nav>
      </div>
</section>
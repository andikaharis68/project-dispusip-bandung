<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white" style="border: 0.125rem solid #0d6efd; margin-left: 0 !important;">
    <div class="container">
        <a href="../../index3.html" class="navbar-brand">
            <img src="{{ asset('img/') }}/Logo-DISPUSIP-Kota-Bandung.png" height="50" width="50" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
            <!-- <span class="brand-text font-weight-light">AdminLTE 3</span> -->
            <a class="brand-text bold" href="/" style="color:black; width:150px; text-decoration: none;">
                DISARSIPUS <br>
                Kota Bandung
            </a>
        </a>
        <div class="collapse navbar-collapse order-3" style="background-color:#ffff;" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Profil</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a class="dropdown-item" href="{{ route('organizational structure') }}">Struktur Organisasi </a></li>
                        <li><a class="dropdown-item" href="{{ route('vision and mission') }}">Visi dan Misi</a></li>
                        <li><a href="{{ route('goal') }}" class="dropdown-item">Tujuan</a></li>
                        <li class="dropdown-submenu dropdown-hover">
                            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Dasar Hukum</a>
                            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                <li><a tabindex="-1" href="{{ route('library law') }}" class="dropdown-item">Dasar Hukum Perpustakaan</a></li>
                                <li><a href="{{ route('archive law') }}" class="dropdown-item">Dasar Hukum Arsip</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('activity dinas') }}" class="dropdown-item">Program/Kegiatan Dinas</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">PPID</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="#" class="dropdown-item">PPID Pembantu</a></li>
                        <li><a href="#" class="dropdown-item">Informasi Wajib Berkala</a></li>
                        <li class="dropdown-submenu dropdown-hover">
                            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Keuangan</a>
                            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                <li><a tabindex="-1" href="#" class="dropdown-item">Tahun 2018</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu dropdown-hover">
                            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Informasi Wajib <br>Setiap Saat</a>
                            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                <li><a tabindex="-1" href="#" class="dropdown-item">Informasi yang Wajib Disediakan Setiap Saat</a></li>
                                <li class="dropdown-submenu">
                                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">SOP</a>
                                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                                        <li><a href="#" class="dropdown-item">SOP Pengembangan Perpustakaan Kearsipan</a></li>
                                        <li><a href="#" class="dropdown-item">SOP Informasi Teknologi</a></li>
                                        <li><a href="#" class="dropdown-item">SOP Pengelolaan Perpustakaan</a></li>
                                        <li><a href="#" class="dropdown-item">SOP Pengelolaan Kearsipan</a></li>
                                    </ul>
                                </li>
                                <li><a tabindex="-1" href="#" class="dropdown-item">RPJMD</a></li>
                                <li><a tabindex="-1" href="#" class="dropdown-item">Rencana Strategis</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">NEWS</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="#" class="dropdown-item">Jurnal</a></li>
                        <li><a href="#" class="dropdown-item">Artikel</a></li>
                        <li><a href="#" class="dropdown-item">Press Release</a></li>
                        <li><a href="#" class="dropdown-item">Kegiatan</a></li>
                        <li><a href="#" class="dropdown-item">Pengumuman</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Perpustakaan</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li class="dropdown-submenu dropdown-hover">
                            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Keanggotaan</a>
                            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                <li><a tabindex="-1" href="#" class="dropdown-item">Syarat Pendaftaran</a></li>
                                <li><a href="#" class="dropdown-item">Pendaftaran Anggota</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="dropdown-item">Katalog Buku</a></li>
                        <li class="dropdown-submenu dropdown-hover">
                            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Data Perpustakaan</a>
                            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                <li><a tabindex="-1" href="#" class="dropdown-item">Data Pemustaka</a></li>
                                <li><a href="#" class="dropdown-item">Data Buku</a></li>
                                <li><a href="#" class="dropdown-item">Statistik</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="dropdown-item">Indeks Kepuasan Masyarakat (IKM) <br />Terhadap Layanan Perpustakaan</a></li>
                        <li><a href="#" class="dropdown-item">Kuesioner Indeks Minat Baca Kota Bandung</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Kearsipan</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li class="dropdown-submenu dropdown-hover">
                            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Data Kearsipan</a>
                            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                <li><a tabindex="-1" href="#" class="dropdown-item">Data OPD binaan</a></li>
                                <li><a href="#" class="dropdown-item">Data Penelusuran Arsip Sejarah</a></li>
                                <li><a href="#" class="dropdown-item">Data Rekapitulasi Daftar Arsip Statis</a></li>
                                <li><a href="#" class="dropdown-item">Dokumen Bidang Kearsipan</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="dropdown-item">Galeri Arsip</a></li>
                        <li><a href="#" class="dropdown-item">Khazanah Arsip</a></li>
                        <li><a href="#" class="dropdown-item">Indeks Kepuasan Masyarakat (IKM) <br />Terhadap Layanan Kearsipan</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </ul>
    </div>
</nav>
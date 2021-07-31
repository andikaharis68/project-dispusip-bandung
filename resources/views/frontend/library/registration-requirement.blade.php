@extends('layouts.app')
@section('content')

<main class="mt-5">
    <section style="background-color: #ffffff;">
        <div class="container border rounded overflow-hidden flex-md-row mt-10 mb-4 shadow h-md-250 position-relative">
            <div class="row">
                <div class="ml-4 mr-4 col p-4 d-flex flex-column position-static">
                    <div class="pl-3 py-4 pb-2">
                        <h2>
                            <b>Syarat Pendaftaran</b>
                        </h2>
                        <br />
                        <div>
                            <h4>
                                <b>PERSYARATAN MENJADI ANGGOTA PERPUSTAKAAN</b>
                            </h4>
                            <br />
                            <ul class="ps-3">
                                <li>Berdomisili di wilayah Kota Bandung</li>
                                <li>Mebawa surat keterangan untuk pelajar dari sekolah ybs, Mahasiswa dari Perguruan Tinggi ybs, pegawai dari instansi ybs dan umum dari RT diketahui lurah setempat.</li>
                                <li>Mengisi formulir pendaftaran anggota perpustakaan yang tersedia</li>
                                <li>Membawa pas foto 3 Lembar Ukuran 2 X 3</li>
                                <li>Kelengkapan (dokumen) yang dipersyaratkan untuk menjadi anggota perpustakaan :</li>
                                <ul class="ps-3">
                                    <li>Pegawai Pemerintah/Swasta dan masyarakat umum 1(satu) lembar foto copy KTP yang masih berlaku dan memperlihatkan aslinya pada saat pendaftaran.</li>
                                    <li>Mahasiswa dan pelajar 1 (satu) lembar foto copy Kartu Mahasiswa / Kartu Pelajar dan yang masih berlaku dan memperlihatkan aslinya pada saat pendaftaran.</li>
                                    <li>Calon anggota perpustakaan yang berusia di bawah 17 tahun menyerahkan 1 (satu) lembar foto copy Kartu Mahasiswa/Kartu Pelajar atau KTP orang tua yang masih berlaku.</li>
                                </ul>
                                <li>Bagi anggota lama yang ingin memperpanjang status keanggotaan perpustakaan, pada saat pendaftaram harus menunjukkan kartu anggota perpustakaan yang lama.</li>
                                <li>Bersedia mentaati peraturan perpustakaan.</li>
                                <li>Persyaratan diatas dapat anda kirimkan melalui email ke <strong><a href="#" style="text-decoration: none; color: #43c801">anggota@kapusarda.com.</a></strong></li>
                            </ul>
                        </div>
                        <br />
                        <div>
                            <h4>
                                <b>PERATURAN PERPUSTAKAAN</b>
                            </h4>
                            <br />
                            <ul class="ps-3">
                                <li>Pemustaka (Pengguna Perpustakaan) sebelum memasuki ruang baca dan ruang koleksi wajib menitipkan barang bawaan seperti jaket, tas, dan topi pada tempat penitipan (locker) yang telah disediakan.</li>
                                <li>Penggunaan tempat penitipan barang (locker) diatur sebagai berikut :</li>
                                <ul class="ps-3">
                                    <li>Locker hanya diperuntukkan bagi pengunjung perpustakaan.</li>
                                    <li>Barang bawaan pengunjung yang boleh dititipkan di locker hanya berupa jaket, topi dan tas.</li>
                                    <li>Tidak diperkenankan menitipkan/memasukkan barang berharga (uang dan perhiasan) dan helm ke dalam locker</li>
                                    <li>Pengunjung tidak diperkenankan membawa pulang kunci dan nomor locker. Apabila pengunjung tanpa sengaja membawa pulang nomor dan kunci locker, maka yang bersangkutan harus segera melapor ke petugas locker.</li>
                                    <li>Pengunjung harus menjaga dengan baik nomor dan kunci locker yang dipinjam</li>
                                </ul>
                                <li>Pemustaka wajib memindai (menyorot) kartu anggota atau kartu kendali pengunjung pada sistem komputer tamu (buku tamu).</li>
                                <li>Selama berada di ruang baca dan ruang koleksi para pemustaka tidak diperbolehkan membuat kegaduhan yang dapat mengganggu ketenangan pembaca lainnya.</li>
                                <li>Pemustaka tidak diperkenankan membawa makanan dan minuman serta benda tajam (silet, gunting, cutter dan sejenisnya) ke dalam ruang baca dan ruang koleksi.</li>
                                <li>Pemustaka tidak diperbolehkan merokok dalam ruangan perpustakaan</li>
                                <li>Pemustaka diharapkan mengenakan pakain rapi dan sopan pada saat mendayagunakan perpustakaan</li>
                                <li>Pemustaka wajib memelihara kebersihan ruangan perpustakaan dengan membuang sampah pada tempat yang disediakan.</li>
                                <li>Pemustaka wajib memelihara kebersihan kamar kecil (WC) dan memanfaatkannya sesuai dengan fungsi dan peruntukannya.</li>
                                <li>Koleksi bahan pustaka yang dapat dipinjam untuk dibawa pulang ke rumah adalah koleksi buku umum yang berada di ruang anak-anak dan ruang koleksi umum.</li>
                                <li>Koleksi rujukan (referensi) seperti kamus, ensiklopedia, direktori, almanak, peraturan perundang-undangan, laporan penelitian, handbook, peta, atlas, dan gazettir yang berada di ruang referensi dan ruang anak-anak dan koleksi majalah dan surat kabar yang disimpan di ruang layanan terbitan berkala serta koleksi deposit Kaltim hanya untuk dibaca atau dicatat di tempat.</li>
                                <li>Tidak diperbolehkan membawa koleksi bahan pustaka ke luar dari ruang baca/ruang koleksi sebelum melalui proses administrasi peminjaman</li>
                                <li>Pemustaka (pengguna perpustakaan) wajib memlihara setiap koleksi bahan pustaka dan fasilitas yang tersedia di perpustakaan</li>
                                <li>Pemustaka (pengguna perpustakaan) yang merusak koleksi bahan pustaka dan fasilitas perpustakaan lainnya akan dikenakan sanksi berupa kewajiban untuk mengganti koleksi bahan pustaka atau fasilitas perpustakaan yang dirusak.</li>
                            </ul>
                        </div>
                        <br />
                        <div>
                            <h4>
                                <b>PERATURAN PEMINJAMAN DAN PENGEMBALIAN BUKU</b>
                            </h4>
                            <br />
                            <ul class="ps-3">
                                <li>Pemustaka yang berhak meninjam buku untuk di bawa pulang adalah mereka yang telah terdaftar sebagai anggota perpustakaan (memiliki kartu anggota perpustakaan) yang masih berlaku</li>
                                <li>Kartu Anggota Perpustakaan tidak diperbolehkan dipinjamkan kepada orang lain</li>
                                <li>Kartu Anggota Pra Sekolah (TK) sampai dengan SD tidak dapat dipergunakan untuk meminjam koleksi buku remaja dan dewasa</li>
                                <li>Pada saat meminjam buku diwajibkan memperlihatkan/menyerahkan Kartu Anggota Perpustakaan dan buku yang akan dipinjam kepada petugas layanan di counter peminjaman</li>
                                <li>Petugas bagian peminjaman akan meneliti kondisi fisik buku dan melakukan entri data buku ke dalam sistem database peminjaman.</li>
                                <li>Jumlah buku yang dapat dipinjam oleh pemustaka adalah maksimal 2 judul atau 2 eksemplar dengan lamanya peminjaman selama maksima 7 hari.</li>
                                <li>Pada saat mengembalikan buku diwajibkan memperlihatkan/menyerahkan Kartu Anggota Perpustakaan dan buku yang dipinjam kepada petugas layanan di counter pengembalian buku.</li>
                                <li>Petugas bagian pengembalian akan meneliti kondisi fisik buku yang dikembalikan oleh pemustaka dan melakukan penyesuaian data pengembalian buku pada sistem database pengembalian.</li>
                                <li>Apabila buku yang dikembalikan masih diperlukan oleh pemustaka, maka buku tersebut dapat diperpanjang masa peminjamannya sebanyak 1 kali dan selanjutnya harus dikembalikan. Perpanjangan masa peminjaman harus dilakukan secara langsung oleh pemustaka di bagian peminjaman dan tidak dapat dilakukan melalui surat maupun telepon.</li>
                                <li>Apabila pemustaka merusak (rusak parah) / menghilangkan atau terlambat mengembalikan buku yang dipinjam, maka akan dikenakan sanksi berikut :</li>
                                <ul class="ps-3">
                                    <li>Pemustaka yang merusak atau menghilangkan buku yang dipinjam, maka diwajibkan mengganti buku yang dirusak/dihilangkan dengan buku yang sama.</li>
                                    <li>Pemustaka yang mengembalikan buku yang dipinjam melebihi tanggal jatuh tempo (terlambat), maka akan dikenakan sanksi berupa denda keterlambatan sebesar Rp.500 / hari / buku.</li>
                                    <li>Pemustaka yang belum mengembalikan buku yang dipinjam dalam jangka waktu 14 hari akan ditagih / ditegur melalui surat.</li>
                                    <li>Pemustaka yang tidak mengindahkan tagihan/teguran tersebut atau telah melewati jatuh tempo peminjaman lebih dari 20 hari, maka akan ditangani oleh pihak yang berwajib dan status keanggotaannya akan dicabut.</li>
                                </ul>
                                <li>Masa berlaku Kartu Anggota Perpustakaan adalah satu tahun dan dapat diperpanjang setiap tahun</li>
                                <li>Pemustaka yang bukan merupakan anggota perpustakaan, apabila ingin mengcopy buku harus memperhatikan hal-hal sebagai berikut : – UU Nomor 19 Tahun 2002 tentang Hak Cipta – Jumlah buku yang dicopy maksimal 3 judul.</li>
                            </ul>
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
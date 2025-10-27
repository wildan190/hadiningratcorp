# Blueprint Aplikasi Web Hadiwijaya

## 1. Ikhtisar Proyek

Dokumen ini berfungsi sebagai cetak biru teknis dan desain untuk proyek web Hadiwijaya. Tujuannya adalah untuk menyediakan sumber kebenaran tunggal bagi para pengembang mengenai arsitektur, fitur, dan konvensi pengkodean yang digunakan dalam aplikasi.

Aplikasi ini adalah sebuah situs web profil perusahaan dan layanan untuk Hadiwijaya, sebuah perusahaan yang berspesialisasi dalam layanan konstruksi seperti *bore pile*. Situs ini dibangun menggunakan framework Laravel dengan tumpukan teknologi modern untuk memastikan kinerja, keamanan, dan skalabilitas.

## 2. Arsitektur & Fitur Aplikasi

Bagian ini menguraikan status aplikasi saat ini, termasuk teknologi yang digunakan, struktur halaman, desain, dan fitur-fitur utamanya.

### 2.1. Tumpukan Teknologi

*   **Backend:** Laravel (PHP)
*   **Frontend:** Blade, Tailwind CSS
*   **JavaScript:** Alpine.js untuk interaktivitas komponen
*   **Dependencies:** `vite` untuk kompilasi aset, `axios` (via `bootstrap.js`) untuk permintaan HTTP.

### 2.2. Halaman & Perutean

Struktur perutean didefinisikan dalam `routes/web.php` dan dikelola oleh `PageController` dan `ProductController`.

*   **Halaman Statis (`PageController`):**
    *   `GET /` -> `home` (Halaman Utama)
    *   `GET /about` -> `about` (Tentang Kami)
    *   `GET /contact` -> `contact` (Kontak)

*   **Halaman Layanan (`PageController`):**
    *   `GET /bore-pile-hydraulic` -> `bore-pile-hydraulic`
    *   `GET /jasa-bore-pile-manual` -> `bore-pile-manual`
    *   `GET /bore-pile-mini-crane` -> `bore-pile-mini-crane`

*   **Halaman Produk/Layanan Dinamis (`ProductController`):**
    *   `GET /area-layanan` -> `products.index` (Menampilkan semua produk/layanan)
    *   `GET /area-layanan/{slug}` -> `products.show` (Menampilkan detail produk/layanan)

### 2.3. Integrasi Produk & Manajemen Data

*   **Koneksi Asli (Dinonaktifkan Sementara):** Awalnya, aplikasi ini dirancang untuk mengambil data produk secara dinamis dari situs WordPress/WooCommerce (`hadiningratcorp.com`) melalui API REST. Kredensial disimpan di file `.env` (`WC_CONSUMER_KEY`, `WC_CONSUMER_SECRET`, `WC_API_URL`).
*   **Status Saat Ini (Menggunakan Data Palsu):** Karena adanya masalah konektivitas jaringan (kemungkinan besar firewall) yang memblokir permintaan HTTP dari server hosting ke API WooCommerce, `ProductController` telah dimodifikasi untuk menggunakan **data palsu (mock data)**. Ini memungkinkan pengembangan dan pengujian frontend terus berjalan tanpa bergantung pada koneksi eksternal. **Kode asli untuk koneksi API tetap ada di dalam controller tetapi dalam keadaan dikomentari** untuk kemudahan aktivasi di masa mendatang.

### 2.4. Desain & Gaya Visual

Desain aplikasi ini modern, bersih, dan berorientasi pada merek. Palet warna dan tipografi ditentukan dalam `tailwind.config.js` dan digunakan secara konsisten di seluruh komponen Blade.

*   **Palet Warna Utama:**
    *   `brand-blue`: `#1E2748` (Biru tua, untuk teks utama, header, footer)
    *   `brand-orange`: `#ED6D31` (Oranye, untuk tombol utama, aksen, dan tautan *hover*)
*   **Tipografi:**
    *   `font-title`: 'Poppins', sans-serif (Untuk judul utama)
    *   `font-poppins`: 'Poppins', sans-serif (Untuk navigasi dan teks lainnya)
    *   `font-sans`: 'Rubik', sans-serif (Teks isi utama)
*   **Komponen UI Utama:**
    *   **Header (`components/header.blade.php`):** Header mengambang (fixed) dengan latar belakang transparan (`backdrop-blur`), menu dropdown untuk layanan, dan desain responsif yang dapat diciutkan di perangkat seluler.
    *   **Kartu Produk (`area-layanan.blade.php`):** Kartu dengan bayangan, efek *hover* (sedikit terangkat), gambar produk, judul, dan harga.
    *   **Modal Booking (`produk-detail.blade.php`):** Modal interaktif yang ditenagai oleh Alpine.js, muncul saat tombol "Booking Sekarang" diklik. Berisi formulir untuk nama, nomor WhatsApp, dan pesan.
    *   **Tombol WhatsApp Mengambang (`layouts/app.blade.php`):** Tombol CTA yang selalu terlihat di sudut kanan bawah untuk akses cepat ke kontak WhatsApp.

### 2.5. Interaktivitas

*   **Navigasi:** Menu dropdown dan menu seluler menggunakan Alpine.js (`x-data`, `x-show`) untuk mengelola keadaan buka/tutup.
*   **Formulir Booking:** Logika pengiriman formulir pada halaman detail produk diimplementasikan dalam blok `@push('scripts')`. Skrip ini mengambil data dari formulir, memformatnya menjadi pesan WhatsApp yang telah diisi sebelumnya, dan membuka tab baru untuk mengirim pesan ke nomor yang telah ditentukan.

## 3. Tugas Saat Ini: Perbaikan Riwayat Git

Bagian ini mendokumentasikan proses perbaikan yang baru saja dilakukan untuk mengatasi masalah riwayat Git yang divergen.

*   **Masalah:** Terjadi *merge* yang salah yang menyebabkan riwayat Git lokal berbeda secara signifikan dari repositori pusat (`origin/main`). Hal ini menyebabkan beberapa *commit* penting (fitur data palsu dan pembaruan desain) terisolasi dan tidak dapat di-*push*.
*   **Resolusi:**
    1.  **`git reset --hard b82aaca`**: Mengembalikan *branch* `main` lokal ke *commit* terakhir yang sama dengan repositori pusat, menghapus *merge* yang salah.
    2.  **`git cherry-pick 7aff0f2`**: Mengambil *commit* "feat: Isolate connection issue with mock data" dan menerapkannya di atas `main` yang sudah bersih.
    3.  **`git cherry-pick 90e1859`**: Mencoba menerapkan *commit* "update" yang berisi perubahan desain. Proses ini diinterupsi oleh beberapa konflik *merge*.
    4.  **Resolusi Konflik Manual:** Setiap file yang berkonflik (`ProductController.php`, `area-layanan.blade.php`, `header.blade.php`, `produk-detail.blade.php`, `web.php`) dianalisis dan diperbaiki secara manual. Dalam semua kasus, versi yang benar adalah versi dari `HEAD` (perubahan kita) yang berisi fitur dan desain terbaru.
    5.  **`git add .` & `git cherry-pick --continue`**: Setelah semua konflik diselesaikan, perubahan ditandai sebagai terselesaikan, dan proses `cherry-pick` dilanjutkan hingga tuntas.
*   **Hasil:** Riwayat Git lokal sekarang linear, bersih, sinkron dengan `origin/main` (jika ditarik), dan berisi semua pekerjaan pengembangan terakhir. Proyek dalam keadaan stabil dan siap untuk pengembangan lebih lanjut.
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

*   **Status Saat Ini (Menggunakan Data Palsu):** Karena adanya masalah konektivitas jaringan yang memblokir permintaan HTTP ke API WooCommerce eksternal, `ProductController` telah dimodifikasi untuk menggunakan **data palsu (mock data)**. Ini memungkinkan pengembangan frontend terus berjalan. Kode asli untuk koneksi API tetap ada di dalam controller tetapi dalam keadaan dikomentari.

### 2.4. Desain & Gaya Visual

Desain aplikasi ini modern, bersih, dan berorientasi pada merek. Palet warna dan tipografi ditentukan dalam `tailwind.config.js`.

*   **Palet Warna Utama:** `brand-blue` (`#1E2748`), `brand-orange` (`#ED6D31`).
*   **Tipografi:** 'Poppins' untuk judul dan 'Rubik' untuk teks isi.
*   **Komponen UI Utama:**
    *   **Header (`components/header.blade.php`):** Header mengambang dengan latar belakang transparan dan menu responsif.
    *   **Kartu Produk (`area-layanan.blade.php`):** Kartu dengan bayangan dan efek *hover*.
    *   **Modal Booking (`produk-detail.blade.php`):** Modal interaktif yang ditenagai oleh Alpine.js untuk formulir pemesanan via WhatsApp.
    *   **Tombol WhatsApp Mengambang (`layouts/app.blade.php`):** Tombol CTA yang selalu terlihat untuk akses cepat.

### 2.5. Komponen Halaman Utama yang Baru Ditambahkan

*   **Alur Kerja (`components/workflows.blade.php`):** Menampilkan 5 langkah proses kerja *bore pile* dalam format *timeline* visual. Komponen ini ditempatkan sebelum bagian Portofolio Proyek untuk mengedukasi klien tentang prosesnya.
*   **Area Layanan (`components/service-areas.blade.php`):** Menampilkan peta ilustratif Jawa-Bali dan sebuah menu *dropdown* yang menautkan ke halaman layanan per kota/provinsi. Ini memberikan gambaran visual jangkauan layanan.
*   **Testimoni (`components/testimonials.blade.php`):** Bagian ini menampilkan kartu ulasan bergaya Google Review untuk membangun kepercayaan, diikuti dengan *slider* logo klien sebagai bukti sosial.

### 2.6. Interaktivitas

*   **Navigasi:** Menu dropdown dan menu seluler menggunakan Alpine.js (`x-data`, `x-show`).
*   **Formulir Booking:** Logika pengiriman formulir pada halaman detail produk memformat pesan WhatsApp yang telah diisi sebelumnya.
*   **Dropdown Area Layanan:** Menu dropdown pada komponen `service-areas` menggunakan HTML dan Tailwind CSS standar, dengan interaktivitas yang dapat ditambahkan di kemudian hari jika diperlukan.

## 3. Tugas Saat Ini: Penambahan Konten Halaman Utama

Bagian ini mendokumentasikan penambahan konten baru ke halaman utama berdasarkan permintaan pengguna.

*   **Permintaan:** Menambahkan tiga bagian baru: "Alur Pekerjaan Bore Pile", "Area Layanan Kami", dan "Testimoni Klien Kami".
*   **Implementasi:**
    1.  **Pembuatan Komponen:** Karena `landing.blade.php` menggunakan arsitektur komponen, tiga komponen Blade baru dibuat:
        *   `resources/views/components/workflows.blade.php`
        *   `resources/views/components/service-areas.blade.php`
        *   `resources/views/components/testimonials.blade.php`
    2.  **Desain Komponen:** Setiap komponen diisi dengan markup HTML dan kelas Tailwind CSS untuk mencocokkan desain modern dan permintaan spesifik (misalnya, kartu ulasan gaya Google, peta, dan *timeline* proses).
    3.  **Integrasi ke Halaman Utama:** Komponen-komponen baru tersebut kemudian ditambahkan ke file `resources/views/landing.blade.php` dalam urutan yang logis untuk alur narasi halaman.
*   **Hasil:** Halaman utama sekarang jauh lebih informatif, memberikan pengunjung pemahaman yang lebih baik tentang proses kerja perusahaan, jangkauan layanan, dan kepercayaan pelanggan.
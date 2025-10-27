# Blueprint Aplikasi Web Hadiningrat Corp

Dokumen ini berfungsi sebagai cetak biru teknis dan fungsional untuk aplikasi web Hadiningrat Corp. Dokumen ini akan terus diperbarui untuk mencerminkan status pengembangan terkini.

---

## 1. Ikhtisar Proyek

*   **Tujuan:** Membangun situs web korporat yang profesional dan modern untuk Hadiningrat Corp yang menampilkan layanan, portofolio, dan keunggulan perusahaan.
*   **Teknologi:**
    *   **Backend:** Laravel (PHP)
    *   **Frontend:** Blade, Tailwind CSS, Alpine.js
    *   **Lingkungan:** Firebase Studio (Project IDX)

---

## 2. Arsitektur & Desain yang Diterapkan

*   **Pola:** Model-View-Controller (MVC) standar Laravel.
*   **Desain & Gaya:**
    *   **Tema Desain:** Korporat, bersih, dan modern dengan dominasi warna putih, aksen biru tua (`#1E2748`), dan oranye (`#ED6D31`) yang mencolok.
    *   **Tipografi:** Menggunakan font **Poppins** untuk semua judul (memberi kesan modern dan tegas) dan font **Rubik** untuk teks isi (memastikan keterbacaan yang sangat baik).
    *   **Struktur Halaman:** Halaman disusun secara logis untuk memandu pengunjung, mulai dari perkenalan, penawaran layanan, keunggulan, bukti sosial (proyek dan testimoni), hingga informasi pendukung (tentang kami, FAQ) dan ajakan bertindak (kontak).
    
    ### Rincian Bagian (Section) dari Atas ke Bawah:
    1.  **Header:** *Sticky header* dengan logo dan menu navigasi yang jelas serta responsif.
    2.  **Hero Section:** Judul kuat, deskripsi singkat, dan CTA utama.
    3.  **Layanan Kami:** Tiga kartu layanan detail dengan ikon, harga, dan fitur.
    4.  **Kelebihan Kami:** Tiga kartu yang menyoroti pilar utama perusahaan: Tenaga Ahli, Berpengalaman, dan Murah & Berkualitas.
    5.  **Proyek Terbaru Kami:** Galeri gambar portofolio.
    6.  **Testimonial Pelanggan:** Kartu testimoni untuk membangun kepercayaan.
    7.  **Tentang Kami:** Deskripsi naratif perusahaan dengan gambar.
    8.  **Tanya Jawab (FAQ):** Akordeon interaktif menggunakan Alpine.js.
    9.  **Kontak:** Bagian yang telah dirombak dengan tata letak dua kolom:
        *   **Kiri:** Formulir kontak.
        *   **Kanan:** Informasi detail (alamat, telepon, email), peta Google Maps yang disematkan, dan ikon sosial media.
    10. **CTA Final:** Ajakan bertindak kedua yang kuat sebelum footer.
    11. **Footer:** Informasi hak cipta.
    
---

## 3. Rencana Perubahan Saat Ini: Implementasi Fitur Produk

*   **Tujuan:** Menambahkan fungsionalitas untuk menampilkan produk dari API WooCommerce eksternal. Fitur ini akan mencakup halaman daftar produk dan halaman detail produk dengan alur pemesanan melalui WhatsApp.
*   **Langkah-langkah Implementasi:**
    1.  **Konfigurasi Backend:**
        *   Membuat file `config/services.php` untuk menyimpan kredensial API WooCommerce dari `.env`.
        *   Membuat `app/Services/WooCommerceService.php` untuk mengelola logika panggilan API.
        *   Menambahkan rute `/produk` dan `/produk/{slug}` di `routes/web.php`.
        *   Membuat `ProductController.php` untuk menangani permintaan ke rute-rute tersebut.
    2.  **Halaman Daftar Produk:**
        *   Membuat *view* `resources/views/produk/index.blade.php`.
        *   Menampilkan semua produk dalam format grid/kartu yang menarik. Setiap kartu akan menjadi tautan ke halaman detail produk.
    3.  **Halaman Detail Produk:**
        *   Membuat *view* `resources/views/produk/show.blade.php`.
        *   Menerapkan tata letak seperti Shopee (gambar di kiri, info di kanan).
        *   Merender deskripsi produk dari API, termasuk format HTML, menggunakan `@{!! !!}`.
        *   Menambahkan gaya (styling) untuk elemen HTML yang dirender (`h1`, `table`, `ul`, dll.) agar sesuai dengan desain situs.
    4.  **Interaktivitas & Pemesanan:**
        *   Menambahkan tombol "Booking Now" di halaman detail.
        *   Menggunakan Alpine.js untuk menampilkan modal saat tombol diklik.
        *   Modal akan berisi formulir. Tombol "Submit" pada formulir akan memicu fungsi JavaScript untuk membuka tab baru ke `wa.me/6281325794818` dengan pesan yang sudah diisi sebelumnya yang menyertakan nama produk.

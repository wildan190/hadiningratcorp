
# Blueprint: Website Landing Page Hadiwijaya Bore Pile

## Ikhtisar Proyek

Tujuan dari proyek ini adalah untuk membuat halaman arahan (landing page) yang menarik dan informatif untuk **Hadiwijaya Bore Pile**, sebuah perusahaan yang berspesialisasi dalam layanan bore pile dan strauss pile. Halaman ini akan menyoroti keahlian, layanan, dan proyek-proyek perusahaan untuk menarik klien potensial dengan penekanan pada biaya yang terjangkau dan kualitas.

---

## Desain, Fitur, dan Gaya yang Telah Diimplementasikan

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

## Evolusi Desain & Rencana Perubahan Terakhir

*   **Tujuan:** Menyelesaikan desain halaman dengan merombak total bagian kontak untuk menyediakan informasi yang lebih kaya dan aksesibilitas yang lebih baik.
*   **Langkah-langkah yang Diambil:**
    1.  **Membaca file `landing.blade.php`**.
    2.  **Merombak Bagian Kontak (`#contact`):**
        *   Mengubah tata letak menjadi grid dua kolom (`md:grid-cols-2`).
        *   **Kolom Kiri:** Mempertahankan formulir kontak.
        *   **Kolom Kanan:** Menambahkan blok baru yang berisi:
            *   Informasi kontak terstruktur (Alamat, Telepon, Email) dengan ikon Font Awesome.
            *   Menyematkan `<iframe>` Google Maps dengan lokasi yang ditentukan.
            *   Menambahkan serangkaian tautan ikon sosial media.
    3.  **Menulis kembali file `landing.blade.php`** dengan struktur kontak yang baru.
    4.  **Memperbarui `blueprint.md`** untuk mencerminkan status final dari desain dan semua fitur halaman, dengan penekanan pada perombakan bagian kontak sebagai perubahan terakhir.

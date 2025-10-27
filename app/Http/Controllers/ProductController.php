<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index()
    {
        // TES: Gunakan data palsu (mock data) untuk sementara
        $products = [
            [
                "id" => 1,
                "name" => "Jasa Bore Pile Profesional (Contoh)",
                "slug" => "jasa-bore-pile-profesional-contoh",
                "price_html" => '<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">Rp</span>1.500.000</bdi></span>',
                "description" => "Ini adalah deskripsi produk palsu untuk pengujian. Jika Anda melihat ini, artinya aplikasi Laravel Anda berfungsi dengan benar.",
                "images" => [
                    ["src" => "https://via.placeholder.com/600x600.png/E2E8F0/1E2748?text=Produk+Contoh+1"]
                ]
            ],
            [
                "id" => 2,
                "name" => "Pondasi Strauss Pile (Contoh)",
                "slug" => "pondasi-strauss-pile-contoh",
                "price_html" => '<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">Rp</span>850.000</bdi></span>',
                "description" => "Ini adalah deskripsi produk palsu kedua. Menunjukkan bahwa rendering beberapa produk juga berfungsi.",
                "images" => [
                    ["src" => "https://via.placeholder.com/600x600.png/E2E8F0/1E2748?text=Produk+Contoh+2"]
                ]
            ],
            [
                "id" => 3,
                "name" => "General Contractor (Contoh)",
                "slug" => "general-contractor-contoh",
                "price_html" => "Harga berdasarkan proyek",
                "description" => "Deskripsi untuk layanan General Contractor.",
                "images" => [
                    ["src" => "https://via.placeholder.com/600x600.png/E2E8F0/1E2748?text=Produk+Contoh+3"]
                ]
            ]
        ];

        return view('area-layanan', ['products' => $products]);


        /* KODE ASLI YANG MENGHUBUNGI WOOCOMMERCE - SEMENTARA DINONAKTIFKAN
        $consumerKey = env('WC_CONSUMER_KEY');
        $consumerSecret = env('WC_CONSUMER_SECRET');
        $url = env('WC_API_URL');

        $response = Http::withOptions(['verify' => false])->get($url, [
            'consumer_key' => $consumerKey,
            'consumer_secret' => $consumerSecret,
            'per_page' => 20
        ]);

        if ($response->failed()) {
            return view('area-layanan', ['error' => 'Tidak dapat mengambil data produk.']);
        }

        $products = $response->json();

        return view('area-layanan', ['products' => $products]);
        */
    }

    public function show($slug)
    {
        // TES: Logika palsu untuk menampilkan detail produk
        $product = [
            "id" => 1,
            "name" => "Jasa Bore Pile Profesional (Contoh)",
            "slug" => "jasa-bore-pile-profesional-contoh",
            "price_html" => '<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">Rp</span>1.500.000</bdi></span>',
            "description" => "<h1>Detail Produk Uji Coba</h1><p>Ini adalah deskripsi produk palsu untuk pengujian halaman detail. Jika Anda dapat membaca ini, dan melihat tombol booking, maka seluruh alur aplikasi Anda dari daftar produk hingga detail produk <strong>berfungsi dengan sempurna</strong>.</p><p>Masalahnya 100% adalah koneksi dari server ini ke `hadiningratcorp.com` yang diblokir, kemungkinan besar oleh firewall.</p>",
            "images" => [
                ["src" => "https://via.placeholder.com/600x600.png/E2E8F0/1E2748?text=Produk+Detail"]
            ]
        ];

        return view('produk-detail', ['product' => $product]);

        /* KODE ASLI - SEMENTARA DINONAKTIFKAN
        $consumerKey = env('WC_CONSUMER_KEY');
        $consumerSecret = env('WC_CONSUMER_SECRET');
        $url = env('WC_API_URL');

        $response = Http::withOptions(['verify' => false])->get($url, [
            'consumer_key' => $consumerKey,
            'consumer_secret' => $consumerSecret,
            'slug' => $slug
        ]);

        if ($response->failed() || empty($response->json())) {
            abort(404, 'Produk tidak ditemukan.');
        }

        $product = $response->json()[0];

        return view('produk-detail', ['product' => $product]);
        */
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index()
    {
        $consumerKey = env('WC_CONSUMER_KEY');
        $consumerSecret = env('WC_CONSUMER_SECRET');
        $url = env('WC_API_URL');

        $response = Http::withOptions(['verify' => false])->get($url, [
            'consumer_key' => $consumerKey,
            'consumer_secret' => $consumerSecret,
            'per_page' => 20 // Fetch 20 products for now
        ]);

        if ($response->failed()) {
            // Handle error - maybe return a view with an error message
            return view('area-layanan', ['error' => 'Tidak dapat mengambil data produk.']);
        }

        $products = $response->json();

        return view('area-layanan', ['products' => $products]);
    }

    public function show($slug)
    {
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
    }
}

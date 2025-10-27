@extends('layouts.app')

<<<<<<< HEAD
@section('title', 'Area Layanan - Produk Kami')

@section('content')

{{-- Page Header --}}
<section class="bg-brand-blue text-white pt-32 pb-16">
    <div class="container mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold font-title">Area Layanan & Produk</h1>
        <p class="mt-4 text-lg md:text-xl max-w-2xl mx-auto">Jelajahi layanan dan produk yang kami tawarkan.</p>
    </div>
</section>

{{-- Product Grid --}}
<section class="bg-gray-100">
    <div class="container mx-auto py-16 md:py-24 px-4 sm:px-6 lg:px-8">
        @if(isset($error))
            <div class="text-center text-red-500">
                <p>{{ $error }}</p>
            </div>
        @elseif(empty($products))
            <div class="text-center text-gray-500">
                <p>Tidak ada produk yang tersedia saat ini.</p>
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @foreach($products as $product)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                        <a href="{{ route('products.show', ['slug' => $product['slug']]) }}">
                            @if(!empty($product['images']))
                                <img src="{{ $product['images'][0]['src'] }}" alt="{{ $product['name'] }}" class="w-full h-56 object-cover">
                            @else
                                <div class="w-full h-56 bg-gray-200 flex items-center justify-center">
                                    <span class="text-gray-500">Gambar tidak tersedia</span>
                                </div>
                            @endif
                            <div class="p-6">
                                <h3 class="text-xl font-bold font-title text-brand-blue">{{ $product['name'] }}</h3>
                                <div class="mt-4 text-lg font-bold text-brand-orange">
                                    {!! $product['price_html'] !!}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

=======
@section('title', 'Area Layanan')

@section('content')
<div class="bg-white">
    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Jelajahi Layanan Kami</h2>
            <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-500">
                Temukan berbagai solusi profesional yang kami tawarkan untuk kebutuhan konstruksi Anda.
            </p>
        </div>

        <div class="mt-12 grid grid-cols-1 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x-6">
            @if(!empty($products) && is_array($products))
                @foreach($products as $product)
                    <a href="{{ route('produk.show', $product['slug']) }}" class="group">
                        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                            <img src="{{ $product['images'][0]['src'] ?? 'https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg' }}" 
                                 alt="{{ $product['name'] }}" 
                                 class="w-full h-full object-center object-cover group-hover:opacity-75">
                        </div>
                        <h3 class="mt-4 text-sm text-gray-700">{{ $product['name'] }}</h3>
                        <p class="mt-1 text-lg font-medium text-gray-900">{!! $product['price_html'] !!}</p>
                    </a>
                @endforeach
            @else
                <div class="col-span-full text-center">
                    <p class="text-gray-500 text-lg">Saat ini belum ada layanan yang tersedia. Silakan periksa kembali nanti.</p>
                </div>
            @endif
        </div>
    </div>
</div>
>>>>>>> 90e1859 (update)
@endsection

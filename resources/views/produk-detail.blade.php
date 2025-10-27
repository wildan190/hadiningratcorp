@extends('layouts.app')

@section('title', $product['name'] ?? 'Detail Produk')

@section('content')

<div x-data="{ bookingModal: false }">
    {{-- Page Header --}}
    <section class="bg-brand-blue text-white pt-32 pb-16">
        <div class="container mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-5xl font-bold font-title">{{ $product['name'] }}</h1>
        </div>
    </section>

    {{-- Product Details --}}
    <section class="bg-white">
        <div class="container mx-auto py-16 md:py-24 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-12">
                <!-- Description Section -->
                <div class="prose prose-lg max-w-none">
                    <h2 class="text-3xl font-bold font-title text-brand-blue mb-6">Deskripsi Produk</h2>
                    <div class="prose-headings:font-bold prose-headings:text-brand-blue prose-h1:text-3xl prose-h2:text-2xl prose-h3:text-xl prose-h4:text-lg prose-p:text-gray-600 prose-strong:text-brand-blue prose-ul:list-disc prose-ol:list-decimal prose-li:text-gray-600">
                        {!! $product['description'] !!}
                    </div>
                </div>

                <!-- Product Gallery and Info -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    {{-- Product Gallery --}}
                    <div>
                        @if(!empty($product['images']))
                            <div class="mb-4">
                                <img src="{{ $product['images'][0]['src'] }}" alt="{{ $product['name'] }}" class="w-full rounded-lg shadow-lg">
                            </div>
                            {{-- Thumbnail gallery --}}
                            @if(count($product['images']) > 1)
                                <div class="grid grid-cols-4 gap-4">
                                    @foreach($product['images'] as $image)
                                        <img src="{{ $image['src'] }}" alt="{{ $product['name'] }}" class="w-full h-24 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-brand-orange">
                                    @endforeach
                                </div>
                            @endif
                        @else
                            <div class="w-full h-96 bg-gray-200 flex items-center justify-center rounded-lg">
                                <span class="text-gray-500">Gambar tidak tersedia</span>
                            </div>
                        @endif
                    </div>

                    {{-- Product Info --}}
                    <div>
                        <div class="text-3xl font-bold text-brand-orange mb-6">
                            {!! $product['price_html'] !!}
                        </div>

                        <div class="mt-8 mb-8">
                            <button @click="bookingModal = true" type="button" class="inline-block bg-brand-orange hover:bg-opacity-90 text-white font-bold py-4 px-10 rounded-full text-lg transition-all duration-300 transform hover:scale-105">
                                Booking Sekarang
                            </button>
                        </div>

                        @if(!empty($product['categories']))
                            <div class="mt-8 text-sm text-gray-500">
                                <strong>Kategori:</strong>
                                @foreach($product['categories'] as $category)
                                    <span>{{ $category['name'] }}</span>@if(!$loop->last), @endif
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
            </div>
        </div>
    </section>

    <!-- Booking Modal -->
    <div x-show="bookingModal" x-cloak class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center px-4">
        <div @click.away="bookingModal = false" class="bg-white rounded-lg shadow-2xl p-8 w-full max-w-md mx-auto">
            <h5 class="text-2xl font-bold font-title text-brand-blue mb-6">Formulir Booking</h5>
            
            <form id="bookingForm">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Nama</label>
                    <input type="text" id="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-orange" required>
                </div>
                <div class="mb-4">
                    <label for="whatsapp" class="block text-gray-700 font-bold mb-2">Nomor WhatsApp</label>
                    <input type="tel" id="whatsapp" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-orange" required>
                </div>
                <div class="mb-6">
                    <label for="message" class="block text-gray-700 font-bold mb-2">Pesan (Opsional)</label>
                    <textarea id="message" rows="3" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-orange"></textarea>
                </div>
            </form>

            <div class="flex justify-end space-x-4">
                <button @click="bookingModal = false" type="button" class="px-6 py-2 text-gray-600 border border-gray-300 rounded-full hover:bg-gray-100">Tutup</button>
                <button type="button" id="submitBooking" class="px-6 py-2 bg-brand-orange text-white font-bold rounded-full hover:bg-opacity-90">Kirim via WhatsApp</button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
  document.getElementById('submitBooking').addEventListener('click', function() {
    const name = document.getElementById('name').value;
    const whatsapp = document.getElementById('whatsapp').value;
    const message = document.getElementById('message').value;
    const productName = "{{ $product['name'] }}";

    if (!name || !whatsapp) {
      alert('Nama dan Nomor WhatsApp tidak boleh kosong.');
      return;
    }

    const waMessage = `Halo, saya tertarik untuk memesan produk berikut:\n\n*Produk:* ${productName}\n*Nama:* ${name}\n*Nomor WhatsApp:* ${whatsapp}\n*Pesan:* ${message}\n\nMohon informasinya lebih lanjut.`;

    const whatsappUrl = `https://wa.me/6281325794818?text=${encodeURIComponent(waMessage)}`;

    window.open(whatsappUrl, '_blank');
  });
</script>
@endpush

@push('styles')
<style>
    .prose h1, .prose h2, .prose h3, .prose h4, .prose h5, .prose h6 {
        color: #1E2748;
        font-weight: 700;
    }
    .prose a {
        color: #ED6D31;
        text-decoration: none;
    }
    .prose a:hover {
        text-decoration: underline;
    }
    .prose table {
        width: 100%;
        border-collapse: collapse;
    }
    .prose th, .prose td {
        border: 1px solid #e2e8f0;
        padding: 8px 12px;
    }
    .prose th {
        background-color: #f7fafc;
        font-weight: 600;
    }
    .prose ul {
        list-style-type: disc;
        padding-left: 1.5rem;
    }
     .prose ol {
        list-style-type: decimal;
        padding-left: 1.5rem;
    }
</style>
@endpush

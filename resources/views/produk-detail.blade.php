@extends('layouts.app')

<<<<<<< HEAD
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

                    <h2 class="text-3xl font-bold font-title text-brand-blue mb-4 mt-8">Deskripsi Produk</h2>
                    <div class="prose max-w-none text-gray-600 mb-6">
                        {!! $product['description'] !!}
                    </div>

                </div>
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
=======
@section('title', $product['name'])

@section('content')
<div class="bg-white" x-data="{ modalOpen: false }">
    <div class="pt-6 pb-16 sm:pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-x-8">

                <!-- Product image -->
                <div class="lg:col-start-1 lg:row-span-1">
                    <div class="rounded-lg bg-gray-100 overflow-hidden">
                        <img src="{{ $product['images'][0]['src'] ?? '' }}" alt="{{ $product['name'] }}" class="w-full h-full object-center object-cover">
                    </div>
                </div>

                <!-- Product info -->
                <div class="mt-10 px-4 sm:px-0 sm:mt-16 lg:mt-0 lg:col-start-2">
                    <h1 class="text-3xl font-extrabold tracking-tight text-gray-900">{{ $product['name'] }}</h1>

                    <div class="mt-3">
                        <h2 class="sr-only">Product price</h2>
                        <p class="text-3xl text-gray-900">{!! $product['price_html'] !!}</p>
                    </div>

                    <div class="mt-6">
                        <h3 class="sr-only">Description</h3>
                        <div class="prose prose-lg text-gray-700 space-y-6">
                             {!! $product['description'] !!}
                        </div>
                    </div>

                    <div class="mt-10 flex">
                        <button @click="modalOpen = true" type="button" class="max-w-xs flex-1 bg-orange-500 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-orange-400 sm:w-full">Booking Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div x-show="modalOpen" 
         x-transition:enter="ease-out duration-300" 
         x-transition:enter-start="opacity-0" 
         x-transition:enter-end="opacity-100" 
         x-transition:leave="ease-in duration-200" 
         x-transition:leave-start="opacity-100" 
         x-transition:leave-end="opacity-0" 
         class="fixed z-10 inset-0 overflow-y-auto" 
         aria-labelledby="modal-title" 
         role="dialog" 
         aria-modal="true" 
         style="display: none;">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div x-show="modalOpen" @click.away="modalOpen = false" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div x-show="modalOpen" 
                 x-transition:enter="ease-out duration-300" 
                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" 
                 x-transition:leave="ease-in duration-200" 
                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                 class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                <div>
                    <div class="mt-3 text-center sm:mt-5">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                            Formulir Booking
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">
                                Silakan isi detail di bawah ini untuk melanjutkan pemesanan Anda.
                            </p>
                        </div>
                    </div>
                </div>
                <form id="bookingForm" class="mt-5 sm:mt-6">
                    <div class="grid grid-cols-1 gap-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                            <div class="mt-1">
                                <input type="text" name="name" id="name" autocomplete="name" required class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-orange-500 focus:border-orange-500 border-gray-300 rounded-md">
                            </div>
                        </div>
                         <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                            <div class="mt-1">
                                <input type="tel" name="phone" id="phone" autocomplete="tel" required class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-orange-500 focus:border-orange-500 border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Pesan (Opsional)</label>
                            <div class="mt-1">
                                <textarea id="message" name="message" rows="4" class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-orange-500 focus:border-orange-500 border border-gray-300 rounded-md"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
                        <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-orange-500 text-base font-medium text-white hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 sm:col-start-2 sm:text-sm">
                            Kirim via WhatsApp
                        </button>
                        <button @click="modalOpen = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 sm:mt-0 sm:col-start-1 sm:text-sm">
                            Batal
                        </button>
                    </div>
                </form>
>>>>>>> 90e1859 (update)
            </div>
        </div>
    </div>
</div>

<<<<<<< HEAD
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

    const waMessage = `Halo, saya tertarik untuk memesan produk berikut:

*Produk:* ${productName}
*Nama:* ${name}
*Nomor WhatsApp:* ${whatsapp}
*Pesan:* ${message}

Mohon informasinya lebih lanjut.`;

    const whatsappUrl = `https://wa.me/6281325794818?text=${encodeURIComponent(waMessage)}`;

    window.open(whatsappUrl, '_blank');
  });
</script>
@endpush
=======
@push('scripts')
<script>
    document.getElementById('bookingForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const name = document.getElementById('name').value;
        const phone = document.getElementById('phone').value;
        const message = document.getElementById('message').value;
        const productName = "{{ $product['name'] }}";
        
        let text = `Halo, saya tertarik untuk memesan layanan berikut:\n\n`;
        text += `*Nama Layanan:* ${productName}\n`;
        text += `*Nama Pemesan:* ${name}\n`;
        text += `*Nomor Telepon:* ${phone}\n`;
        if(message) {
            text += `*Pesan Tambahan:* ${message}\n`;
        }
        text += `\nMohon informasinya lebih lanjut. Terima kasih.`;

        const whatsappUrl = `https://wa.me/6281325794818?text=${encodeURIComponent(text)}`;
        
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
>>>>>>> 90e1859 (update)

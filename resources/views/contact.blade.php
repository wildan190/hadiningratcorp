@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')

{{-- Page Header --}}
<section class="bg-brand-blue text-white py-16">
    <div class="container mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold font-title">Hubungi Kami</h1>
        <p class="mt-4 text-lg md:text-xl max-w-2xl mx-auto">Kami siap membantu Anda. Isi formulir di bawah atau hubungi kami melalui detail yang tersedia.</p>
    </div>
</section>

{{-- Contact Section --}}
<section class="bg-gray-100">
    <div class="container mx-auto py-16 md:py-24 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 bg-white p-8 rounded-lg shadow-xl">
            
            {{-- Contact Form --}}
            <div class="order-2 lg:order-1">
                <h2 class="text-3xl font-bold font-title text-brand-blue mb-6">Kirim Pesan</h2>
                <form action="#" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="name" class="block text-gray-700 font-bold mb-2">Nama Lengkap</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-orange" required>
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 font-bold mb-2">Alamat Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-orange" required>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="subject" class="block text-gray-700 font-bold mb-2">Subjek</label>
                        <input type="text" id="subject" name="subject" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-orange" required>
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block text-gray-700 font-bold mb-2">Pesan Anda</label>
                        <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-orange" required></textarea>
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-brand-orange hover:bg-opacity-90 text-white font-bold py-3 px-6 rounded-lg text-lg transition-all duration-300">
                            Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>

            {{-- Contact Info & Map --}}
            <div class="order-1 lg:order-2">
                <h2 class="text-3xl font-bold font-title text-brand-blue mb-6">Informasi Kontak</h2>
                <div class="space-y-6 text-gray-700">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 pt-1">
                            <i class="fas fa-map-marker-alt text-brand-orange text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Alamat</h3>
                            <p>Manggihan, RT.02/RW.03, Sambung, Kec. Godong, Kabupaten Grobogan, Jawa Tengah 58162</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 pt-1">
                            <i class="fas fa-phone-alt text-brand-orange text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Telepon</h3>
                            <p>+62 813-2579-4818</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 pt-1">
                            <i class="fas fa-envelope text-brand-orange text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Email</h3>
                            <p>info@hadiwijayaborepile.com</p>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <h3 class="text-xl font-bold text-brand-blue mb-4">Temukan Kami di Peta</h3>
                    <div class="w-full h-64 rounded-lg overflow-hidden shadow-md">
                        <iframe src="https://www.google.com/maps?q=-7.08051,110.74315&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <div class="mt-8">
                    <h3 class="text-xl font-bold text-brand-blue mb-4">Terhubung dengan Kami</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 flex items-center justify-center bg-brand-blue hover:bg-brand-orange text-white rounded-full transition-colors duration-300 text-xl"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="w-12 h-12 flex items-center justify-center bg-brand-blue hover:bg-brand-orange text-white rounded-full transition-colors duration-300 text-xl"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="w-12 h-12 flex items-center justify-center bg-brand-blue hover:bg-brand-orange text-white rounded-full transition-colors duration-300 text-xl"><i class="fab fa-youtube"></i></a>
                        <a href="https://wa.me/6281325794818" target="_blank" class="w-12 h-12 flex items-center justify-center bg-green-500 hover:bg-green-600 text-white rounded-full transition-colors duration-300 text-xl"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<footer class="bg-brand-blue text-white font-poppins">
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            
            <!-- About Section -->
            <div class="md:col-span-2">
                <h3 class="text-2xl font-bold font-title mb-4">Hadiwijaya Bore Pile</h3>
                <p class="text-gray-300">Mitra terpercaya Anda untuk pondasi bore pile dan strauss pile yang kokoh dan terjangkau. Kami berkomitmen pada kualitas, integritas, dan kepuasan klien.</p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Tautan Cepat</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition">Beranda</a></li>
                    <li><a href="{{ route('home') }}#services" class="text-gray-300 hover:text-white transition">Layanan</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-white transition">Tentang Kami</a></li>
                    <li><a href="#contact" class="text-gray-300 hover:text-white transition">Kontak</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Hubungi Kami</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt mt-1 mr-3 text-brand-orange"></i>
                        <span class="text-gray-300">Jl. Raya Cikarang, Bekasi, Jawa Barat 17530</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-phone mt-1 mr-3 text-brand-orange"></i>
                        <span class="text-gray-300">+62 812-3456-7890</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-envelope mt-1 mr-3 text-brand-orange"></i>
                        <span class="text-gray-300">info@hadiwijayaborepile.com</span>
                    </li>
                </ul>
                 <div class="flex space-x-4 mt-4">
                    <a href="#" class="text-gray-300 hover:text-brand-orange text-xl transition"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-300 hover:text-brand-orange text-xl transition"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-300 hover:text-brand-orange text-xl transition"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

        </div>
    </div>
    <div class="bg-gray-900 py-4">
        <div class="container mx-auto px-4 text-center text-gray-400 text-sm">
            <p>&copy; {{ date('Y') }} Hadiwijaya Bore Pile. Semua Hak Dilindungi.</p>
        </div>
    </div>
</footer>

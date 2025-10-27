<div class="fixed top-0 left-0 right-0 z-50">
    <header x-data="{ open: false, servicesOpen: false, mobileServicesOpen: false }" class="bg-white/90 backdrop-blur-sm shadow-md rounded-3xl max-w-7xl mx-auto mt-4 z-50">
        <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="text-2xl font-bold font-title text-brand-blue">Hadiwijaya</a>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-brand-orange font-poppins transition">Beranda</a>
                
                <!-- Services Dropdown -->
                <div class="relative" @mouseenter="servicesOpen = true" @mouseleave="servicesOpen = false">
                    <button @click="servicesOpen = !servicesOpen" class="text-gray-600 hover:text-brand-orange font-poppins transition flex items-center">
                        Layanan
                        <i class="fas fa-chevron-down text-xs ml-2"></i>
                    </button>
                    <div x-show="servicesOpen" x-cloak x-transition.origin.top.left
                         class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg z-50 ring-1 ring-black ring-opacity-5">
                        <div class="py-1">
                            <a href="{{ route('bore-pile-hydraulic')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-brand-orange transition">Bore Pile Hydraulic</a>
                            <a href="{{ route('bore-pile-manual') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-brand-orange transition">Bore Pile Manual</a>
                            <a href="{{ route('bore-pile-mini-crane') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-brand-orange transition">Bore Pile Mini Crane</a>
                            <a href="{{ route('products.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-brand-orange transition">Area Layanan</a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('about') }}" class="text-gray-600 hover:text-brand-orange font-poppins transition">Tentang Kami</a>
                <a href="{{ route('contact') }}" class="bg-brand-orange text-white font-bold py-2 px-6 rounded-full hover:bg-opacity-90 transition font-poppins">Kontak</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button @click="open = !open" class="text-brand-blue focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <div x-show="open" x-cloak class="md:hidden bg-white border-t">
            <a href="{{ route('home') }}" @click="open = false" class="block py-3 px-4 text-gray-600 hover:bg-gray-50 hover:text-brand-orange font-poppins transition">Beranda</a>
            
            <!-- Mobile Services Accordion -->
            <div>
                <button @click="mobileServicesOpen = !mobileServicesOpen" class="w-full flex justify-between items-center py-3 px-4 text-gray-600 hover:bg-gray-50 hover:text-brand-orange font-poppins transition">
                    <span>Layanan</span>
                    <i class="fas fa-chevron-down text-xs transition-transform" :class="{ 'rotate-180': mobileServicesOpen }"></i>
                </button>
                <div x-show="mobileServicesOpen" x-cloak class="bg-gray-50 pl-4 border-l-2 border-brand-orange">
                    <a href="#" @click="open = false" class="block py-2 px-4 text-gray-600 hover:text-brand-orange transition">Bore Pile Hydraulic</a>
                    <a href="{{ route('bore-pile-manual') }}" @click="open = false" class="block py-2 px-4 text-gray-600 hover:text-brand-orange transition">Bore Pile Manual</a>
                    <a href="{{ route('bore-pile-mini-crane') }}" @click="open = false" class="block py-2 px-4 text-gray-600 hover:text-brand-orange transition">Bore Pile Mini Crane</a>
                    <a href="{{ route('products.index') }}" @click="open = false" class="block py-2 px-4 text-gray-600 hover:text-brand-orange transition">Area Layanan</a>
                </div>
            </div>

            <a href="{{ route('about') }}" @click="open = false" class="block py-3 px-4 text-gray-600 hover:bg-gray-50 hover:text-brand-orange font-poppins transition">Tentang Kami</a>
            <div class="p-4">
                <a href="{{ route('contact') }}" @click="open = false" class="block text-center bg-brand-orange text-white font-bold py-2 px-6 rounded-full hover:bg-opacity-90 transition font-poppins">Kontak</a>
            </div>
        </div>
    </header>
</div>

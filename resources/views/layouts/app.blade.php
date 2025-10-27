<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Hadiwijaya Bore Pile')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Rubik:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Rubik', sans-serif;
        }
        [x-cloak] { display: none !important; }

        /* Floating WhatsApp Button Styles */
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25D366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 6px rgba(0,0,0,0.3);
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.2s ease-in-out;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
        }
    </style>
    @stack('styles')
</head>
<body class="bg-white text-brand-blue">

    <x-header />

    <main>
        @yield('content')
    </main>

    <x-footer />

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/6281325794818" target="_blank" class="whatsapp-float">
        <i class="fab fa-whatsapp"></i>
    </a>

    @stack('scripts')
</body>
</html>

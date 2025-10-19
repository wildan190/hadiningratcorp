<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Hadiwijaya Bore Pile')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Rubik:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-orange': '#ED6D31',
                        'brand-blue': '#1E2748',
                    },
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif'],
                        'rubik': ['Rubik', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Rubik', sans-serif;
        }
        .font-title {
            font-family: 'Poppins', sans-serif;
        }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-white text-brand-blue">

    <x-header />

    <main>
        @yield('content')
    </main>

    <x-footer />

</body>
</html>

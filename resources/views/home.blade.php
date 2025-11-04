<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home - Pariwisata Dunia</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-cover bg-center min-h-screen" style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80');">
    
    <!-- Navbar -->
    <nav class="bg-gray-900 bg-opacity-70 text-white flex justify-between items-center px-6 py-3">
        <div class="flex space-x-6">
            <a href="#" class="hover:text-blue-400">Home</a>
            <a href="#" class="hover:text-blue-400">About</a>
        </div>
        <div class="text-sm">
            <span class="mr-6">2301010002 - AHMAD IMRAN (GENAP)</span>
            <span>2301010001 - ANGGI RAHMAWATI (GANJIL)</span>
        </div>
    </nav>

    <!-- Header -->
    <header class="text-center text-white py-12 bg-blue-900 bg-opacity-40">
        <h1 class="text-3xl font-semibold">Halaman ini dibuat oleh 2301010002 - AHMAD IMRAN</h1>
    </header>

    <!-- Gallery Grid -->
    <main class="p-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card -->
        <div class="relative rounded-lg overflow-hidden shadow-lg">
            <img src='img/acropolis.jpg'>
            <div class="absolute bottom-0 bg-black bg-opacity-50 text-white w-full p-3">Acropolis, Yunani</div>
        </div>

        <div class="relative rounded-lg overflow-hidden shadow-lg">
            <img src="https://upload.wikimedia.org/wikipedia/commons/d/d1/Shibuya_Scramble_Crossing_2018.jpg" class="w-full h-56 object-cover">
            <div class="absolute bottom-0 bg-black bg-opacity-50 text-white w-full p-3">Shibuya, Jepang</div>
        </div>

        <div class="relative rounded-lg overflow-hidden shadow-lg">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e5/Cappadocia_ballooning%2C_Turkey_%28Unsplash%29.jpg" class="w-full h-56 object-cover">
            <div class="absolute bottom-0 bg-black bg-opacity-50 text-white w-full p-3">Cappadocia, Turki</div>
        </div>

        <div class="relative rounded-lg overflow-hidden shadow-lg">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e3/Kheops-Pyramid.jpg" class="w-full h-56 object-cover">
            <div class="absolute bottom-0 bg-black bg-opacity-50 text-white w-full p-3">Giza, Mesir</div>
        </div>

        <div class="relative rounded-lg overflow-hidden shadow-lg">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/55/Garuda_Wisnu_Kencana_Statue_2018.jpg" class="w-full h-56 object-cover">
            <div class="absolute bottom-0 bg-black bg-opacity-50 text-white w-full p-3">Garuda Wisnu Kencana, Bali</div>
        </div>

        <div class="relative rounded-lg overflow-hidden shadow-lg">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/eb/Machu_Picchu%2C_Peru.jpg" class="w-full h-56 object-cover">
            <div class="absolute bottom-0 bg-black bg-opacity-50 text-white w-full p-3">Huayana, Peru</div>
        </div>

        <div class="relative rounded-lg overflow-hidden shadow-lg">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/4b/Palm_Jumeirah_Aerial.jpg" class="w-full h-56 object-cover">
            <div class="absolute bottom-0 bg-black bg-opacity-50 text-white w-full p-3">Jumeirah, Abu Dhabi</div>
        </div>

        <div class="relative rounded-lg overflow-hidden shadow-lg">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/4f/Central_Park_New_York_City_New_York_23.jpg" class="w-full h-56 object-cover">
            <div class="absolute bottom-0 bg-black bg-opacity-50 text-white w-full p-3">New York, US</div>
        </div>

        <div class="relative rounded-lg overflow-hidden shadow-lg">
            <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Niagara_Falls_2.jpg" class="w-full h-56 object-cover">
            <div class="absolute bottom-0 bg-black bg-opacity-50 text-white w-full p-3">Niagara, Kanada</div>
        </div>
    </main>

</body>
</html>

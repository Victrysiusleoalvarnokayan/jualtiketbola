<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kategori Destinasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss3.4.1.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&family=Great+Vibes&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900 font-sans">

 
    @include('partials.header')

    <div class="text-center py-8">
        <h1 class="text-4xl font-bold">KATEGORI WISATA</h1>
    </div>

    <div class="flex flex-wrap justify-center gap-6 px-4 pb-12">
       
        <div class="bg-white rounded-lg shadow-lg max-w-xs">
            <img src="{{ asset('img/ibadah.jpg') }}" alt="Tempat Ibadah Kota Batam" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">
                    <a href="{{ url('tempat_ibadah') }}" class="hover:underline text-blue-700">Tempat Ibadah Kota Batam</a>
                </h2>
                <p class="text-sm">Anda akan diberitahu tentang tempat ibadah di Batam mulai dari Islam, Kristen, Hindu, dan Buddha serta info bangunan tempat ibadah tersebut.</p>
            </div>
        </div>

    
        <div class="bg-white rounded-lg shadow-lg max-w-xs">
            <img src="{{ asset('img/makam_raja_nong_isa.jpg') }}" alt="Tempat Ziarah Kota Batam" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">
                    <a href="{{ url('tempat_ziarah') }}" class="hover:underline text-blue-700">Tempat Ziarah Kota Batam</a>
                </h2>
                <p class="text-sm">Anda akan melihat tempat ziarah di Batam yang terkenal dan kerap dikunjungi menjelang Hari Jadi Kota Batam.</p>
            </div>
        </div>

 
        <div class="bg-white rounded-lg shadow-lg max-w-xs">
            <img src="{{ asset('img/sejarah.jpg') }}" alt="Tempat Sejarah Kota Batam" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">
                    <a href="{{ url('tempat_sejarah') }}" class="hover:underline text-blue-700">Tempat Sejarah Kota Batam</a>
                </h2>
                <p class="text-sm">Referensi wisata religi di Batam, salah satunya Museum Raja Ali Haji yang berada di pusat kota.</p>
            </div>
        </div>
    </div>

</body>
</html>

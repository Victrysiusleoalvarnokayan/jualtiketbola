<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Main News</title>
    <script src="https://cdn.tailwindcss3.4.1.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    
    @include('partials.header')

    <div class="container mx-auto px-4 py-8 grid gap-8 grid-cols-1 md:grid-cols-3">
        <div class="md:col-span-3 text-3xl font-bold mb-4">
            <span class="text-blue-600">Main</span> news
        </div>

        {{-- MAIN NEWS --}}
        @foreach ($newsData as $news)
            @if ($news->kategori === 'main')
                <div class="md:col-span-2 relative">
                    <img src="{{ asset($news->foto) }}" alt="{{ $news->tittle }}" class="w-full h-96 object-cover rounded-lg">
                    <div class="absolute bottom-4 left-4 bg-black bg-opacity-50 p-4 rounded text-white">
                        <h2 class="text-xl font-semibold">{{ $news->tittle }}</h2>
                        <p class="text-sm mt-1">{{ $news->waktu }}</p>
                    </div>
                </div>
            @endif
        @endforeach

        {{-- SIDE NEWS --}}
        <div class="flex flex-col gap-4 max-h-[500px] overflow-y-auto">
            @foreach ($newsData as $news)
                @if ($news->kategori === 'side')
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <img src="{{ asset($news->foto) }}" alt="{{ $news->tittle }}" class="w-full h-40 object-cover rounded-md">
                        <span class="inline-block mt-3 px-2 py-1 bg-red-500 text-white text-xs rounded">Breaking</span>
                        <h3 class="mt-2 font-bold text-lg">{{ $news->tittle }}</h3>
                        <p class="text-sm text-gray-500">{{ $news->waktu }}</p>
                    </div>
                @endif
            @endforeach
        </div>

        {{-- BOTTOM NEWS --}}
        <div class="md:col-span-3 grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ($newsData as $news)
                @if ($news->kategori === 'bottom')
                    <div class="relative">
                        <img src="{{ asset($news->foto) }}" alt="{{ $news->tittle }}" class="w-full h-64 object-cover rounded-lg">
                        <div class="absolute bottom-4 left-4 bg-black bg-opacity-50 p-3 rounded text-white">
                            <h3 class="text-lg font-semibold">{{ $news->tittle }}</h3>
                            <span class="text-sm text-gray-300">{{ $news->waktu }}</span>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    {{-- Floating Button --}}
    <a href="#" class="fixed bottom-6 right-6 bg-blue-600 text-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg hover:bg-blue-700">
        <i class="fas fa-plus text-xl"></i>
    </a>

</body>
</html>

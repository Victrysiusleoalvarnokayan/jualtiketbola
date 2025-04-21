<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serenity Trails</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&family=Great+Vibes&display=swap" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    {{-- Include header --}}
    @include('header')

    <div class="container mx-auto relative z-10 text-center py-32">
        <h1 class="text-6xl font-bold font-roboto text-black">
            Temukan keindahan Dan Kedamaian Di Berbagai Destinasi Religi Di Kota Batam
        </h1>
        <p class="mt-4 text-xl font-great-vibes text-black">
            Official Team Serenity Trails
        </p>
    </div>

</body>
</html>

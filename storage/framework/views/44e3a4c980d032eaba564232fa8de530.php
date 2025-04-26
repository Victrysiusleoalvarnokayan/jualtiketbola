<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Serenity Trails</title>
    <script src="<?php echo e(asset('styles/tailwindcss3.4.1.js')); ?>"></script> 

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&family=Great+Vibes&display=swap" rel="stylesheet" />
</head>
<body class="min-h-screen bg-cover bg-center bg-[url('<?php echo e(asset('images/home.jpg')); ?>')]">

    <?php echo $__env->make('header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Menu -->
    <div class="flex space-x-8 items-center mx-auto pt-12 pb-12 justify-center">
        <a class="text-black text-lg font-roboto hover:font-bold hover:text-primary transition" href="index.php">Home</a>
        <a class="text-black text-lg font-roboto hover:font-bold hover:text-primary transition" href="kategori.php">Destination</a>
        <a class="text-black text-lg font-roboto hover:font-bold hover:text-primary transition" href="news.php">News</a>
    </div>

    <div class="container mx-auto relative z-10 text-center py-32">
        <h1 class="text-6xl font-bold font-roboto text-black">
            Temukan Keindahan Dan Kedamaian Di Berbagai Destinasi Religi Di Kota Batam
        </h1>
        <p class="mt-4 text-xl font-great-vibes text-black">
            Official Team Serenity Trails
        </p>
    </div>

</body>
</html>
<?php /**PATH D:\laravel\jualtiketbola\resources\views/index.blade.php ENDPATH**/ ?>
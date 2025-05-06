<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tempat Ibadah - Serenity Trails</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&family=Great+Vibes&display=swap" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Peta Wisata - Jelajahi berbagai destinasi wisata religi di Batam.">
</head>
<body class="min-h-screen bg-cover bg-fixed bg-center bg-no-repeat" style="background-image: url('https://cdn0-production-images-kly.akamaized.net/Fz6QQ-xREHw2_rQFcShN1ljNuDY=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3194445/original/027995900_1596079993-lein-5265194_1280.jpg');">

    <?php echo $__env->make('header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <main class="py-10 px-6">
        <h1 class="text-4xl font-bold text-center text-black font-['Roboto'] mb-2">Tempat Ibadah</h1>
        <p class="text-xl text-center text-black font-light mb-6">Jelajahi berbagai destinasi wisata</p>

        <!-- Gambar Pembuka -->
        <div class="flex justify-center mb-10">
            <img src="<?php echo e(asset('images/tempat.jpg')); ?>" alt="Gambar Tempat" class="rounded-lg shadow-lg w-full max-w-4xl object-cover">
        </div>

        <!-- Daftar Tempat Ibadah -->
        <div class="flex overflow-x-auto space-x-6 px-2">
            <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="flex-shrink-0 bg-white rounded-lg shadow-md w-64 h-auto text-black">
                    <img src="<?php echo e(asset($row['foto'])); ?>" alt="<?php echo e($row['nama_tempat']); ?>" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4 text-center">
                        <h2 class="text-lg font-semibold mb-2">
                            <a href="<?php echo e(url('wisata_ibadah.php?id_ibadah=' . urlencode($row['id_ibadah']))); ?>" target="_blank" class="hover:underline hover:text-blue-600">
                                <?php echo e($row['nama_tempat']); ?>

                            </a>
                        </h2>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="text-center text-black w-full">Tidak ada data tempat ibadah ditemukan.</p>
            <?php endif; ?>
        </div>
    </main>

</body>
</html>
<?php /**PATH D:\laravel\jualtiketbola\resources\views/tempat_ibadah.blade.php ENDPATH**/ ?>
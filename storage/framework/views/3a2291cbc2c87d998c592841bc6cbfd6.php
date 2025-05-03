

<?php $__env->startSection('title', 'Home'); ?>
<?php $__env->startSection('page_title', 'Selamat datang di Berita Batam'); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="text-2xl font-bold mb-4">Selamat Pagi</h1>
    <p class="mb-4">Berikut adalah berita update di hari ini</p>

    <?php echo $__env->make('components.card', [
        'imgsrc' => 'images/gonggong.jpg',
        'title' => 'Gonggong goreng Tepung mak Limah',
        'description' => 'Kuliner unik satu ini wajib dicoba untuk menguji ketahanan gigi.'
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laravel\jualtiketbola\resources\views/pages/home.blade.php ENDPATH**/ ?>
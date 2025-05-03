<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Laravel App'); ?></title>

    <link href="/styles/flowbite.min.css" rel="stylesheet" />
    <script src="/styles/flowbite.min.js"></script>
</head>

<body class="bg-gray-100 text-gray-800 font-sans">

    <?php echo $__env->make('components.menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <main class="container mx-auto mt-10 px-4">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4"><?php echo $__env->yieldContent('page_title', 'Judul Halaman'); ?></h2>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </main>

    <footer class="mt-10 text-center text-sm text-gray-500 py-4 border-t">
        &copy; <?php echo e(date('Y')); ?> Laravel App. All rights reserved.
    </footer>

</body>
</html><?php /**PATH D:\laravel\jualtiketbola\resources\views/layouts/app.blade.php ENDPATH**/ ?>
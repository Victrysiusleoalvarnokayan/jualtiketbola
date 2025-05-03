<!DOCTYPE html>
<html>
<head>
    <title><?php echo $__env->yieldContent('title', 'My App'); ?></title>
</head>
<body>
    <header>
        <?php echo $__env->make('components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </header>

    <h1>List Produk</h1>
    <div class="container">
        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

    <footer>
        <?php echo $__env->make('components.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </footer>
</body>
</html><?php /**PATH D:\laravel\jualtiketbola\resources\views/layout/list.blade.php ENDPATH**/ ?>
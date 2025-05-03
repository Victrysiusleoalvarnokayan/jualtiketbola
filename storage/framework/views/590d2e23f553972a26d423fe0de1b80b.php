<?php $__env->startSection('title', 'Ini adalah judul pada meta'); ?>
<?php $__env->startSection('content'); ?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Produk</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($post['id']); ?></td>
            <td><?php echo e($post['produk']); ?></td>
            <!-- Data lainnya -->
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.list', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laravel\jualtiketbola\resources\views/list_product.blade.php ENDPATH**/ ?>
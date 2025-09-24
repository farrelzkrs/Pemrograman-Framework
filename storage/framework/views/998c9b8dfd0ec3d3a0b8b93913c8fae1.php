<h1>Daftar Buku</h1>
<ul>
    <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
        <a href="<?php echo e(route('buku.show', $bk['id'])); ?>">
            <?php echo e($bk['judul']); ?> - <?php echo e($bk['penulis']); ?>

        </a>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <h3><a href="<?php echo e(route('buku.available')); ?>">Buku Tersedia</a></h3>
</ul><?php /**PATH C:\XAMPP\htdocs\belajar_framework\resources\views/buku/index.blade.php ENDPATH**/ ?>
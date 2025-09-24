<h1>Buku yang Tersedia</h1>

<?php if($stat->isEmpty()): ?>
<p>Tidak ada buku yang tersedia saat ini.</p>
<?php else: ?>
<ul>
    <?php $__currentLoopData = $stat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
        <a href="<?php echo e(route('buku.show', $bk['id'])); ?>">
            <?php echo e($bk['judul']); ?> - <?php echo e($bk['penulis']); ?>

        </a>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php endif; ?>
<a href="<?php echo e(route('buku.index')); ?>">Back</a><?php /**PATH C:\XAMPP\htdocs\belajar_framework\resources\views/buku/available.blade.php ENDPATH**/ ?>
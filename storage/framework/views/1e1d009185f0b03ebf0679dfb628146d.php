<div>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $goat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <a href="<?php echo e(route('mahasiswa.show', $goat['id'])); ?>">
                <?php echo e($goat['nama']); ?>, NPM <?php echo e($goat['npm']); ?>

            </a>
        </li>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div><?php /**PATH C:\XAMPP\htdocs\belajar_framework\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>
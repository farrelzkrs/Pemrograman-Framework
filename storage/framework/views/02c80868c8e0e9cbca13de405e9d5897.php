<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routing di Laravel</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 2rem;
    }

    ul {
        margin-top: 1rem;
    }

    li {
        margin-bottom: 0.5rem;
    }

    a {
        color: #2563eb;
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <h1>Routing di Laravel</h1>
    <ul>
        <li><a href="<?php echo e(url('/hello')); ?>">Heloo</a></li>
        <li><a href="<?php echo e(url('/about')); ?>">About</a></li>
        <li><a href="<?php echo e(url('/halo/Lerri')); ?>">Halo Lerri</a></li>
        <li><a href="<?php echo e(url('/perkalian/4/5')); ?>">Perkalian</a></li>
        <li><a href="<?php echo e(url('/salam')); ?>">Salam</a> tanpa parameter</li>
        <li><a href="<?php echo e(url('/salam/Farrel')); ?>">Salam</a> dengan parameter</li>
        <li><a href="<?php echo e(url('/admin/home')); ?>">Home Admin</a></li>
        <li><a href="<?php echo e(url('/admin/user')); ?>">User Admin</a></li>
    </ul>
</body>

</html><?php /**PATH C:\XAMPP\htdocs\belajar_framework\resources\views/framewrok.blade.php ENDPATH**/ ?>
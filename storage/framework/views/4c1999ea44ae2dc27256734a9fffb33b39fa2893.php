<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    </head>
    <body class="bg-gray-200">
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                <li><a href="<?php echo e(route('home')); ?>" class="p-3">Home</a></li>
                <li><a href="<?php echo e(route('dashboard')); ?>" class="p-3">Dashboard</a></li>
            </ul>
            <ul class="flex items-center">
                <?php if(auth()->guard()->check()): ?>
                    <?php if(auth()->user()->user_type == "administrator"): ?>
                        <li><a href="<?php echo e(route('register')); ?>" class="p-3">Register User</a></li>
                    <?php endif; ?>
                    <li><a href="" class="p-3"><?php echo e(Auth::user()->name); ?></a></li>
                    <li>
                        <form action="<?php echo e(route('logout')); ?>" method="post" class="p-3 inline">
                            <?php echo csrf_field(); ?>
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                <?php endif; ?>

                <?php if(auth()->guard()->guest()): ?>
                    <li><a href="<?php echo e(route('login')); ?>" class="p-3">Login</a></li>
                    <li><a href="<?php echo e(route('register')); ?>" class="p-3">Register</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html><?php /**PATH D:\000 SISI\Capstone\ustp-digital-logbook-main\ustp-digital-logbook-webapp\resources\views/layouts/app.blade.php ENDPATH**/ ?>
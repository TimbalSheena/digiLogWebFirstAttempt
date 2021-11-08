<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    </head>
    <body>
  
</body>
    <body class="bg-gray-300">
    <nav class="p-6 bg-gray-800 flex justify-between mb-6">
        <?php $__env->startSection('sidebar'); ?>
             <ul class="flex items-start">
                <li><a href="<?php echo e(route('/admin')); ?>" class="p-3 text-white">Dashboard</a></li>
            </ul>
          <?php echo $__env->yieldSection(); ?>
          
            <ul class="flex items-center">
                <?php if(auth()->guard()->check()): ?>
                    <?php if(auth()->user()->user_type == "administrator"): ?>
                        <li><a href="<?php echo e(route('register')); ?>" class="p-3 text-white">Register User</a></li>
                    <?php endif; ?>
                    <li><a href="" class="p-3 text-white"><?php echo e(Auth::user()->name); ?></a></li>
                    <li>
                        <form action="<?php echo e(route('logout')); ?>" method="post" class="p-3 inline">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="text-white">Logout</button>
                        </form>
                    </li>
                <?php endif; ?>

                <?php if(auth()->guard()->guest()): ?>
                    <li><a href="<?php echo e(route('login')); ?>" class="p-3 text-white">Login</a></li>
                    <li><a href="<?php echo e(route('register')); ?>" class="p-3 text-white">Register</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html><?php /**PATH C:\xampp\htdocs\digiLogWeb-main\resources\views/layouts/adapp.blade.php ENDPATH**/ ?>
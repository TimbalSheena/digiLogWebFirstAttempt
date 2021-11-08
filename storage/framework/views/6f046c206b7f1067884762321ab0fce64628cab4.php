<?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="<?php echo e(route('home')); ?>" class="navbar-brand ">USTP Digital Logbook</a>
        <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <?php if(auth()->guard()->check()): ?>
                <?php if(auth()->user()->user_type == "administrator"): ?>
                    <a href="<?php echo e(route('register')); ?>"class="nav-item nav-link" >Register User</a>
                <?php endif; ?>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-item nav-link" ><?php echo e(Auth::user()->name); ?></a>
                </li>
            </ul>
            
            <form action="<?php echo e(route('logout')); ?>" method="post" class="nav-item nav-link" >
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-light">Logout</button>
            </form>
                <?php endif; ?>

                <?php if(auth()->guard()->guest()): ?>
                    <a href="<?php echo e(route('login')); ?>" class="p-3 text-white">Login</a>
                    <a href="<?php echo e(route('register')); ?>" class="p-3 text-white">Register</a>
                <?php endif; ?>  
                </div>
            </div>
        </nav>
        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html><?php /**PATH C:\xampp\htdocs\digiLogWeb-main\resources\views/layouts/app.blade.php ENDPATH**/ ?>
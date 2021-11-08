<?php $__env->startSection('content'); ?>
<div class="container-fluid" style="background:#cccccc !important;height:650px">
    <section>
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                <?php if(auth()->guard()->check()): ?>
                    <div class="mb-4 text-2xl text-center">User Registration</div>              
                <?php endif; ?>
                <?php if(auth()->guard()->guest()): ?>
                    <div class="mb-4 text-2xl text-center"><h4>Admin Registration</h4></div>
                <?php endif; ?>
                <form action="<?php echo e(route('register')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    
                    <div class="mb-3">
                        <label for="name" class="sr-only">Full Name</label>
                        <input type="text" name="name" id="name" placeholder="Complete Name" value="<?php echo e(old('name')); ?>"
                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger mt-2 text-sm">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <div class="mb-3">
                        <label for="username" class="sr-only">Username</label>
                        <input type="text" name="username" id="username" placeholder="Username"  value="<?php echo e(old('username')); ?>"
                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        
                        <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger mt-2 text-sm">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <div class="mb-3">
                        <label for="user_type" class="sr-only">User Type</label>
                        <?php if(auth()->guard()->check()): ?>
                            <input type="hidden" name="user_type" id="user_type" value="office-staff">                 
                        <?php endif; ?>
                        <?php if(auth()->guard()->guest()): ?>
                            <input type="hidden" name="user_type" id="user_type" value="administrator">
                        <?php endif; ?>
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email"value="<?php echo e(old('email')); ?>"
                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger mt-2 text-sm">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" placeholder="Choose a Password"
                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger mt-2 text-sm">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <div class="mb-3">
                        <label for="password_confirmation" class="sr-only">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    </div>
                    <hr class="my-4">
                    <div class="d-grid">
                        <div><button class="btn btn-primary btn-block btn-login text-uppercase fw-bold" >Register</button></div>
                    </div>  
                    <hr class="my-3">
                </form>
            </div>
        </div>
    </div>
</section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\digiLogWeb-main\resources\views/auth/register.blade.php ENDPATH**/ ?>
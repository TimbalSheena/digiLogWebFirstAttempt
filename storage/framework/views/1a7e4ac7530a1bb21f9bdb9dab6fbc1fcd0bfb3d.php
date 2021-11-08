<?php $__env->startSection('content'); ?>
    <div class="container-fluid" style="background:#cccccc !important;height:650px">
        <section>
        <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
            <div class="card-body p-4 p-sm-5">
                <h4 class="card-title text-center mb-5 fw-light fs-5">Log In</h4>
            <?php if(session('status')): ?>
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-black text-center">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            <form action="<?php echo e(route('login')); ?>" method="post">
                <?php echo csrf_field(); ?>
                
                <div class="form-floating mb-3">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email"  placeholder="Email" value="<?php echo e(old('email')); ?>"
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
                    <input type="password" name="password" id="password" placeholder="Password" 
                    class="form-control bg-gray border-2 w-full p-4 rounded-lg <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger mt-2 text-sm ">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                
                <div class="mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember"  class="form-check-input ml-2">
                        <label for="remember" class="form-check-label ml-4 ">Remember me</label>
                    </div>
                </div>
                <hr class="my-3">
                <div class="d-grid">
                    <button class="btn btn-primary btn-block btn-login text-uppercase fw-bold">Login</button>
                </div>
                <hr class="my-3">
            </form>
            </div>
            </div>
        </div>
        </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\digiLogWeb-main\resources\views/auth/login.blade.php ENDPATH**/ ?>
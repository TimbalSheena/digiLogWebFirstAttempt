<?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="jumbotron container mt-5">
    <div class="row container">
        <a href="<?php echo e(route('admin')); ?>" class="btn btn-default" ><span class="fas fa-arrow-left mr-2"></span >Back</a>
        <h3 class="display-6 mt-1">Office Registration</h3>
    </div>
    <div class="mb-4"></div>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                <ul class="nav nav-tabs mt-4">
                        <li class="btn-block"><a href="<?php echo e(route('reg_data')); ?>"class="btn btn-primary mb-3 btn-block"  >Security Personnel</a></li>
                        <li class="btn-block"><a href="<?php echo e(route('reg_staff')); ?>"class="btn btn-primary  mb-3 btn-block"  >Office Staff</a></li>
                        <li class="btn-block"><a href="<?php echo e(route('reg_office')); ?>"class="btn btn-primary  mb-3 btn-block active" >Office</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card container">
                <div class="card-body">
                <form action="#" method="#">
                    <?php echo csrf_field(); ?>
                    
                    <div class="mb-3 mt-4">
                        <input type="text" name="buidnum" id="buidnum" placeholder="Building Number" value="<?php echo e(old('buidnum')); ?>"
                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg <?php $__errorArgs = ['buidnum'];
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
                        <input type="text" name="buildname" id="buildname" placeholder="Building Name"  value="<?php echo e(old('buildname')); ?>"
                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg <?php $__errorArgs = ['buildname'];
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
                        <input type="contact" name="office" id="office" placeholder="Office" value="<?php echo e(old('office')); ?>"
                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg <?php $__errorArgs = ['office'];
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
                    <hr class="my-4">
                    <div class="d-grid">
                        <div><button class="btn btn-success btn-login text-uppercase fw-bold" >Add Office</button></div>
                    </div>  
                    <hr class="my-3">
                </form>
                </div>  
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\digiLogWeb-main\resources\views/admin/register/reg_office.blade.php ENDPATH**/ ?>
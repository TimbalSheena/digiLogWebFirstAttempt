<?php $__env->startSection('content'); ?>
    <div class="flex justify-center">
        <div class="w-8/12 bg-gray-300 p-6 rounded-lg">
            <div class="">Dashboard</div>
            <?php if(auth()->user()->user_type == "administrator"): ?>
                ADMIN DASHBOARD
            <?php endif; ?>
            <?php if(auth()->user()->user_type == "office-staff"): ?>
                OFFICE-STAFF DASHBOARD VIEWS HERE
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\digiLogWeb-main\resources\views/dashboard.blade.php ENDPATH**/ ?>
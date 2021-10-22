<?php $__env->startSection('content'); ?>
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <div class="">Dashboard</div>
            <?php if(auth()->user()->user_type == "administrator"): ?>
                ADMIN DASHBOARD VIEWS HERE
            <?php endif; ?>
            <?php if(auth()->user()->user_type == "office-staff"): ?>
                OFFICE-STAFF DASHBOARD VIEWS HERE
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\000 SISI\Capstone\ustp-digital-logbook-main\ustp-digital-logbook-webapp\resources\views/dashboard.blade.php ENDPATH**/ ?>
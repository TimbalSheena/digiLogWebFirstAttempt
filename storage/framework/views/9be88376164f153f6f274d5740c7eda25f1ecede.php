<?php echo $__env->make('includes.adminheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
    <div class="flex justify-center">
        <div class="w-8/12 bg-gray-300 p-6 rounded-lg">
            <div class="">Dashboard</div>
            <?php if(auth()->user()->user_type == "administrator"): ?>
                ADMIN DASHBOARD
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?><?php /**PATH C:\xampp\htdocs\digiLogWeb-main\resources\views/admin/index.blade.php ENDPATH**/ ?>
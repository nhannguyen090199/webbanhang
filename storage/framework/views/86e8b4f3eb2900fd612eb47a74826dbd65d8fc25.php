 

<?php $__env->startSection('header'); ?>
    <title><?php echo e(config('app.name', 'Laravel')); ?> | <?php echo app('translator')->get('admin/dashboard.dashboard'); ?></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageCss'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageJs'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webbanhang\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>
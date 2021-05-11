<?php $__env->startSection('title', 'Đơn hàng'); ?>
<?php $__env->startSection('content'); ?>
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">DANH SÁCH ĐƠN HÀNG</h2>
        <div id="table_order" style="width: 100%">
            <?php echo $__env->make('shop.pages.order.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
        </div>



    </div><!--features_items-->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <script src="<?php echo e(url('assets/shop/js/order/order.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('shop.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webbanhang\resources\views/shop/pages/order/index.blade.php ENDPATH**/ ?>
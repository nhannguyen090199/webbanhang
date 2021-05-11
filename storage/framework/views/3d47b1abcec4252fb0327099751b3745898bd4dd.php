<?php $__env->startSection('title', 'Loại sản phẩm'); ?>
<?php $__env->startSection('content'); ?>
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center"><?php echo e($category->title); ?></h2>
        <?php if($items->count()): ?>
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-4">
                    <?php echo e(App\Helpers\Shop\shopHelper::product($item)); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <h2>Gian hàng trống!</h2>
        <?php endif; ?>

    </div><!--features_items-->
    <?php echo e($items->links()); ?>

<?php $__env->stopSection(); ?>





<?php echo $__env->make('shop.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webbanhang\resources\views/shop/pages/category.blade.php ENDPATH**/ ?>
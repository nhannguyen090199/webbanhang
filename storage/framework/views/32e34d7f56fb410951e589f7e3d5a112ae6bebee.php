<?php $__env->startSection('title','Tìm kiếm sản phẩm'); ?>
<?php $__env->startSection('content'); ?>
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Từ khóa: <?php echo e(request()->input('keyword')); ?> </h2>
        <?php if($items->count()): ?>
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-4">
                    <?php echo e(App\Helpers\Shop\shopHelper::product($item)); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <h2>Không tìm kiếm được!</h2>
        <?php endif; ?>

    </div><!--features_items-->
    <?php echo e($items->links()); ?>

<?php $__env->stopSection(); ?>





<?php echo $__env->make('shop.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webbanhang\resources\views/shop/pages/search.blade.php ENDPATH**/ ?>
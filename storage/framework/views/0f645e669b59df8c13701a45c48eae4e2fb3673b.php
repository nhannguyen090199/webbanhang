<?php $__env->startSection('title','Trang chủ'); ?>
<?php $__env->startSection('slide'); ?>
    <section id="slider" ><!--slider-->
        <div class="container" style="background-color: #f7f0cd;">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>NHAN</span >-SHOP</h1>
                                    <h2>Shop điện thoại uy tín nhất Sư Phạm</h2>
                                    <p>Dùng là thích </p>
                                    <button type="button" class="btn btn-default get">Đăng nhập ngay</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="<?php echo e(url('storage/banner.png')); ?>" class="girl img-responsive" alt="" />

                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>NHAN</span >-SHOP</h1>
                                    <h2>Shop điện thoại uy tín nhất Sư Phạm</h2>
                                    <p>Dùng là thích </p>
                                    <button type="button" class="btn btn-default get">Đăng nhập ngay</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="<?php echo e(url('storage/banner.png')); ?>" class="girl img-responsive" alt="" />
                                    
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>NHAN</span >-SHOP</h1>
                                    <h2>Shop điện thoại uy tín nhất Sư Phạm</h2>
                                    <p>Dùng là thích </p>
                                    <button type="button" class="btn btn-default get">Đăng nhập ngay</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="<?php echo e(url('storage/banner.png')); ?>" class="girl img-responsive" alt="" />
                                    
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section><!--/slider-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Giảm giá sốc</h2>
        <?php if($items->count()): ?>
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-4">
                    <?php echo e(App\Helpers\Shop\shopHelper::product($item)); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <br>
            <?php echo e($items->links()); ?>

        <?php else: ?>
            Hết hàng
        <?php endif; ?>


    </div><!--features_items-->
<?php $__env->stopSection(); ?>




<?php echo $__env->make('shop.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webbanhang\resources\views/shop/pages/home.blade.php ENDPATH**/ ?>
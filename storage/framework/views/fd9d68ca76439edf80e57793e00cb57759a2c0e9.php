<div class="container">
    <div class="row">
        <div class="col-sm-4">

            <div class="logo pull-left">
                <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(url('storage/logo.png')); ?>" alt="" /></a>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="shop-menu pull-right">
                <ul class="nav navbar-nav">
                    <li><a href="#"><i class="fa fa-user"></i> Tài khoản</a></li>
                    <li><a href="#"><i class="fa fa-star"></i> Yêu thích</a></li>
                    <li><a href="<?php echo e(asset('/order')); ?>"><span class="glyphicon glyphicon-list-alt"></span></i> Đơn hàng</a></li>
                    <li><a href="<?php echo e(url('cart')); ?>"><i class="fa fa-shopping-cart"></i>Giỏ hàng
                            (<?php echo e(isset($qty_cart) ? $qty_cart : 0); ?>) </a></li>

                    <?php if(Auth::check()): ?>
                    <li><a href="<?php echo e(url('logout')); ?>"><i class="fa fa-unlock"></i>
                        <b>Đăng xuất (<?php echo e(Auth::user()->email); ?>)<b> </a></li>
                    <?php else: ?>
                        <li><a href="<?php echo e(url('login')); ?>"><i class="fa fa-lock"></i>
                        Đăng nhập </a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\webbanhang\resources\views/shop/layouts/header_middle.blade.php ENDPATH**/ ?>
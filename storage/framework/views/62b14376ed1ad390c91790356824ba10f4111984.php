<?php $__env->startSection('title', 'Đăng nhập | Đăng kí'); ?>

<?php $__env->startSection('content'); ?>
    <?php if(Session::has('messenger')): ?>
        <div class="alert alert-success">
            <ul>
                <li><?php echo e(Session::get('messenger')); ?></li>
            </ul>
        </div>
    <?php endif; ?>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>- <?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <section id="form"><!--form-->
            <div class="row">
                <div class="col-sm-4 ">
                    <div class="login-form"><!--login form-->
                        <h2>Đăng nhập</h2>
                        <form action="<?php echo e(route('shop.login.submit')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="text" placeholder="Email" name="email" required/>
                            <input type="password" placeholder="Mật khẩu" name="password" required/>
                            <span>
								<input type="checkbox" class="checkbox">
								Nhớ mật khẩu
							</span>

                            <button type="submit" class="btn btn-default">Đăng nhập</button>
                        </form>

                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="or">Hoặc</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Tạo mới</h2>
                        <form action="<?php echo e(route('shop.login.sigh_up')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="text" placeholder="Họ tên" name="name" required/>
                            <input type="text" placeholder="Email" name="email" required/>
                            <input type="password" placeholder="Mật khẩu" name="password" required/>
                            <input type="password" placeholder="Xác nhận mật khẩu" name="confirm_password" required/>
                            <button type="submit" class="btn btn-default">Đăng kí</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>

    </section><!--/form-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <script>
        //
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('shop.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webbanhang\resources\views/shop/pages/auth/login.blade.php ENDPATH**/ ?>
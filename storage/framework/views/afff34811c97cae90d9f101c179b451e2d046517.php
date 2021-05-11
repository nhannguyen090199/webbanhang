<?php if(isset($errors) && $errors->any()): ?>
    <div class="rows">
        <div class="alert alert-danger col-md-12">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
<?php endif; ?>

<?php if(Session::has('success')): ?>
    <div class="rows">
        <div class="alert alert-success col-md-12">
            <?php echo Session::get('success'); ?>

        </div>
    </div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\webbanhang\resources\views/admin/common/message.blade.php ENDPATH**/ ?>
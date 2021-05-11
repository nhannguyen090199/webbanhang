<?php $__env->startSection('title', 'Giở hàng'); ?>
<?php $__env->startSection('content'); ?>
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Giỏ hàng</h2>


        <section id="cart_items">
                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Shopping Cart</li>
                    </ol>
                </div>
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                        <tr class="cart_menu">
                            <td class="image" width="10%">Ảnh</td>
                            <td class="description" width="30%" >Sản phẩm</td>
                            <td class="price" width="20%">Giá</td>
                            <td class="quantity" width="10%">Số lượng</td>
                            <td class="total" width="20%">Tổng tiền</td>
                            <td></td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="cart_product" style="padding: 0px; margin: 0px;">
                                    <a href=""><img style="width: 100%" src="<?php echo e(url(''.$item->product->image)); ?>" alt=""></a>
                                </td>
                                <td class="cart_description">
                                    <h4><a href=""><?php echo e($item->product->title); ?></a></h4>
                                    <p>Mã sản phẩm: <?php echo e($item->product_id); ?></p>
                                </td>
                                <td class="cart_price">
                                    <p><?php echo e(number_format($item->product->price)); ?> VNĐ</p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">

                                        <input class="cart_quantity_input" type="number" name="quantity" value="1" min="1" max="50"  size="2">
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">{{}}</p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>

        </section> <!--/#cart_items-->

    </div><!--features_items-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('shop.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webbanhang\resources\views/shop/pages/cart.blade.php ENDPATH**/ ?>
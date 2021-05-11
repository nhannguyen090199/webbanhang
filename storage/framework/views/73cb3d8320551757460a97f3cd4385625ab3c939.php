<table class="table table-bordered" style="width: 100%">
    <thead style="background-color: #ffb3b7">
    <tr>
        <th class="" width="5%">STT</th>
        <th class="" width="5%">Mã đơn</th>
        <th class="" width="30%" >Sản phẩm</th>
        <th class="" width="20%">Thanh toán</th>
        <th width="25%">Thông tin khách</th>
        <th >Trạng thái</th>
        <th width="5%"></th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr >
            <td style="text-align: center"><?php echo e($k+1); ?></td>
            <td style="text-align: center"><?php echo e($item->id); ?></td>
            <td>

                <?php $__currentLoopData = $item->orderDetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p> - <?php echo e($order_detail->product->title); ?> (Số lượng: <?php echo e($order_detail->product_qty); ?>, Giá: <?php echo e(number_format($order_detail->product_price)); ?>đ)</p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>
            <td><?php echo e(number_format($item->grand_total)); ?> VNĐ</td>
            <td>
                <p>- Họ tên: <?php echo e($item->user_name); ?> </p>
                <p>- Địa chỉ: <?php echo e($item->user_address); ?> </p>
                <p>- SĐT: <?php echo e($item->user_mobile); ?> </p>
            </td>
            <td><?php echo e(App\Helpers\Shop\orderHelper::htmlStatus($item->status)); ?></td>

            <td class="" style="text-align: center;">
                <?php if($item->status != 3): ?>
                    <form>
                        <?php echo csrf_field(); ?>
                        <a class="delete_order" data-id="<?php echo e($item->id); ?>" href="<?php echo e(url('delete-order/'. $item->id)); ?>">Hủy & Xóa</a>
                    </form>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH C:\xampp\htdocs\webbanhang\resources\views/shop/pages/order/table.blade.php ENDPATH**/ ?>
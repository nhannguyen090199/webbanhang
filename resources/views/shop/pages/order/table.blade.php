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
    @foreach($items as $k=>$item)
        <tr >
            <td style="text-align: center">{{$k+1}}</td>
            <td style="text-align: center">{{$item->id}}</td>
            <td>

                @foreach($item->orderDetail as $order_detail)
                    <p> - {{$order_detail->product->title}} (Số lượng: {{$order_detail->product_qty}}, Giá: {{number_format($order_detail->product_price)}}đ)</p>
                @endforeach
            </td>
            <td>{{number_format($item->grand_total)}} VNĐ</td>
            <td>
                <p>- Họ tên: {{$item->user_name}} </p>
                <p>- Địa chỉ: {{$item->user_address}} </p>
                <p>- SĐT: {{$item->user_mobile}} </p>
            </td>
            <td>{{App\Helpers\Shop\orderHelper::htmlStatus($item->status)}}</td>

            <td class="" style="text-align: center;">
                @if($item->status != 3)
                    <form>
                        @csrf
                        <a class="delete_order" data-id="{{$item->id}}" href="{{url('delete-order/'. $item->id)}}">Hủy & Xóa</a>
                    </form>
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

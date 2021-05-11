<div style="border: 1px solid #b4b4b4; margin-bottom: 30px;">
<table class="table table-condensed">
    <thead>
    <tr class="cart_menu" >
        <td class="" width="5%">STT</td>
        <td class="" width="10%" style="text-align: center">Ảnh</td>
        <td class="description" width="30%" >Sản phẩm</td>
        <td class="price" width="20%">Giá</td>
        <td class="quantity" width="10%">Số lượng</td>
        <td class="total" width="20%">Tổng tiền</td>
        <td></td>
    </tr>
    </thead>
    <tbody >
    <input type="hidden" id="qty_cart" value="{{$items->count()}}">
    @if($items->count())
        @php $all_price = 0 @endphp
        @foreach($items as $k=>$item)
            @php  $all_price += $item->total_price @endphp
            <tr>
                <td style="text-align: center">{{$k+1}}</td>
                <td class="cart_product" style="padding: 0px; margin: 0px;">
                    <a href="{{url(''.route('shop.product', $item->product_id))}}"><img style="width: 100%" src="{{url(''.$item->product->image)}}" alt=""></a>
                </td>
                <td class="cart_description">
                    <h4><a href="{{url(''.route('shop.product', $item->product_id))}}">{{$item->product->title}}</a></h4>
                    <p>Mã sản phẩm: {{$item->product_id}}</p>
                </td>
                <td class="cart_price">
                    <p>{{number_format($item->product->price)}} VNĐ</p>
                </td>
                <td class="cart_quantity">
                    <div class="cart_quantity_button">

                        <input class="cart_quantity_input" type="number" value="{{$item->quality}}" cart_id = "{{$item->id}}"
                               name="qty_cart" value="" min="1" max="50" action="change_qty_cart"  size="2" url="{{url('')}}">
                    </div>
                </td>
                <td class="cart_total">
                    <p class="cart_total_price">{{number_format($item->total_price)}} VNĐ</p>
                </td>
                <td class="cart_delete">
                    <form>
                        @csrf
                        <a class="cart_quantity_delete" data-id="{{$item->id}}" href="{{url('delete-cart/'. $item->id)}}"><i class="fa fa-times"></i></a>
                    </form>
                </td>
            </tr>
        @endforeach
    @else
        <h4 style="color: blue; display: flex; position: absolute; top: 150px ">Giỏ hàng trống!</h4></td>
    @endif
    </tbody>

</table>
    @if(isset($all_price))
        <div style="width: 100%; text-align: center">
        <h3 > Tổng tiền thanh toán: <b style="color: red">{{number_format($all_price)}} VNĐ</b>
        </div>
    @endif
</div >


<div class="modal fade " id="confirm_cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl "  role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel" style="color: #f77000;">Xác nhận đơn hàng</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-condensed" style="vertical-align: middle">
                    <thead>
                    <tr class="cart_menu" style="background-color: #f7e08e" >
                        Số lượng sản phẩm: {{$items->count()}}
                        <td class="" width="5%">STT</td>
                        <td class="" width="10%" style="text-align: center">Ảnh</td>
                        <td class="description" width="30%" >Sản phẩm</td>
                        <td class="price" width="20%">Giá</td>
                        <td class="quantity" width="10%">Số lượng</td>
                        <td class="total" width="20%">Tổng tiền</td>

                    </tr>
                    </thead>
                    <tbody >
                    @if($items->count())
                        @php $all_price = 0 @endphp
                        @foreach($items as $k=>$item)
                            @php  $all_price += $item->total_price @endphp
                            <tr>
                                <td style="text-align: center">{{$k+1}}</td>
                                <td class="cart_product" style="padding: 0px; margin: 0px;">
                                    <a href="{{url(''.route('shop.product', $item->product_id))}}"><img style="width: 100%" src="{{url(''.$item->product->image)}}" alt=""></a>
                                </td>
                                <td class="cart_description">
                                    <b><a href="{{url(''.route('shop.product', $item->product_id))}}">{{$item->product->title}}</a></b>
                                    <p>Mã sản phẩm: {{$item->product_id}}</p>
                                </td>
                                <td class="cart_price">
                                    <p>{{number_format($item->product->price)}} VNĐ</p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        {{$item->quality}}
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">{{number_format($item->total_price)}} VNĐ</p>
                                </td>

                            </tr>
                        @endforeach
                    @else
                        Trống!
                    @endif
                    </tbody>


                </table>
                @if(isset($all_price))
                    <div style="width: 100%; text-align: center">
                        <h4 > Tổng tiền thanh toán: <b style="color: red">{{number_format($all_price)}} VNĐ</b>
                    </div>
                @endif
                <h3>Thông tin cá nhân</h3>
                <table>
                    <tr>
                        <td>Họ và tên: </td>
                        <td id="confirm-name"></td>
                    </tr>
                    <tr>
                        <td>Số điện thoại: </td>
                        <td id="confirm-mobie"></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ: </td>
                        <td id="confirm-address"></td>
                    </tr>
                    <tr>
                        <td>Ghi chú: </td>
                        <td id="confirm-note"></td>
                    </tr>
                </table>


            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button  class="btn btn-success btn-confirm-order" style="background-color: #f3160a">Xác nhận</button>

            </div>
        </div>
    </div>
</div>


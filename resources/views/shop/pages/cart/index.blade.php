@extends('shop.layouts.default')
@section('title', 'Giở hàng')
@section('content')
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

                    @include('shop.pages.cart.table')

                </div>
                <div class="title_info" style="width: 100%; background-color: #fe980f; text-align: center; padding: 5px 5px">
                    <h3 style="color: #fff9fc; display: inline; margin: 0px auto">Thông tin cá nhân</h3>
                </div>
                <div id="body_info" style="padding: 10px;border: 1px solid #b4b4b4; ">
                    <form id="form_infor_order" >
                        <div class="row">
                            <div class="col-sm-6">

                                <b>Họ tên</b>
                                <input type="text" name="name" class="form-control " style=" margin-bottom: 10px; " placeholder="Họ tên" required>
                                <b>Số điện thoại</b>
                                <input type="number" name="phone" class="form-control" style=" margin-bottom: 10px " placeholder="Số điện thoại" required>


                            </div>
                            <div class="col-sm-6">

                                <b>Địa chỉ</b>
                                <input type="text" name="address" class="form-control " style=" margin-bottom: 10px; " placeholder="Địa chỉ" required>
                                <b>Ghi chú</b>
                                <textarea name="note" class="form-control "></textarea>

                            </div>
                        </div>
                        <input  type="submit" class="btn btn-primary btn-checkout " is_cart="{{$items->count()}}" style="background-color: #f3160a; display: block; margin-left: auto;" value="Lên đơn">
                    </form>
                </div>

        </section> <!--/#cart_items-->

    </div><!--features_items-->



@stop
@section('footer')
    <script>

    </script>
    <script src="{{url('assets/shop/js/cart/cart.js')}}"></script>
@stop

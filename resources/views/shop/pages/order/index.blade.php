@extends('shop.layouts.default')
@section('title', 'Đơn hàng')
@section('content')
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">DANH SÁCH ĐƠN HÀNG</h2>
        <div id="table_order" style="width: 100%">
            @include('shop.pages.order.table');
        </div>



    </div><!--features_items-->

@stop
@section('footer')
    <script src="{{url('assets/shop/js/order/order.js')}}"></script>
@stop

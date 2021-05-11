@extends('shop.layouts.default')
@section('title','Trang chủ')
@section('slide')
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
                                    <img src="{{url('storage/banner.png')}}" class="girl img-responsive" alt="" />
{{--                                    <img src="{{url('storage/sale_banner.png')}}"  class="pricing" alt="" />--}}
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
                                    <img src="{{url('storage/banner.png')}}" class="girl img-responsive" alt="" />
                                    {{--                                    <img src="{{url('storage/sale_banner.png')}}"  class="pricing" alt="" />--}}
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
                                    <img src="{{url('storage/banner.png')}}" class="girl img-responsive" alt="" />
                                    {{--                                    <img src="{{url('storage/sale_banner.png')}}"  class="pricing" alt="" />--}}
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
@stop

@section('content')
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Giảm giá sốc</h2>
        @if($items->count())
            @foreach($items as $item)
                <div class="col-sm-4">
                    {{ App\Helpers\Shop\shopHelper::product($item) }}
                </div>
            @endforeach
        <br>
            {{ $items->links() }}
        @else
            Hết hàng
        @endif


    </div><!--features_items-->
@stop




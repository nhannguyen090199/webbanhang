<div class="container">
    <div class="row">
        <div class="col-sm-4">

            <div class="logo pull-left">
                <a href="{{url('/')}}"><img src="{{url('storage/logo.png')}}" alt="" /></a>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="shop-menu pull-right">
                <ul class="nav navbar-nav">
                    <li><a href="#"><i class="fa fa-user"></i> Tài khoản</a></li>
                    <li><a href="#"><i class="fa fa-star"></i> Yêu thích</a></li>
                    <li><a href="{{asset('/order')}}"><span class="glyphicon glyphicon-list-alt"></span></i> Đơn hàng</a></li>
                    <li><a href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i>Giỏ hàng
                            ({{isset($qty_cart) ? $qty_cart : 0 }}) </a></li>

                    @if(Auth::check())
                    <li><a href="{{url('logout')}}"><i class="fa fa-unlock"></i>
                        <b>Đăng xuất ({{Auth::user()->email}})<b> </a></li>
                    @else
                        <li><a href="{{url('login')}}"><i class="fa fa-lock"></i>
                        Đăng nhập </a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>

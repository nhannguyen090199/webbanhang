@extends('shop.layouts.default')
@section('title', 'Đăng nhập | Đăng kí')

@section('content')
    @if(Session::has('messenger'))
        <div class="alert alert-success">
            <ul>
                <li>{{Session::get('messenger')}}</li>
            </ul>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <section id="form"><!--form-->
            <div class="row">
                <div class="col-sm-4 ">
                    <div class="login-form"><!--login form-->
                        <h2>Đăng nhập</h2>
                        <form action="{{route('shop.login.submit')}}" method="post">
                            @csrf
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
                        <form action="{{route('shop.login.sigh_up')}}" method="post">
                            @csrf
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

@stop

@section('footer')
    <script>
        //
    </script>
@stop

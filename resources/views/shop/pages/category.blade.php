@extends('shop.layouts.default')
@section('title', 'Loại sản phẩm')
@section('content')
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">{{$category->title}}</h2>
        @if($items->count())
            @foreach($items as $item)
                <div class="col-sm-4">
                    {{ App\Helpers\Shop\shopHelper::product($item) }}
                </div>
            @endforeach
        @else
            <h2>Gian hàng trống!</h2>
        @endif

    </div><!--features_items-->
    {{ $items->links() }}
@stop





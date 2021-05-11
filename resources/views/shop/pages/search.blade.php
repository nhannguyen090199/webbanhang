@extends('shop.layouts.default')
@section('title','Tìm kiếm sản phẩm')
@section('content')
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Từ khóa: {{request()->input('keyword')}} </h2>
        @if($items->count())
            @foreach($items as $item)
                <div class="col-sm-4">
                    {{ App\Helpers\Shop\shopHelper::product($item) }}
                </div>
            @endforeach
        @else
            <h2>Không tìm kiếm được!</h2>
        @endif

    </div><!--features_items-->
    {{ $items->links() }}
@stop





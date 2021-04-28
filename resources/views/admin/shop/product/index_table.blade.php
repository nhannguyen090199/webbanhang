<table class="table table-hover table-striped">
    <thead class="thead-light">
    <tr>
        <th width="5" scope="col">
            <label class="kt-checkbox">
                <input class="checkbox-all" type="checkbox" name="row[]" value="0"/>
                <span></span>
            </label>
        </th>
        <th scope="col">#</th>
        <th data-field="title">@lang('admin/cms/news.tb_title')</th>
        <th data-field="created_at">Price</th>
        <th data-field="image">@lang('admin/cms/news.tb_image')</th>
        <th data-field="category_id">@lang('admin/cms/news.tb_category')</th>
        <th data-field="status">@lang('admin/cms/news.tb_status')</th>
        <th data-field="featured">Sale</th>
        <th data-field="is_hot">Hot</th>
        <th data-field="is_new">New</th>
        <th data-field="id" width="60">@lang('admin/cms/news.tb_id')</th>
        <th scope="col" width="100"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($items as $k => $item)
        <tr>
            <th scope="row">
                <label class="kt-checkbox">
                    <input class="checkbox-item" type="checkbox" name="row[]" value="{{ $item->id }}"/>
                    <span></span>
                </label>
            </th>
            <th scope="row">
                {{ $k + 1 }}
            </th>
            <td>
                <a href="{{ route($route.'.edit', $item->id) }}" @cannot('permission', $route.'.edit') onclick="return false;" @endcannot>
                    <b>{{ $item->sku }}</b> - {{ $item->title }}</a>
            </td>
            <td>
                <b>{{ $item->price ? number_format($item->price) : '' }}</b><br/>
                <i>{{ $item->price ? number_format($item->price) : '' }}</i>
            </td>
            <td>
                @if($item->image)
                    <img src="{{ url($item->image) }}" style="height: 50px;">
                @endif
            </td>
            <td>
                {{ $item->category->title }}
            </td>
            <td>
                {!! \App\Helpers\AdminHelper::statusGroup('status', $item->id, $item->status) !!}
            </td>
            <td>
                {!! \App\Helpers\AdminHelper::yesNoGroup('is_sale', $item->id, $item->is_sale) !!}
            </td>
            <td>
                {!! \App\Helpers\AdminHelper::yesNoGroup('is_hot', $item->id, $item->is_hot) !!}
            </td>
            <td>
                {!! \App\Helpers\AdminHelper::yesNoGroup('is_new', $item->id, $item->is_new) !!}
            </td>
            <td>
                {{ $item->id }}
            </td>
            <td scope="row">
                {!! \App\Helpers\AdminHelper::getLogPopup($item->id, $item->getTable()) !!}
                @can('permission', $route.'.edit')
                    <a class="btn btn-sm btn-clean btn-icon btn-icon-md" href="{{ route($route.'.edit', $item->id) }}"><i class="la la-pencil"></i> </a>
                @endcan
                @can('permission', $route.'.delete')
                    <a class="btn btn-sm btn-clean btn-icon btn-icon-md btn-delete" data-id="{{ $item->id }}" href="{{ route($route) .'/'. $item->id }}"><i class="la la-trash"></i> </a>
                @endcan
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="row">
    <div class="col-md-6">
        @lang('admin.common.page_total', ['current_page' => $items->currentPage(), 'total_page' => $items->lastPage(), 'total' => $items->total()])
    </div>
    <div class="col-md-6">
        <div class="pull-right">
            {!! $items->links() !!}
        </div>
        <div class="pull-right">
            @lang('admin.common.display'):
            {{ Form::select('_limit', [10=>10, 20=>20, 50=>50, 100=>100, 1000=>1000], app('request')->input('_limit', 20),['class'=>'form-control form-control-sm table-limit', 'style' => 'width: auto; display: inline-block;']) }}
        </div>
    </div>
</div>

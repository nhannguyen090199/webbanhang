<table class="table table-hover table-striped">
    <thead class="thead-light">
    <tr>
        <th scope="col">#</th>
        <th data-field="id">ID</th>
        <th data-field="week">@lang('admin/cms/contest.gift.tb_week')</th>
        <th data-field="card_type">@lang('admin/cms/contest.gift.tb_card_type')</th>
        <th data-field="user_id">Contest ID</th>
        <th data-field="received_at">@lang('admin/cms/contest.gift.tb_received_at')</th>
        <th data-field="release_at">@lang('admin/cms/contest.gift.tb_release_at')</th>
    </tr>
    </thead>
    <tbody>
    @foreach($items as $k => $item)
        <tr>
            <th scope="row">
                {{ $k + 1 }}
            </th>
            <th scope="row">
                {{ $item->id }}
            </th>
            <td>
                {{ $item->week }}
            </td>
            <td>
                {{ $item->card_type }}
            </td>
            <td>
                {{ $item->contest_id ?? '' }}
            </td>
            <td>
                {{ $item->received_at }}
            </td>
            <td>
                {{ $item->release_at }}
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

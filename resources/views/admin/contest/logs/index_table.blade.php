<table class="table table-hover table-striped">
    <thead class="thead-light">
    <tr>
        <th scope="col">#</th>
        <th data-field="type">@lang('admin/cms/contest.logs.tb_type')</th>
        <th data-field="contest_id">@lang('admin/cms/contest.logs.tb_contest')</th>
        <th data-field="user_id">@lang('admin/cms/contest.logs.tb_user')</th>
        <th data-field="user_agent">@lang('admin/cms/contest.logs.tb_user_agent')</th>
        <th data-field="ip_address">@lang('admin/cms/contest.logs.tb_ip_address')</th>
        <th data-field="created_at" >@lang('admin/cms/contest.logs.tb_created_at')</th>
        <th data-field="id" >@lang('admin/cms/contest.logs.tb_id')</th>
    </tr>
    </thead>
    <tbody>
    @foreach($items as $k => $item)
        <tr>
            <th scope="row">
                {{ $k + 1 }}
            </th>
            <td>
                {{ $item->type == 1 ? 'Vote' : 'Share' }}
            </td>
            <td>
                {{ $item->contest->title }}
            </td>
            <td>
                {{ $item->user->name }}
            </td>
            <td>
                {{ $item->user_agent }}
            </td>
            <td>
                {{ $item->ip_address }}
            </td>
            <td>
                {{ $item->created_at }}
            </td>
            <td>
                {{ $item->id }}
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

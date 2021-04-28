<div class="table-responsive overscroll">
    <table class="table table-hover table-striped ">
        <thead class="thead-light">
        <tr>
            <th width="5" scope="col">
                <label class="kt-checkbox">
                    <input class="checkbox-all" type="checkbox" name="row[]" value="0"/>
                    <span></span>
                </label>
            </th>
            <th scope="col">#</th>
            <th data-field="user_id">User ID</th>
            <th data-field="">User Name</th>
            <th data-field="turn">Turn</th>
            <th data-field="score">Score</th>
            <th data-field="created_at">@lang('admin/cms/contest.contest.tb_created_at')</th>
            <th data-field="id" width="60">@lang('admin/cms/contest.contest.tb_id')</th>
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
                    {{$item->user_id}}
                </td>
                <td>
                    {{$item->user->name}}
                </td>
                <td>
                    {{$item->turn}}
                </td>
                <td>
                    {{$item->score}}
                </td>
                <td>
                    {{ $item->created_at }}
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
    <style>
        .overscroll::-webkit-scrollbar{
            width: 3px;
            height: 4px;
        }
        .overscroll::-webkit-scrollbar-thumb{
            background: #a2a3b7;
            border-radius: 10px;
        }
        .overscroll::-webkit-scrollbar-track{
            background: #eaeaea;
            border-radius: 10px;
        }
    </style>
</div>

<div class="row">
    <div class="col-md-6">
        @lang('admin.common.page_total', ['current_page' => $items->currentPage(), 'total_page' => $items->lastPage(), 'total' => $items->total()])
    </div>
    <div class="col-md-6">
        <div class="pull-right">
            {!! $items->links() !!}
        </div>
        <div class="pull-right" style="padding-top: 10px; margin-right:10px;">
            @lang('admin.common.display'):
            {{ Form::select('_limit', [10=>10, 20=>20, 50=>50, 100=>100, 1000=>1000], app('request')->input('_limit', 20),['class'=>'form-control form-control-sm table-limit', 'style' => 'width: auto; display: inline-block;']) }}
        </div>
    </div>
</div>

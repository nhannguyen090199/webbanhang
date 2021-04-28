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
            <th data-field="title">@lang('admin/cms/contest.contest.tb_title')</th>
            <th data-field="votes">Votes/Shares</th>
            <th data-field="votes">Chủ đề</th>
            <th data-field="votes">Ngành hàng</th>
            <th data-field="image">@lang('admin/cms/contest.contest.tb_image')</th>
            <th data-field="category_id" class="d-none">@lang('admin/cms/contest.contest.tb_category')</th>
            <th data-field="">User ID</th>
            <th data-field="">Gift</th>
            <th data-field="status">@lang('admin/cms/contest.contest.tb_status')</th>
            <th data-field="shared">@lang('admin/cms/contest.contest.tb_shared')</th>
            <th data-field="">@lang('admin/cms/contest.contest.tb_mail')</th>
            <th data-field="featured">@lang('admin/cms/contest.contest.tb_featured')</th>
            <th data-field="featured">Trang chủ</th>
            <th data-field="" class="d-none">Single Take</th>
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
                    <a href="{{ route($route.'.edit', $item->id) }}" @cannot('permission', $route.'.edit') onclick="return false;" @endcannot>
                        {{ $item->title }}</a>
                    <a href="{{ url('contest/' . $item->id) }}" class="" style="margin-left: 5px" title="@lang('admin/cms/contest.contest.tb_preview')" target="_blank"> <i class="la la-external-link-square"></i> </a>
                </td>
                <td class="text-center">
                    @if (request()->has('vote_share_time'))
                        {{  ($item->votes_count ?? 0) . '/' .  ($item->shares_count ?? 0 ) }}
                    @else
                        {{  ($item->votes ?? 0) . '/' .  ($item->shares ?? 0 ) }}
                    @endif
                </td>
                <td>
                    {{ [1 => 'Hà Nội', 2 => 'Hồ Chí Minh', 3 => 'Hải Phòng', 4 => 'Đà Nẵng', 5 => 'Cần Thơ', 6 => 'Quảng Ninh', 7 => 'Khác'][$item->user_address] ?? '' }}
                </td>
                <td>
                    {{ ['fashion' => 'Thời trang', 'accessories' => 'Phụ kiện', 'home' => 'Nhà cửa', 'food' => 'Ăn uống', 'relax' => 'Giải trí'][$item->user_id_number] ?? '' }}
                </td>
                <td>
                    @if($item->image)
                        <a style="display: block;height: 50px;overflow: hidden" href="{{ url($item->image ?? '') }}" data-fancybox data-caption="{{ $item->title }}"><img src="{{ url($item->image ?? '') }}" data-id="{{ $item->id }}" style="width: 50px"></a>
                    @endif
                </td>
                <td class="d-none">
                    {{ $item->category->title }}
                </td>
                <td>
                    {{ !empty($item->user) ? $item->user->id : '' }}
                </td>
                <td>
                    {{ !empty($item->gift) && $item->gift->id ? $item->gift->card_type : '' }}
                </td>
                <td>
                    {!! \App\Helpers\AdminHelper::statusGroup('status', $item->id, $item->status) !!}
                </td>
                <td>
                    <span style="width: 100px;"><span class="btn btn-bold btn-sm btn-font-sm  btn-label-{{ $item->shared == 1 ? 'success' : 'danger' }}">{{ $item->shared == 1 ? __('admin/cms/contest.contest.tb_shared') : __('admin/cms/contest.contest.not_shared') }}</span> </span>
                </td>
                <td >

                <div class="dropdown">
                    <button class="btn btn-{{ $item->logsMail()->count() > 0 ? 'success' : 'warning' }} dropdown-toggle btn-xs btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @lang('admin.common.choose_action')
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">

                        @if (config('system.mail_confirm_subject'))
                            <a class="dropdown-item" onclick="$.app.gmail.send('{{ $item->id ?? 0 }}', 'mail_confirm')" href="javascript:void(0)">
                                Confirm
                            </a>
                        @endif

                        @if (config('system.mail_not_share_subject'))
                            <a class="dropdown-item" type="button" onclick="$.app.gmail.send('{{ $item->id ?? 0 }}', 'mail_not_share')" href="javascript:void(0)">
                                Not Share
                            </a>
                        @endif

                        @if (config('system.mail_invalid_subject'))
                            <a class="dropdown-item" type="button" onclick="$.app.gmail.send('{{ $item->id ?? 0 }}', 'mail_invalid')" href="javascript:void(0)">
                                Invalid
                            </a>
                        @endif
                    </div>
                </div>

                </td>
                <td>
                    {!! \App\Helpers\AdminHelper::yesNoGroup('featured', $item->id, $item->featured) !!}
                </td>
                <td>
                    {!! \App\Helpers\AdminHelper::yesNoGroup('home', $item->id, $item->home) !!}
                </td>
                <td class="d-none">
                    {{ \App\Helpers\AdminHelper::getIsSingleTake($item->images, $item->videos) ? 'Yes' : '' }}
                </td>
                <td>
                    {{ $item->created_at }}<br/>
                    {{ $item->ip_address }}
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

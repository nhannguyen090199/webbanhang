@extends('admin.layout')

@section('header')

@endsection

@section('pageCss')
@endsection

@section('content')
<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                @lang('admin/cms/contest.contest_title')
            </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ route('admin.dashboard') }}" class="kt-subheader__breadcrumbs-link">
                    @lang('admin/dashboard.dashboard')
                </a>

                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ route($route) }}" class="kt-subheader__breadcrumbs-link">
                    @lang('admin/cms/contest.contest_title')
                </a>

                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ route($route) }}?layout=statistic" class="btn btn-primary btn-sm kt-subheader__breadcrumbs-link" style="color:white">
                    Statistic
                </a>
            </div>


        </div>
        <div class="kt-subheader__toolbar">
            @can('permission', $route.'.edit')
                <a id="btn-rollback-gift" href="javascript:;" type="button" class="btn btn-brand btn-danger"><i class="la la-trash"></i> Rollback Gift</a>
            @endcan
            <div id="btn-status-list" class="btn-group btn-status-list">
                <button type="button" class="btn btn-sm btn-success">Enable</button>
                <button type="button" class="btn btn-sm btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a data-action="update_status_list" data-id="" data-value="1" data-field="status" class="dropdown-item option" href="javascript:void(0)">Draft</a>
                    <a data-action="update_status_list" data-id="" data-value="2" data-field="status" class="dropdown-item option" href="javascript:void(0)">Pending</a>
                    <a data-action="update_status_list" data-id="" data-value="3" data-field="status" class="dropdown-item option" href="javascript:void(0)">Disable</a>
                    <a data-action="update_status_list" data-id="" data-value="4" data-field="status" class="dropdown-item option" href="javascript:void(0)">Enable</a>
                </div>
            </div>
            @can('permission', $route.'.delete')
                <a id="btn-remove-list" href="javascript:;" type="button" class="btn btn-brand btn-danger"><i class="la la-trash"></i> Remove</a>
            @endcan
            @can('permission', $route.'.view')
                <a href="javascript:;" class="btn btn-success btn-export" data-query="{{ request()->getQueryString() ?? '' }}">
                    <i class="la la-download"></i> @lang('admin.common.export')
                </a>
            @endcan

            @can('permission', $route.'.create')
                <a href="{{ route($route.'.create') }}" class="btn btn-brand btn-elevate btn-icon-sm">
                    <i class="la la-plus"></i>
                    @lang('admin.common.add')
                </a>
            @endcan
        </div>
    </div>
    <div class="kt-subheader__toolbar d-none">
        <div id="btn-status-list" class="btn-group btn-status-list">
            <button type="button" class="btn btn-sm btn-success">Enable</button>
            <button type="button" class="btn btn-sm btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a data-action="update_status_list" data-id="" data-value="1" data-field="status" class="dropdown-item option" href="javascript:void(0)">Draft</a>
                <a data-action="update_status_list" data-id="" data-value="2" data-field="status" class="dropdown-item option" href="javascript:void(0)">Pending</a>
                <a data-action="update_status_list" data-id="" data-value="3" data-field="status" class="dropdown-item option" href="javascript:void(0)">Disable</a>
                <a data-action="update_status_list" data-id="" data-value="4" data-field="status" class="dropdown-item option" href="javascript:void(0)">Enable</a>
            </div>
        </div>
        @can('permission', $route.'.delete')
            <a id="btn-remove-list" href="javascript:;" type="button" class="btn btn-brand btn-danger"><i class="la la-trash"></i> Remove</a>
        @endcan
        @can('permission', $route.'.create')
            <a href="{{ route($route.'.create') }}" class="btn btn-brand btn-elevate btn-icon-sm">
                <i class="la la-plus"></i>
                @lang('admin.common.add')
            </a>
        @endcan
    </div>
</div>
<!-- end:: Subheader -->

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="row">
        <div class="col-xl-12">
            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__body">
                    <form class="kt-form kt-form--fit filterForm" name="filterForm" method="get">
                        <input type="hidden" name="page" value="{{ app('request')->input('page', '1') }}"/>
                        <input type="hidden" name="_limit" value="{{ $limit }}"/>
                        <input type="hidden" name="_order_by" value="{{ $orderBy }}"/>
                        <input type="hidden" name="_order_type" value="{{ $orderType }}"/>
                        <input type="hidden" name="layout" value="{{ $layout }}"/>

                        <div class="row kt-margin-b-20">
{{--                            <div class="col-md-2 kt-margin-b-10-tablet-and-mobile">--}}
{{--                                <label>@lang('admin.common.category'):</label>--}}
{{--                                {!! Form::select('category_id', $selectCategory, app('request')->input('category_id', ''), ['class'=>'form-control', 'required']) !!}--}}
{{--                            </div>--}}
                            <div class="col-md-3">
                                <label>Ngày tạo bài:</label>
                                <input type="text" name="range_time" value="{{ app('request')->input('range_time') ?? $rangeTimeDefault }}" class="form-control" id="kt_daterangepicker_1" readonly="" placeholder="Select time">
                            </div>
                            <div class="col-md-3">
                                <label>Số lượng votes/shares:</label>
                                <input type="text" name="vote_share_time" value="{{ app('request')->input('vote_share_time') ?? $rangeTimeDefault }}" class="form-control" id="kt_daterangepicker_1" readonly="" placeholder="Select time">
                            </div>
                            <div class="col-md-3 kt-margin-b-10-tablet-and-mobile">
                                <label>@lang('admin.common.keyword'):</label>
                                <div class="kt-input-icon kt-input-icon--left">
                                    <input value="{{ app('request')->input('keyword', '') }}" name="keyword" type="text" class="form-control" placeholder="@lang('admin.common.search')... (keyword, id, phone number, email)" id="generalSearch">
                                    <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                        <span><i class="la la-search"></i></span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2 kt-margin-b-10-tablet-and-mobile">
                                <label>@lang('admin.common.status'):</label>
                                {!! Form::select('status', $status, app('request')->input('status', ''), ['class'=>'form-control', '']) !!}
                            </div>
                            <div class="col-md-2 kt-margin-b-10-tablet-and-mobile">
                                <label>Shared:</label>
                                {!! Form::select('shared', ['' => '-----', 1 => 'Shared', 2 => 'Not Shared'], app('request')->input('shared', ''), ['class'=>'form-control', '']) !!}
                            </div>
                            <div class="col-md-3 kt-margin-b-10-tablet-and-mobile">
                                <label>Chủ đề:</label>
                                {!! Form::select('category_id', ['' => '-----', 1 => 'NGẮM MÀN ĐÊM DIỆU KỲ', 2 => 'YÊU GÓC NHÀ THÂN THƯƠNG', 3 => 'TỰ HÀO NHỊP SỐNG SÔI ĐỘNG'], app('request')->input('category_id', ''), ['class'=>'form-control', '']) !!}
                            </div>
                            <div class="col-md-2 kt-margin-b-10-tablet-and-mobile">
                                <label>&nbsp;&nbsp;</label>
                                <button onclick="document.filterForm.submit();" type="submit" class="btn btn-default form-control btn-search" style="width: auto; display: block"><i class="la la-search"></i> @lang('admin.common.go')</button>
                            </div>
                        </div>
                    </form>

                    <!--begin::Section-->
                    <div class="kt-section">
                        <span class="kt-section__info">
                            {{--Using the most basic table markup, here’s how tables look in Metronic:--}}
                        </span>

                        @if($layout == 'statistic')
                            <div class="kt-section__content table-content">
                                @include($route.'.index_statistic')
                            </div>
                        @else
                            <div class="kt-section__content table-content">
                                @include($route.'.index_table')
                            </div>
                        @endif

                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->
        </div>
    </div>
</div>


@endsection

@section('pageJs')

    <script src="{{ url('/') }}/assets/admin/assets/js/contest.js" type="text/javascript"></script>

    <link rel="stylesheet" href="{{ url('assets/lib/fancybox/css/jquery.fancybox.min.css') }}">
    <script src="{{ url('assets/lib/fancybox/js/jquery.fancybox.min.js') }}"></script>
@endsection

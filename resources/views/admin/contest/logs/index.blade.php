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
                @lang('admin/cms/contest.logs_title')
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
                    @lang('admin/cms/contest.logs_title')
                </a>
            </div>
        </div>
        <div class="kt-subheader__toolbar">
            @can('permission', $route.'.view')
                <a href="javascript:;" class="btn btn-success btn-export-logs" data-query="{{ request()->getQueryString() ?? '' }}">
                    <i class="la la-download"></i> @lang('admin.common.export')
                </a>
            @endcan
        </div>
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

                        <div class="row kt-margin-b-20">
                            <div class="col-md-2 kt-margin-b-10-tablet-and-mobile">
                                <label>@lang('admin.common.type'):</label>
                                <div class="  ">
                                    {{ Form::select('type', ['' => '-- Select type --', 1 => 'Vote', 2 => 'Share'], app('request')->input('type'), ['class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label>Ngày tạo:</label>
                                <input type="text" name="range_time" value="{{ app('request')->input('range_time') ?? $rangeTimeDefault }}" class="form-control" id="kt_daterangepicker_1" readonly="" placeholder="Select time">
                            </div>
                            <div class="col-md-1 kt-margin-b-10-tablet-and-mobile">
                                <label>Contest ID:</label>
                                <div class="kt-input-icon">
                                    <input value="{{ app('request')->input('contest_id', '') }}" name="contest_id" type="text" class="form-control" placeholder="ID..." id="generalSearch">
                                </div>
                            </div>
                            <div class="col-md-3 kt-margin-b-10-tablet-and-mobile">
                                <label>@lang('admin.common.keyword'):</label>
                                <div class="kt-input-icon kt-input-icon--left">
                                    <input value="{{ app('request')->input('keyword', '') }}" name="keyword" type="text" class="form-control" placeholder="@lang('admin.common.search')..." id="generalSearch">
                                    <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                        <span><i class="la la-search"></i></span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2 kt-margin-b-10-tablet-and-mobile">
                                <label>&nbsp;&nbsp;</label>
                                <input type="hidden" name="search">
                                <button onclick="document.filterForm.action.value = 'search'; document.filterForm.submit();" type="submit" class="btn btn-default form-control btn-search" style="width: auto; display: block"><i class="la la-search"></i> @lang('admin.common.go')</button>
                            </div>
                        </div>
                    </form>

                    <!--begin::Section-->
                    <div class="kt-section dataTables_wrapper">
                        <span class="kt-section__info">
                            {{--Using the most basic table markup, here’s how tables look in Metronic:--}}
                        </span>
                        <div class="kt-section__content table-content">
                            @include($route.'.index_table')
                        </div>
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
<script>
{{--    $('#kt_daterangepicker_1').datetimepicker({--}}
{{--        format: 'yyyy-mm-dd hh:ii:ss',--}}
{{--    });--}}
</script>
<script src="{{ url('/') }}/assets/admin/assets/js/logs.js" type="text/javascript"></script>
@endsection

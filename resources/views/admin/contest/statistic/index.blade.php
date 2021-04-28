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
                @lang('admin/cms/contest.statistic_title')
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
                    @lang('admin/cms/contest.statistic_title')
                </a>
            </div>
        </div>
        <div class="kt-subheader__toolbar">

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
                <div class="kt-portlet__body p-0">
                    <!--begin::Section-->
                    <div class="kt-section dataTables_wrapper">
                        <span class="kt-section__info">
                            {{--Using the most basic table markup, here’s how tables look in Metronic:--}}
                        </span>
                        <div class="kt-section__content table-content" id="statistic-cnt">
                           {{-------------------------------------------STATISTIC-----------------------------------------------}}
                            <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid p-0" >
                                <div class="kt-portlet kt-portlet--tabs">
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-toolbar">
                                            <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-danger nav-tabs-line-2x nav-tabs-line-right" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link @if(app('request')->input('tab', 'general') == 'general') active @else  @endif nav-statistic" href="{{ route($route) }}?tab=general"  aria-selected="@if(app('request')->input('tab', 'general') == 'general') true @else false @endif">
                                                        <i class="la la-user"></i> @lang('admin/cms/contest.statistic_number.st_title')
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link nav-statistic @if(app('request')->input('tab', 'general') == 'social') active @else  @endif"  href="{{ route($route) }}?tab=social" aria-selected="@if(app('request')->input('tab', 'general') == 'social') true @else false @endif">
                                                        <i class="la la-pie-chart"></i> @lang('admin/cms/contest.statistic_refer.st_title')
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__body" >
                                        <form method="GET" action="{{ route($route) }}?tab={{ app('request')->input('tab', 'general') }}" accept-charset="UTF-8" class="kt-form kt-form--label-right formData" name="formData" enctype="multipart/form-data">
                                            <input type="hidden" name="tab" value="{{ app('request')->input('tab', 'general') }}">
                                            <div class="tab-content">
                                                <div class="tab-pane @if(app('request')->input('tab', 'general') == 'general') active @else  @endif" id="general" role="tabpanel">
                                                    <div class="statistic-select-option">
                                                        <div class="form-group row">
                                                            <div class="col-lg-4 col-sm-12">
                                                                <div class="row">
                                                                    <label class="col-form-label col-lg-12 col-sm-12 text-left">@lang('admin.common.select_range')</label>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                                        <div class="dropdown bootstrap-select form-control kt-">
                                                                            {{ Form::select('type_show', ['days' => trans('admin.common.days'), 'weeks' => trans('admin.common.weeks'), 'months' => trans('admin.common.months'), 'years' => trans('admin.common.years')], app('request')->input('type_show'), ['class' => 'form-control kt-selectpicker']) }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-sm-12">
                                                                <div class="row">
                                                                    <label class="col-form-label col-lg-12 col-sm-12 text-left">@lang('admin.common.start_end_date')</label>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                                        <input type="text" name="range_time" class="form-control" id="kt_daterangepicker_1" readonly="" value="{{ app('request')->input('range_time') ?? $rangeTimeDefault }}" placeholder="Select time">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-sm-12">
                                                                <button type="submit" class="btn btn-success btn-submit kt-mt-37" data-action="save">@lang('admin.common.go')</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="line-chart pt-4" style="display: block;">
                                                        <div id="cnt-line-chart" style="width:100%; height:400px;"></div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane @if(app('request')->input('tab', 'general') == 'social') active @else  @endif" id="social" role="tabpanel">
                                                    <div class="statistic-select-option">
                                                        <div class="form-group row">
                                                            <div class="col-lg-4 col-sm-12">
                                                                <div class="row">
                                                                    <label class="col-form-label col-lg-12 col-sm-12 text-left">@lang('admin.common.start_end_date')</label>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                                        <input type="text" name="time_source" value="{{ app('request')->input('range_time') ?? $rangeTimeDefault }}" class="form-control" id="kt_daterangepicker_1" readonly="" placeholder="Select time">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-sm-12">
                                                                <button type="submit" class="btn btn-success btn-submit kt-mt-37 btn-submit-soure" data-action="save">Go</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pie-chart pt-4" style="display: block;">
                                                        <div id="cnt-pie-chart" style="width:100%; height:400px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
    @php
        $data_contest = [];
        $data_user = [];
        $data_vote = [];
        $data_share = [];
        foreach ($data as $val) {
            $data_contest[] = $val['contest'];
            $data_user[] = $val['user'];
            $data_vote[] = $val['vote'];
            $data_share[] = $val['share'];
        }
        $objPieData = [];
        foreach ($pieData as $key => $item) {
            $objPieData[] = '{ name: \''. $key .'\', y: '. $item .'}';
        }

    @endphp
    <script>
        var $xItems = ['{!!  implode("','", $xItems)  !!}'];
        var $contestCount = [{!!  implode(",", $data_contest) !!}];
        var $userCount = [{!!  implode(",", $data_user)  !!}];
        var $voteCount = [{!!  implode(",", $data_vote)  !!}];
        var $shareCount = [{!!  implode(",", $data_share)  !!}];
        var $pieData = [{!! implode(',', $objPieData) !!}];

        var textChart = {
            statistic_chart: '@lang('admin/cms/contest.statistic_chart.statistic_contest')',
            amount: '@lang('admin/cms/contest.statistic_chart.amount')',
            amount_contest: '@lang('admin/cms/contest.statistic_chart.amount_contest')',
            number_subscriber: '@lang('admin/cms/contest.statistic_chart.number_subscriber')',
            votes: '@lang('admin/cms/contest.statistic_chart.votes')',
            shares: '@lang('admin/cms/contest.statistic_chart.shares')',
            access_source: '@lang('admin/cms/contest.statistic_chart.access_source')',
        };

    </script>
    <script src="{{ url('/') }}/assets/admin/assets/js/highcharts.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/assets/admin/assets/js/statistic.js" type="text/javascript"></script>
@endsection

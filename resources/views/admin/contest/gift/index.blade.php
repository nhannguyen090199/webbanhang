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
                    @lang('admin/cms/contest.gift_title')
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
                        @lang('admin/cms/contest.gift_title')
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
                    <div class="kt-portlet__body">
                        <form class="kt-form kt-form--fit filterForm" name="filterForm" method="get">
                            <input type="hidden" name="page" value="{{ app('request')->input('page', '1') }}"/>
                            <input type="hidden" name="_limit" value="{{ $limit }}"/>
                            <input type="hidden" name="_order_by" value="{{ $orderBy }}"/>
                            <input type="hidden" name="_order_type" value="{{ $orderType }}"/>

                            <div class="row kt-margin-b-20">
{{--                                $orderType--}}
{{--                                <div class="col-md-4 kt-margin-b-10-tablet-and-mobile">--}}
{{--                                    <label>@lang('admin.common.keyword'):</label>--}}
{{--                                    <div class="kt-input-icon kt-input-icon--left">--}}
{{--                                        <input value="{{ app('request')->input('keyword', '') }}" name="keyword" type="text" class="form-control" placeholder="@lang('admin.common.search')..." id="generalSearch">--}}
{{--                                        <span class="kt-input-icon__icon kt-input-icon__icon--left">--}}
{{--                                        <span><i class="la la-search"></i></span>--}}
{{--                                    </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="col-md-2 kt-margin-b-10-tablet-and-mobile d-flex align-items-center">
                                    Mã đã trao: &nbsp;<b style="font-size: 17px">{{ $itemsContestCount ?? 0 }}</b>/{{ count($items ?? []) }}
                                </div>
                                <div class="col-md-2 kt-margin-b-10-tablet-and-mobile">
                                    <label>Week:</label>
                                    {!! Form::select('week', ['' => '-----', 1 => 'Tuần 1', 2 => 'Tuần 2', 3 => 'Tuần 3', 4 => 'Tuần 4', 5 => 'Tuần 5'], app('request')->input('week', ''), ['class'=>'form-control', '']) !!}
                                </div>
                                <div class="col-md-2 kt-margin-b-10-tablet-and-mobile">
                                    <label>@lang('admin.common.card_type'):</label>
                                    {!! Form::select('card_type', [''=>'----', 50=>50, 100=>100, 200=>200], app('request')->input('card_type', ''), ['class'=>'form-control', '']) !!}
                                </div>
                                <div class="col-md-4 kt-margin-b-10-tablet-and-mobile">
                                    <label>&nbsp;&nbsp;</label>
                                    <button onclick="document.filterForm.submit();" type="submit" class="btn btn-default form-control btn-search" style="width: auto; display: block"><i class="la la-search"></i> @lang('admin.common.go')</button>
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

@endsection

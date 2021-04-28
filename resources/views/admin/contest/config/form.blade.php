@extends('admin.layout')

@section('header')

@endsection

@section('content')
    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    @lang('admin/cms/contest.config_title')
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
                        @lang('admin/cms/contest.config_title')
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
        <div class="kt-portlet kt-portlet--tabs">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-toolbar">
                    <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-danger nav-tabs-line-2x nav-tabs-line-right"
                        role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#round" role="tab" aria-selected="true">
                                <i class="la la-clock-o" aria-hidden="true"></i>
                                @lang('admin/cms/contest.config.config_round.config_title')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#share" role="tab" aria-selected="false">
                                <i class="la la-facebook" aria-hidden="true"></i>
                                @lang('admin/cms/contest.config.config_share.config_title')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#email" role="tab" aria-selected="false">
                                <i class="fa fa-envelope"></i>
                                Config marketing mail
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            {!! Form::open( ['url' => route($route), 'method' => 'POST', 'class' => 'kt-form kt-form--label-right formData', 'name'=>'formData', 'files'=>true] ) !!}
            <div class="kt-portlet__body">
                <input type="hidden" name="_action" value="save"/>
                <div class="tab-content">
                    <div class="tab-pane active" id="round" role="tabpanel">
                        <div class="kt-portlet__body">
                            {!! \App\Helpers\AdminHelper::getDateTimeInput(trans('admin/cms/contest.config.config_round.timestart_round1'), 'contest[round_1_start_create]', $contest['round_1_start_create']->value ?? '', false) !!}
                            {!! \App\Helpers\AdminHelper::getDateTimeInput(trans('admin/cms/contest.config.config_round.timeend_round1'), 'contest[round_1_end_create]', $contest['round_1_end_create']->value ?? '', false) !!}
                            {!! \App\Helpers\AdminHelper::getDateTimeInput(trans('admin/cms/contest.config.config_round.timestartvote_round1'), 'contest[round_1_start_vote]', $contest['round_1_start_vote']->value ?? '', false) !!}
                            {!! \App\Helpers\AdminHelper::getDateTimeInput(trans('admin/cms/contest.config.config_round.timeendvote_round1'), 'contest[round_1_end_vote]', $contest['round_1_end_vote']->value ?? '', false) !!}
                        </div>
                        <div class="kt-portlet__body">
                            {!! \App\Helpers\AdminHelper::getDateTimeInput(trans('admin/cms/contest.config.config_round.timestartvote_round2'), 'contest[round_2_start_vote]', $contest['round_2_start_vote']->value ?? '', false) !!}
                            {!! \App\Helpers\AdminHelper::getDateTimeInput(trans('admin/cms/contest.config.config_round.timeendvote_round2'), 'contest[round_2_end_vote]', $contest['round_2_end_vote']->value ?? '', false) !!}
                        </div>
                        <div class="kt-portlet__body">
                            {!! \App\Helpers\AdminHelper::getDateTimeInput(trans('admin/cms/contest.config.config_round.timestartvote_round3'), 'contest[round_3_start_vote]', $contest['round_3_start_vote']->value ?? '', false) !!}
                            {!! \App\Helpers\AdminHelper::getDateTimeInput(trans('admin/cms/contest.config.config_round.timeendvote_round3'), 'contest[round_3_end_vote]', $contest['round_3_end_vote']->value ?? '', false) !!}
                        </div>
                        <div class="kt-portlet__body">
                            {!! \App\Helpers\AdminHelper::getDateTimeInput(trans('admin/cms/contest.config.config_round.timestartvote_round4'), 'contest[round_4_start_vote]', $contest['round_4_start_vote']->value ?? '', false) !!}
                            {!! \App\Helpers\AdminHelper::getDateTimeInput(trans('admin/cms/contest.config.config_round.timeendvote_round4'), 'contest[round_4_end_vote]', $contest['round_4_end_vote']->value ?? '', false) !!}
                        </div>
                        <div class="kt-portlet__body">
                            {!! \App\Helpers\AdminHelper::getDateTimeInput(trans('admin/cms/contest.config.config_round.timestartvote_round5'), 'contest[round_5_start_vote]', $contest['round_5_start_vote']->value ?? '', false) !!}
                            {!! \App\Helpers\AdminHelper::getDateTimeInput(trans('admin/cms/contest.config.config_round.timeendvote_round5'), 'contest[round_5_end_vote]', $contest['round_5_end_vote']->value ?? '', false) !!}
                        </div>
                    </div>
                    <div class="tab-pane" id="share" role="tabpanel">
                        <div class="kt-portlet__body">
                            {!! \App\Helpers\AdminHelper::getTextInput(trans('admin/cms/contest.config.config_share.hastag'), 'contest[share_hastag]', $contest['share_hastag']->value ?? '', false) !!}
                            {!! \App\Helpers\AdminHelper::getTextInput(trans('admin/cms/contest.config.config_share.quote'), 'contest[share_quote]', $contest['share_quote']->value ?? '', false) !!}
                            {!! \App\Helpers\AdminHelper::getTextInput(trans('admin/cms/contest.config.config_share.utm_campaign'), 'contest[share_utm_campaign]', $contest['share_utm_campaign']->value ?? '', false) !!}
                            {!! \App\Helpers\AdminHelper::getTextInput(trans('admin/cms/contest.config.config_share.utm_source'), 'contest[share_utm_source]', $contest['share_utm_source']->value ?? '', false) !!}
                            {!! \App\Helpers\AdminHelper::getTextInput(trans('admin/cms/contest.config.config_share.utm_medium'), 'contest[share_utm_medium]', $contest['share_utm_medium']->value ?? '', false) !!}
                        </div>
                    </div>
                    <div class="tab-pane" id="email" role="tabpanel">
                        <div class="kt-portlet__body">
                            {!! \App\Helpers\AdminHelper::getTextInput('Confirm subject', 'contest[mail_confirm_subject]', $contest['mail_confirm_subject']->value ?? '', false) !!}
                            {!! \App\Helpers\AdminHelper::getTextInput('Confirm template file name', 'contest[mail_confirm_template]', $contest['mail_confirm_template']->value ?? 'contest_confirm', false) !!}
                        </div>
                        <div class="kt-portlet__body">
                            {!! \App\Helpers\AdminHelper::getTextInput('Not share subject', 'contest[mail_not_share_subject]', $contest['mail_not_share_subject']->value ?? '', false) !!}
                            {!! \App\Helpers\AdminHelper::getTextInput('Not share template file name', 'contest[mail_not_share_template]', $contest['mail_not_share_template']->value ?? 'contest_not_share', false) !!}
                        </div>
                        <div class="kt-portlet__body">
                            {!! \App\Helpers\AdminHelper::getTextInput('Invalid subject', 'contest[mail_invalid_subject]', $contest['mail_invalid_subject']->value ?? '', false) !!}
                            {!! \App\Helpers\AdminHelper::getTextInput('Invalid template file name', 'contest[mail_invalid_template]', $contest['mail_invalid_template']->value ?? 'contest_invalid', false) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <div class="row">
                        <div class="col-3">
                        </div>
                        <div class="col-9">
                            <button type="submit" class="btn btn-success btn-submit" data-action="save"><i
                                    class="la la-save"></i>@lang('admin.common.save')</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

    <!-- end:: Content -->
@endsection

@section('pageJs')
@endsection

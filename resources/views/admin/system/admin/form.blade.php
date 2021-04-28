@extends('admin.layout')

@section('header')

@endsection

@section('content')
<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                {{ $item->id ?  trans('admin.common.edit') :  trans('admin.common.add') }} @lang('admin/system/admin.user')
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
                    @lang('admin/system/admin.user')
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
                <ul class="nav nav-tabs nav-tabs-space-xl nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#kt_user_edit_tab_1" role="tab" aria-selected="true">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                    <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"></path>
                                    <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"></path>
                                </g>
                            </svg>                        @lang('admin/system/admin.general.general_title')
                        </a>
                    </li>
                    <li class="nav-item d-none">
                        <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_2" role="tab" aria-selected="false">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                </g>
                            </svg>                        Details
                        </a>
                    </li>
                    @if ($item->id)
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_3" role="tab" aria-selected="false">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"></path>
                                    <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"></path>
                                    <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"></path>
                                </g>
                            </svg>                        @lang('admin/system/admin.password.password_title')
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="kt-portlet__body">
            {!! Form::open( ['url' => $item->id ? route($route).'/'.$item->id : route($route), 'method' => ($item->id ? 'PATCH' : 'POST'), 'class' => 'kt-form kt-form--label-right formData', 'name'=>'formData', 'files'=>true] ) !!}
                <textarea class="d-none" name="permission">{{ $item->permission ?? '' }}</textarea>

                <div class="tab-content">

                    <div class="tab-pane active" id="kt_user_edit_tab_1" role="tabpanel">
                        <div class="kt-form kt-form--label-right">
                            <div class="kt-form__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <input type="hidden" name="_action" value="save"/>
                                        {!! \App\Helpers\AdminHelper::getSelectInput( trans('admin/system/admin.general.permission'), 'role_id', $item->role_id ?? -2, false, $roles) !!}
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-3 col-form-label"></label>
                                            <div class="col-9">
                                                    <div class="">
                                                        <div class="d-none permission permission-all btn btn-sm btn-danger">
                                                            @lang('admin/system/admin.general.all_permission_mess')
                                                        </div>
                                                        <div class="d-none permission permission-custom">
                                                            <label class="btn btn-sm btn-danger">@lang('admin/system/admin.general.custom_permission_mess')</label><br/>
                                                            <div class="role_tree">

                                                            </div>
                                                        </div>
                                                        <div class="d-none permission permission-role alert alert-danger">
                                                            Được thực hiện các quyền theo cấu hình của Role
                                                        </div>
                                                </div>
                                            </div>
                                        </div>

                                        {!! \App\Helpers\AdminHelper::getTextInput(trans('admin/system/admin.general.full_name'), 'name', $item->name ?? '', false) !!}
                                        {!! \App\Helpers\AdminHelper::getSelectInput(trans('admin/system/admin.general.gender'), 'gender', $item->gender ?? '', false, ['FeMale', 'Male']) !!}
                                        {!! \App\Helpers\AdminHelper::getCropImageInput(trans('admin/system/admin.general.avatar'), 'avatar', $item->avatar ?? '', false) !!}
                                        {!! \App\Helpers\AdminHelper::getTextInput('Email', 'email', $item->email ?? '', false) !!}
                                        {!! \App\Helpers\AdminHelper::getTextInput(trans('admin/system/admin.general.mobile'), 'mobile', $item->mobile ?? '', false) !!}
                                        {!! \App\Helpers\AdminHelper::getDateInput(trans('admin/system/admin.general.birthday'), 'birthday', $item->birthday ?? '', false) !!}
                                        {!! \App\Helpers\AdminHelper::getTextInput(trans('admin/system/admin.general.address'), 'address', $item->address ?? '', false) !!}
                                    @if (!$item->id)
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-3 col-form-label">@lang('admin/system/admin.general.password')</label>
                                            <div class="col-9">
                                                <div class="input-group">
                                                    {!! Form::text('password_new', '', array('class' => 'form-control password_new', 'placeholder'=>'Password...')) !!}
                                                    <div class="input-group-append">
                                                        <button onclick="$('.password_new').val(makeid()); return false;" class="btn btn-primary" type="button"><i class="la la-refresh" style="color: #fff"></i> @lang('admin.common.generate')</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <div class="row">
                                        <div class="col-3">
                                        </div>
                                        <div class="col-9">
                                            <button type="submit" class="btn btn-primary btn-submit" data-action="save"><i class="la la-save"></i>@lang('admin.common.save')</button>
                                            <button type="submit" class="btn btn-success btn-submit" data-action="apply"><i class="la la-check"></i>@lang('admin.common.apply')</button>
                                            <a href="{{ route($route) }}" class="btn btn-secondary">@lang('admin.common.back')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="kt_user_edit_tab_2" role="tabpanel">
                        <div class="kt-form kt-form--label-right">
                            <div class="kt-form__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        {!! \App\Helpers\AdminHelper::getTextInput('Website', 'website', $item->website ?? '', false) !!}
                                        {!! \App\Helpers\AdminHelper::getTextInput('Interest', 'interest', $item->interest ?? '', false) !!}
                                        {!! \App\Helpers\AdminHelper::getTextInput('Skype', 'skype', $item->skype ?? '', false) !!}
                                        {!! \App\Helpers\AdminHelper::getTextInput('Facebook', 'facebook', $item->facebook ?? '', false) !!}
                                        {!! \App\Helpers\AdminHelper::getTextInput('Facebook ID', 'facebook_id', $item->facebook_id ?? '', false) !!}
                                        {!! \App\Helpers\AdminHelper::getTextInput('Google Plus', 'google_plus', $item->google_plus ?? '', false) !!}
                                        {!! \App\Helpers\AdminHelper::getTextInput('Twitter', 'twitter', $item->twitter ?? '', false) !!}
                                        {!! \App\Helpers\AdminHelper::getTextInput('Youtube', 'youtube', $item->youtube ?? '', false) !!}
                                    </div>
                                    <div class="kt-portlet__foot">
                                        <div class="kt-form__actions">
                                            <div class="row">
                                                <div class="col-3">
                                                </div>
                                                <div class="col-9">
                                                    <button type="submit" class="btn btn-primary btn-submit" data-action="save"><i class="la la-save"></i>@lang('admin.common.save')</button>
                                                    <button type="submit" class="btn btn-success btn-submit" data-action="apply"><i class="la la-check"></i>@lang('admin.common.apply')</button>
                                                    <a href="{{ route($route) }}" class="btn btn-secondary">@lang('admin.common.back')</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($item->id)
                    <div class="tab-pane" id="kt_user_edit_tab_3" role="tabpanel">
                        <div class="kt-form kt-form--label-right">
                            <div class="kt-form__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-3 col-form-label">@lang('admin/system/admin.password.new_password')</label>
                                            <div class="col-9">
                                                <div class="input-group">
                                                    {!! Form::text('password_new', '', array('class' => 'form-control password_new', 'placeholder'=> trans('admin/system/admin.password.new_password_placeholder'))) !!}
                                                    <div class="input-group-append">
                                                        <button onclick="$('.password_new').val(makeid()); return false;" class="btn btn-primary" type="button">@lang('admin.common.generate')</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Google Authenticator Code:</label>
                                            <div class="col-lg-9">
                                                <div class="input-group">
                                                    {!! Form::text('ga_code', $item->ga_code ?? '', array('class' => 'form-control m-input ga-code', '')) !!}
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary btn-generate" type="button"><i class="la la-refresh" style="color: #fff"></i> @lang('admin.common.generate')</button>
                                                    </div>
                                                </div>
                                                <div class="ga_code_image d-none">
                                                    <img src="" width="200px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-9">
                                        <button type="submit" class="btn btn-success btn-submit" data-action="apply">@lang('admin/system/admin.password.new_password_update')</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="tab-pane" id="kt_user_edit_tab_4" role="tabpanel">
                        <div class="kt-form kt-form--label-right">
                            <div class="kt-form__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-9">
                                                <h3 class="kt-section__title kt-section__title-sm">Setup Email Notification:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group form-group-sm row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Email Notification</label>
                                            <div class="col-9">
                                            <span class="kt-switch">
                                                            <label>
                                                                <input type="checkbox" checked="checked" name="email_notification_1">
                                                                <span></span>
                                            </label>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="form-group form-group-last row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Send Copy To Personal Email</label>
                                            <div class="col-9">
                                            <span class="kt-switch">
                                                            <label>
                                                                <input type="checkbox" name="email_notification_2">
                                                                <span></span>
                                            </label>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>

                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-9">
                                                <h3 class="kt-section__title kt-section__title-sm">Activity Related Emails:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">When To Email</label>
                                            <div class="col-9">
                                                <div class="kt-checkbox-list">
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox"> You have new notifications.
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox"> You're sent a direct message
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox" checked="checked"> Someone adds you as a connection
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-group-last row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">When To Escalate Emails</label>
                                            <div class="col-9">
                                                <div class="kt-checkbox-list">
                                                    <label class="kt-checkbox kt-checkbox--brand">
                                                        <input type="checkbox"> Upon new order.
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox kt-checkbox--brand">
                                                        <input type="checkbox"> New membership approval
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox kt-checkbox--brand">
                                                        <input type="checkbox" checked="checked"> Member registration
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>

                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-9">
                                                <h3 class="kt-section__title kt-section__title-sm">Updates From Keenthemes:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Email You With</label>
                                            <div class="col-9">
                                                <div class="kt-checkbox-list">
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox"> News about Metronic product and feature updates
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox"> Tips on getting more out of Keen
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox" checked="checked"> Things you missed since you last logged into Keen
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox" checked="checked"> News about Metronic on partner products and other services
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox" checked="checked"> Tips on Metronic business products
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- end:: Content -->
@endsection

@section('pageJs')
    <script>
        function makeid() {
            var text = "";
            var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

            for (var i = 0; i < 10; i++)
                text += possible.charAt(Math.floor(Math.random() * possible.length));

            return text;
        }

        $('.btn-generate').click(function () {
            var $email = $('input[name=email]').val();
            if(!$email){
                alert('You must enter email first!');
                return false;
            }

            if(confirm("Do you want to generate again?")){
                var _cb = function (res){
                    if(res.code){
                        $('.ga-code').val(res.data.secretCode);
                        $('.ga_code_image').removeClass('d-none').find('img').attr('src', res.data.qrCodeUrl);
                    }
                };

                $.app.ajax(this, '2fa/generate', {email: $email}, _cb, 'POST', '.none');
            }
        });

        // Init image when edit
        @if($item->id && $item->ga_code)
            var _cb = function (res){
                    if(res.code){
                        $('.ga-code').val(res.data.secretCode);
                        $('.ga_code_image').removeClass('d-none').find('img').attr('src', res.data.qrCodeUrl);
                    }
                };

            $.app.ajax(null, '2fa/generate', {email: '{{ $item->email }}', secretCode: $('.ga-code').val()}, _cb, 'POST', '.none');
        @endif

        $('select[name=role_id]').on('change', function () {
            var $value = parseInt($(this).val());

            $('.permission').addClass('d-none');
            if($value === -1){
                $('.permission-all').removeClass('d-none');
            }
            if($value === 0){
                $('.permission-custom').removeClass('d-none');
            }
            if($value > 0){
                $('.permission-role').removeClass('d-none');
            }
        });

        @if($item->id)
            $('select[name=role_id]').trigger('change');
        @endif
    </script>

    @include('admin.common.permission')
@endsection

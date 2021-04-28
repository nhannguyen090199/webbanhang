@extends('admin.layout')

@section('header')

@endsection

@section('content')
    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    {{ $item->id ? trans('admin.common.edit') : trans('admin.common.add') }} @lang('admin/cms/contest.contest_title')
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
            <div class="col-md-12">
                <!--begin::Portlet-->
                <div class="">
                    <!--begin::Form-->
                    {!! Form::open( ['url' => ($item->id ? route($route).'/'.$item->id : route($route)), 'method' => ($item->id ? 'PATCH' : 'POST'), 'class' => 'kt-form kt-form--label-right formData', 'name'=>'formData', 'files'=>true] ) !!}
                    <input type="hidden" name="_action" value="save"/>

                    <div class="">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="kt-portlet">
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">
                                                @lang('admin/cms/contest.contest.form_info_contest'):
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__body">
                                        {!! \App\Helpers\AdminHelper::getSelectInput(trans('admin/cms/contest.contest.form_contest_detail.form_category'), 'category_id', $item->id ? $item->category_id : '', true, $selectCategory) !!}
                                        {!! \App\Helpers\AdminHelper::getTextInput(trans('admin/cms/contest.contest.form_contest_detail.form_title'), 'title', $item->id ? $item->title : '', true) !!}
                                        {!! \App\Helpers\AdminHelper::getCropImageInput(trans('admin/cms/contest.contest.form_contest_detail.form_image_avatar'), 'image', $item->id ? $item->image : '', false, '', '585,585') !!}

{{--                                        @if ($item->id)--}}
{{--                                            <div class="form-group row">--}}
{{--                                                <div class="col-xl-3 col-lg-3">--}}
{{--                                                </div>--}}
{{--                                                <div class="col-xl-6 col-lg-9">--}}
{{--                                                    <a href="{{ route('add_watermark', $item->id ? [$item->id, 51] : '') }}" type="" class="btn btn-primary "><i class="flaticon2-edit"></i>Chèn Watermark (A51)</a>--}}
{{--                                                    <a href="{{ route('add_watermark', $item->id ? [$item->id, 71] : '') }}" type="" class="btn btn-primary "><i class="flaticon2-edit"></i>Chèn Watermark (A71)</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        @endif--}}

                                        {!! \App\Helpers\AdminHelper::getCropImageInput(trans('admin/cms/contest.contest.form_contest_detail.form_image_full'), 'image_full', $item->id ? $item->image_full : '', false, '', '585,585') !!}
                                        @if($item->id)
                                            <img crossorigin="anonymous" src="{{ $item->id ? url($item->image_root ?? '') : '' }}" class="image-cropper d-none" alt="">
                                        @endif

                                        {!! \App\Helpers\AdminHelper::getSelectMediaInput('Original Image', 'image_root', $item->id ? $item->image_root ?? '' : '', false, '') !!}

                                        <div class="form-group row">
                                            <div class="col-xl-3 col-lg-3">
                                            </div>
                                            <div class="col-xl-6 col-lg-9">
                                                <button data-size="800,800" data-callback="cbCropOriginal" class="btn-crop-image btn btn-primary" type="button">Crop Again...</button>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-xl-3 col-lg-3">
                                                Gallery
                                            </div>
                                            <div class="col-xl-6 col-lg-9">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Model</th>
                                                        <th>MI11 5G</th>
                                                        <th>Exif / XMP</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @if($gallery)
                                                        @foreach($gallery as $img)
                                                            <tr>
                                                                <td>
                                                                    @if (isset($img[3]) && $img[3])
                                                                        <video width="200" height="100" controls>
                                                                            <source src="{{ url($img[0]) }}" type="video/mp4">
                                                                            Your browser does not support the video tag.
                                                                        </video>
                                                                    @else
                                                                        <a href="{{ url($img[0]) }}" target="_blank">
                                                                            <img src="{{ url($img[0]) }}" class="img-fluid pull-left" style="height: 50px;"/>
                                                                        </a>
                                                                    @endif
                                                                </td>
                                                                @php
                                                                    $exif = is_string($img[1]) ? json_decode($img[1], true) : $img[1];
//dd($exif);
                                                                @endphp
                                                                <td>
                                                                    {{ $exif['Make'] ?? '' }}
                                                                </td>
                                                                <td>
                                                                    {{ $img[2] ? 'Yes' : 'No' }}
                                                                </td>
                                                                <td>
                                                                    <textarea rows="5">
                                                                        {{ print_r($exif ?? '') }}
                                                                    </textarea>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @endif

                                                    </tbody>
                                                </table>
{{--                                                @if ($item->id)--}}
{{--                                                    <a href="{{ url('contest/create?step=3&id='. $item->id) }}" target="_blank" class=" btn btn-primary" type="button" style="color: #fff">Init Palatte Again</a>--}}
{{--                                                @endif--}}
                                            </div>
                                        </div>

                                        <div class="form-group row" >
                                            <label for="example-text-input" class="col-xl-3 col-lg-3 col-form-label">Exif Data</label>
                                            <div class="col-xl-9 col-lg-9" style="max-height: 200px; overflow-y: scroll">
                                                @if ($item->id && is_object($exifData))
                                                    @foreach ($exifData as $key => $exif)
                                                        @php if($key == 'DateTime') $key = 'Modify Date'; @endphp
                                                        @if (! is_object($exif) && ! is_array($exif))
                                                            <div><b>{!! (strpos($key, 'Date') !== false || strpos($key, 'Software') !== false) ? '<span class="kt-badge kt-badge--inline kt-badge--pill kt-badge--warning kt-badge--rounded">'.$key.'</span>' : $key !!}: </b>{{ $exif }}</div>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row" >
                                            <label for="example-text-input" class="col-xl-3 col-lg-3 col-form-label">XMP Data</label>
                                            <div class="col-xl-9 col-lg-9" style="max-height: 200px; overflow-y: scroll">
                                                @if ($item->id && $item->image_root && $item->xmp)
                                                    @foreach ($item->xmp as $key => $str)
                                                        <div><b>{!! (strpos($key, 'Creator') !== false || strpos($key, 'Date') !== false) ? '<span class="kt-badge kt-badge--inline kt-badge--pill kt-badge--warning kt-badge--rounded">'.$key.'</span>' : $key !!}: </b>{{ $str }}</div>
                                                    @endforeach
                                                @else
                                                    N/A
                                                @endif
                                            </div>
                                        </div>

                                        {!! \App\Helpers\AdminHelper::getTextareaInput(trans('admin/cms/contest.contest.form_contest_detail.form_introtext'), 'introtext', $item->id ? $item->introtext : '', false) !!}
                                        {!! \App\Helpers\AdminHelper::getTextareaInput(trans('admin/cms/contest.contest.form_contest_detail.form_introfull'), 'fulltext', $item->id ? $item->fulltext : '', false) !!}

                                        @if ($item->id && $item->user_agent)
                                            <div class="form-group row" >
                                                <label for="example-text-input" class="col-xl-3 col-lg-3 col-form-label">User Agent</label>
                                                <div class="col-xl-6 col-lg-9" style="max-height: 250px; overflow-y: scroll">
                                                    {{ $item->user_agent }}
                                                </div>
                                            </div>
                                        @endif

                                        <div class="form-group row" >
                                            <label for="example-text-input" class="col-xl-3 col-lg-3 col-form-label">IP Address</label>
                                            <div class="col-xl-6 col-lg-9" style="max-height: 250px; overflow-y: scroll">
                                                {{ $item->ip_address }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-portlet" style="">
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">
                                                Email:
                                            </h3>
                                        </div>
                                        <div class="kt-portlet__head-label">

                                            @if (config('system.mail_confirm_subject'))
                                                <button type="button" onclick="$.app.gmail.send('{{ $item->id ?? 0 }}', 'mail_confirm')" class="btn btn-success btn-sm mr-3">
                                                    Confirm
                                                </button>
                                            @endif

                                            @if (config('system.mail_not_share_subject'))
                                                <button type="button" onclick="$.app.gmail.send('{{ $item->id ?? 0 }}', 'mail_not_share')" class="btn btn-warning btn-sm mr-3">
                                                    Not Share
                                                </button>
                                            @endif

                                            @if (config('system.mail_invalid_subject'))
                                                <button type="button" onclick="$.app.gmail.send('{{ $item->id ?? 0 }}', 'mail_invalid')" class="btn btn-error btn-sm mr-3">
                                                    Invalid
                                                </button>
                                            @endif

                                        </div>
                                    </div>
                                    <div style="padding: 25px;">
                                        <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded " id="local_data" style="">
                                            <table class="table table-hover table-striped tbl-logs-mail" >
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>@lang('admin/cms/contest.contest.form_user_detail.time')</th>
                                                    <th>@lang('admin/cms/contest.contest.form_user_detail.implementer')</th>
                                                    <th>@lang('admin/cms/contest.contest.form_user_detail.reason')</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if ($item->id && $item->logsMail)
                                                    @foreach ($item->logsMail as $log)
                                                        <tr>
                                                            <td>{{ $log->created_at }}</td>
                                                            <td>{{ $log->user_name }}</td>
                                                            <td>{{ $log->description }}</td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-portlet">
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
                            <div class="col-md-4">
                                <div class="kt-portlet">
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">
                                                Vote share:
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__body">
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">@lang('admin/cms/contest.contest.form_contest_detail.form_vote')</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <input type="text" name="votes" class="form-control" value="{{ $item->id ? $item->votes : '' }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">@lang('admin/cms/contest.contest.form_contest_detail.form_share')</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <input type="text" name="shares" class="form-control" value="{{ $item->id ? $item->shares : '' }}">
                                            </div>
                                        </div>

                                        @if ($item->id)
                                            <div class="form-group row" >
                                                <label for="example-text-input" class="col-xl-3 col-lg-3 col-form-label">Shared</label>
                                                <div class="col-xl-6 col-lg-9" >
                                                    <span class="kt-badge kt-badge--inline kt-badge--{{ $item->shared ? 'success' : 'danger' }}" style="margin-top:10px;">{{ $item->shared ? 'Yes' : 'No' }}</span>
                                                </div>
                                            </div>
                                        @endif


                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">@lang('admin/cms/contest.contest.form_contest_detail.form_round')</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <input type="text" readonly class="form-control"
                                                       value="{{ $item->id ? $item->round : '' }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">@lang('admin/cms/contest.contest.form_contest_detail.form_model')</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12" style="padding-top: calc(0.65rem + 1px);">
                                                {{ $item->id && isset($exifData->Model) && isset($exifData->Make) ? ucfirst($exifData->Make) .' ( '.$exifData->Model .' )' : __('admin/cms/contest.contest.form_contest_detail.form_unknow') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-portlet">
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">
                                                @lang('admin/cms/contest.contest.form_info_user')
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__body">
                                        {!! \App\Helpers\AdminHelper::getTextInput(trans('admin/cms/contest.contest.form_user_detail.user_name'), 'user_name', $item->id ? $item->user_name : '', false) !!}
                                        {!! \App\Helpers\AdminHelper::getCropImageInput(trans('admin/cms/contest.contest.form_user_detail.user_avatar'), 'user_avatar', $item->id && ($item->user->id ?? null) ? url($item->user->avatar ?? '') : '', false) !!}
                                        {!! \App\Helpers\AdminHelper::getTextInput(trans('admin/cms/contest.contest.form_user_detail.user_email'), 'user_email', $item->id ? $item->user_email : '', false) !!}
                                        {!! \App\Helpers\AdminHelper::getTextInput(trans('admin/cms/contest.contest.form_user_detail.user_phone'), 'user_mobile', $item->id ? $item->user_mobile : '', false) !!}
                                        {!! \App\Helpers\AdminHelper::getTextInput(trans('admin/cms/contest.contest.form_user_detail.user_address'), 'user_address', $item->id ? $item->user_address : '', false) !!}
                                    </div>
                                </div>
                                @if ($item->id)
                                    <div class="kt-portlet">
                                        <div class="kt-portlet__head">
                                            <div class="kt-portlet__head-label">
                                                <h3 class="kt-portlet__head-title">
                                                    @lang('admin/cms/contest.gift_title'):
                                                </h3>
                                            </div>
                                            @if ($item->gift_id)
                                                <div class="kt-portlet__head-label">
                                                    <a href="#" class="btn btn-danger btn-sm js-btn-clear-gift" data-contest-id="{{ $item->id }}" style="color: #fff">
                                                        @lang('admin/cms/contest.gift.form_clear_gift')
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="kt-portlet__body">
                                            <div class="form-group row" >
                                                <label for="example-text-input" class="col-lg-3 col-form-label">@lang('admin/cms/contest.gift.form_card_type')</label>
                                                <div class="col-lg-9" >
                                                    <span class="kt-badge kt-badge--inline kt-badge--{{ $item->gift_id ? 'success' : 'danger' }}" style="margin-top:10px;">{{ $item->gift->card_type ?? 'N/A' }}</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <div style="padding-top: 20px">
                                                        <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded " id="local_data" style="">
                                                            <table class="table table-hover table-striped tbl-logs-mail-none js-tbl-clear-gift">
                                                                <thead class="thead-light">
                                                                <tr>
                                                                    <th>@lang('admin/cms/contest.contest.form_user_detail.time')</th>
                                                                    <th>@lang('admin/cms/contest.contest.form_user_detail.implementer')</th>
                                                                    <th>@lang('admin/cms/contest.contest.form_user_detail.reason')</th>
                                                                </tr>
                                                                </thead>
                                                                @if ($item->logs)
                                                                    <tbody>
                                                                    @foreach ($item->logs()->where('type', 3)->get() as $log)
                                                                        <tr>
                                                                            <td>{{ $log->created_at ?? '' }}</td>
                                                                            <td>{{ $log->creator->name ?? '' }}</td>
                                                                            <td>{{ $log->reason ?? '' }}</td>
                                                                        </tr>
                                                                    @endforeach
                                                                    </tbody>
                                                                @endif
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <!--end::Portlet-->
            </div>
        </div>
    </div>
    <!-- end:: Content -->
@endsection

@section('pageJs')
    <script src="{{ url('assets/admin/assets/js/contest.js') }}"></script>
    <script type="text/javascript">
        function cbCropOriginal(data) {
            $('input[name=image_full]').val(data);
            $('input[name=image_full]').parent().parent().find('img').attr('src', $.app.vars.url + data);

            $('input[name=image]').val(data);
            $('input[name=image]').parent().parent().find('img').attr('src', $.app.vars.url + data);
        }

    </script>
    @if (session('showAlert'))
        <script>
            Swal.fire('',
                '{{ session('showAlert')['message'] }}',
                '{{ session('showAlert')['icon'] }}');
        </script>
    @endif
@endsection

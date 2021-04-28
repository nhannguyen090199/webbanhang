@extends('admin.layout')

@section('header')

@endsection

@section('content')
<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                {{ $item->id ? trans('admin.common.edit') : trans('admin.common.add') }} Orders
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
                    Orders
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
            <div class="kt-portlet">
                <!--begin::Form-->
                {!! Form::open( ['url' => ($item->id ? route($route).'/'.$item->id : route($route)), 'method' => ($item->id ? 'PATCH' : 'POST'), 'class' => 'kt-form kt-form--label-right formData', 'name'=>'formData', 'files'=>true] ) !!}
                    <input type="hidden" name="_action" value="save"/>
                    <div class="kt-portlet__body">
                        <div class="portlet light portlet-fit portlet-datatable ">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="portlet yellow-crusta box">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-cogs"></i>Order Details </div>
                                            <div class="actions">
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            {!! \App\Helpers\AdminHelper::getTextInput('Created At', 'created_at', $item->id ? $item->created_at : '', true) !!}
                                            <div class="row static-info">
                                                <div class="col-md-5 name"> Order Status: </div>
                                                <div class="col-md-7 value">
                                                    <span class="label label-success"> Closed </span>
                                                </div>
                                            </div>
                                            <div class="row static-info">
                                                <div class="col-md-5 name"> Grand Total: </div>
                                                <div class="col-md-7 value"> $175.25 </div>
                                            </div>
                                            <div class="row static-info">
                                                <div class="col-md-5 name"> Payment Information: </div>
                                                <div class="col-md-7 value"> Credit Card </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="portlet blue-hoki box">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-cogs"></i>Customer Information </div>
                                            <div class="actions">
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="row static-info">
                                                <div class="col-md-5 name"> Customer Name: </div>
                                                <div class="col-md-7 value"> Jhon Doe </div>
                                            </div>
                                            <div class="row static-info">
                                                <div class="col-md-5 name"> Email: </div>
                                                <div class="col-md-7 value"> jhon@doe.com </div>
                                            </div>
                                            <div class="row static-info">
                                                <div class="col-md-5 name"> State: </div>
                                                <div class="col-md-7 value"> New York </div>
                                            </div>
                                            <div class="row static-info">
                                                <div class="col-md-5 name"> Phone Number: </div>
                                                <div class="col-md-7 value"> 12234389 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="portlet green-meadow box">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-cogs"></i>Billing Address </div>
                                            <div class="actions">
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="row static-info">
                                                <div class="col-md-12 value"> Jhon Done
                                                    <br> #24 Park Avenue Str
                                                    <br> New York
                                                    <br> Connecticut, 23456 New York
                                                    <br> United States
                                                    <br> T: 123123232
                                                    <br> F: 231231232
                                                    <br> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="portlet red-sunglo box">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-cogs"></i>Shipping Address </div>
                                            <div class="actions">
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="row static-info">
                                                <div class="col-md-12 value"> Jhon Done
                                                    <br> #24 Park Avenue Str
                                                    <br> New York
                                                    <br> Connecticut, 23456 New York
                                                    <br> United States
                                                    <br> T: 123123232
                                                    <br> F: 231231232
                                                    <br> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="portlet grey-cascade box">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-cogs"></i>Shopping Cart </div>
                                            <div class="actions">
                                                <a href="javascript:;" class="btn btn-default btn-sm">
                                                    <i class="fa fa-pencil"></i> Edit </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-bordered table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th> Product </th>
                                                        <th> Item Status </th>
                                                        <th> Original Price </th>
                                                        <th> Price </th>
                                                        <th> Quantity </th>
                                                        <th> Tax Amount </th>
                                                        <th> Tax Percent </th>
                                                        <th> Discount Amount </th>
                                                        <th> Total </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:;"> Product 1 </a>
                                                        </td>
                                                        <td>
                                                            <span class="label label-sm label-success"> Available </span></td>
                                                        <td> 345.50$ </td>
                                                        <td> 345.50$ </td>
                                                        <td> 2 </td>
                                                        <td> 2.00$ </td>
                                                        <td> 4% </td>
                                                        <td> 0.00$ </td>
                                                        <td> 691.00$ </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:;"> Product 1 </a>
                                                        </td>
                                                        <td>
                                                            <span class="label label-sm label-success"> Available </span></td>
                                                        <td> 345.50$ </td>
                                                        <td> 345.50$ </td>
                                                        <td> 2 </td>
                                                        <td> 2.00$ </td>
                                                        <td> 4% </td>
                                                        <td> 0.00$ </td>
                                                        <td> 691.00$ </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:;"> Product 1 </a>
                                                        </td>
                                                        <td>
                                                            <span class="label label-sm label-success"> Available </span></td>
                                                        <td> 345.50$ </td>
                                                        <td> 345.50$ </td>
                                                        <td> 2 </td>
                                                        <td> 2.00$ </td>
                                                        <td> 4% </td>
                                                        <td> 0.00$ </td>
                                                        <td> 691.00$ </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:;"> Product 1 </a>
                                                        </td>
                                                        <td>
                                                            <span class="label label-sm label-success"> Available </span></td>
                                                        <td> 345.50$ </td>
                                                        <td> 345.50$ </td>
                                                        <td> 2 </td>
                                                        <td> 2.00$ </td>
                                                        <td> 4% </td>
                                                        <td> 0.00$ </td>
                                                        <td> 691.00$ </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"> </div>
                                <div class="col-md-6">
                                    <div class="well" style="background: #f1f4f7">
                                        <div class="row static-info align-reverse">
                                            <div class="col-md-8 name"> Sub Total: </div>
                                            <div class="col-md-3 value"> $1,124.50 </div>
                                        </div>
                                        <div class="row static-info align-reverse">
                                            <div class="col-md-8 name"> Shipping: </div>
                                            <div class="col-md-3 value"> $40.50 </div>
                                        </div>
                                        <div class="row static-info align-reverse">
                                            <div class="col-md-8 name"> Grand Total: </div>
                                            <div class="col-md-3 value"> $1,260.00 </div>
                                        </div>
                                        <div class="row static-info align-reverse">
                                            <div class="col-md-8 name"> Total Paid: </div>
                                            <div class="col-md-3 value"> $1,260.00 </div>
                                        </div>
                                        <div class="row static-info align-reverse">
                                            <div class="col-md-8 name"> Total Refunded: </div>
                                            <div class="col-md-3 value"> $0.00 </div>
                                        </div>
                                        <div class="row static-info align-reverse">
                                            <div class="col-md-8 name"> Total Due: </div>
                                            <div class="col-md-3 value"> $1,124.50 </div>
                                        </div>
                                    </div>
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
                                    <button type="submit" class="btn btn-primary btn-submit" data-action="save"><i class="la la-save"></i>@lang('admin.common.save')</button>
                                    <button type="submit" class="btn btn-success btn-submit" data-action="apply"><i class="la la-check"></i>@lang('admin.common.apply')</button>
                                    <a href="{{ route($route) }}" class="btn btn-secondary">@lang('admin.common.back')</a>
                                </div>
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
@endsection

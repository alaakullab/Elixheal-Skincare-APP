@extends('admin.layouts.index')
@section('title') {{ucwords(__('admin.questions'))}}
@endsection
@section('css')
@endsection
@section('content')
    <div class="col-md-12">

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <div class="d-flex align-items-baseline mr-5">
                        <h3>{{ucwords(__('admin.questions'))}}</h3>
                    </div>
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->



                <div class="btn-group mb-2 m-md-3 mt-md-0 ml-2 ">

                    <a href="{{route('admin.question.createView',app()->getLocale())}}" style="margin-right: 5px"
                       class="btn btn-success"><i class="fa fa-plus"></i>{{__('admin.add')}}
                    </a>

{{--                    <button type="button" class="btn btn-default has-icon event" href="#activation" role="button"  data-toggle="modal">--}}
{{--                        <i class="fas fa-check"></i>--}}
{{--                        <span>{{__('admin.active')}}</span>--}}
{{--                    </button>--}}
{{--                    <button type="button" class="btn btn-default  has-icon event" href="#cancel_activation" role="button"  data-toggle="modal">--}}
{{--                        <i class="fas fa-times"></i>--}}
{{--                        <span>{{__('admin.not_active')}}</span>--}}
{{--                    </button>--}}
{{--                    <button type="button" class="btn btn-default  has-icon event" href="#deleteAll" role="button" data-toggle="modal">--}}
{{--                        <i class="fas fa-trash"></i>--}}
{{--                        <span>{{__('admin.delete')}}</span>--}}
{{--                    </button>--}}
                </div>

                <!--end::Toolbar-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="gutter-b example example-compact">
                    <div class="contentTabel">
                        <div class="card-header d-flex flex-column flex-sm-row align-items-sm-start justify-content-sm-between">
                            <div>


                            </div>
                            <div class="btn-group ">
                                <form class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="بحث">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" >
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                          </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover tableWithSearch" id="tableWithSearch">
                                <thead>
                                <tr>

                                    <th> {{ucwords(__('admin.question_value'))}}</th>
                                    <th> {{ucwords(__('admin.question_type'))}}</th>

                                    <th> {{ucwords(__('admin.action'))}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($items as $item)
                                    <tr class="odd gradeX" id="tr-{{$item->id}}">


                                        <td> {{$item->question_value}}</td>
                                        <td> {{$item->question_type}}</td>
                                        <td>
                                            <div class="btn-group btn-action">
                                                <a href="{{url(app()->getLocale().'/admin/question/'. $item->id.'/edit')}}"
                                                   class="btn btn-xs btn-icon btn-clean blue tooltips" data-container="body" data-placement="top"
                                                   data-original-title="{{__('admin.edit')}}"><i class="fa fa-edit"></i></a>
                                                <a href="{{url(app()->getLocale().'/admin/question/'. $item->id.'/delete')}}"
                                                   class="btn btn-xs btn-icon btn-clean blue tooltips" data-container="body" data-placement="top"
                                                   data-original-title="{{__('admin.delete')}}"><i class="fa fa-trash"></i></a>


                                                <a href="{{url(app()->getLocale().'/admin/answer/'. $item->id)}}"
                                                   class="btn btn-xs btn-icon btn-clean blue tooltips" data-container="body" data-placement="top"
                                                   data-original-title="{{__('admin.answers')}}"><i class="fa fa-question-circle"></i></a>
                                                   </div>

                                        </td>
                                    </tr>
                                @empty
                                    <tr >
                                        <td class="text-center lead  " colspan="8">
                                        {{__('admin.no')}} </td></tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    </div>


    <div class="col-md-12">
        <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
            <div class="m-alert__icon">
                <i class="flaticon-exclamation m--font-brand"></i>
            </div>
            <div class="m-alert__text">
                The Metronic Datatable component supports initialization from HTML table. It also defines the schema model of the data source. In addition to the visualization, the Datatable provides built-in support for operations over data such as
                sorting, filtering and paging performed in user browser(frontend).
            </div>
        </div>
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Datatable initilized from HTML table
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                    <i class="la la-ellipsis-h m--font-brand"></i>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">Quick Actions</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">Create Post</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">Send Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-multimedia-2"></i>
                                                            <span class="m-nav__link-text">Upload File</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__section">
                                                        <span class="m-nav__section-text">Useful Links</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">FAQ</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">Support</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit m--hide">
                                                    </li>
                                                    <li class="m-nav__item m--hide">
                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">

                <!--begin: Search Form -->
                <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                    <div class="row align-items-center">
                        <div class="col-xl-8 order-2 order-xl-1">
                            <div class="form-group m-form__group row align-items-center">
                                <div class="col-md-4">
                                    <div class="m-form__group m-form__group--inline">
                                        <div class="m-form__label">
                                            <label>Status:</label>
                                        </div>
                                        <div class="m-form__control">
                                            <select class="form-control m-bootstrap-select" id="m_form_status">
                                                <option value="">All</option>
                                                <option value="1">Pending</option>
                                                <option value="2">Delivered</option>
                                                <option value="3">Canceled</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-md-none m--margin-bottom-10"></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="m-form__group m-form__group--inline">
                                        <div class="m-form__label">
                                            <label class="m-label m-label--single">Type:</label>
                                        </div>
                                        <div class="m-form__control">
                                            <select class="form-control m-bootstrap-select" id="m_form_type">
                                                <option value="">All</option>
                                                <option value="1">Online</option>
                                                <option value="2">Retail</option>
                                                <option value="3">Direct</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-md-none m--margin-bottom-10"></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="m-input-icon m-input-icon--left">
                                        <input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
                                        <span class="m-input-icon__icon m-input-icon__icon--left">
                                            <span><i class="la la-search"></i></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 order-1 order-xl-2 m--align-right">
                            <a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                                <span>
                                    <i class="la la-cart-plus"></i>
                                    <span>New Order</span>
                                </span>
                            </a>
                            <div class="m-separator m-separator--dashed d-xl-none"></div>
                        </div>
                    </div>
                </div>

                <!--end: Search Form -->

                <!--begin: Datatable -->
                <table class="m-datatable" id="html_table" width="100%">
                    <thead>
                        <tr>
                            <th title="Field #1" data-field="OrderID">Order ID</th>
                            <th title="Field #2" data-field="Owner">Owner</th>
                            <th title="Field #3" data-field="Contact">Contact</th>
                            <th title="Field #4" data-field="CarMake">Car Make</th>
                            <th title="Field #5" data-field="CarModel">Car Model</th>
                            <th title="Field #6" data-field="Color">Color</th>
                            <th title="Field #7" data-field="DepositPaid">Deposit Paid</th>
                            <th title="Field #8" data-field="OrderDate">Order Date</th>
                            <th title="Field #9" data-field="Status">Status</th>
                            <th title="Field #10" data-field="Type">Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>57520-0405</td>
                            <td>Sunny Garton</td>
                            <td>(288) 1417941</td>
                            <td>GMC</td>
                            <td>Savana 2500</td>
                            <td>Yellow</td>
                            <td>$99799.94</td>
                            <td>2016-03-23</td>
                            <td>5</td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>

                <!--end: Datatable -->
            </div>
        </div>
    </div>
@endsection

@section('script')
<script src="{{url('admin_panel')}}/assets/demo/custom/crud/metronic-datatable/base/html-table.js" type="text/javascript"></script>
@endsection

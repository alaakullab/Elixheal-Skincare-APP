@extends('admin.layouts.index')
@section('title') {{ucwords(__('admin.contact'))}}
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
                        <h3>{{__('admin.edit')}}</h3>
                    </div>
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <a href="{{route('admin.contact.indexView',app()->getLocale())}}"
                       class="btn btn-secondary  mr-2">{{__('admin.cancel')}}</a>
                    <button id="submitButton" class="btn btn-success ">{{__('admin.save')}}</button>
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
                <div class="card card-custom gutter-b example example-compact">
                    <form method="post" action="{{url(app()->getLocale().'/admin/contact/'. $item->id.'/update')}}"
                          enctype="multipart/form-data" class="form-horizontal" role="form" id="form_company">
                        {{ csrf_field() }}
                        {{ method_field('put')}}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('admin.full_name')}}<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-solid" name="full_name"
                                               value="{{ old('full_name',$item->full_name)}}" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('admin.email_contacts')}}<span class="text-danger">*</span></label>
                                        <input type="email" class="form-control form-control-solid" name="email_contacts"
                                               value="{{ old('email_contacts',$item->email_contacts)}}" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('admin.message')}} <span class="text-danger">*</span></label>
                                        <textarea class="form-control form-control-solid" required name="message">{{old('message',$item->message)}}</textarea>
                                    </div>
                                </div>
                            </div>

                        </div>


                </div>



                        <button type="submit" id="submitForm" style="display:none"></button>
                    </form>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    </div>


@endsection
@section('js')
@endsection



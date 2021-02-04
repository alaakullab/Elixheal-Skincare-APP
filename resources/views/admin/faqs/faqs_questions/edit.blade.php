@extends('admin.layouts.index')
@section('title') {{ucwords(__('admin.edit_faqs_question'))}}
@endsection
@section('css')


@endsection
@section('content')
    <div class="col-md-12">
        <div class="m-portlet m-portlet--tab">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                    <span class="m-portlet__head-icon m--hide">
                        <i class="la la-gear"></i>
                    </span>
                        <h3 class="m-portlet__head-text">
                            {{ __('admin.edit_faqs_question') }}
                        </h3>
                    </div>
                </div>
            </div>

            <!--begin::Form-->
            <form  method="POST" action="{{ route('admin.faqs_questions.update',app()->getLocale()) }}" class="m-form m-form--fit m-form--label-align-right"  >
                @csrf
                <div class="m-portlet__body">
                    <div class="form-group m-form__group">
                        <label for="question_value">{{ __('admin.question_value') }}</label>
                        <input type="text" class="form-control m-input" required id="question_value" name="question_value"  placeholder="{{ __('admin.question_value') }}">
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions">
                        <button type="submit" class="btn btn-success">{{ __('admin.save') }}</button>
                        <a href="{{route('admin.faqs_questions.indexView',app()->getLocale())}}"
                           class="btn btn-secondary  mr-2">{{__('admin.cancel')}}</a>
                    </div>
                </div>
            </form>

            <!--end::Form-->
        </div>
    </div>

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
                        <a href="{{route('admin.faqs_question.indexView',app()->getLocale())}}"
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
                        <form method="post" action="{{url(app()->getLocale().'/admin/question/'. $item->id.'/update')}}"
                              enctype="multipart/form-data" class="form-horizontal" role="form" id="form_company">
                            {{ csrf_field() }}
                            {{ method_field('put')}}
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{__('admin.question_value')}}<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-solid" name="question_value"
                                                   value="{{ old('question_value',$item->question_value)}}" required/>
                                        </div>
                                    </div>
                                </div>     <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{__('admin.question_type')}}<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-solid" name="question_type"
                                                   value="{{ old('question_type',$item->question_value)}}" required/>
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



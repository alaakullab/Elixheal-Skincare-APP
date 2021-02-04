@extends('admin.layouts.index')
@section('title')
    {{__('admin.add_question')}}
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
                            {{ __('admin.add_question') }}
                        </h3>
                    </div>
                </div>
            </div>

            <!--begin::Form-->
            <form  method="POST" action="{{ route('admin.question.storeView',app()->getLocale()) }}" class="m-form m-form--fit m-form--label-align-right"  >
                @csrf
                <div class="m-portlet__body">
                    <div class="form-group m-form__group">
                        <label>{{__('admin.question_value')}}<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-solid" name="question_value"
                               value="{{ old('question_value')}}" required/>
                    </div>
                    <div class="form-group m-form__group">
                        <label>{{__('admin.question_type')}}<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-solid" name="question_type"
                               value="{{ old('question_type')}}" required/>
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions">
                        <button id="submitButton" class="btn btn-success ">{{__('admin.save')}}</button>
                        <a href="{{route('admin.question.indexView',app()->getLocale())}}"
                           class="btn btn-secondary  mr-2">{{__('admin.cancel')}}</a>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
    </div>
@endsection

@section('script')

@endsection

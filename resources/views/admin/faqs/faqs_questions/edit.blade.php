@extends('admin.layouts.index')
@section('title') {{ucwords(__('admin.faqs_question'))}} - {{ucwords(__('admin.edit_faqs_question'))}}@endsection
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
            <form  method="POST" action="{{url(app()->getLocale().'/admin/faqs_questions/'. $item->id.'/update')}}" class="m-form m-form--fit m-form--label-align-right"  >
                @csrf
                @method('put')
                <div class="m-portlet__body">
                    <div class="form-group m-form__group">
                        <label for="question_value">{{ __('admin.question_value') }}</label>

                        <input type="text" class="form-control m-input" required id="question_value" name="question_value"
                               value="{{old('question_value',@$item->question_value)}}" placeholder="{{ __('admin.question_value') }}">
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

@endsection



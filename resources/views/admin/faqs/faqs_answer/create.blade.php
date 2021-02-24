@extends('admin.layouts.index')
@section('title'){{ucwords(__('admin.add_faqs_answer'))}}@endsection
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
                            {{ucwords(__('admin.add_faqs_answer'))}}
                        </h3>
                    </div>
                </div>
            </div>

            <!--begin::Form-->
            <form method="POST" action="{{url(app()->getLocale().'/admin/faqs_answers/'.$faqs_question->id.'/store')}}"
                  class="m-form m-form--fit m-form--label-align-right">
                @csrf
                <div class="m-portlet__body">
                    <div class="form-group m-form__group">
                        <label for="answers_value">{{ucwords(__('admin.answer_value'))}}</label>

                        <input type="text" class="form-control m-input" required id="answers_value" name="answers_value"
                               value="{{old('answers_value',@$item->answers_value)}}"
                               placeholder="{{ucwords(__('admin.answer_value'))}}">
                    </div>
                    <div class="form-group m-form__group">
                        <label for="faqs_question_id">{{ucwords(__('admin.question_next_id'))}}</label>

                        <select class="form-control m-input" required id="faqs_question_id" name="faqs_question_id">
                            <option>{{ucwords(__('admin.choose'))}}</option>
                            @foreach($faqs_questions as $q)
                                <option value="{{$q->id}}">
                                    {{$q->question_value}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions">
                        <button type="submit" class="btn btn-success">{{ucwords(__('admin.save'))}}</button>
                        <a href="{{url(app()->getLocale().'/admin/faqs_answers/'.$faqs_question->id)}}"
                           class="btn btn-secondary  mr-2">{{ucwords(__('admin.cancel'))}}</a>
                    </div>
                </div>
            </form>

            <!--end::Form-->
        </div>
    </div>
@endsection



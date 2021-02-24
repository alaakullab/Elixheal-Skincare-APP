@extends('admin.layouts.index')
@section('title'){{ucwords(__('admin.edit_faqs_answers'))}}@endsection
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
                            {{ ucwords(__('admin.edit_faqs_answers')) }}
                        </h3>
                    </div>
                </div>
            </div>

            <!--begin::Form-->
            <form method="post" action="{{url(app()->getLocale().'/admin/answer/'. $item->id.'/update')}}"
                  class="m-form m-form--fit m-form--label-align-right"
                  enctype="multipart/form-data" class="form-horizontal" role="form" id="form_company">
                {{ csrf_field() }}
                {{ method_field('put')}}
                <div class="m-portlet__body">
                    <div class="form-group m-form__group">
                        <label for="answer_value">{{ucwords(__('admin.answer_value'))}}</label>

                        <input type="text" class="form-control m-input" required id="answers_value" name="answers_value"
                               value="{{old('answer_value',@$item->answer_value)}}"
                               placeholder="{{ucwords(__('admin.answer_value'))}}">
                    </div>
                    <div class="form-group m-form__group">
                        <label for="answer_type">{{ucwords(__('admin.question_next_id'))}}</label>

                        <select class="form-control m-input" required id="question_next_id" name="question_next_id">
                            <option>{{ucwords(__('admin.choose'))}}</option>
                            @foreach($faqs_questions as $q)
                                <option value="{{$q->id}}" {{$q->id == $item->question_next_id ? 'selected' : ''}}>
                                    {{$q->question_value}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions">
                        <button type="submit" class="btn btn-success">{{ucwords(__('admin.save'))}}</button>
                        <a href="{{url(app()->getLocale().'/admin/answer/'.$faqs_question->id)}}"
                           class="btn btn-secondary  mr-2">{{ucwords(__('admin.cancel'))}}</a>
                    </div>
                </div>
            </form>

            <!--end::Form-->
        </div>
    </div>

@endsection



@extends('admin.layouts.index')
@section('title') - {{ucwords(__('admin.edit_category'))}}@endsection
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
                            {{ __('admin.edit_category') }}
                        </h3>
                    </div>
                </div>
            </div>

            <!--begin::Form-->
            <form method="post" action="{{url(app()->getLocale().'/admin/category/'. $item->id.'/update')}}"
                  class="m-form m-form--fit m-form--label-align-right"
                  enctype="multipart/form-data" class="form-horizontal" role="form" id="form_company">
                {{ csrf_field() }}
                {{ method_field('put')}}
                <div class="m-portlet__body">
                    <div class="form-group m-form__group">
                        <label for="name">{{ __('admin.name') }}</label>
                        <input type="text" class="form-control m-input" required id="name" name="name"
                               value="{{old('name',$item->name)}}" placeholder="{{ __('admin.name') }}">
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions">
                        <button type="submit" class="btn btn-success">{{ __('admin.save') }}</button>
                        <a href="{{route('admin.category.indexView',app()->getLocale())}}"
                           class="btn btn-secondary  mr-2">{{__('admin.cancel')}}</a>
                    </div>
                </div>
            </form>

            <!--end::Form-->
        </div>
    </div>
@endsection



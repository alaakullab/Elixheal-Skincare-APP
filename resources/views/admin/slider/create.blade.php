@extends('admin.layouts.index')
@section('title') {{ucwords(__('admin.slider'))}} - {{ucwords(__('admin.add_slider'))}}@endsection
@section('css')
    <link href="{{url('admin_panel')}}/assets/vendors/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
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
                            {{ ucwords(__('admin.add_slider')) }}
                        </h3>
                    </div>
                </div>
            </div>

            <!--begin::Form-->
            <form  method="POST" action="{{ route('admin.slider.storeView',app()->getLocale()) }}"  enctype="multipart/form-data" class="m-form m-form--fit m-form--label-align-right"  >
                @csrf
                <div class="m-portlet__body">
                    <div class="form-group m-form__group">
                        <label for="image_path">{{ __('admin.image') }}</label>
                        <input type="file" class="form-control m-input" id="image_path" name="image_path" value="{{old('image_path')}}" placeholder="{{ __('admin.image_path') }}">
                        {{--                        <img height="45px" src="{{ url('images/slider') }}/{{ $data->image_path ?? $data->image_path }}" alt="logo">--}}
                    </div>
                    <div class="form-group m-form__group">
                        <label for="title">{{ __('admin.title') }}</label>
                        <input type="text" class="form-control m-input"  id="title" name="title" value="{{old('title')}}" placeholder="{{ __('admin.title') }}">
                    </div>
                    <div class="form-group m-form__group">
                        <label for="desc">{{ __('admin.desc') }}</label>
                        <div class="col-lg-6 col-md-6 col-sm-9">
                            <textarea  class="summernote" rows="3" name="desc" >{{old('desc')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group m-form__group">
                        <label for="name">{{ __('admin.hyperlink') }}</label>
                        <input type="text" class="form-control m-input"  id="hyperlink" name="hyperlink" value="{{old('hyperlink')}}" placeholder="{{ __('admin.hyperlink') }}">
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions">
                        <button type="submit" class="btn btn-success">{{ __('admin.save') }}</button>
                        <a href="{{route('admin.slider.indexView',app()->getLocale())}}"
                           class="btn btn-secondary  mr-2">{{__('admin.cancel')}}</a>
                    </div>
                </div>
            </form>

            <!--end::Form-->
        </div>
    </div>

@endsection

@section('script')
    <script src="{{url('admin_panel')}}/assets/vendors/summernote/dist/summernote.js" type="text/javascript"></script>
    <script type="text/javascript">
        $('.summernote').summernote({
            height: 120,
            focus: true,
            toolbar: false
        });
    </script>
@endsection



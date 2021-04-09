@extends('admin.layouts.index')
@section('title')
    {{__('admin.about-us')}}
@endsection
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
                            {{ ucwords(__('admin.add_section')) }}
                        </h3>
                    </div>
                </div>
            </div>

            <!--begin::Form-->
            <form  method="POST" action="{{ route('admin.about.storeView',app()->getLocale()) }}"  enctype="multipart/form-data" class="m-form m-form--fit m-form--label-align-right"  >
                @csrf
                <div class="m-portlet__body">
                    <div class="form-group m-form__group">
                        <label for="media_path">{{ __('admin.media') }}</label>
                        <input type="file" class="form-control m-input" id="media_path" name="media_path" value="{{old('media_path')}}" placeholder="{{ __('admin.Image or video') }}">
                    </div>
                    <div class="form-group m-form__group">
                        <label for="title">{{ __('admin.title') }}</label>
                        <input type="text" class="form-control m-input"  id="title" name="title" value="{{old('title')}}" placeholder="{{ __('admin.title') }}">
                    </div>
                    <div class="form-group m-form__group">
                        <label for="sub_title">{{ __('admin.sub_title') }}</label>
                        <input type="text" class="form-control m-input"  id="sub_title" name="sub_title" value="{{old('sub_title')}}" placeholder="{{ __('admin.sub_title') }}">
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
                        <a href="{{route('admin.about.indexView',app()->getLocale())}}"
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
            //     [
            //     ['font', ['bold', 'underline', 'clear']],
            //     ['color', ['color']],
            //     ['para', ['ul', 'ol', 'paragraph']],
            //     ['view', ['fullscreen', 'codeview', 'help']]
            // ]
        });
    </script>
@endsection



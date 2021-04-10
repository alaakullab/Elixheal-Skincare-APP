@extends('admin.layouts.index')
@section('title') - {{ucwords(__('admin.about-us'))}} - {{ ucwords(__('admin.edit_section')) }}@endsection
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
                            {{ __('admin.edit_section') }}
                        </h3>
                    </div>
                </div>
            </div>

            <!--begin::Form-->
            <form  method="POST" action="{{ url(app()->getLocale().'/admin/about/'. $item->id.'/update') }}"  enctype="multipart/form-data" class="m-form m-form--fit m-form--label-align-right"  >
                {{ csrf_field() }}
                {{ method_field('put')}}
                <div class="m-portlet__body">
                    <div class="form-group m-form__group">
                        <label for="media_path">{{ __('admin.media') }}</label>
                        <input type="file" class="form-control m-input" id="media_path" name="media_path" value="{{old('media_path')}}" placeholder="{{ __('admin.Image or video') }}">
                        @php($media_type = explode("/",$item->media_type))
                        @if($media_type[0] == 'image')
                        <img height="180" src="{{ url('/assets/media/about/images/') }}/{{ $item->media_path ?? $item->media_path }}" alt="{{$item->title}}">
                        @else
                            <video height="180" controls>
                                <source src="{{url('/assets/media/about/videos/')}}/{{$item->media_path}}" type="video/{{$item->media_extension}}">
                                {{__('admin.Your browser does not support HTML video.')}}
                            </video>
                        @endif
                    </div>
                    <div class="form-group m-form__group">
                        <label for="title">{{ __('admin.title') }}</label>
                        <input type="text" class="form-control m-input"  id="title" name="title" value="{{old('title', $item->title)}}" placeholder="{{ __('admin.title') }}">
                    </div>
                    <div class="form-group m-form__group">
                        <label for="sub_title">{{ __('admin.sub_title') }}</label>
                        <input type="text" class="form-control m-input"  id="sub_title" name="sub_title" value="{{old('sub_title', $item->sub_title)}}" placeholder="{{ __('admin.sub_title') }}">
                    </div>
                    <div class="form-group m-form__group">
                        <label for="desc">{{ __('admin.desc') }}</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <textarea  class="summernote" name="desc" >{{old('desc', $item->desc)}}</textarea>
                        </div>
                    </div>
                    <div class="form-group m-form__group">
                        <label for="name">{{ __('admin.hyperlink') }}</label>
                        <input type="text" class="form-control m-input"  id="hyperlink" name="hyperlink" value="{{old('hyperlink', $item->hyperlink)}}" placeholder="{{ __('admin.hyperlink') }}">
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
        });
    </script>
@endsection



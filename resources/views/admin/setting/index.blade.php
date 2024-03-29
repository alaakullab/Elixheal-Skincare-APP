@extends('admin.layouts.index')
@section('title') {{ucwords(__('admin.settings'))}}@endsection
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
                        {{ __('admin.settings') }}
                    </h3>
                </div>
            </div>
        </div>

        <!--begin::Form-->
        <form  method="POST" action="{{ route('admin.setting.update',app()->getLocale()) }}" enctype="multipart/form-data" class="m-form m-form--fit m-form--label-align-right"  >
            @csrf
            @method('PUT')
            <div class="m-portlet__body">
                <div class="form-group m-form__group">
                    <label for="site_name">{{ __('admin.site_name') }}</label>
                    <input type="text" class="form-control m-input" id="site_name" name="site_name" value="@isset($data->site_name){{ $data->site_name ?? $data->site_name }}@endisset"  placeholder="{{ __('admin.site_name') }}">
                </div>
                <div class="form-group m-form__group">
                    <label for="site_desc">{{ __('admin.site_desc') }}</label>
                    <input type="text" class="form-control m-input" id="site_desc" name="site_desc" value="{{ $data->site_desc ?? $data->site_desc }}" placeholder="{{ __('admin.site_desc') }}">
                </div>
                <div class="form-group m-form__group">
                    <label for="logo">{{ __('admin.logo') }}</label>
                    <input type="file" class="form-control m-input" id="logo" name="logo" value="{{ $data->logo ?? $data->logo }}" placeholder="{{ __('admin.logo') }}">
                    <img height="45px" src="{{ url('images/logo') }}/{{ $data->logo ?? $data->logo }}" alt="logo">
                </div>
                <div class="form-group m-form__group">
                    <label for="icon">{{ __('admin.icon') }}</label>
                    <input type="file" class="form-control m-input" id="icon" name="icon" value="{{ $data->icon ?? $data->icon }}" placeholder="{{ __('admin.icon') }}">
                        <img height="45px" src="{{ url('images/icon') }}/{{ $data->icon ?? $data->icon }}" alt="icon">
                </div>
                <div class="form-group m-form__group">
                    <label for="email">{{ __('admin.email') }}</label>
                    <input type="text" class="form-control m-input" id="email" name="email" value="{{ $data->email ?? $data->email }}" aria-describedby="emailHelp" placeholder="{{ __('admin.email') }}">
                </div>
                <div class="form-group m-form__group">
                    <label for="copyright">{{ __('admin.copyright') }}</label>
                    <input type="text" class="form-control m-input" id="copyright" name="copyright" value="{{ $data->copyright ?? $data->copyright }}" placeholder="{{ __('admin.copyright') }}">
                </div>
                <div class="form-group m-form__group">
                    <label for="Maintenance_message">{{ __('admin.Maintenance_message') }}</label>
                    <textarea class="form-control m-input" id="Maintenance_message" name="Maintenance_message" rows="3">{{ $data->Maintenance_message ?? $data->Maintenance_message }}</textarea>
                </div>
                <div class="form-group m-form__group">
                    <label for="phone">{{ __('admin.phone') }}</label>
                    <input type="text" class="form-control m-input" id="phone" name="phone" value="{{ $data->phone ?? $data->phone }}" placeholder="{{ __('admin.phone') }}">
                </div>
                <div class="form-group m-form__group">
                    <div class="m-checkbox-inline">
                    <label for="maintenance_status" class="m-checkbox">{{ __('admin.maintenance_status') }}</label>
                    <?php if($data->maintenance_status == 'open'){
                           ?>
                        <input type="checkbox" checked class="checkbox" name="maintenance_status" data-size="small" placeholder ="{{trans('admin.maintenance_status')}}">
                                <?php }else{ ?>
                        <input type="checkbox"  class="checkbox" name="maintenance_status" data-size="small" placeholder ="{{trans('admin.maintenance_status')}}">
                    <?php } ?>
                        </div>
                </div>
                <div class="form-group m-form__group">
                    <label for="facebook">{{ __('admin.facebook') }}</label>
                    <input type="url" class="form-control m-input" id="facebook" name="facebook" value="{{ $data->facebook ?? $data->facebook }}" placeholder="{{ __('admin.facebook') }}">
                </div>
                <div class="form-group m-form__group">
                    <label for="twitter">{{ __('admin.twitter') }}</label>
                    <input type="url" class="form-control m-input" id="twitter" name="twitter" value="{{ $data->twitter ?? $data->twitter }}" placeholder="{{ __('admin.twitter') }}">
                </div>
                <div class="form-group m-form__group">
                    <label for="instagram">{{ __('admin.instagram') }}</label>
                    <input type="url" class="form-control m-input" id="instagram" name="instagram" value="{{ $data->instagram ?? $data->instagram }}" placeholder="{{ __('admin.instagram') }}">
                </div>
                <div class="form-group m-form__group">
                    <label for="whatsapp">{{ __('admin.whatsapp') }}</label>
                    <input type="text" class="form-control m-input" id="whatsapp" name="whatsapp" value="{{ $data->whatsapp ?? $data->whatsapp }}" placeholder="{{ __('admin.whatsapp') }}">
                </div>
                <div class="form-group m-form__group">
                    <label for="site_desc">{{ __('admin.address') }}</label>
                    <input type="text" class="form-control m-input" id="address" name="address" value="{{ $data->address ?? $data->address }}" placeholder="{{ __('admin.address') }}">
                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </div>
        </form>

        <!--end::Form-->
    </div>
</div>
@endsection

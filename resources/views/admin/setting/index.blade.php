@extends('admin.layouts.index')

@section('title', 'View Setting')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
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
    <form class="m-form m-form--fit m-form--label-align-right">
        <div class="m-portlet__body">
            <div class="form-group m-form__group m--margin-top-10">
                <div class="alert m-alert m-alert--default" role="alert">
                    The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
                </div>
            </div>
            <div class="form-group m-form__group">
                <label for="site_name">{{ __('admin.site_name') }}</label>
                <input type="text" class="form-control m-input" id="site_name"  placeholder="{{ __('admin.site_name') }}">
            </div>
            <div class="form-group m-form__group">
                <label for="site_desc">{{ __('admin.site_desc') }}</label>
                <input type="text" class="form-control m-input" id="site_desc"  placeholder="{{ __('admin.site_desc') }}">
            </div>
            <div class="form-group m-form__group">
                <label for="logo">{{ __('admin.logo') }}</label>
                <input type="text" class="form-control m-input" id="logo"  placeholder="{{ __('admin.logo') }}">
            </div>
            <div class="form-group m-form__group">
                <label for="icon">{{ __('admin.icon') }}</label>
                <input type="text" class="form-control m-input" id="icon"  placeholder="{{ __('admin.icon') }}">
            </div>
            <div class="form-group m-form__group">
                <label for="email">{{ __('admin.email') }}</label>
                <input type="text" class="form-control m-input" id="email" aria-describedby="emailHelp" placeholder="{{ __('admin.email') }}">
            </div>
            <div class="form-group m-form__group">
                <label for="copyrightcc">{{ __('admin.copyrightcc') }}</label>
                <input type="text" class="form-control m-input" id="copyrightcc"  placeholder="{{ __('admin.copyrightcc') }}">
            </div>
            <div class="form-group m-form__group">
                <label for="Maintenance_message">{{ __('admin.Maintenance_message') }}</label>
                <textarea class="form-control m-input" id="Maintenance_message" rows="3"></textarea>
            </div>
            <div class="form-group m-form__group">
                <label for="phone">{{ __('admin.phone') }}</label>
                <input type="number" class="form-control m-input" id="phone"  placeholder="{{ __('admin.phone') }}">
            </div>
            <div class="form-group m-form__group">
                <label for="maintenance_status">{{ __('admin.maintenance_status') }}</label>
                <input type="text" class="form-control m-input" id="maintenance_status"  placeholder="{{ __('admin.maintenance_status') }}">
            </div>
            <div class="form-group m-form__group">
                <label for="facebook">{{ __('admin.facebook') }}</label>
                <input type="url" class="form-control m-input" id="facebook"  placeholder="{{ __('admin.facebook') }}">
            </div>
            <div class="form-group m-form__group">
                <label for="twitter">{{ __('admin.twitter') }}</label>
                <input type="url" class="form-control m-input" id="twitter"  placeholder="{{ __('admin.twitter') }}">
            </div>
            <div class="form-group m-form__group">
                <label for="instagram">{{ __('admin.instagram') }}</label>
                <input type="url" class="form-control m-input" id="instagram"  placeholder="{{ __('admin.instagram') }}">
            </div>
            <div class="form-group m-form__group">
                <label for="whatsapp">{{ __('admin.whatsapp') }}</label>
                <input type="text" class="form-control m-input" id="whatsapp"  placeholder="{{ __('admin.whatsapp') }}">
            </div>
        </div>
        <div class="m-portlet__foot m-portlet__foot--fit">
            <div class="m-form__actions">
                <button type="reset" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </div>
    </form>

    <!--end::Form-->
</div>
@endsection

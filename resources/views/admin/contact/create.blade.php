@extends('admin.layouts.index')
@section('title') - {{ucwords(__('admin.add_contact'))}}@endsection
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
                            {{ __('admin.add_contact') }}
                        </h3>
                    </div>
                </div>
            </div>

            <!--begin::Form-->
            <form  method="POST" action="{{ route('admin.contact.storeView',app()->getLocale()) }}" class="m-form m-form--fit m-form--label-align-right"  >
                @csrf
                <div class="m-portlet__body">
                    <div class="form-group m-form__group">
                        <label for="full_name">{{ __('admin.full_name') }}</label>
                        <input type="text" class="form-control m-input" required id="full_name" name="full_name"
                               value="{{old('full_name',@$item->full_name)}}" placeholder="{{ __('admin.full_name') }}">
                    </div>
                    <div class="form-group m-form__group">
                        <label for="email_contacts">{{ __('admin.email_contacts') }}</label>
                        <input type="email" class="form-control m-input" required id="email_contacts" name="email_contacts"
                               value="{{old('email_contacts',@$item->email_contacts)}}" placeholder="{{ __('admin.email_contacts') }}">
                    </div>
                    <div class="form-group m-form__group">
                        <label for="message">{{ __('admin.message') }}</label>
                        <textarea class="form-control form-control-solid" id="message" required name="message">{{old('message',@$item->message)}}</textarea>
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions">
                        <button type="submit" class="btn btn-success">{{ __('admin.save') }}</button>
                        <a href="{{route('admin.contact.indexView',app()->getLocale())}}"
                           class="btn btn-secondary  mr-2">{{__('admin.cancel')}}</a>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
    </div>
@endsection


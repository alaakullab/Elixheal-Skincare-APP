@extends('admin.layouts.index')
@section('title') {{ucwords(__('admin.product'))}}
@endsection
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
                            {{ __('admin.edit_product') }}
                        </h3>
                    </div>
                </div>
            </div>

            <!--begin::Form-->
            <form method="post" action="{{url(app()->getLocale().'/admin/product/'. $item->id.'/update')}}"
                  class="m-form m-form--fit m-form--label-align-right"
                  enctype="multipart/form-data" class="form-horizontal" role="form" id="form_company">
                {{ csrf_field() }}
                {{ method_field('put')}}
                <div class="m-portlet__body">
                    <div class="form-group m-form__group">
                        <label for="product_title">{{ __('admin.product_title') }}</label>
                        <input type="text" class="form-control m-input" required id="product_title" name="product_title" value="{{old('product_title',$item->product_title)}}" placeholder="{{ __('admin.product_title') }}">
                    </div>
                    <div class="form-group m-form__group">
                        <label for="description">{{ __('admin.description') }}</label>
                        <textarea name="description" id="description" class="form-control m-input" required >{{old('description',$item->description)}} </textarea>
                    </div>
                    <div class="form-group m-form__group">
                        <label for="price">{{ __('admin.price') }}</label>
                        <input type="number" class="form-control m-input" required id="price" name="price" value="{{old('price',$item->price)}}" placeholder="{{ __('admin.price') }}">
                    </div>
                    <div class="form-group m-form__group">
                        <label for="qyt">{{ __('admin.qyt') }}</label>
                        <input type="number" class="form-control m-input" required id="qyt" name="qyt" value="{{old('qyt',$item->qyt)}}" placeholder="{{ __('admin.qyt') }}">
                    </div>
                    <div class="form-group m-form__group">
                        <label for="category_id">{{ __('admin.category') }}</label>
                        <select name="category_id" class="form-control m-input">
                            @foreach($categories as $cat)
                                <option value="{{$cat->id}}" {{$item->category_id == $cat->id ? 'selected' : ' '}}>{{$cat->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group m-form__group">
                        <label for="status">{{ __('admin.status') }}</label>
                        <input type="checkbox"  class="form-control m-input" {{$item->status ===1? 'checked="checked"' : ' '}}  id="status" name="status" value="1" placeholder="{{ __('admin.status') }}">
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions">
                        <button type="submit" class="btn btn-success">{{ __('admin.save') }}</button>
                        <a href="{{route('admin.product.indexView',app()->getLocale())}}"
                           class="btn btn-secondary  mr-2">{{__('admin.cancel')}}</a>
                    </div>
                </div>
            </form>

            <!--end::Form-->
        </div>
    </div>

@endsection



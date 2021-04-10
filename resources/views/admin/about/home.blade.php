@extends('admin.layouts.index')
@section('title') {{ucwords(__('admin.about-us'))}}@endsection
@section('css')
@endsection
@section('content')
    <div class="col-md-12">
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            {{ucwords(__('admin.about'))}}
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <div class="btn-group ">
                                <form class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="{{ucwords(__('search'))}}">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" >
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="m-portlet__nav-item">
                            <a href="{{route('admin.about.createView',app()->getLocale())}}" style="margin-right: 5px"
                               class="btn btn-primary"><i class="fa fa-plus"></i>{{__('admin.add')}}
                            </a>
                        </li>
                        <li class="m-portlet__nav-item"></li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">
                <!--begin: Datatable -->
                <div class="portlet-body table-responsive " style="overflow-x: visible;">
                    <table class="table table-striped- table-bordered table-hover table-checkable no-footer">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ucwords(__('admin.view'))}}</th>
                            <th>{{ucwords(__('admin.title'))}}</th>
                            <th>{{ucwords(__('admin.sub_title'))}}</th>
                            <th>{{ucwords(__('admin.action'))}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($count = 1)
                        @forelse($items as $item)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>
                                    <div class="thumbnail">
                                       @php($media_type = explode("/",$item->media_type))
                                     @if($media_type[0] == 'image')
                                    <img src="{{url('/assets/media/about/images/')}}/{{$item->media_path}}" alt="{{ __('front.about') }}" class="img-responsive img-fluid"  width="152" height="118">
                                        @else
                                            <video width="152" height="118" controls>
                                                <source src="{{url('/assets/media/about/videos/')}}/{{$item->media_path}}" type="video/{{$item->media_extension}}">
                                                {{__('admin.Your browser does not support HTML video.')}}
                                            </video>
                                        @endif
                                    </div>
                                </td>
                                <td>{{Str::limit($item->title,30)}}</td>
                                <td>{!! Str::limit($item->desc, 135) !!}</td>
                                <td>
                                    <div class="btn-group btn-action">
                                        <a href="{{url(app()->getLocale().'/admin/about/'. $item->id.'/edit')}}"
                                           class="btn btn-xs btn-icon btn-clean blue tooltips" data-container="body" data-placement="top"
                                           data-original-title="{{ucwords(__('admin.edit'))}}"><i class="fa fa-edit"></i></a>
                                        <a href="{{url(app()->getLocale().'/admin/about/'. $item->id.'/delete')}}"
                                           class="btn btn-xs btn-icon btn-clean blue tooltips" data-container="body" data-placement="top"
                                           data-original-title="{{__('admin.delete')}}"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center lead  " colspan="8">
                                    {{__('admin.no_data_to_viwe')}} </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    {{ $items->links("pagination::bootstrap-4") }}
                </div>
            </div>

        </div>
    </div>
@endsection

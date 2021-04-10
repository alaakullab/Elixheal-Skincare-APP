@extends('admin.layouts.index')
@section('title') - {{ucwords(__('admin.faqs_question'))}} - {{ucwords(__('admin.view_faqs_question'))}}@endsection
@section('css')
<link href="{{url('admin_panel')}}/assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="col-md-12">
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        {{ucwords(__('admin.faqs_question'))}}
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
                        <a href="{{route('admin.faqs_questions.add',app()->getLocale())}}"
                           class="btn btn-primary"><i class="fa fa-plus"></i>
                            <span>{{__('admin.add')}}</span>
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
                    <th>{{ucwords(__('admin.question_value'))}}</th>
                    <th>{{ucwords(__('admin.action'))}}</th>
                </tr>
                </thead>
                <tbody>
                @php($count = 1)
                @forelse($items as $item)
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td> {{$item->question_value}}</td>
                        <td>
                            <div class="btn-group btn-action">
                                <a href="{{url(app()->getLocale().'/admin/faqs_questions/'. $item->id.'/edit')}}"
                                   class="btn btn-xs btn-icon btn-clean blue tooltips" data-container="body" data-placement="top"
                                   data-original-title="{{ucwords(__('admin.edit'))}}"><i class="fa fa-edit"></i></a>
                                <a href="{{url(app()->getLocale().'/admin/faqs_questions/'. $item->id.'/delete')}}"
                                   class="btn btn-xs btn-icon btn-clean blue tooltips" data-container="body" data-placement="top"
                                   data-original-title="{{__('admin.delete')}}"><i class="fa fa-trash"></i></a>
                                <a href="{{url(app()->getLocale().'/admin/faqs_answers/'. $item->id)}}"
                                   class="btn btn-xs btn-icon btn-clean blue tooltips" data-container="body" data-placement="top"
                                   data-original-title="{{__('admin.faqs_answers')}}"><i class="fa fa-question-circle"></i></a>

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

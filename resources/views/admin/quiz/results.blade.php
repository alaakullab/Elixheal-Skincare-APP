@extends('admin.layouts.index')
@section('title') - {{ucwords(__('admin.quiz'))}} - {{ucwords(__('admin.results_quiz'))}}@endsection
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
                            {{ucwords(__('admin.results_quiz'))}}
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
                        <th>{{ucwords(__('admin.quiz_id'))}}</th>
                        <th>{{ucwords(__('admin.username'))}}</th>
                        <th>{{ucwords(__('admin.question_value'))}}</th>
                        <th>{{ucwords(__('admin.answer_value'))}}</th>
                        <th>{{ucwords(__('admin.created_at'))}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($count = 1)
                    @forelse($items as $item)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td> {{$item->quiz_id ?? ''}}</td>
                            <td> {{$item->user->name ?? ''}}</td>
                            <td> {{$item->question->question_value ?? ''}}</td>
                            <td> {{$item->answer->answer_value ?? ''}}</td>
                            <td> {{$item->created_at ?? ''}}</td>

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

@section('script')
@endsection

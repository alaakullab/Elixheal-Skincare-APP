@extends('admin.layouts.index')
@section('title') {{ucwords(__('admin.answers'))}}
@endsection
@section('css')
@endsection
@section('content')
    <div class="col-md-12">
        {{-- <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
                            <div class="m-alert__icon">
                                <i class="flaticon-exclamation m--font-brand"></i>
                            </div>
                            <div class="m-alert__text">
                                The foundation for DataTables is progressive enhancement, so it is very adept at reading table information directly from the DOM. This example shows how easy it is to add searching, ordering and paging to your HTML table by simply running
                                DataTables on it.
                                See official documentation <a href="https://datatables.net/examples/data_sources/dom.html" target="_blank">here</a>.
                            </div>
            </div> --}}
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            {{ucwords(__('admin.answers'))}}
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
                            <a href="{{url(app()->getLocale().'/admin/answer/'.$question->id.'/add')}}"
                               class="btn btn-primary"><i class="fa fa-plus"></i>
                                <span>{{__('admin.add')}}</span>
                            </a>
                        </li>
                        <li class="m-portlet__nav-item"></li>
                        {{-- <li class="m-portlet__nav-item">
                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                    <i class="la la-ellipsis-h m--font-brand"></i>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">Quick Actions</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">Create Post</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">Send Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-multimedia-2"></i>
                                                            <span class="m-nav__link-text">Upload File</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__section">
                                                        <span class="m-nav__section-text">Useful Links</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">FAQ</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">Support</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit m--hide">
                                                    </li>
                                                    <li class="m-nav__item m--hide">
                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> --}}
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
                            <th>{{ucwords(__('admin.answer_value'))}}</th>
                            <th>{{ucwords(__('admin.action'))}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($count = 1)
                        @forelse($items as $item)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td> {{$item->answer_value}}</td>
                                <td>
                                    <div class="btn-group btn-action">
                                        <a href="{{url(app()->getLocale().'/admin/answer/'. $item->id.'/edit')}}"
                                           class="btn btn-xs btn-icon btn-clean blue tooltips" data-container="body" data-placement="top"
                                           data-original-title="{{ucwords(__('admin.edit'))}}"><i class="fa fa-edit"></i></a>
                                        <a href="{{url(app()->getLocale().'/admin/answer/'. $item->id.'/delete')}}"
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

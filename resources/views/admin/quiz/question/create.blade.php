@extends('admin.layouts.index')

@section('title', 'Create question')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>Create question.</p>
@endsection

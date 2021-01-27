@extends('admin.layouts.index')

@section('title', 'Dashboard')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content in dashboard.</p>
    <div id="app">
      <v-app>
          <AppDashboard></AppDashboard>
      </v-app>
    </div>
@endsection

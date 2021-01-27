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
          <v-content>
            <v-container>Hello world</v-container>
          </v-content>
        </v-app>
      </div>
@endsection

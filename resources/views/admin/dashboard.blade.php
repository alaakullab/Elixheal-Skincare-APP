@extends('admin.layouts.index')
@section('title'){{ucwords(__('admin.dashboard'))}}@endsection
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

@section('script')
    	<!--begin::Page Scripts -->
		<script src="{{url('admin_panel')}}/assets/app/js/dashboard.js" type="text/javascript"></script>
        {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
<script>
    $(document).on('click', '#submitButton', function () {
        // $('#submitButton').addClass('spinner spinner-white spinner-left');
        $('#submitForm').click();
    });


</script>
		<!--end::Page Scripts -->
@endsection

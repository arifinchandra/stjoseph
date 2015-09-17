@extends('template.default')
@section('content')
		<!-- Kontent Kiri -->
<div class="col-xs-9">
	@include('addons.carousel')
	This is the home page
</div>
<!-- end Kontent Kiri -->

<!-- Sidebar -->
<div class="col-xs-3">
	@include('template.sidebar')
</div>
<!-- end Sidebar -->
@stop

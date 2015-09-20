
<!DOCTYPE html>
<html>
<head>
	<!--head section nanti disini -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--css dan js disini -->
	{!! Html::style('css/bootstrap-theme.css') !!}
	{!!  Html::style('css/bootstrap.css') !!}

	{!! Html::style('css/bootstrap-datetimepicker.css') !!}

	{!! Html::style('css/sigkat.css') !!}
	{!! Html::style('http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css') !!}


</head>
<body class="sigkat">

<!-- Header Section -->
@include('template.header')
<!-- Header selesai -->

<!-- konten mulai
     konten tidak dalam file tersendiri karena nanti di render di halaman ini dengan yield
-->
<div class="container" id="konten">
	<div class="row" id="isi">
		<div class="col-lg-12">
			<!-- Ini Isi Konten -->
			@yield('content','Ini Isi Konten')
		</div>
	</div>
</div>
<!-- konten selesai -->

<!-- footer section start here -->
@include('template.footer')
		<!--footer end -->


</body>
</html>
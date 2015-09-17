<!DOCTYPE html>
<html lang="en">
<head>
	<!--head section nanti disini -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--css dan js disini -->
	{!!  Html::style('css/bootstrap.min.css') !!}
	{!! Html::style('css/sigkat.css') !!}
	{!! Html::style('http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css') !!}
	{!! Html::script('js/jquery-1.11.2.min.js') !!}
	{!! Html::script('js/bootstrap.js', array('type'=>'text/javascript')) !!}

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
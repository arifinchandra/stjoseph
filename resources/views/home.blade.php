@extends('template.utama')
@section('content')
		<!-- Kontent Kiri -->
<div class="col-xs-9">
	@include('addons.carousel')
	@include('addons.beritaPanel')


	<!-- Hilite Pengumuman -->
		@include('addons.highlightPengumuman')
	<!-- end Hilight Pengumuman -->

	<!-- Latest forum -->
	<div class="row" id="hiliteForum">
		<div class="col-xs-12">
			<h4>Kiriman Forum Terakhir</h4>
			<hr/>
			@foreach($forum as $post )

			@endforeach
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a suscipit libero. Duis maximus placerat tellus et condimentum. Aliquam ultricies felis vitae mauris tempor, in mattis elit pharetra. Aenean ut ultricies ante.</p>
			<hr/>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a suscipit libero. Duis maximus placerat tellus et condimentum. Aliquam ultricies felis vitae mauris tempor, in mattis elit pharetra. Aenean ut ultricies ante.</p>
			<hr/>
		</div>
	</div>
	<!-- end Latest forum -->

</div>
<!-- end Kontent Kiri -->

<!-- Sidebar -->
<div class="col-xs-3">
	@include('template.sidebar')
</div>
<!-- end Sidebar -->
@stop

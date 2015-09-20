<!-- hilight Berita -->

<div class="row panel-group col-xs-12" id="hiliteBerita">
	@foreach(stjo\Model\Berita::orderBy('waktu_berita','desc')->take(3)->get() as $berita)
		<div class="panel panel-primary col-xs-4 ringkasBerita" id="">
			<div class="panel-heading">{!! $berita->jdl_berita !!}</div>
			<div class="panel-body"><p>{!! $berita->isi_berita !!}</p></div>
		</div>
	@endforeach
</div>
<!-- hilight Berita -->
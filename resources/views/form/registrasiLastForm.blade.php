@extends('template.utama')

@section('content')

	<body>
	<div class="section">
		<div class="container-fluid" id="regis">
			<div class="row" id="regis">
				<div class="col-md-12">
					<h1>Registrasi pengguna (lanjutan)</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<div class="col-sm-2 text-right">
								<label for="namaDepan" class="control-label">Email</label>
							</div>
							<div class="col-sm-4">
								<input type="text" class="form-control input-lg" id="namaDepan" placeholder="Nama Depan">
							</div>
							<div class="col-sm-4">
								<input type="text" class="form-control input-lg" id="namaBelakang" placeholder="Nama Belakang">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-2 text-right">
								<label for="password" class="control-label">Password</label>
							</div>
							<div class="col-sm-4">
								<input type="password" class="form-control input-lg" id="password" placeholder="Password">
							</div>
							<div class="col-sm-4">
								<input type="password" class="form-control input-lg" id="confirm" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-2 text-right">
								<label for="tempatLahir" class="control-label">Tempat/Tanggal Lahir</label>
							</div>
							<div class="col-sm-2">
								<input type="text" class="form-control " id="tempatLahir" placeholder="Tempat Lahir">
							</div>
							<div class="col-sm-1">
								<input type="text" class="form-control " id="tglLahir" placeholder="Tgl">
							</div>
							<div class="col-sm-1">
								<input type="text" class="form-control input-lg" id="blnLahir" placeholder="Bln">
							</div>
							<div class="col-sm-2">
								<input type="text" class="form-control input-lg" id="thnLahir" placeholder="Tahun">
							</div>
							<div class="col-xs-3">
								<div class="radio">
									<label class="radio-inline">
										<input type="radio" name="jk">Laki-laki
									</label>
									<label class="radio-inline">
										<input type="radio" name="jk">Perempuan
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-2 text-right">
								<label for="alamat" class="control-label">Alamat</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control input-lg" id="alamat" placeholder="Alamat">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-2 text-right">
								<label for="kota" class="control-label">Kota</label>
							</div>
							<div class="col-sm-2">
								<input type="text" class="form-control input-lg" id="kota" placeholder="Kota">
							</div>
							<div class="col-sm-2 text-right">
								<label for="kodePos" class="control-label">Kode Pos</label>
							</div>
							<div class="col-sm-2">
								<input type="text" class="form-control input-lg" id="kodePos" placeholder="Kode Pos">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-8">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="1">Dengan ini saya Menyetujui peraturan yang ada pada situs ini
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-2">
								<button type="submit" class="btn btn-block btn-danger">Daftar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</body>

@stop
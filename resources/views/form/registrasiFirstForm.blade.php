@extends('template.utama')
@section('content')
	<div class="section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1>Registrasi Pengguna</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					{{ Form::open(['route' => 'route.name', 'method' => 'post']) }}
						
					{{ Form::close() }}
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<div class="col-sm-2 text-right">
								<label for="username" class="control-label">Username</label>
							</div>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="username" placeholder="Username">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-2 text-right">
								<label for="email" class="control-label">e-mail</label>
							</div>
							<div class="col-sm-4">
								<input type="email" class="form-control" id="email" placeholder="E-mail">
							</div>
							<div class="col-sm-4">
								<input type="email" class="form-control" id="email" placeholder="E-mail">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-8">
								<div class="checkbox">
									<label>
										<input type="checkbox">Apakah Anda umat St. Joseph</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-2 text-right">
								<label for="idumat" class="control-label">ID Umat</label>
							</div>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="idumat" placeholder="ID Umat">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-4">
								<button type="submit" class="btn btn-block btn-danger btn-lg">Daftar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@stop
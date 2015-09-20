@extends('template.utama')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="text-center">User Login</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">
				{!! Form::open(['route' => 'login', 'method' => 'post','role'=>'form']) !!}
					<div class="form-group">
						{!! Form::label('username', 'Username :', ['class' => 'control-label','for'=>'username']) !!}
						{!! Form::text('email', 'Email', ['class' => 'form-control']) !!}
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="username">
					</div>
					<div class="form-group">
						<label class="control-label" for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<div class="checkbox">
						<label class="control-label">
							<input type="checkbox">                                                                Ingat Saya &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
						</label>
					</div>
					<div class="btn-group pull-right">
						<button type="button" class="btn btn-default">Batal</button>
						<button type="button" class="btn btn-default">Login</button>
					</div>
				
				{{ Form::close() }}
			</div>
		</div>
	</div>
	{!! Form::open(['url' => 'login']) !!}
	<h1>Login</h1>
	{!! $errors->first('username') !!}
	{!! $errors->first('password') !!}

	<div class="row text-center">
		<div class="form-group form-inline col-xs-5 text-right">
			{!! Form::label('username', 'Username') !!}
			{!! Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control'] ) !!}
		</div>
	</div>

	<div class="row text-center">
		<div class="form-group form-inline col-xs-5 text-right">
			{!! Form::label('password', 'Password') !!}
			{!! Form::password('password',['placeholder' => 'Password', 'class' => 'form-control'] ) !!}
		</div>
	</div>

	<div class="row text-right">
		<div class="form-group form-inline col-xs-5 ">
			{!! Form::submit('submit',['class'=>'btn btn-primary']) !!}
		</div>
	</div>
	{!! Form::close() !!}
@stop
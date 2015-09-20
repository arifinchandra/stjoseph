@extends('template.utama')
@section('content')


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
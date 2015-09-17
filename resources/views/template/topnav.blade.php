<div class="row vertical-center" id="top-nav">
	<div class="col-xs-2">
		<!-- decide login or not -->
		<div id="sessionNote" class="">
			@if(Auth::check())
					<!-- Loggedin -->
			<p>Hi, User!!</p>
			<a href="#">Logout</a>
			@else
					<!-- Not Logged in-->
			<a href="{!! url('login') !!}">Login</a> / <a href="#">Daftar</a>
			@endif
		</div>
	</div>
	<div class="col-xs-3 col-xs-offset-7">Bread Crumb</div>
</div>
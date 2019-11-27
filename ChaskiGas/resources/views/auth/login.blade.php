


@extends('layouts.login_l')

@section('title','login')

@section('style','login.css')
@section('content')
	<div class="body" style="background-image: url(images/full_image_1.jpeg);"></div>
	<div class="grad"></div>
	@if (session()->has('flash'))
		<div class="alert alert-info" >
			{{session('flash')}}
		</div>
	@endif
	<div class="header">
		<div>Bien<span>venido</span></div>
	</div>
	<br>
	<div class="panel-body">
		<form method="POST" class="login" action="{{route('login')}}">
			@csrf
			<div class="form-group ">
				<input
					type="text" 
					placeholder="email" 
					name="email"
					value="{{old('email')}}"
				><br>
				{!!$errors->first('email','<span class="help-block text-white">:message</span>')!!}
			</div>
			<div class="form-group ">
				<input class="form-control"
					type="password" 
					placeholder="password" 
					name="password"
				><br>
				{!!$errors->first('password','<span class="help-block text-white">:message</span>')!!}
			</div>
			<div class="form-group">
				<select name ="tipo">
					<option value="Grifo">Grifo</option>
					<option value="Almacen">Almacen</option>
					<option value="Planta">Planta</option>
				</select><br>
				<input type="submit" value="Login" >
			</div>
		</form>
	</div>
@endsection()

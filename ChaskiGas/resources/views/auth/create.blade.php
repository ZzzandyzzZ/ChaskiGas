@extends('layouts.subWindow')
@section('title','createUser')
@section('content')
<section>
	
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel-title">
			<h1>Usuarios</h1>
		</div>

		<div class="panel-body">
			<form method="POST" action="\user">
				@csrf
				<div class="form-group">
					<label for="name" class="control-label">Nombre</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label for="email" class="control-label">E-mail</label>
					<input type="text" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="username" class="control-label">Nombre de Usuario</label>
					<input type="text" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label for="password" class="control-label">Contraseña</label>
					<input type="text" name="password" class="form-control">
				</div>
				<div class="form-group">
					<select name ="role">
						<option value="admin_grifo">Grifo</option>
						<option value="admin_almacen">Almacen</option>
						<option value="admin_planta">Planta</option>
					</select>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-default">
						Registrar usuario
					</button>
				</div>
			</form>
		</div>
	</div>

</section>
@endsection()

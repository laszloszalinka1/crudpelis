@extends('layouts.app')
@section('content')
<section class="containter">
	<div class="row">
		<article class="col-md-10 col-md-offset-1">
			<form action="{{route('user/update',['id' => $user->id])}}" method="post" novalidate>
				@csrf
				<div class="form-group">
					<label>Nombre</label>
					<input type="text" name="name" class="form-control" required value="{{$user->name}}">
				</div>
				<div class="form-group">
					<label>Correo eléctronico</label>
					<input type="text" name="email" class="form-control" required value="{{$user->email}}">
				</div>
				<div class="form-group">
					<label>Contraseña</label>
					<input type="password" name="password" class="form-control" required value="{{$user->password}}">
				</div>
				<div class="form-group">
					<label>Estado</label>
					<input type="text" name="status_id" class="form-control" required value="{{$user->status_id}}">
				</div>
				<div class="form-group">
					<label>Rol</label>
					<input type="text" name="role_id" class="form-control" required value="{{$user->role_id}}">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Enviar</button>
				</div>
			</form>
		</article>
	</div>
</section>
@endsection
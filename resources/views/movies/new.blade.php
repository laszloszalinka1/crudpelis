@extends('layouts.app')
@section('content')
	<section class="container">
		<div class="row">
	<article class="col-md-10 col-md-offset-1">
		<form action="{{route('movie.store')}}" method="post" novalidate>
			@csrf
				<div class="form-group">
					<label>Nombre</label>
					<input type="text" name="name" class="form-control" required>
				</div>

				<div class="form-group">
					<label>Descripción</label>
					<input type="text" name="description" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Usuario</label>
					<input type="text" name="user_id" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Estado</label>
					<input type="text" name="status_id" class="form-control" required>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Enviar</button>
				</div>
		</form>
		
	</article>
</div>
</section>
@endsection
@extends('layouts.app')
@section('content')
	<section class="container">
		<div class="row">
			<article class="col-md-12">
				<form action="{{route('categorie/show')}}" method="post" novalidate class="form-inline">
					@csrf
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control">

					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-default">Buscar</button>
						<a href="{{route('categorie.index')}}" class="btn btn-primary">Todo</a>
						<a href="{{route('categorie.create')}}" class="btn btn-primary">Crear</a>
					</div>
				</form>
			</article>
			<article class="col-md-12">
				<table class="table table-condensed table-striped table-bordered">
					<thead>
						<tr>
							<th>Fecha inicio</th>
							<th>Fecha fin</th>
							<th>Total</th>
							<th>Usuario</th>
							<th>Estado</th>
							<th>Acción</th>
						</tr>
					</thead>
					<tbody>
						@foreach($categories as $categorie)
						<tr>
							<td>{{$categorie->start_date}}</td>
							<td>{{$categorie->end_date }}</td>
							<td>{{$categorie->total }}</td>
							<td>{{$categorie->user_id }}</td>
							<td>{{$categorie->status_id }}</td>
							<td>
								<a class="btn btn-primary btn-xs" href="{{route('categorie.edit', ['id' => $categorie->id]) }}">Editar</a>
								<a class="btn btn-danger btn-xs" href="{{route('categorie.destroy', ['id' => $categorie->id]) }}">Eliminar</a>
							</td>

						</tr>
						@endforeach
					</tbody>
				</table>
				
			</article>
		</div>

		
	</section>
	@endsection
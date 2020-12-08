@extends('layouts.app')
@section('content')
	<section class="container">
		<div class="row">
			<article class="col-md-12">
				<form action="{{route('type_status/show')}}" method="post" novalidate class="form-inline">
					@csrf
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control">

					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-default">Buscar</button>
						<a href="{{route('type_status.index')}}" class="btn btn-primary">Todo</a>
						<a href="{{route('type_status.create')}}" class="btn btn-primary">Crear</a>
					</div>
				</form>
			</article>
			<article class="col-md-12">
				<table class="table table-condensed table-striped table-bordered">
					<thead>
						<tr>
							<th>Nombre</th>
							
						</tr>
					</thead>
					<tbody>
						@foreach($type_status as $type_status)
						<tr>
							<td>{{$type_status->name}}</td>
							
							<td>
								<a class="btn btn-primary btn-xs" href="{{route('type_status.edit', ['id' => $type_status->id]) }}">Editar</a>
								<a class="btn btn-danger btn-xs" href="{{route('type_status.destroy', ['id' => $type_status->id]) }}">Eliminar</a>
							</td>

						</tr>
						@endforeach
					</tbody>
				</table>
				
			</article>
		</div>

		
	</section>
	@endsection
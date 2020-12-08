@extends('layouts.app')
@section('content')
<section class="containter">
	<div class="row">
		<article class="col-md-10 col-md-offset-1">
			<form action="{{route('role/update',['id' => $role->id])}}" method="post" novalidate>
				@csrf
				<div class="form-group">
					<label>Nombre</label>
					<input type="text" name="name" class="form-control" required value="{{$role->name}}">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Enviar</button>
				</div>
			</form>
		</article>
	</div>
</section>
@endsection
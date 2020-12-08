@extends('layouts.app')
@section('content')
<section class="containter">
	<div class="row">
		<article class="col-md-10 col-md-offset-1">
			<form action="{{route('type_status/update',['id' => $type_status->id])}}" method="post" novalidate>
				@csrf
				<div class="form-group">
					<label>Nombre</label>
					<input type="text" name="name" class="form-control" required value="{{$type_status->name}}">
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-success">Enviar</button>
				</div>
			</form>
		</article>
	</div>
</section>
@endsection
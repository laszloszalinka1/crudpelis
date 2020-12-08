@extends('layouts.app')
@section('content')
<section class="containter">
	<div class="row">
		<article class="col-md-10 col-md-offset-1">
			<form action="{{route('rental/update',['id' => $rental->id])}}" method="post" novalidate>
				@csrf
				<div class="form-group">
					<label>Fecha inicio</label>
					<input type="date" name="start_date" class="form-control" required value="{{$rental->start_date}}">
				</div>
				<div class="form-group">
					<label>Fecha fin</label>
					<input type="date" name="end_date" class="form-control" required value="{{$rental->end_date}}">
				</div>
				<div class="form-group">
					<label>Total</label>
					<input type="text" name="total" class="form-control" required value="{{$rental->total}}">
				</div>
				<div class="form-group">
					<label>Usuario</label>
					<input type="text" name="user_id" class="form-control" required value="{{$rental->user_id}}">
				</div>
				<div class="form-group">
					<label>Estado</label>
					<input type="text" name="status_id" class="form-control" required value="{{$rental->status_id}}">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Enviar</button>
				</div>
			</form>
		</article>
	</div>
</section>
@endsection
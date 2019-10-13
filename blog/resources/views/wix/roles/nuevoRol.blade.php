@extends('plantillas.admin')

@section('titulo','Nueva Categoria')

@section('contenido')

	<div class="row">
		<div class="col">
			<br><br><br><br>
			<h2>Nuevo Rol</h2>
			<form method="post" action="/roles">
				<!-- sin esto sale un error 419 -->
				@csrf
			  <div class="form-group">
			    <label for="categoria">Rol</label>
			    <input type="text" class="form-control" id="rol" name="rol" placeholder="Nombre del rol">
			  </div>
			  <button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		</div>
	</div>

@endsection
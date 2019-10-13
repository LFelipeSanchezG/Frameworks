@extends('plantillas.admin')

@section('titulo','Nueva Categoria')

@section('contenido')

	<div class="row">
		<div class="col">
			<br><br><br><br>
			<h2>Nueva Categoría</h2>
			<form method="post" action="/categorias">
				<!-- sin esto sale un error 419 -->
				@csrf
			  <div class="form-group">
			    <label for="categoria">Categoria</label>
			    <input type="text" class="form-control" id="categoria" name="nombre" placeholder="Nombre de la categoria">
			  </div>
			  <button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		</div>
	</div>

@endsection
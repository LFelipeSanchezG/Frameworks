@extends('plantillas.admin')

@section('titulo','Categorias')

@section('contenido')

	<div class="row">
		<div class="col">
			<br><br><br><br>
			<h2>CATEGORÍAS</h2>
			<table class="table table-hover">
				<thead class="thead-light">
					<tr>
						<th>#</th>
						<th>Categoria</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				<thead>

				@foreach($categorias as $categoria)
				<tbody>
					<tr>
						<td>{{$loop->index+1}}</td>
						<td>{{$categoria->nombre}}</td>
						<td><a class="btn btn-primary" href="/categorias/{{$categoria->id}}/edit" role="button">Editar</a></td>
						<td>
							<form method="post" action="/categorias/{{$categoria->id}}">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-outline-danger">Eliminar</button>

							</form>
						</td>
					</tr>
				</tbody>
				@endforeach

			</table>

		</div>
	</div>

@endsection
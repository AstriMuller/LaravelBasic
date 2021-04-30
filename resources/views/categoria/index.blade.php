@extends('layouts.app')

@section('content')
<div class="container">


@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
	{{Session::get('mensaje') }}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
</button>

</div>
@endif




<a href="{{url('categoria/create') }}" class="btn btn-success"> Crear nueva categoría</a>
<br/>
<br/>
<table class="table table-light">
	<thead class="thead-light">
		<tr>
			<th>Nro</th>
			<th>Categoria</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach( $categorias as $categoria)
		<tr>
			<td>{{$categoria->id}}</td>
			<td>{{$categoria->name}}</td>
			<td>
				<a href="{{url('/categoria/'.$categoria->id.'/edit' )}}" class="btn btn-warning">
					Editar

				</a>
				| 
			<form action="{{url('/categoria/'.$categoria->id )}}" class="d-inline" method="post">
				@csrf
				{{method_field('DELETE') }}
				<input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
			</form> 
			 </td>
		</tr>

		@endforeach
	</tbody>		
	</table>
	{!! $categorias->links() !!}
</div>
@endsection
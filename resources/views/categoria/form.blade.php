
<h1>{{ $modo }} categoria</h1>


@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
	<ul>
@foreach( $errors->all() as $error)
	<li>{{ $error}}</li>
@endforeach
</ul>
</div> 

	

@endif
<div class="form-group">

<label for="name"> Categoria</label>


	<input type="text" class="form-control" name="name" value="{{ isset($categoria->name)?$categoria->name:old('name') }}" id="name" >
	<br>
 	</div>


	<input class="btn btn-success" type="submit" value="{{ $modo }} datos">
	
	<a class="btn btn-primary" href="{{url('categoria') }}"> Regresar </a>
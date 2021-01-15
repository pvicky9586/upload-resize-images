@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col">	
			<h2>Resize Imagen (cambiar dimenciones de imagen)</h2>
		 	<div class="card">
				<div class="card-body">

				<form action="{{route('submit')}}" method="post" enctype="multipart/form-data">
				@csrf
				  <div class="form-group">
					Selecctinar imagen<input type="file" name="file" accept="image/*" class="form-control"><br>
					@error('file')
					<small class="text-danger">{{$message}}</small>
					@enderror
				  </div>
				  
				  <button type="submit" class="btn btn-success">Subir imagen</button>
				</form>

			
				</div>
			</div> 
		</div>
		</div>
	</div>
@endsection

@extends('layouts.app')

@section('css')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" integrity="sha512-3g+prZHHfmnvE1HBLwUnVuunaPOob7dpksI7/v6UnF/rnKGwHf/GdEq9K7iEN7qTtW+S0iivTcGpeTBqqB04wA==" crossorigin="anonymous" />
@endsection


@section('content')
	<div class="container">
		<div class="row">
			<div class="col">				
			<h1>Subir imagen</h1>
			<h2>con Biblioteca Intervencion Imagen</h2>
		 	<div class="card">
				<div class="card-body">
					<form action="{{route('files.store')}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							Selecctinar imagen<input type="file" name="file" accept="image/*"><br>
							@error('file')
							<small class="text-danger">{{$message}}</small>
							@enderror
						</div>
						<button type="submit" class="btn btn-primary">Subir imagen</button>
					</form>
				</div>
			</div> 
			

			<h2>con plugin Dropzone</h2>
			<h4>Upload mediante ajax</h4>
			<form action="{{route('files.store')}}" method="post" class="dropzone"   id="my-awesome-dropzone">
	        </form>


			</div>
		</div>
		<p><b>Imagen de intervención</b>es una biblioteca de manejo y manipulación de imágenes PHP de código abierto. Proporciona una forma más fácil y expresiva de crear, editar y componer imágenes y es compatible con las dos bibliotecas de procesamiento de imágenes más </p>
		<small>si decides enviar por el plugin Dropzone, descomentas las lineas que correponden en el method store del controlador</small>
	</div>
@endsection



@section('js')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js" integrity="sha512-9WciDs0XP20sojTJ9E7mChDXy6pcO0qHpwbEJID1YVavz2H6QBz5eLoDD8lseZOb2yGT8xDNIV7HIe1ZbuiDWg==" crossorigin="anonymous"></script>

	<script>
		Dropzone.options.myAwesomeDropzone = {
			headers:{
				'X-CSRF-TOKEN' : "{{csrf_token()}}" //token
			},
		dictDefaultMessage: "Arrastre imagen al recuadro para subirla",
		acceptedFiles: "image/*", 
		maxFilesize: 2, 
		maxFiles: 4,
		};
	</script>
@endsection
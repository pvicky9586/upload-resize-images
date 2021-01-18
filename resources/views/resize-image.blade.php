@extends('layouts.app')

@section('content')
		<section style="padding-top: 5%;">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header text-center">
							<small class="display-3">Resize Image </small><br>
							<span class="">usando la biblioteca <b>'Intervention Image'</b></span>
						</div>
						<div class="card-body">
							<form method="POST" action="{{route('image-resize')}}" enctype="multipart/form-data">
								@csrf
								<div class="form-group">
									<label for="file">Choose Image</label>
									<input type="file" name="file" class="form-control" accept="image/*">
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							

							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

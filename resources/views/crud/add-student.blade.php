<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<section style="padding-top: 5%;">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header text-center">
							<small class="display-3">Add New Student</small>
						</div>
						<div class="card-body">
							<form method="POST" action="" enctype="multipart/form-data">
								@csrf

								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" name="name" class="form-control">
								</div>
								<div class="form-group">
									<label for="file">Choose Image</label>
									<input type="file" name="file" class="form-control" accept="image/*" onchange="previewFile(this)">
									<img id="previewImg" alt="Profile Image" style="max-width: 130px; margin-top:30px; ">
								</div>

								<button type="submit" class="btn btn-primary">Submit</button>						

							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

	<script>
		function previewFile(input){
			var file=$("input[type=file]").get(0).files[0];
			if(file)
			{
				var reader = new FileReader();
				reader.onload = function(){
					$('#prevenwImg').attr("src",reader.result);
				}
				reader.readAsDataUrl(file);
			}
		}
	</script>

</body>
</html>		
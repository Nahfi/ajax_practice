<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf_token" content="{{ csrf_token() }}">
	<title>Development Area</title>
	<link rel="stylesheet" href="{{ asset("assets/fonts/all.css") }}">
	<link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
	<link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
	<link rel="stylesheet" href="{{ asset("assets/css/responsive.css") }}">
</head>
<body>
	
	

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Sign Up</h2>
				<form action="">
					<div class="form-group">
						<label for="">Name</label>
						<input class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input class="form-control" type="text">
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Sign Up">
					</div>
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="{{ asset("assets/js/jquery-3.4.1.min.js") }}"></script>
	<script src="{{ asset("assets/js/popper.min.js") }}"></script>
	<script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
	<script src="{{ asset("assets/js/custom.js") }}"></script>
</body>
</html>
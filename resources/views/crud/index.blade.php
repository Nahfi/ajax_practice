<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<meta name="csrf_token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/dt-1.11.3/datatables.min.css"/>
	<link rel="stylesheet" href="{{ asset("assets/fonts/all.css") }}">
	<link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
	<link rel="stylesheet" href="{{ asset("assets/css/responsive.css") }}">
</head>
<body>
	
	 <br>
	 <br>
	 <br>


	<div class="wrap-table ">
		<a  class="btn btn-sm btn-primary" data-toggle="modal"    href="#mod">Add new Student</a>
		<div class="card">
			<div class="card-body">
				<h2>All Data</h2>
				<table id="data" class="table table-striped">
					<thead >
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>roll</th>
							<th>email</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="table_data">
						@foreach ($all as $a)
													<tr>
							<td>{{ $loop->index+1 }}</td>
							<td>{{ $a->name }}</td>
							<td>{{ $a->roll }}</td>
							<td>{{ $a->email }}</td>
							<td><img src="{{ asset($a->photo) }}" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="#">View</a>
								<a id="edit" x="{{$a->id  }}"class="btn btn-sm btn-warning" data-toggle="modal"    href="#edit">Edit</a>
								<a class="btn btn-sm btn-danger" href="#">Delete</a>
							</td>
						</tr>
						@endforeach

						

					</tbody>
				</table>
			</div>
		</div>
	</div>
	


<div  id="mod" class="modal fade">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
		
			    <div class="modal-header">
					<div id="err" class="err">

					</div>
					<h4>add new student</h4>
				</div>
			    <div class="modal-body">

					<form id="add_record" action=" " method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="">Name</label>
							<input class="form-control" type="text" name="name">
						</div>
						<div class="form-group">
							<label for="">roll</label>
							<input class="form-control" type="text" name="roll">
						</div>
						<div class="form-group">
							<label for="">email</label>
							<input class="form-control" type="email" name="email">
						</div>
						<div class="form-group">
				              <img src="" alt="" id="load" style="height="150x"; width="150px"">
							<input     style="display: none" id="x" class="form-control" type="file" name="photo">
							<label for="x"> <img src="{{ asset("/icon/cam.jpg") }}" width="40px"  height="40px"   alt=""></label>
						</div>
						<div class="form-group">
							<input class="btn btn-primary" type="submit" value="Sign Up">
						</div>
					</form>
				</div>
			  
		</div>
	</div>
</div>
<div  id="edit" class="modal fade">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
		
			    <div class="modal-header">
					<div id="err" class="err">

					</div>
					<h4>edit</h4>
				</div>
			    <div class="modal-body">

					<form id="add_record" action=" " method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="">Name</label>
							<input class="form-control" type="text" name="name" id="name">
						</div>
						<div class="form-group">
							<label for="">roll</label>
							<input class="form-control" type="text" name="roll" id="roll">
						</div>
						<div class="form-group">
							<label for="">email</label>
							<input class="form-control" type="email" name="email" id="email">
						</div>
						<div class="form-group">
				              <img src="" alt="" id="load1" style="height="150x"; width="150px"">
							<input     style="display: none" id="y" class="form-control" type="file" name="photo">
							<label for="x"> <img src="{{ asset("/icon/cam.jpg") }}" width="40px"  height="40px"   alt=""></label>
						</div>
						<div class="form-group">
							<input class="btn btn-primary" type="submit" value="Sign Up">
						</div>
					</form>
				</div>
			  
		</div>
	</div>
</div>




	<!-- JS FILES  -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	
	<script src="{{ asset("assets/js/popper.min.js") }}"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.6.0/dt-1.11.3/datatables.min.js"></script>
	<script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
	<script src="{{ asset("assets/js/custom.js") }}"></script>
</body>
</html>
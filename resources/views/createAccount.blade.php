@extends('blogg.layout')
@section('title','SignUp')
@section('signup')
<div class="card text-center border-light offset-2 bg-light" style="max-width: 60rem;">
	<div class="card-header">
		SignUp Form
	</div>
	<div class="card-body">
		<div class="col-md-6" style="margin-left:250px; text-align: center;">
			@if(session()->has('message'))
		  		<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
		  			<strong>{{ session()->get('message') }}</strong>
		  			<button type="button" class="btn-close" style="width: 17px;padding: 0.99rem 1rem" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
		  @endif
		</div>

		<form action="create" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="container">
				<div class="form-row">
			    	<div class="col-md-6">
			      		<input type="text" name = "fname" class="form-control" placeholder="First name">
			      	@error('fname')
			    		<div class="alert-warning">
			    			{{ $message }}
			    		</div>
			    	@enderror
			    	</div>
			    	<div class="col-md-6">
			      		<input type="text" name="lname" class="form-control" placeholder="Last name">
			      		@error('lname')
			      			<div class="alert-warning">
			      				{{ $message }}
			      			</div>
			      		@enderror
			    	</div>
		  		</div><br>
		  		<div class="form-row">
			    	<div class="col-md-6">
			      		<input type="email"  name="email" class="form-control" placeholder="Please enter email address">
			      		@error('email')
			      			<div class="alert-warning">
			      				{{ $message }}
			      			</div>
			      		@enderror
			    	</div>
			    	<div class="col-md-6">
			      		<input type="password" name="password" class="form-control" placeholder="password">
			      		@error('password')
			      			<div class="alert-warning">
			      				{{ $message }}
			      			</div>
			      		@enderror
			    	</div>
		  		</div><br>
		  		<div class="form-row">
		  			<div class="col-md-6">
			      		<input type="text"  name="contact" class="form-control" placeholder="Contact">
			      		@error('contact')
			      			<div class="alert-warning">
			      				{{ $message }}
			      			</div>
			      		@enderror
			    	</div>
			    	<div class="col-md-6">
			      		<input type="text" name="address" class="form-control" placeholder="Address">
			      		@error('address')
			      			<div class="alert-warning">
			      				{{ $message }}
			      			</div>
			      		@enderror
			    	</div>
		  		</div>
			</div><br>
		  <button type="submit" class="btn btn-outline-success">Sign in</button>
		</form>
	</div>
	<div class="card-footer text-muted">
		The Locals
	</div>
</div>
@endsection



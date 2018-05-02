@extends('layout.master')

@section('title' , 'Login To System')


@section('content')


<div class="contaniar">
	

</div>

	<div class="row">
		
		<div class="col-md-3"></div>
		<div class="col-md-6">
			
			<form action="{{route('login_post')}}" method="POST">
			
			{!! csrf_field() !!}
			
			<div >
				<label for="email">Email Address</label>
				<input type="email" class="form-control" name="email" placeholder="Email Address">
			</div>


			<div >
				<label for="Password">Password</label>
				<input type="password" class="form-control" name="password" placeholder="password">
			</div>
<br>
			<div>
				<input type="submit" class="btn btn-success" name="s" value="Login">
			</div>


	</form>

		</div>
		<div class="col-md-3"></div>

	
	

</div

<br>
@stop
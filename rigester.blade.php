@extends('layout.master')

@section('title' , 'rigester To System')


@section('content')


<div class="contaniar">
	
@if(isset($update))



</div>
<h3>Update User Information</h3>

	<div class="row">
		
		<div class="col-md-3"></div>
		<div class="col-md-6">
			
			<form action="{{route('user_edit')}}" method="POST">

				<input type="hidden" name="user_id" value="{{$user->id}}">
			
			{!! csrf_field() !!}
			<div>
				<label for="Name">UserName</label>
				<input type="Text"  class="form-control" value="{{$user->name}}" name="name" placeholder="Name">
			</div>	
			<div >
				<label for="email">Email Address</label>
				<input type="email" class="form-control" value="{{$user->email}}" name="email" placeholder="Email Address">
			</div>


			<div >
				<label for="Password">Password</label>
				<input type="password" class="form-control" name="password" placeholder="password">
			</div>
<br>
			<div>
				<input type="submit" class="btn btn-success" name="s" value="Update User Info ">
			</div>


	</form>

		</div>
		<div class="col-md-3"></div>

	



@else


</div>

	<div class="row">
		
		<div class="col-md-3"></div>
		<div class="col-md-6">
			
			<form action="{{route('user_store')}}" method="POST">
			
			{!! csrf_field() !!}
			<div>
				<label for="Name">UserName</label>
				<input type="Name"  class="form-control" name="name" placeholder="Name">
			</div>	
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
				<input type="submit" class="btn btn-success" name="s" value="Rigester">
			</div>


	</form>

		</div>
		<div class="col-md-3"></div>

	
	

@endif

</div

<br>
@stop
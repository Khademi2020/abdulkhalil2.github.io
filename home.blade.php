@extends('layout.master')

@section('title' , 'rigester To System')


@section('content')


<div class="contaniar">
<h3>welcome to the home</h3>	

</div>


<div class="container">
<table class="table">
	<tr>
		<td>Name</td>
		<td>Email</td>
		<td>Delete</td>
		<td>Edite</td>
	</tr>

	@foreach($users as $user)
<tr>
	<td>{{$user->name}}</td>
	<td>{{$user->email}}</td>
	<td><a href="{{route('user_delete',['id' => $user->id]) }}">delete</a></td>
	<td><a href="{{route('user_update', ['id' => $user->id]) }}">edite</a></td>
</tr>
@endforeach

</table>

</div>
<br>
@stop
@extends('layouts.app')

@section('content')
	<div class="container">
		<h2>ACA van los Mails
			
		</h2>
		<form action="{{route('users.store')}}">
			<input type="text" name="first_name"> ingrese username</input>
			<input type="text"> ingrese password</input>
			<input type="submit" value="Enviar"></input>	
		</form>
		
	</div>

@endsection
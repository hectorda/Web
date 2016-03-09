@extends('layouts.app')

@section('content')
	<div class="container">
		@include('flash::message')
		<h2>Usuarios</h2>
		<hr>
		<a class="btn btn-primary pull-right" href="{!!url('users/create') !!}"><i class="fa fa-btn fa-user"></i>Agregar Nuevo</a>
		@include('users.table')
		{{--  {!! $users->render() !!} --}}
	</div>
@endsection
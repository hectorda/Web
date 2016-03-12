@extends('layouts.app')

@section('content')
    <div class="container">
        @include('flash::message')
        <h1 class="pull-left">Usuarios</h1>

        <div class="row">       
			<a class="btn btn-primary pull-right" href="{!!url('users/create') !!}"><i class="fa fa-btn fa-user"></i>Agregar Nuevo</a>
			
        </div>
        <hr>
        <div class="row">
            @if($users->isEmpty())
                <div class="well text-center">Usuarios no encontrados.</div>
            @else
                @include('users.table')
            @endif
        </div>
    
    </div>
@endsection
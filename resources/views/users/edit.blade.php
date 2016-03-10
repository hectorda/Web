@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Editar usuario</h3>
					</div>			
					<div class="panel-body">

					   {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch','class'=>'form-horizontal','files'=>true]) !!}
	                        @include('users.fields')
						{!! Form::close() !!}								
					</div>
				</div>
			</div>
		</div>
	</div>	

@endsection




@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Ingreso de usuario</h3>
					</div>			
					<div class="panel-body">

					   {!! Form::open(['route' => 'users.store','class'=>'form-horizontal','files'=>true]) !!}
	                        @include('users.fields')
						{!! Form::close() !!}
								
					</div>
				</div>
			</div>
		</div>
	</div>	

@endsection
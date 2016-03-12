<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Nombre</label>

    <div class="col-md-6">
        {!! Form::text('first_name', null, ['class' => 'form-control']) !!}

        @if ($errors->has('first_name'))
            <span class="help-block">
                <strong>{{ $errors->first('first_name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">

    {!! Form::label('last_name', 'Apellido', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
         {!! Form::text('last_name', null, ['class' => 'form-control']) !!}

        @if ($errors->has('last_name'))
            <span class="help-block">
                <strong>{{ $errors->first('last_name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('imagen') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Imagen</label>

    <div class="col-md-6">
        {!! Form::file('imagen', ['class' => 'form-control filestyle' , 'data-buttonText' => 'Elejir Archivo','data-buttonName'=>"btn-primary"]) !!}

        @if ($errors->has('rut'))
            <span class="help-block">
                <strong>{{ $errors->first('imagen') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="form-group{{ $errors->has('rut') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Rut</label>

    <div class="col-md-6">
        {!! Form::text('rut', null, ['class' => 'form-control']) !!}

        @if ($errors->has('rut'))
            <span class="help-block">
                <strong>{{ $errors->first('rut') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Dirección de E-Mail</label>

    <div class="col-md-6">
       {!! Form::text('email', null, ['class' => 'form-control']) !!}

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Contraseña</label>

    <div class="col-md-6">
        {!! Form::password('password', ['class' => 'form-control']) !!}

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Confirmar Contraseña</label>

    <div class="col-md-6">
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        
        @if ($errors->has('password_confirmation'))
            <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-user"></i>Registrar
        </button>
    </div>
</div>

@push('scripts')
    <script src="{{url('js/bootstrap-filestyle.min.js')}}"></script>
@endpush
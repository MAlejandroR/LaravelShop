@extends ("welcome")

@section ("contenido")
    <!-- un formulario con datos de contacto
-->
    @csrf

    <h1>Contacta con nosotros US Form</h1>
    @foreach($errors->all() as $error)
        <h1>Error        {{$error}}</h1>
    @endforeach

    {!! Form::open(['route'=>'enviar_msj','method'=>'POST']) !!}
    <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
        {!! Form::label('Nombre') !!}
        {!! Form::text('nombre', old('nombre'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
        <span class="text-danger">{{ $errors->first('nombre') }}</span>
    </div>

    <div class="form-group {{ $errors->has('mail') ? 'has-error' : '' }}">
        {!! Form::label('Email') !!}
        {!! Form::text('mail', old('mail'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
        <span class="text-danger">{{ $errors->first('mail') }}</span>
    </div>
    <div class="form-group {{ $errors->has('mensaje') ? 'has-error' : '' }}">
        {!! Form::label('Message') !!}
        {!! Form::textarea('mensaje', old('mensaje'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
        <span class="text-danger">{{ $errors->first('mensaje') }}</span>
    </div>
    <div class="form-group">
        <button class="btn btn-success">Enviar mensaje!</button>
    </div>


    {!! Form::close() !!}

@endsection


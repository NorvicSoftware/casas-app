@extends('plantilla')
@section('contenido')
<x-menu />
<h1>{{ __('New Client') }}</h1>
<form action="{{ route('clientes.store') }}" method="POST">
    @csrf
    <div>
        <label>{{ __('Name') }}</label>
        <input type="text" maxlength="50" name="nombre" required />
        @if ($errors->has('nombre'))
            <p>{{ $errors->first('nombre') }}</p>
        @endif
    </div>
    <div>
        <label>{{ __('Phone') }}</label>
        <input type="text" name="telefono" maxlength="15" />
        @if ($errors->has('telefono'))
            <p>{{ $errors->first('telefono') }}</p>
        @endif
    </div>
    <div>
        <label>{{ __('Email') }}</label>
        <input type="email" name="email"  maxlength="50"/>
        @if ($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
        @endif
    </div>
    <div>
        <label>{{ __('Address') }}</label>
        <input type="text" name="direccion" maxlength="1000" />
    </div>
    <div>
        <button type="submit">{{ __('Save') }}</button>
    </div>
</form>
@endsection
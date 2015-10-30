@extends('master')


@section('index')
    <br><h4>Formulaire d'inscription</h4>
    {!! Form::open(array('url' => 'auth/register')) !!}<br>
    {!! csrf_field() !!}
    {!! $errors->first('name') !!}
    {!! $errors->first('email') !!}
    {!! $errors->first('password') !!}

    {!! Form::label('name', 'Nom') !!}
    {!! Form::text('name', Input::old('name'), array('placeholder' => 'Votre nom...', 'class' => 'u-full-width')) !!}

    {!! Form::label('email', 'Addresse e-mail') !!}
    {!! Form::text('email', Input::old('email'), array('placeholder' => 'Votre e-mail...', 'class' => 'u-full-width')) !!}

    {!! Form::label('password', 'Mot de passe') !!}
    {!! Form::password('password', array('class' => 'u-full-width')) !!}

    {!! Form::label('password_confirmation', 'Confirmation de mot de passe') !!}
    {!! Form::password('password_confirmation', array('class' => 'u-full-width')) !!}

    {!! Form::submit('Se connecter') !!}
    {!! Form::close()  !!}
@endsection
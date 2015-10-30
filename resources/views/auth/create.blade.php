@extends('master')

@section('index')
    <br><h4>Creation d'un article</h4>
    {!! Form::open(array('action' => 'Admin\PostsController@store')) !!}<br>
    {!! csrf_field() !!}
    {!! $errors->first('title') !!}
    {!! $errors->first('content') !!}

    {!! Form::label('title', 'Titre de l\'article') !!}
    {!! Form::text('title', Input::old('title'), array('class' => 'u-full-width')) !!}

    {!! Form::label('content', 'Contenu') !!}
    {!! Form::textarea('content', Input::old('content'), array('class' => 'u-full-width')) !!}

    {!! Form::label('categorie', 'Catégorie') !!}
    {!! Form::select('categorie', array('Algorithmie', 'Programmation')) !!}

    {!! Form::submit('Envoyer') !!}
    {!! Form::close() !!}
@endsection
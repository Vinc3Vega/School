@extends('master')

@section('index')
    <br><h4>Edition d'un article</h4>
    {!! Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT')) !!}
    {!! csrf_field() !!}
    {!! $errors->first('title') !!}
    {!! $errors->first('content') !!}

    {!! Form::label('title', 'Titre de l\'article') !!}
    {!! Form::text('title', $post->title, array('class' => 'u-full-width')) !!}

    {!! Form::label('content', 'Contenu') !!}
    {!! Form::textarea('content', $post->content, array('class' => 'u-full-width')) !!}

    {!! Form::label('categorie', 'Catégorie') !!}
    {!! Form::select('categorie', array('Algorithmie', 'Programmation')) !!}

    {!! Form::submit('Envoyer') !!}
    {!! Form::close() !!}
@endsection
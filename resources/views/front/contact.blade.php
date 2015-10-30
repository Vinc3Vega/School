@extends('master')

@section('index')
    <div class="row" style="margin-top:50px">
        <div class="twelve columns">
        {!! Form::open() !!}
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class' => 'u-full-width', 'placeholder' => 'Your e-mail here...',]) !!}
        {!! Form::label('comment', 'Message') !!}
        {!! Form::textarea('comment', null , ['class' => 'u-full-width', 'placeholder' => 'Your comment...']) !!}
        {!! Form::select('categorie', ['Algorithmie', 'Programmation']) !!}
        <button>Submit</button>
        {!! Form::close() !!}
        <hr>
        </div>
    </div>
@endsection
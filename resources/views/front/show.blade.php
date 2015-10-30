@extends('master')

@section('index')
    <div class="row" style="margin-top:50px">
        <div class="row">
            <div class="four columns">
                @foreach($post->medias as $index => $media)
                    @if($index!=0 && $media->m_filename != "")
                        {!! HTML::image($media->m_filename) !!}
                    @endif
                @endforeach
            </div>
            <div class="eight columns">
                <h3>{!! $post->title !!}</h3>
                <p>{!! $post->content !!}</p>
                <em>{!! $post->published_at !!}</em>
            </div>
        </div>
        <br><br><br><hr>
        {!! Form::open(['url' => route('comment.store')]) !!}
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class' => 'u-full-width', 'placeholder' => 'Votre e-mail ici...',]) !!}
        {!! Form::label('message', 'Message') !!}
        {!! Form::textarea('message', null , ['class' => 'u-full-width', 'placeholder' => 'Votre commentaire...']) !!}
        <div style="display:none">{!! Form::text('idPost', $post->id) !!}</div>
        <button>Envoyer</button>
        {!! Form::close() !!}
        <hr>
        <h4>Commentaires :</h4>
        @foreach($post->comments as $comment)
            <div class="comment">
            {!! HTML::mailto($comment->c_email) !!}<br>
            {!! $comment->c_message !!}<br><br>
            </div>
        @endforeach
    </div>
@endsection
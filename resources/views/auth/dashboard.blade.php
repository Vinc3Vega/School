@extends('master')

@section('index')
    <div style="margin-top:50px">
        <h3>Administration</h3>
        <br>
        @foreach($posts as $key => $post)
            <div class="row post">
                <div class="four columns">
                    @foreach($post->medias as $index => $media)
                        @if($index==0)
                            <a href="post/{!! $post->slug !!}">
                                {!! HTML::image($media->m_filename) !!}
                            </a>
                        @endif
                    @endforeach
                </div>
                <div class="eight columns">
                    <a href="post/{!! $post->slug !!}">
                        <h5>{!! $post->title !!}</h5>
                    </a>
                    <?php $i = 0; ?>
                    <p>{!! str_limit($post->content, 60) !!}</p>
                    @foreach($post->comments as $comment)
                        <?php $i += count($comment); ?>
                    @endforeach
                    <em>Nombre de commentaires : {{ $i }}</em>
                    <br><br>
                    <div class="row">
                        <div class="six columns">
                            <a class="button" href="{{ URL::to('posts/' . $post->id . '/edit') }}">Editer</a>
                        </div>
                        <div class="six columns">
                            {!! Form::open(array('url' => 'posts/' . $post->id))!!}
                            {!! Form::hidden('_method', 'DELETE')!!}
                            {!! Form::submit('Supprimer', array('class' => 'button'))!!}
                            {!! Form::close()!!}
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="list">{!! $posts->render() !!}</div>
@endsection
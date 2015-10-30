@extends('master')

@section('index')
    <div style="margin-top:50px">
        @foreach($posts as $key => $post)
            @if($key==0 && $post->categorie_id==1)
                <h3>Catégorie : Algorithmie </h3>
            @endif
            @if($key==0 && $post->categorie_id==2)
                <h3>Catégorie : Programmation </h3>
            @endif
            <div class="row post">
                <div class="four columns">
                    @foreach($post->medias as $index => $media)
                        @if($index==0)
                            <a href="../post/{!! $post->slug !!}">
                                {!! HTML::image($media->m_filename) !!}
                            </a>
                        @endif
                    @endforeach
                </div>
                <div class="eight columns">
                    <a href="../post/{!! $post->slug !!}">
                        <h5>{!! $post->title !!}</h5>
                    </a>
                    <?php $i = 0; ?>
                    <p>{!! str_limit($post->content, 60) !!}</p>
                    @foreach($post->comments as $comment)
                        <?php $i += count($comment); ?>
                    @endforeach
                    <em>Nombre de commentaires : {!! $i !!}</em>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@extends('app')
@section('content')

    @if(count($articles) > 1)
        @foreach($articles as $article)
            <article>
                <h3>
                   <a href="{{ url('/article', $article->id) }}">
                       {{ $article->title }}
                   </a>
                </h3>
                <div class="media-body">
                    {{ $article->body }}
                </div>
                <div class="">
                    {{ $article->published_at }}
                </div>
            </article>


        @endforeach
    @else
     <h2>Пока нет статей</h2>
    @endif

    <a href="{{ url('/articles/create')}}"><button type="button" class="btn btn-primary">Добавить статью</button></a>
    @stop
@extends('app')
@section('content')

    @if(count($articles) > 1)
        @foreach($articles as $article)
            <article>
                <h1>
                   <a href="{{ url('/articles', $article->id) }}">
                       {{ $article->title }}
                   </a>
                </h1>
                <div class="media-body">
                    {{ $article->body }}
                </div>
                <div class="">
                    {{ $article->published_at }}
                </div>
                <div class="bg-danger">
                   Автор:  {{ $article->user->name }}
                </div>
            </article>


        @endforeach
    @else
     <h2>Пока нет статей</h2>
    @endif


    @stop
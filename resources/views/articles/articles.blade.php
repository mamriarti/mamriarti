@extends('app')
@section('content')
    
    @if(count($articles) > 1)
        @foreach($articles as $article)
            <article>
                <h3>
                   <a href="{{ url('/article/', $article->id) }}">
                       {{ $article->title }}
                   </a>
                </h3>
            </article>
            <div class="media-body">
                {{ $article->body }}
            </div>
        @endforeach
    @else
     <h2>Пока нет статей</h2>
    @endif
    @stop
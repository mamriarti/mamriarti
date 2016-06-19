@extends('app')

    @section('content')

        <h1>Edit:  {!! $article->title !!}</h1>

        <div class="row">
            <div class="col-md-6">
                {!! Form::model($article,
                [
                'method' => 'PATCH',
                 'action' => ['ArticlesController@update', $article->id]
                ] ) !!}

                @include('articles._form', ['submitButton' => 'Редактировать'])
                {!! Form::close() !!}
            </div>
            <div class="col-md-6">

                @include('errors._listarticle')

            </div>
        </div>
    @stop

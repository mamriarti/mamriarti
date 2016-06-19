@extends('app')
@section('content')
    <h2>Создание Статьи</h2>
    <hr>
<div class="row">
    <div class="col-md-6">
        {!! Form::open(array('url' => 'articles')) !!}
            @include('articles._form', ['submitButton' => 'Добавить Статью'])

        {!! Form::close() !!}
    </div>
    <div class="col-md-6">

        @include('errors._listarticle')

    </div>
</div>
@stop

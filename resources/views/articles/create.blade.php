@extends('app')
@section('content')
    <h2>Создание Статьи</h2>
    <hr>
<div class="row">
    <div class="col-md-6">
        {!! Form::open(array('url' => 'articles')) !!}
            <div class="form-group">
                {!! Form::label('title', 'Название: ') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('body', 'Текст: ') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
            </div>
        <div class="form-group">
            {!! Form::submit('Добавить статью', ['class' => 'btn btn-primary form-control']) !!}

        </div>
        {!! Form::close() !!}
    </div>
    <div class="col-md-6">

    </div>
</div>
@stop

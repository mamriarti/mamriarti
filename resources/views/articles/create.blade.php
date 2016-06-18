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
                {!! Form::label('published_at', 'Вести дату: ') !!}
                {!! Form::input('date','published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Добавить статью', ['class' => 'btn btn-primary form-control']) !!}

            </div>
        {!! Form::close() !!}
    </div>
    <div class="col-md-6">

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>

        @endif

    </div>
</div>
@stop
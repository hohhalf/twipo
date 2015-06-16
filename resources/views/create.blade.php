@extends('master')
@section('content')
    <h1>Создать твип</h1>
    {!!Form::open()!!}
        <div class="form-group">
            {!! Form::label('title', 'Заголовок:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
            {!! Form::label('published_by', 'Имя:') !!}
            {!! Form::text('published_by', null, ['class' => 'form-control']) !!}
            {!! Form::label('twip', 'Твип:') !!}
            {!! Form::textarea('twip', null, ['class' => 'form-control']) !!}
            <br>
            {!! Form::submit('Твипнуть', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!!Form::close()!!}
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
@stop
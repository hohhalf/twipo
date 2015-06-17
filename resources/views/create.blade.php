@extends('master')
@section('content')
    <h1>Создать твип</h1>
    {!!Form::open()!!}
@include('partials.form', ['submit_button' => 'Создать']))
    {!!Form::close()!!}
    @include('errors.myerrors')
@stop
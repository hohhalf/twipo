@extends('master')
@section('content')
    <h1>Редактировать: {!! $twip->title!!}</h1>
    {!!Form::model($twip, ['method' => 'PATCH', 'action' => ['TwipsController@update', $twip->id]])!!}
@include('partials.form', ['submit_button' => 'Изменить'])
    {!!Form::close()!!}
    @include('errors.myerrors')
@stop
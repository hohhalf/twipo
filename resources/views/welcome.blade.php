@extends('master')
@section('content')
@foreach($twips as $twip)
   <div class="modal-content">
    <h2><a href="{{action('TwipsController@single_twip', [$twip->id])}}">{{$twip->title}}</a></h2>
        <div class="body">
            <h3>{{$twip->twip}}</h3>
        </div>
   </div>
@endforeach
@endsection
@stop
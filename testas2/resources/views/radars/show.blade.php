@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Radar</h1>
    <h1>Radar #{{$radar->id}}</h1>
    <div>
        <div>id: {{$radar->id}}</div>
        <div>date: {{$radar->date}}</div>
        <div>number: {{$radar->number}}</div>
        <div>distance: {{$radar->distance}}</div>
        <div>time: {{$radar->time}}</div>
        <div>speed: {{$radar->time / $radar->distance *3.6}}</div>
    </div>
    <div>
        <br>
        <a href="{{url('radars') }}">{{__('buttons.back')}}</a>
        <a href ="{{url ("/radars/$radar->id/edit")}}">{{__('buttons.edit')}}</a>
        <a href ="{{url ("/radars/$radar->id/delete")}}">{{__('buttons.delete')}}</a>
    </div>
</div>
 @endsection
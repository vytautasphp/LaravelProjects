@extends('layouts.app')
@section('content')

   
    <h1>delete driver</h1>
    
    <form method="post" action="{{url('radars', $radar->id)}}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <div>id: {{$radar->id}}</div>
    <div>date: {{$radar->date}}</div>
    <div>number: {{$radar->number}}</div>
    <div>distance: {{$radar->distance}}</div>
    <div>time: {{$radar->time}}</div>
    <div>speed: {{$radar->time / $radar->distance *3.6}}</div>
    <button type="submit">Delete</button>
</form>
<a href="{{url('radars') }}">Atgal</a>
@endsection
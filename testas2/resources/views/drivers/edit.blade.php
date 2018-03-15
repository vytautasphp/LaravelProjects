@extends('layouts.app')

@section('content')

    <h1>Edit driver</h1>
    <div class="radar">
    <form method="post" action="{{url('drivers', $driver->id)}}">
    
    {{ csrf_field() }}
    {{ method_field('PUT') }}
        <input name="name"value="{{$driver->name}}" >
        <input name="city"value="{{$driver->city}}" >
        <input name="id"value="{{$driver->id}}" >
        
        <button type="submit">{{__('buttons.save')}}</button>
    </form>
    </div>
    @endsection
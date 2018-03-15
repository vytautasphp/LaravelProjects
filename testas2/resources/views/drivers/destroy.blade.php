@extends('layouts.app')

@section('content')

    <h1>Delete driver</h1>
    <div class="radar">
    <form method="post" action="{{url('drivers', $driver->id)}}">
    
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
        <input name="name"value="{{$driver->name}}" >
        <input name="city"value="{{$driver->city}}" >
        <input name="id"value="{{$driver->id}}" >
        
        <button type="submit">{{__('buttons.delete')}}</button>
    </form>
    </div>
    <a href="{{url('drivers') }}">{{__('buttons.back')}}</a>
    
    @endsection
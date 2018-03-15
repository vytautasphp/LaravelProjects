@extends('layouts.app')

@section('content')

    <h1>Driver</h1>
 <h1>Driver #{{$driver->name}}</h1>
 <div class="radar">
 <div>name: {{$driver->name}}</div>
 <div>city: {{$driver->city}}</div>
 <div>id: {{$driver->id}}</div>
 </div>
 <br>
 <div class="radar">
 <a href="{{url('drivers') }}">Atgal</a>
 <a href ="{{url ("/drivers/{$driver->id}/edit")}}">{{__('buttons.edit')}}</a>
 <a href ="{{url ("/drivers/$driver->id/delete")}}">{{__('buttons.delete')}}</a>
 <div>
 @endsection
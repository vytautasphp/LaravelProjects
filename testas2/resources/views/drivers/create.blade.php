@extends('layouts.app')

@section('content')

    <h1>new driver</h1>
    <div class="radar">
    <form method="post" action="{{url("drivers")}}">
        {{ csrf_field() }}
        <input name="name" placeholder="name">
        <input name="city" placeholder="city">
        
        <button type="submit">{{__('buttons.save')}}</button>
    </form>
    </div>
    @endsection
@extends('layouts.app')

@section('content')


    <h1>Edit driver</h1>
    <br>
    <div class="radar">
    <form method="post" action="{{url('radars', $radar->id)}}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <p>Date
    <input name="date" placeholder="date"value="{{old('date',$radar->date)}}"></p>
    <p>Number
    <input name="number" placeholder="number"value="{{old('number',$radar->number)}}"></p>
    <p>Distance
    <input name="distance" placeholder="distance"value="{{old('distance',$radar->distance)}}"></p>
    <p>Time
    <input name="time" placeholder="time"value="{{old('time',$radar->time)}}"></p>
    <button type="submit">{{__('buttons.save')}}</button>
</form>
</div>
<a href="{{url('radars')}}">{{__('buttons.back')}}</a>
<div>  @if (count($errors))
@foreach($errors->all() as $error)
<p>{{ $error }}</p>
@endforeach
@endif
</div>
@endsection
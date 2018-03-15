@extends('layouts.app')

@section('content')

<div class="container">
    <h1>{{__('Speed')}}</h1>
    <table class="table">
 <tr>
 <th>{{ __('Date') }}</th>
 <th>{{ __('Number') }}</th>
 <th>{{ __('Speed') }}</th>
 <th>{{ __('Name') }}</th>
 <th>{{ __('Creator') }}</th>
 <th>{{ __('Created_at') }}</th>
 <th>{{ __('Updator') }}</th>
 <th>{{ __('Updated_at') }}</th>
 <th></th>
</tr>

@foreach($radars as $radar)
<tr>
 <td><a href="{{ url('radars', $radar->id) }}">{{$radar->date}}</a></td>
 <td><a href="{{ url('radars', $radar->id) }}">{{$radar->number}}</a></td>
 <td>{{round($radar->distance / $radar->time * 3.6)}}</td>
 <td>{{ $radar->driver ? $radar->driver->name : '' }}</td>
 <td>{{ $radar->creator->name }}</td>
 <td>{{ $radar->created_at }}</td>
 <td>{{ $radar->updator->name }}</td>
 <td>{{ $radar->updated_at }}</td>
 <tr>
    @endforeach 
</table>
    <div class="psl">{{ $radars->links() }}</div>
    <div class="psl"><a href="{{url('') }}">{{__('buttons.back')}}</a>
        <a href ="{{url('radars/create')}}">{{__('buttons.new')}}</a>
    </div>

</div>
    @endsection
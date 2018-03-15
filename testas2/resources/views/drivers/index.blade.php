@extends('layouts.app')

@section('content')

    <h1>Drivers</h1>
    <div class="radar">
 <table>  
    <tr>
    <th>id</th>
    <th>Name</th>
    <th>City</th>
    </th>
    @foreach($drivers as $driver)
    <tr>
        <td>{{$driver->id}}</td>
        <td><a href="{{url('drivers', $driver->id)}}">{{$driver->name}}</a></td>
        <td>{{$driver->city}}</td>
    </tr>

    @endforeach
    </table>
    </div>
    <div class="radar">
    {{ $drivers->links() }}
    <br>
    <a href="{{url('') }}">{{__('buttons.back')}}</a>
    <a href ={{url('drivers/create')}}>{{__('buttons.new')}}</a>
    </div>
    @endsection
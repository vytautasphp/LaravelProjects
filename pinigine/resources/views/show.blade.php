@extends('layouts.app')

@section('content')

    
 
    <div>Apie</div>
    <p>Baldai</p>

    @foreach($user as $users)
        <img src="failai/{{$users->name}}" alt=""width="150" height="150">
        {{$users->name}}
        <br/>
    @endforeach

    
    @include('inc.file')
    @endsection
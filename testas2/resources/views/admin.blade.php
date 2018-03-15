@extends('layouts.app')

@section('content')
<div class="container">
 
                <div class="panel-heading">Admin Dashboard</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @component('components.who')
                    @endcomponent
                    <a href="{{url('radars')}}">radars</a>
                    <a href="{{url('drivers')}}">drivers</a>
                </div>
            
</div>
@endsection

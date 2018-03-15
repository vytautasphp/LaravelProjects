@extends('layouts.app')

@section('content')

    <div class="container">
        <br>
        <div><a href="{{url('radars') }}">Automobiliai</a></div>
        <div><a href="{{url('drivers') }}">Vairuotojai</a></div>
    </div>
        <div class="container">
            <div class="row">
                <div class=".col-md-8.col-md-offset-2">
                    <div class="panel">
                        @component('components.who')
                         @endcomponent
                    </div>
                </div>
            </div>
        </div>
 
    @endsection

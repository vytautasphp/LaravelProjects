@extends('layouts.app')

@section('content')

    
 
   
   
   
    @include('inc.foto')
    @endsection
    
    @section('sidebar')
    @parent
        <p>this is appendet to sidebar</p>
    @endsection
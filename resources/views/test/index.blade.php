@extends('layouts.master')
@section('title')
    <title>Atlas Meteorológico del golfo de México</title>
@endsection
@section('content')

    <h1>Esta es mi página de prueba</h1>

    @if(count($Beatles) > 0)

        @foreach($Beatles as $Beatle)
            {{$Beatle }} <br>
        @endforeach
    @else
        <h1>Lo siento, no hay nada que mostrar...</h1>
    @endif
@endsection
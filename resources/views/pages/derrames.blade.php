@extends('layouts.master')

@section('title')
    <title>Escenarios de derrames de petróleo</title>
@endsection

@section('content')

    <!--main container -->
       <!--main container -->
<div class="wrapper">
{!! Breadcrumbs::render('derrames') !!}
     <div class="embed-container">
        <iframe   src="http://pronosticos.atmosfera.unam.mx/escenarios/" frameborder="0" allowfullscreen></iframe>
    </div>
    </div>


@endsection

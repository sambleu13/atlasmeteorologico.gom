@extends('layouts.master')

@section('title')
    <title>Rosas de viento</title>
@endsection

@section('content')

    <!--main container -->
       <!--main container -->
<div class="wrapper">
{!! Breadcrumbs::render('rosas_viento') !!}
     <div class="embed-container">
        <iframe width="560" height="315" src="http://pronosticos.unam.mx/rosasdevientos/" frameborder="0" allowfullscreen></iframe>
    </div>
    </div>


@endsection

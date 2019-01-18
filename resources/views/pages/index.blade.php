@extends('layouts.master')

@section('title')
    <title>Atlas Meteorológico del Golfo de México</title>
@endsection

@section('content')

  <!--main container -->
  <div class="row">
      <div class="col-md-12">
        @include('layouts.animation')
      </div>
  </div>

  <div class="wrapper">
      <div class="row">
          <div class="container">
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 visible-xs visible-sm visible-md visible-lg">
                  <!-- Columna izquierda -->
                  <div class="col-wrapper-left">
                      <div class="thumb-5">
		<a href="{{ asset('products#climatologias')}}">
                          <img src="{{ asset('img/productos/mosaico-climatologia.jpg')}}" class="img-responsive">
                          <div class="thumb-name"></div>
                          <div class="thumb-icons">
                              CLIMATOLOGÍAS
                          </div>
</a>
                      </div>
                  </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 visible-xs visible-sm visible-md visible-lg">
                  <div class="col-wrapper-center">
		      <div class="thumb-5">
			<a href="derrames">
			<!--<a href="{{ asset('products#esc_derrames')}}">-->
                          <img src="{{ asset('/img/mosaico-escenarios-inicio.jpg')}}" class="img-responsive">
                          <div class="thumb-name"></div>
                          <div class="thumb-icons">
                              ESCENARIOS DE DERRAMES DE PETRÓLEO
                          </div>
 			</a>
                      </div>
                  </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 visible-xs visible-sm visible-md visible-lg">
                  <!-- Columna derecha -->
                  <div class="col-wrapper-right ">
		      <div class="thumb-5">
			<a href="http://pronosticos.unam.mx:8080/atlasmeteorologico/mapviewer" target="_blank">
			<!--<a href="{{ asset('products#owgis')}}" >-->
                          <img src="{{ asset('img/mosaico-owgis-inicio.jpg')}}" class="img-responsive">
                          <div class="thumb-name"></div>
                          <div class="thumb-icons">
                              VISUALIZADOR OWGIS
                          </div>
			</a>
                      </div>
                  </div>
              </div><!-- fin columna derecha -->
          </div>
      </div>
  </div><!-- end wrapper -->

  <div class="row">
      <div class="container-fluid">
          <div class="col-md-12">
              @include('layouts.footer_slider')
          </div>
      </div>
  </div>

@endsection

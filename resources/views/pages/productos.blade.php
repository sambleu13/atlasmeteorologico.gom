@extends('layouts.master')

@section('title')
    <title>Productos</title>
@endsection

@section('content')

    <!--main container -->
    <div class="wrapper">
        <div class="row">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div id="climatologia"  class="f_sld_prod">

                        <h1>
                            <center>
                                <strong>
                                    <font color="#fff">
                                        CLIMATOLOGÍAS
                                    </font>
                                </strong>
                            </center>
                        </h1>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 visible-xs visible-sm visible-md visible-lg">
                    <!-- Columna izquierda -->
                    <div class="col-wrapper-left2">
                        <div class="thumb-5">
                            <a href="products/temp">
                            <img src="{{ asset('img/mosaico-temperatura.jpg')}}" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                                Temperatura
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 visible-xs visible-sm visible-md visible-lg">
                    <div class="col-wrapper-left2">
                        <div class="thumb-5">
                        <a href="products/viento">
                            <img src="{{ asset('img/mosaico-viento.jpg')}}" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                                Viento
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 visible-xs visible-sm visible-md visible-lg">
                    <!-- Columna derecha -->
                    <div class="col-wrapper-left2 ">
                        <div class="thumb-5">
                        <a href="products/precipitacion">
                            <img src="{{ asset('img/mosaico-precipitacion.jpg')}}" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                                Precipitación
                            </div>
                            </a>
                        </div>
                    </div>
                </div><!-- fin columna derecha -->

                         <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 visible-xs visible-sm visible-md visible-lg">
                    <!-- Columna derecha -->
                    <div class="col-wrapper-left2">
                        <div class="thumb-5">
                        <a href="products/capa_limite">
                            <img src="{{ asset('img/mosaico-altura-capa-limite.jpg')}}" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                                Altura de capa límite
                            </div>
                            </a>
                        </div>
                    </div>
                </div><!-- fin columna derecha -->
            </div>
        </div>
  
        <div class="row">
            <div class="container">


                          <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 visible-xs visible-sm visible-md visible-lg">
                    <!-- Columna derecha -->
                    <div class="col-wrapper-left2">
                        <div class="thumb-5">
                        <a href="products/evaporacion">
                            <img src="{{ asset('img/mosaico-evaporacion.jpg')}}" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                                Evaporación
                            </div>
                            </a>
                        </div>
                    </div>
                </div><!-- fin columna derecha -->

                       <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 visible-xs visible-sm visible-md visible-lg">
                    <div class="col-wrapper-left2">
                        <div class="thumb-5">
                        <a href="products/radiacion_larga">
                            <img src="{{ asset('img/mosaico-radiacion-larga.jpg')}}" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                                Radiación neta de onda larga
                            </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 visible-xs visible-sm visible-md visible-lg">
                    <!-- Columna izquierda -->
                    <div class="col-wrapper-left2">
                        <div class="thumb-5">
                        <a href="products/radiacion_corta">
                            <img src="{{ asset('img/mosaico-radiacion-corta.jpg')}}" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                                Radiación de onda corta
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
         
  
                       <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 visible-xs visible-sm visible-md visible-lg">
                    <!-- Columna derecha -->
                    <div class="col-wrapper-left2">
                        <div class="thumb-5">
                        <a href="products/humedad">
                            <img src="{{ asset('img/mosaico-humedad.jpg')}}" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                                Humedad relativa
                            </div>
                            </a>
                        </div>
                    </div>
                </div><!-- fin columna derecha -->
            </div>
        </div>



        <div class="row">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div id="esc_derrames"  class="f_sld_prod">

                        <h1>
                            <center>
                                <strong>
                                    <font color="#fff">
                                        ESCENARIOS DE DERRAMES DE PETRÓLEO
                                    </font>
                                </strong>
                            </center>
                        </h1>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="container">
            <div class="col-md-12">
            <a href="derrames" target="_blank">
              <img src="{{ asset('img/mosaicos-escenarios.jpg')}}"  class="img-responsive">
                </a>
            </div>
            </div>
        </div>



        <div class="row">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div id="owgis"  class="f_sld_prod">

                        <h1>
                            <center>
                                <strong>
                                    <font color="#fff">
                                        VISUALIZADOR OWGIS
                                    </font>
                                </strong>
                            </center>
                        </h1>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="container">
            <div class="col-md-12">
            <a href="http://pronosticos.unam.mx:8080/atlasmeteorologico/mapviewer" target="_blank">
                <img src="{{ asset('img/mosaico-owgis.jpg')}}" class="img-responsive">
                </a>
            </div>
            </div>
        </div>


    </div><!-- end wrapper -->


@endsection

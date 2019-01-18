@extends('layouts.master')

@section('title')
    <title>Viento</title>
@endsection

@section('content')


    <!--main container -->
     <div class="wrapper">
        <div class="row">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="f_sld_prod">

                        <h2>
                            <center>
                                <strong>
                                    <font color="#fff">
                                        VIENTO
                                    </font>
                                </strong>
                            </center>
                        </h2>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 visible-xs visible-sm visible-md visible-lg">
                    <!-- Columna izquierda -->
                    <div class="col-wrapper-left2">
                        <div class="thumb-5">
                        <a href="{{ asset('animaciones/vien_m')}}">
                            <img src="{{ asset('img/viento/mensual-viento.jpg')}}" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                                Mensual
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 visible-xs visible-sm visible-md visible-lg">
                    <div class="col-wrapper-left2">
                        <div class="thumb-5">
                        <a href="{{ asset('animaciones/vien_hm')}}">
                            <img src="{{ asset('img/viento/horaria-viento.jpg')}}" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                               Horaria mensual
                            </div>
                          </a>  
                        </div>
                    </div>
		</div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 visible-xs visible-sm visible-md visible-lg">
                    <!-- Columna derecha -->
                    <div class="col-wrapper-left2">
                        <div class="thumb-5">
                        <a href="{{ asset('animaciones/vien_mp')}}">
                            <img src="{{ asset('img/viento/max-mensual-viento.jpg')}}" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                                Máxima promedio mensual
                            </div>
                            </a>
                        </div>
                    </div>
                </div><!-- fin columna derecha -->
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 visible-xs visible-sm visible-md visible-lg">
                    <!-- Columna derecha -->
                    <div class="col-wrapper-left2">
                        <div class="thumb-5">
                        <a href="{{ asset('animaciones/vien_ma')}}">
                            <img src="{{ asset('img/viento/max-absoluta-mensual-viento.jpg')}}" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                                Máxima absoluta mensual
                            </div>
                          </a>
                        </div>
                    </div>
                </div><!-- fin columna derecha -->
                      </div>
        </div>
 
        <div class="row">
            <div class="container">
                 <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 visible-xs visible-sm visible-md visible-lg">
                    <!-- Columna derecha -->
                    <div class="col-wrapper-left2">
                        <div class="thumb-5">
                         <a href="{{ asset('products/viento/rosas_viento')}}">
                            <img src="{{ asset('img/viento/rosas.jpg')}}" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                                Rosas
                            </div>
                            </a>
                        </div>
                    </div>
                </div><!-- fin columna derecha -->
     
                
             
          
                   
                
            </div>
        </div>
        </div>


@endsection

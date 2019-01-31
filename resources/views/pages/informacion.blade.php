@extends('layouts.master')

@section('title')
    <title>Información</title>
@endsection

@section('content')
    <!--main container -->
    <div class="wrapper">
        <div class="row">
            <div class="container-fluid">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div id="f_sld_info">
                        <h2>
                            EL ATLAS METEOROLÓGICO DEL GOLFO DE MÉXICO
			    ES EL RESULTADO DE LA GENERACIÓN
			    DE UN REANÁLISIS DE LOS PATRONES ATMOSFÉRICOS
			    DE MÁS DE 30 AÑOS.
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <p class="titulo">El Atlas en números</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container-fluid" >
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 columnas">
                    <strong>
                        <span style="font-size: 38px">36</span> AÑOS
                    </strong>
                    <br>
                    <span style="font-size: 14px; line-height: 8px;">DE REANÁLISIS ATMOSFÉRICO</span>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 columnas">
                    <strong>
                        <span style="font-size: 40px">8</span> <small>VARIABLES
                    </small></strong>
                    <br>
                    <span style="font-size: 14px">METEOROLÓGICAS</span>
                    <br>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 columnas">
                    <strong>
                        <span style="font-size: 40px">14</span> <small style="font-size: 18px">ESTADÍSTICOS
                    </small></strong>
                    <br>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 columnas">
                    <strong>
                        <span style="font-size: 37px">19,924</span> <small>MAPAS</small>
                    </strong>
                    <br>
                    <span style="font-size: 14px">GENERADOS EN TOTAL</span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 columnas">
                    <strong>
                        <span style="font-size: 37px">465,792</span> <small> HORAS</small>
                    </strong>
                    <br>
                    <span style="font-size: 14px">DE TIEMPO DE CÓMPUTO</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container-fluid">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="wrapper2">

                        <h2>
                            <strong>
                                Herramienta de planeación y prevención
                            </strong>
                        </h2>

                        <p>
				Proporciona información sobre el estado medio y la variabilidad de las condiciones atmosféricas en distintas escalas de tiempo, desde las frecuencias horarias hasta las variaciones interanuales en el Golfo de México. También, presenta escenarios típicos de la dispersión de contaminantes atmosféricos asociados a derrames de hidrocarburos en el Golfo de México.
                        </p>
                    </div>
                </div>
            </div>
	</div>
	<div class="row">
            <div class="container">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="herramienta">
                        <h2>
                            <strong>
                                Datos del modelo atmosférico
                            </strong>
                        </h2>

                        <p>
                           El modelo utilizado para las simulaciones numéricas de la atmósfera es el denominado Weather Research & Forecasting Model (WRF) en su versión 3.8.1. El WRF es un sistema numérico de predicción del tiempo que sirve para hacer pronósticos operacionales e investigación atmosférica en escalas que van desde metros hasta miles de kilómetros.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container-fluid">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="wrapper2">

                        <h2>
                            <strong>
                                Plataforma de consulta
                            </strong>
                        </h2>

                        <p>
                            Integra las climatologías de las variables meteorológicas del Golfo de México en mapas en formato NetCDFs con tres tipos de visualización para su consulta: imágenes ráster en el sitio web, imágenes vectoriales interactivas y animaciones interactivas en tiempo real en el sistema geográfico de información OWGIS.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="herramienta">
                        <h2>
                            <strong>
                                Alcance del proyecto
                            </strong>
                        </h2>

                        <p>
                            Podrá ser usado en el sector público por instituciones como Protección Civil, CENAPRED, PEMEX, SEMAR, IMP, IMT, SEMARNAT y por los tres niveles de gobierno, mientras que en el sector privado podrá ser usado principalmente por compañías petroleras y aseguradoras. También, el Atlas podrá ser de inteŕes para universidades y centros de investigación nacionales e internacionales que trabajen en áreas afines.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="variables">
            <div class="row">
                <div class="container-fluid">
                    <div class="col-xs-12 col-sm-8 col-md-8">
                        <img src="{{ asset('img/mosaico-climatologia.jpg')}}" class="img-responsive">
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h2>
                            <strong>
                                Variables
                            </strong>
                        </h2> 
                        <p>
                            Temperatura<br>
                            Precipitación<br>
                            Viento<br>
                            Radiación de onda corta<br>
                            Radiación neta de onda larga<br>
                            Evaporación<br>
                            Humedad relativa<br>
                            Altura de capa límite
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="estadisticos">
        <div class="row">
            <div class="container-fluid">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 ">
                    <h2> Estadísticos </h2>
                    <table id="climatologias-lista">
                        <tr style="background-color: #4AAB8C; color: #FFFFFF;"> 
                            <th>Climatología</th>
                            <th>Sitio web </th>
                            <th>OWGIS</th>
                        </tr>
                        <tr>
                            <td>Diaria</td>
                            <td style="text-align: center"></td>
                            <td style="text-align: center">X</td>
                        </tr>
                        <tr style="background-color: #FFFFFF;">
                            <td>Mensual</td>
                            <td style="text-align: center">X</td>
                            <td style="text-align: center">X</td>
                        </tr>
                        <tr>
                            <td>Horaria mensual</td>
                            <td style="text-align: center">X</td>
                            <td style="text-align: center">X</td>
                        </tr>
                        <tr style="background-color: #FFFFFF;">
                            <td>Máxima absoluta diaria</td>
                            <td style="text-align: center"></td>
                            <td style="text-align: center">X</td>
                        </tr>
                        <tr>
                            <td>Máxima absoluta mensual</td>
                            <td style="text-align: center">X</td>
                            <td style="text-align: center">X</td>
                        </tr>
                        <tr style="background-color: #FFFFFF;">
                            <td>Mínima absoluta mensual</td>
                            <td style="text-align: center">X</td>
                            <td style="text-align: center">X</td>
                        </tr>
                        <tr>
                            <td>Promedio mensual de máximas</td>
                            <td style="text-align: center">X</td>
                            <td style="text-align: center">X</td>
                        </tr>
                        <tr style="background-color: #FFFFFF;">
                            <td>Promedio mensual de mínimas</td>
                            <td style="text-align: center">X</td>
                            <td style="text-align: center">X</td>
                        </tr>
                        <tr>
                            <td>Percentiles</td>
                            <td style="text-align: center"></td>
                            <td style="text-align: center">X</td>
                        </tr>
                        <tr style="background-color: #FFFFFF;">
                            <td>Percentiles mensuales</td>
                            <td style="text-align: center"></td>
                            <td style="text-align: center">X</td>
                        </tr>
                        <tr>
                            <td>Índices climáticos</td>
                            <td style="text-align: center"></td>
                            <td style="text-align: center">X</td>
                        </tr>
                        <tr style="background-color: #FFFFFF;">
                            <td>Anomalías mensuales</td>
                            <td style="text-align: center"></td>
                            <td style="text-align: center">X</td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-7">
                    <img src="{{ asset('img/mosaico-owgis-inicio.jpg')}}" class="img-responsive">
                </div>
            </div>
        </div>
        </div>

    </div><!-- end wrapper -->

@endsection

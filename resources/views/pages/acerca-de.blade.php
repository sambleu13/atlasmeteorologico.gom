    @extends('layouts.master')

    @section('title')
        <title>Acerca de</title>
    @endsection

    @section('content')

        <div class="wrapper">
            <div class="row">
                <div class="container-fluid">
                    <div class="col-md-12 col-lg-12">
                        <div id="f_sld_info">
                            <h2>DESARROLLADO POR EL GRUPO DE INVESTIGACIÓN INTERACCIÓN OCEÁNO-ATMÓSFERA (GRUPO IOA) DEL CENTRO DE CIENCIAS DE LA ATMÓSFERA-UNAM </h2>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <p class="titulo2">
                            Es uno de los proyectos que el Grupo IOA desarrolla dentro del Consorcio de Investigación del Golfo
                            de México (CIGoM), para la implementación de redes de observaciones oceanográficas para la
                            generación de escenarios ante posibles contingencias relacionadas a la exploración y producción de
                            hidrocarburos en aguas profundas del Golfo de México.
                        </p>
                    </div>
                </div>
            </div>
            <div class="fondo">
                <div class="row">
                    <div class="container-fluid">
                        <div class="col-md-12 col-lg-12">
                                    <h3>Instituciones participantes</h3>
                                <br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container-fluid">
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <center>
                            <a href="https://cigom.org/" target="_blank"> <img src="{{ asset('img/logos/logo_CIGoM_320px.png')}}" class="img-responsive" width="200px"> </a>
                            </center>
                            <br>
                            <center>
                                <strong>
                                    <font color="#000"; size="4px">
                                        Consorcio de Investigación del Golfo de México
                                    </font>
                                </strong>
                            </center>
                            <p align="center">
                                <font color="#000">
                                    <br>
                                    Consorcio de instituciones de investigación mexicanas que desarrolla un megaproyecto financiado
                                    por el Fondo de Hidrocarburos de CONACYT y la Secretaria de Energía.
                                </font>
                            </p>
                        </div>
                         <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <center>
                            <a href="https://www.unam.mx/" target="_blank"> <img src="{{ asset('img/logos/unam_negro.png')}}" class="img-responsive" width="110px;"> </a>
                            </center>
                            <br>
                            <center>
                                <strong>
                                    <font color="#000"; size="4px">
                                        Unversidad Nacional Autónoma de México
                                    </font>
                                </strong>
                            </center>
                            <p align="center">
                                <font color="#000">
                                    <br>
                                    Con la participación del Centro de Ciencias de la Atmósfera, el Instituto de Geofísica y el Instituto de Biotecnología.
                                </font>
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <center>
                            <a href="https://www.atmosfera.unam.mx/" target="_blank"> <img src="{{ asset('img/logos/cca-color.png')}}" class="img-responsive" width="130px;"></a>
                            </center>
                            <br>
                            <center>
                                <strong>
                                    <font color="#000"; size="4px">
                                        Centro de Ciencias de la Atmósfera
                                    </font>
                                </strong>
                            </center>
                            <p align="center">
                                <font color="#000">
                                    <br>
                                    Líder en el país en la investigación de fenómenos  atmosféricos y ambientales, incluyendo
                                    pronósticos del tiempo, variabilidad climática y calidad del aire.
                                </font>
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <center>
                            <a href="http://grupo-ioa.atmosfera.unam.mx/" target="_blank">  <img src="{{ asset('img/logos/ioa_color.png')}}" class="img-responsive" width="130px;"> </a>
                            </center>
                            <br><br>
                            <center>
                                <strong>
                                    <font color="#000"; size="4px">
                                        Grupo Interacción Oceáno Atmósfera
                                    </font>
                                </strong>
                            </center>
                            <p align="center">
                                <font color="#000">
                                    <br>
                                    Realiza estudios de interacción entre el oceáno y la atmóesfera; desarrolla la modelación numérica
                                    y la capacidad para realizar pronósticos operativos de la atmósfera y el oceáno.
                                </font>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container-fluid">
                    <div class="col-lg-12">
                        <div >

                            <img width="100%" class="img-responsive" src="{{ asset('img/destacado-principal-acerca.jpg')}}"  />

                        </div>
                    </div>
                </div>
            </div>
            <!-- nuevo row de grupos de trabajo-->
            <div class="row">
                <div class="container-fluid gruposWork">
                    <div class="row">
                        <h3>Grupos de trabajo</h3>
                    </div>
                    <div class="row">
                       <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <p><span><h4>Coordinadores</h4></span></p>
                            <ul>
                            <li >Rosario Romero Centeno </li>
                            <li >Olmo Sebastián Zavala Romero</li>
                            <li >Jorge Zavala Hidalgo </li>
                            <li >Angélica Pedraza Díaz </li>
                            <li >Samantha Pantoja Ortiz</li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <p><span><h4>Modelación atmosférica</h4></span></p>
                            <ul>
                                <li >Rosario Romero Centeno </li>
                                <li >Ma. Elena Osorio Tai </li>
                                <li >Saulo Leonardo Rivera Martínez </li>
                                <li >Roberto Pineda León </li>
                                <li >Arantxa Villa Guerrero </li>
                                <li >Jaime Meza Carreto </li>
                                <li >Lucía Pedraza Díaz</li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <p><span><h4>Escenarios de dispersión de derrames de petróleo </h4></span></p>
                            <ul>
                                <li >Olmo Sebastián Zavala Romero</li>
                                <li >Julio Antonio Lara Hernández</li>
                                <li >Andrea Isabel Anguiano García</li>
                                <li >Jorge Zavala Hidalgo</li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <p><span><h4>Flujos de calor</h4></span></p>
                            <ul>
                                <li >Miriam Alin Calva Chávez</li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <p><span><h4>Sitio web</h4></span></p>
                            <ul>
                                <li >Dulce Rosario Herrera Moro</li>
                                <li >Cuauhtémoc Silva Vega</li>
                                <li >Samantha Pantoja Ortiz</li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <p><span><h4>OWGIS</h4></span></p>
                            <ul>
                                <li >Olmo Sebastián Zavala Romero</li>
                                <li >Ixchel Stephanie Zazueta García</li>
                                <li >Vladimir Mijail Aaron Gutiérrez Valdez</li>
                                <li >Pablo Camacho González </li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <p><span><h4>Supercómputo</h4></span></p>
                            <ul>
                                <li >Pável Ernesto Oropeza Alfaro</li>
                                <li >Pedro Damián Cruz Santiago</li>
                                <li >Raúl Castulo Ortega</li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <p><span><h4>Cálculo de variables </h4></span></p>
                            <ul>
                            <li >Raúl Medina Peña</li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <p><span><h4>Generación de mapas</h4></span></p>
                            <ul>
                                <li >Pablo Camacho González</li>
                                <li >Raúl Medina Peña</li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <p><span><h4>Validación</h4></span></p>
                                <ul>
                                    <li >Daniel Robles Muñoz</li>
                                    <li >Rosario Romero Centeno </li>
                                    <li >Erika Danaé López Espinoza</li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- termina nuevo row de grupos de trabajo-->
            
                <div class="row">
                    <div class="container-fluid">
                        <div class="col-md-12 col-lg-12">
                            <div class="fondo">
                                <center><h3>Agradecimientos</h3></center>
                                <ul>
                                    <li> 
                                        <p> 
                                            Esta investigación ha sido financiada por el Fondo Sectorial CONACyT - SENER - Hidrocarburos, proyecto 201441. Esta es una contribución del Consorcio de Investigación del Golfo de México (CIGoM).
                                        </p>
                                    </li> 
                                    <li>
                                        Agradecemos los recursos de supercómputo de la UNAM (supercomputadora Miztli) proporcionados a través del proyecto LANCAD-UNAM-DGTIC-110.
                                    </li>
                                    <li>
                                        Datos empleados en el presente trabajo se obtuvieron mediante el procesamiento y uso de la supercomputadora Ometeotl del Centro de Ciencias de la Atmósfera, UNAM.
				    </li>
                                    <li>
                                        Agradecemos a la Dra. Rosa Irma Trejo Vázquez y al Dr. Isidro Ahmed Cruz Leyva de SEMARNAT por su ayuda en la revisión de la reclasificación de las Series de INEGI a USGS.
                                    </li>
                                </ul>
                            </div>
                        </div>  
                    </div>
                </div>
       </div><!-- end wrapper -->
    @endsection

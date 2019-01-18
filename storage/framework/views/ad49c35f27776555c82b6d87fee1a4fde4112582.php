<?php $__env->startSection('title'); ?>
    <title>Acerca de</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--main container -->
    <div class="wrapper">
        <div class="row">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div id="f_sld_background2">
                        <br><br><br><br><br><br>
                        <h3>
                            <center>
                                <strong>
                                    <font color="#fff">
                                        DESARROLLADO POR EL GRUPO DE INVESTIGACIÓN<br> INTERACCIÓN OCEÁNO-ATMÓSFERA (IOA)<br>
                                        DEL CENTRO DE CIENCIAS DE LA ATMÓSFERA - UNAM.
                                    </font>
                                </strong>
                            </center>
                        </h3>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <p class="titulo2">
                        <br>
                        Es uno de los proyectos que el Grupo IOA desarrolla dentro del Consorcio de Investigación del Golfo
                        de México (CIGoM), para el proyecto: implementación de redes de observaciones oceanográficas para la
                        generación de escenarios ante posibles contingencias relacionadas a la exploración y producción de
                        hidrocarburos en aguas profundas del Golfo de México.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container-fluid">
                <div class="col-md-12 col-lg-12">
                    <div class="fondo">
                        <center>
                            <strong>
                                <font color="#000">
                                    <h3>Equipo del proyecto</h3>
                                </font>
                            </strong>
                        </center>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="fondo">
            <div class="row">
                <div class="container">
                    <div class="col-md-3 col-lg-3">
                        <center>
                            <img src="<?php echo e(asset('img/logos/logo_CIGoM_320px.png')); ?>" class="img-responsive" width="200px">
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
                     <div class="col-md-3 col-lg-3">
                        <center>
                            <img src="<?php echo e(asset('img/logos/unam_negro.png')); ?>" class="img-responsive" width="110px;">
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
                                Con centros de estudio en varios estados del país y en la Ciudad de México, la UNAM es la
                                universidad pública más grande del país.
                            </font>
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <center>
                            <img src="<?php echo e(asset('img/logos/cca-color.png')); ?>" class="img-responsive" width="130px;">
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
                    <div class="col-md-3 col-lg-3">
                        <center>
                            <img src="<?php echo e(asset('img/logos/ioa_color.png')); ?>" class="img-responsive" width="130px;">
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

    </div><!-- end wrapper -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
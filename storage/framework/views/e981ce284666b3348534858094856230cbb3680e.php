<?php $__env->startSection('title'); ?>
    <title>products</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


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
                                        EVAPORACIÓN
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
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 visible-xs visible-sm visible-md visible-lg">
                    <!-- Columna izquierda -->
                    <div class="col-wrapper-left2">
                        <div class="thumb-5">
                        <a href="<?php echo e(asset('animaciones/evap_m')); ?>">
                            <img src="<?php echo e(asset('/img/evaporacion/mensual-evaporacion.jpg')); ?>" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                                Mensual
                            </div>
                        </a>
                        </div>
                    </div>
                </div>
       
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 visible-xs visible-sm visible-md visible-lg">
                    <!-- Columna derecha -->
                    <div class="col-wrapper-right2 ">
                        <div class="thumb-5">
                        <a href="<?php echo e(asset('animaciones/evap_hm')); ?>">
                            <img src="<?php echo e(asset('/img/evaporacion/horaria-evaporacion.jpg')); ?>" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                               Horaria mensual
                            </div>
                        </a>
                        </div>
                    </div>
                </div><!-- fin columna derecha -->
             <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 visible-xs visible-sm visible-md visible-lg">
                    <div class="col-wrapper-center2">
                        <div class="thumb-5">
                        <a href="<?php echo e(asset('animaciones/evap_ma')); ?>">
                            <img src="<?php echo e(asset('/img/evaporacion/max-absoluta-mensual-evaporacion.jpg')); ?>" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                                Máxima absoluta mensual
                            </div>
                        </a>  
                        </div>
                    </div>
                </div>

                      </div>
        </div>
    </div><!-- end wrapper -->




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
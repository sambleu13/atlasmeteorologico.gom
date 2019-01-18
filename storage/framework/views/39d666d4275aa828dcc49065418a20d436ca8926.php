<?php $__env->startSection('title'); ?>
    <title>productos</title>
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
                                        TEMPERATURA
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
                        <a href="<?php echo e(asset('animaciones/temp_m')); ?>">                       
                            <img src="<?php echo e(asset('img/temperatura/mensual-temperatura.jpg')); ?>" class="img-responsive">
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
                          <a href="<?php echo e(asset('animaciones/temp_hm')); ?>"> 
                            <img src="<?php echo e(asset('img/temperatura/horaria-temperatura.jpg')); ?>" class="img-responsive">
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
                    <div class="col-wrapper-left2 ">
                        <div class="thumb-5">
                        <a href="<?php echo e(asset('animaciones/temp_ma')); ?>"> 
                            <img src="<?php echo e(asset('img/temperatura/max-absoluta-mensual-temperatura.jpg')); ?>" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                                Máxima absoluta mensual
                            </div>
                         </a>
                        </div>
                    </div>
                </div><!-- fin columna derecha -->
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 visible-xs visible-sm visible-md visible-lg">
                    <!-- Columna derecha -->
                    <div class="col-wrapper-left2">
                        <div class="thumb-5">
                          <a href="<?php echo e(asset('animaciones/temp_mp')); ?>"> 
                            <img src="<?php echo e(asset('img/temperatura/max-mensual-temperatura.jpg')); ?>" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                               Máxima promedio mensual
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
                         <a href="<?php echo e(asset('animaciones/temp_mna')); ?>">
                            <img src="<?php echo e(asset('img/temperatura/min-mensual-temperatura.jpg')); ?>" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                                Mínima promedio mensual
                            </div>
                          </a>
                        </div>
                    </div>
                </div><!-- fin columna derecha -->
                 <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 visible-xs visible-sm visible-md visible-lg">
                    <!-- Columna derecha -->
                    <div class="col-wrapper-left2">
                        <div class="thumb-5">
                        <a href="<?php echo e(asset('animaciones/temp_mnp')); ?>">
                            <img src="<?php echo e(asset('img/temperatura/min-absoluta-mensual-temperatura.jpg')); ?>" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                                Mínima absoluta mensual
                            </div>
                         </a>   
                        </div>
                    </div>
                </div><!-- fin columna derecha -->

         
   
             
              
                
            </div>
          </div>

     


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
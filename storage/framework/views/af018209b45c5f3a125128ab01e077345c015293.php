<?php $__env->startSection('title'); ?>
    <title>Contacto</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--main container -->
    <div class="wrapper">
        <div class="row">
            <div class="container-fluid">
            <div class="col-lg-12">
                    <div id="f_sld_info">
                                 <h2>
                            <center>
                                <strong>
                                    <font color="#fff">
                                        CONTACTO
                                    </font>
                                </strong>
                            </center>
                        </h2>
                    </div>
         
                    <br><br>
                </div>
                </div>
                </div>  
                <div class="row">
            <div class="container">
                <div class="col-lg-12">
                    <center>
                    <img src="<?php echo e(asset('img/map.png')); ?>" width="280">
                    <br>
                    <h4>Grupo Interacción Oceáno Atmósfera</h4>
                    <p>
                        Circuito de la Investigación Científica s/n<br>
                        Ciudad Universitaria<br>
                        Delegación Coyoacán<br>
                        C.P. 04510<br>
                        Ciudad de México<br>
                        <br>
                        Tel: +52 55 56224076 ext. 24048
                    </p>
                    </center>
                </div>
            </div>
        </div>






    </div><!-- end wrapper -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
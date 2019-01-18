<?php $__env->startSection('title'); ?>
    <title>Atlas Meteorológico del Golfo de México</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <!--main container -->
  <div class="row">
      <div class="col-md-12">
        <?php echo $__env->make('layouts.animation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </div>
  </div>

  <div class="wrapper">
      <div class="row">
          <div class="container">
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 visible-xs visible-sm visible-md visible-lg">
                  <!-- Columna izquierda -->
                  <div class="col-wrapper-left">
                      <div class="thumb-5">
		<a href="<?php echo e(asset('products#climatologias')); ?>"> 
                          <img src="<?php echo e(asset('img/productos/mosaico-climatologia.jpg')); ?>" class="img-responsive">
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
			<a href="<?php echo e(asset('products#esc_derrames')); ?>"> 
                          <img src="<?php echo e(asset('/img/productos/mosaico-escenarios_a.jpg')); ?>" class="img-responsive">
                          <div class="thumb-name"></div>
                          <div class="thumb-icons">
                              ESCENARIOS DE DERRAME DE PETRÓLEO
                          </div>
 			</a>
                      </div>
                  </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 visible-xs visible-sm visible-md visible-lg">
                  <!-- Columna derecha -->
                  <div class="col-wrapper-right ">
                      <div class="thumb-5">
			<a href="<?php echo e(asset('products#owgis')); ?>" > 
                          <img src="<?php echo e(asset('img/productos/mosaico-owgis.jpg')); ?>" class="img-responsive">
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
              <?php echo $__env->make('layouts.footer_slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </div>
      </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
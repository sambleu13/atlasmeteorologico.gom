<!DOCTYPE html>
  <html lang="en">
    <head>

      <?php echo $__env->make('layouts.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <?php echo $__env->yieldContent('title'); ?>

      <?php echo $__env->make('layouts.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <?php echo $__env->yieldContent('css'); ?>

    </head>

    <body>
      <header role="banner">
        <div class="container">
          <?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
      </header>

      <main role="main">
        <div class="container">
          <?php echo $__env->yieldContent('content'); ?>
        </div>
      </main>
      <footer role="contentinfo">
        <div class="container">
          <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
      </footer>

      <?php echo $__env->make('layouts.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
     
      <?php $__env->startSection('scripts'); ?>
	<script language="JavaScript" >
 
	  var i = document.location.href.lastIndexOf("/");
	  var current = document.location.href.substr(i+1); 
     
	  $( '#topheader .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );  
	  if (current==''){
	    $("a[href*='/index']").closest('li.markt').addClass('active');
	  }
    
	  $('a[href*="' + current  + '"]').closest('li.markt').addClass('active'); 


	</script>
      <?php $__env->stopSection(); ?>
      
      <?php echo $__env->yieldContent('scripts'); ?>

    </body>
</html>
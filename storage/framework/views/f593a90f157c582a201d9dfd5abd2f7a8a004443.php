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
      <?php echo $__env->yieldContent('scripts'); ?>

    </body>
</html>
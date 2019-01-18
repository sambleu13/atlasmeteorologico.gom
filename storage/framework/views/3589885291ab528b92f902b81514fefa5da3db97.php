<nav role="navigation" class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand img-responsive" href="<?php echo e(asset('/index.htmml')); ?>"><img src="<?php echo e(asset('img/logotipo.png')); ?>" alt="Bootstrappin'" width="50%"></a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="<?php echo e(asset('/')); ?>">
            <span class="icon fa fa-home"></span> Inicio
          </a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">productos
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo e(asset('products#climatologia')); ?>"><strong>Climatologías</strong></a></li>
            <li><a href="<?php echo e(asset('products#esc_derrames')); ?>"><strong>Escenarios de derrame de petróleo</strong></a></li>
            <li><a href="<?php echo e(asset('products#owgis')); ?>"><strong>Visualizador OWGIS</strong></a></li>

          </ul>
        </li>
        <li><a href="<?php echo e(asset('informacion')); ?>">
            <span class=""></span> Información
          </a></li>
        <li><a href="<?php echo e(asset('acerca')); ?>">
            <span class="icon fa fa-envelope"></span> Acerca
          </a></li>
        <li><a href="<?php echo e(asset('contact-us')); ?>">
            <span class="icon fa fa-envelope"></span> Contacto
          </a></li>
        
      </ul>
    </div><!--/.nav-collapse -->
  </div><!--/.container -->
</nav>
<div id="topheader">
<nav role="navigation" class="navbar navbar-default">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ asset('/index.php')}}"><img src="{{ asset('img/logotipo.png')}}" alt="Cigom" width="320" class="img-responsive"></a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="active markt"><a href="{{ asset('/index.php')}}">
            <span class="icon fa fa-home"></span> Inicio
          </a></li>

        <li class="dropdown markt">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="{{asset('products#climatologia')}}"><strong>Climatologías</strong></a></li>
            <li><a href="{{asset('derrames')}}" target="_blank"><strong>Escenarios de derrames de petróleo</strong></a></li>
            <li><a href="http://pronosticos.unam.mx:8080/atlasmeteorologico/mapviewer" target="_blank"><strong>Visualizador OWGIS</strong></a></li>

          </ul>
        </li>
        <li class="markt" ><a href="{{asset('informacion')}}">
            <span class=""></span> Información
          </a></li>
        <li class="markt"><a href="{{asset('acerca')}}">
            <span class="icon fa fa-envelope"></span> Acerca
          </a></li>
        <li class="markt"><a href="{{asset('contact-us')}}">
            <span class="icon fa fa-envelope"></span> Contacto
          </a></li>
        
      </ul>
    </div><!--/.nav-collapse -->

</nav>
</div>
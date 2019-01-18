    @extends('layouts.master')

    @section('title')
        <title>Manual de usuario</title>
    @endsection

    @section('content')

    <div class="wrapper manual">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-sm-12 col-md-12 col-lg-12">
                    <div id="f_sld_info">
                        <h2>
                        Manual de usuario
                        </h2>
                    </div>
                </div>
    		</div>
    		<br>
	    	<div class="row">
	    		<div class="col-md-3 col-lg-3">
	    			<nav class="docs-sidebar" data-spy="affix" data-offset-top="300" data-offset-bottom="200" role="navigation">
	    				<ul class="nav">
	    					<li><a id="link1" href="#line1">Sitio web</a>
	    						<ul class="nav">
	    							<li><a href="#line1_1">Página Inicio</a></li>
	    							<li><a href="#line1_2">Página Productos</a></li>
	    							<li><a href="#line1_3">Página Información</a></li>
	    							<li><a href="#line1_4">Página Acerca</a></li>
	    							<li><a href="#line1_5">Página Contacto</a></li>
	    							<li><a href="#line1_6">Navegación</a>
	    								<ul class="nav">
	    									<li><a href="#line1_6_1">Páginas</a></li>
	    									<li><a href="#line1_6_2">Estáticos</a></li>
	    									<li><a href="#line1_6_3">OWGIS</a></li>
	    								</ul>
	    							</li>
	    							<li><a href="#line1_7">Animaciones</a>
	    								<ul class="nav">
	    									<li><a href="#line1_7_1">Estáticos</a></li>
	    									<li><a href="#line1_7_2">OWGIS</a></li>
	    								</ul>
	    							</li>
	    						</ul>
	    					</li>
	    					<li><a href="#line2">Productos</a>
	    						<ul class="nav">
	    							<li><a href="#line2_1">Climatologías</a>
	    								<ul class="nav">
	    									<li><a href="#line2_1_1">Variables</a></li>
	    									<li><a href="#line2_1_2">Descripción de estadísticos</a></li>
	    									<li><a href="#line2_1_3">Metodología</a></li>
	    									<li><a href="#line2_1_4">Visualización</a></li>
	    								</ul>
	    							</li>
	    							<li><a href="#line2_2">Escenarios</a>
	    								<ul class="nav">
	    									<li><a href="#line2_2_1">Características de las simulaciones</a></li>
	    									<li><a href="#line2_2_2">Metodología</a></li>
	    									<li><a href="#line2_2_3">Visualización</a></li>
	    								</ul>
	    							</li>
	    						</ul>
	    					</li>
	    				</ul>
	    			</nav>
	    		</div>
	    		<div class="col-md-9 col-lg-9">
	    			<section class="welcome">
		    			<div class="row">
		    				<div class="col-lg-12">
		    					<h2>Introducción</h2>
		    					<div class="row">
		    						<div class="col-lg-12">
		    							<p>El presente manual describe las funcionalidades, la navegación y el contenido del sitio web del Atlas Meteorológico del Golfo de México para plantear escenarios de derrame, con el objetivo de ser una herramienta que el usuario pueda consultar antes de utilizar el Atlas, cuando surja alguna duda al buscar un contenido determinado o para encontrar información detallada de interés. </p>
		    							<h4>Atlas Meteorológico del Golfo de México para plantear escenarios de derrames</h4>
		    							<p>	El contenido del sitio web que se describe a continuación, forma parte del subproyecto 3.3 (Modelación numérica regional de la atmósfera sobre el Golfo de México) de la Línea 3 de investigación del Consorcio de Investigación del Golfo de México (CIGoM) y tiene como objetivo integrar y sintetizar la caracterización del estadio medio y la variabilidad atmosférica en distintas escalas de tiempo del GoM en un atlas meteorológico que permita plantear escenarios de derrames de petróleo. La información que conforma el atlas se presenta en mapas, series de tiempo y gráficos interactivos que se describen en el apartado “3 Productos”.</p>
		    						</div>
		    					</div>
		    				</div>
		    			</div>
	    			</section>
	    			<section id="line1" class="section">
	    				<div class="row">
	    					<div class="col-lg-12">
	    						<h2>Sitio web<a href="#top"> Arriba</a><hr></h2>
	    					</div>
	    				</div>
	    				<div class="row">
	    					<div class="col-lg-12">
							<p>	El sitio web se diseñó para integrar toda la información del Atlas de manera práctica y fácil de acceder, por lo cual se desarrolló siguiendo la estructura de árbol que se muestra en la tabla siguiente.</p>
							<table id="climatologias-lista">
								<tr>
									<th>Inicio</th>
									<th>Productos</th>
									<th>Información</th>
									<th>Acerca</th>
									<th>Contacto</th>
									<th>Manual de usuario</th>
								</tr>
								<tr>
									<td>Introducción</td>
									<td>Climatologías</td>
								</tr>
								<tr>
									<td>Productos</td>
									<td>Escenarios</td>
								</tr>
								<tr>
									<td>Información</td>
									<td>OWGIS</td>
								</tr>
							</table>
							<br>
							<p>La página principal a la cual se accede al entrar al sitio es la página Inicio, donde se destaca la información más relevante del atlas que corresponde a los productos que lo conforman, así como la descripción detallada del mismo. También permite acceder a todas las demás páginas del sitio, las cuales presentan el todo el contenido: desde información acerca del proyecto, del atlas, de los desarrolladores así como el manual del sitio web.</p>
							<p>Todas las páginas del sitio web comparten el mismo encabezado y pie de página, lo que facilita la navegación dentro del Atlas. El encabezado contiene los logos del Atlas y el título del sitio, así como la barra de navegación mediante la cual se accede a las páginas principales del sitio <i>(Inicio, Productos, Información, Acerca y Contacto).</i> </p>
							<img src="{{ asset('img/manual/encabezado_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<p>El pie de página que se divide en tres columnas: la primera (extremo izquierdo) enlista todas las páginas del sitio, la segunda columna contiene los logos de los participantes del proyecto y la tercera proporciona información del equipo que desarrolló el atlas.</p>
							<img src="{{ asset('img/manual/pie_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<h4 id="line1_1">Página Inicio<a href="#top"> Arriba</a></h4>
							<p>En la página <a href="{{asset('/index.php')}}" target="blank">Inicio</a> se muestra una galería de imágenes representativas del Atlas que corresponden a climatologías de temperatura, viento y precipitación. Debajo se muestran mosaicos secundarios con los que se puede acceder a cada una de las secciones de la página Productos directamente: climatologías, escenarios de derrame de petróleo y visualizador OWGIS. Debajo se muestra un texto destacado acerca del atlas y un botón que redirecciona a la página Información.</p>
							<img src="{{ asset('img/manual/paginaInicio_partes.jpg')}}" class="img-responsive img-manual">
							<br>
							<p>El pie de página que se divide en tres columnas: la primera (extremo izquierdo) enlista todas las páginas del sitio, la segunda columna contiene los logos de los participantes del proyecto y la tercera proporciona información del equipo que desarrolló el atlas.</p>
							<h4 id="line1_2">Página Productos<a href="#top"> Arriba</a></h4>
							<p>La página <a href="{{ asset('products')}}" target="blank">Productos</a> reúne todo el contenido del atlas en tres secciones: climatologías, escenarios de derrame de petróleo y visualizador OWGIS. La sección climatologías muestra los mosaicos de las variables para las que se calcularon estadísticos: temperatura, viento, precipitación, altura de capa límite, evaporación, radiación neta de onda larga, radiación de onda corta y humedad relativa. La sección escenarios de derrame de petróleo muestra un mosaico con el ejemplo de animación de un derrame para un sitio y una altura determinados desde la hora 0 hasta las 48 horas. Por último, la sección visualizador OWGIS muestra un mosaico ejemplo del visualizador en 3D.</p>
							<img src="{{ asset('img/manual/paginaProductos_partes.jpg')}}" class="img-responsive img-manual">
							<br>
							<h4 id="line1_3">Página Información<a href="#top"> Arriba</a></h4>
							<p>La página <a href="{{asset('informacion')}}" target="blank">Información</a> describe el proceso de desarrollo del atlas, empezando por presentar algunas cantidades significativas acerca del atlas. Después destaca sus puntos más importantes como su objetivo, utilidad, desarrollo y alcance, acompañados por una breve descripción. Por último, enlista las variables y estadísticos que conforman el atlas.</p>
							<img src="{{ asset('img/manual/informacion_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<h4 id="line1_4">Página Acerca<a href="#top"> Arriba</a></h4>
							<p>La página <a href="{{ asset('acerca')}}" target="blank">Acerca</a> presenta al equipo de desarrollo del proyecto, desde las instituciones involucradas, hasta los participantes en la elaboración del atlas. Al final se muestran los agradecimientos que hicieron posible el desarrollo de este proyecto.</p>
							<img src="{{ asset('img/manual/acerca_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<h4 id="line1_5">Página Contacto<a href="#top"> Arriba</a></h4>
							<p>La página <a href="{{ asset('contact-us')}}" target="blank">Contacto</a> permite visualizar la información del grupo de desarrollo del Atlas: la dirección, teléfono, correo y ubicación, para enviar cualquier comentario, sugerencia o propuesta de proyecto.</p>
							<img src="{{ asset('img/manual/contacto_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<h4 id="line1_6">Navegación<a href="#top"> Arriba</a></h4>
							<p>La navegación dentro del sitio web, se caracteriza por ser fácil, práctica y estructurada, ya que está dividida en navegación en páginas principales, entre estáticos y entre productos en owgis.</p>
							<h5 id="line1_6_1">Páginas<a href="#top"> Arriba</a></h5>
							<p>Para ir de una página a otra se puede seleccionar la página deseada desde el encabezado en la barra de navegación, o seleccionar la página del pie de página en la columna izquierda. Cabe destacar que se puede acceder a todas las páginas desde ambos menús, con excepción de Manual de usuario. Además, es posible acceder desde la página Inicio a través de mosaicos a  las secciones de la página Productos y a través de un botón a la página Información.</p>
							<h5 id="line1_6_2">Estáticos<a href="#top"> Arriba</a></h5>
							<p>La navegación entre estáticos parte de la página Productos, para la secciones Climatologías y Escenarios de derrame de petróleo. Cada sección se caracteriza por contener mosaicos, en Climatologías aparecen 8 mosaicos que corresponden a cada una de las variables para las que existen climatologías y en Escenarios de derrame de petróleo existe un único mosaico que redirige a la página de los escenarios.</p>
							<p>Para navegar entre climatologías, uno debe seleccionar primero la variable y luego el mosaico que corresponde a la climatología de interés. Si se desea revisar otro estadístico de la misma variable sólo hay que dar clic sobre el título de la variable para regresar a la página de la variable. </p>
							<p>Por ejemplo: Para acceder a la climatología mensual de temperatura es necesario seleccionar la sección de climatologías en la página Productos, después elegir la variable Temperatura y en el menú la variable seleccionar Mensual, lo que mostrará la animación de la climatología mensual de temperatura para cada uno de los meses del año. En caso de buscar otra climatología de la misma variable, sólo basta dar clic en el nombre de la variable, para regresar al menú de los estadísticos disponibles para Temperatura.</p>
							<img src="{{ asset('img/manual/climatologias_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<img src="{{ asset('img/manual/temperatura_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<img src="{{ asset('img/manual/mensual_temperatura_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<p>Dentro de las climatologías de viento, las <a href="{{ asset('products/viento/rosas_viento')}}" target="blank">rosas de viento</a> son el único estadístico del que no se puede regresar a la página de la variable y su visualización parte de un mapa y la selección de un mes determinado.</p>
							<img src="{{ asset('img/manual/rosas1_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<img src="{{ asset('img/manual/rosas2_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<p>Para navegar entre escenarios de derrame de petróleo, uno debe seleccionar el mosaico de la animación del escenario para acceder a la página <a href="{{ asset('derrames')}}" target="blank">Escenarios de derrames de petróleo</a>.</p>
							<img src="{{ asset('img/manual/escenarios_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<p>Esta página se divide en dos pestañas: Variables y Animación. En la pestaña animación uno podrá elegir el punto para el cual se visualizará el escenario de derrame, dando clic sobre el ícono blanco de interés, el cual cambiará a un ícono de ubicación verde. También debe seleccionarse la altura (en metros) y el mes de las lista desplegables. Al final se debe dar clic al botón ver animación, lo que desplegará la pestaña animación en la cual se puede observar la evolución del escenario cada 4 horas. Para seleccionar otro escenario sólo es necesario dar clic en la pestaña Variables y volver a elegir el punto, altura y mes.</p>
							<img src="{{ asset('img/manual/paginaEscenarios_partes_variables.jpg')}}" class="img-responsive img-manual">
							<br>
							<img src="{{ asset('img/manual/mapa_escenarios_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<h5 id="line1_6_3">OWGIS<a href="#top"> Arriba</a></h5>
							<p>La navegación en OWGIS se realiza en la misma ventana que se presenta al entrar y cambia con la selección de distintas opciones de los menús y ventanas que la componen a través de clics. Además también se puede mover el mapa arrastrándolo con el ratón y hacer zoom con el botón central del mismo.</p>
							<p>Los menús principales son la barra superior que permite personalizar la visualización de los productos, así como las ventanas de capas principales, capas opcionales y calendarios.</p>
							<img src="{{ asset('img/manual/ventana_owgis_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<p>El menú principal está compuesto por el botón Google Earth que permite descargar el mapa actual en un archivo KML, la transparencia que se identifica por un ícono de un ojo y los botones de aumentar o disminuir, el botón de una gota que permite personalizar la barra de color de las capas principales, el botón de gráfica que indica la herramienta de transectos verticales, el botón de restablecer que se distingue por un círculo con dos flechas, el botón de información que despliega información acerca de OWGIS, el botón de pregunta que activa y desactiva los textos de ayuda en el visualizador y el menú de selección de idioma (Español/Inglés).</p>
							<img src="{{ asset('img/manual/menu_owgis_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<p>Por otro lado, en la ventana de capas principales se encuentran las variables y los estadísticos para cada variable, en algunas ocasiones pueden aparecer tres menús desplegables en esta ventana, lo que corresponde a un estadístico más específico. </p>
							<img src="{{ asset('img/manual/capas_principales_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<p>En capas opcionales se pueden activar o desactivar los puntos de interés definidos que se representan con estrellas dentro del GoM, la batimetría, el contorno de los países y de los estados de la República Mexicana.</p>
							<img src="{{ asset('img/manual/capas_opcionales_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<p>Los calendarios son adaptables a cada tipo de estadístico mostrando los días de todos los meses para las climatologías diarias, los meses para las climatologías mensuales, las horas para las climatologías horarias por mes, y los días con horas para los escenarios de derrame de petróleo. Los únicos estadísticos que no tienen calendario son los percentiles, los percentiles mensuales y las rosas de viento.</p>
							<img src="{{ asset('img/manual/cal_diario_manual.jpg')}}" class="img-responsive img-manual" alt="calendario diario" title="calendario diario"> <center>Calendario diario</center>
							<br>
							<img src="{{ asset('img/manual/cal_mensual_manual.jpg')}}" class="img-responsive img-manual" alt="calendario mensual" title="calendario mensual"><center>Calendario mensual</center>
							<br>
							<img src="{{ asset('img/manual/cal_horario_manual.jpg')}}" class="img-responsive img-manual" alt="calendario horario" title="calendario horario"><center>Calendario horario</center>
							<br>
							<img src="{{ asset('img/manual/cal_escenarios_manual.jpg')}}" class="img-responsive img-manual" alt="calendario para escenarios" title="calendario para escenarios">
							<center>Calendario para derrames</center>
							<br>
							<p>Todos los mapas muestran un título, el cual indica la variable, el estadístico y la fecha seleccionada. En la parte inferior izquierda se encuentra la barra de color con su numeración (la cual cambia con cada variable) y en el extremo derecho se encuentran los logos del proyecto. </p>
							<p>Otra funcionalidad es que para cada mapa se puede consultar la serie de tiempo de un punto determinado dentro del dominio eligiendo una fecha inicial y final en los calendarios, para luego seleccionar el botón mostrar dentro de la ventana de información del punto de interés. A continuación se muestra un ejemplo de selección de serie de tiempo para la climatología horaria mensual de la Altura de capa límite para el mes de enero y un rango de tiempo de las 00:00 horas a las 23:00 horas.</p>
							<img src="{{ asset('img/manual/seriedetiempo_manual.jpg')}}" class="img-responsive img-manual"><center>Acercamiento a ventana de punto elegido en el mapa con opción a visualizar su serie de tiempo.</center>
							<br>
							<img src="{{ asset('img/manual/ventana_seriedetiempo_manual.jpg')}}" class="img-responsive img-manual"><center>serie de tiempo del punto anterior</center>
							<br>
							<h4 id="line1_7">Animaciones<a href="#top"> Arriba</a></h4>
							<p>El Atlas Meteorológico del GoM presenta animaciones tanto en el sitio web como en el visualizador OWGIS. Dentro del sitio hay animaciones para las climatologías con excepción de las rosas de viento y para los escenarios de derrame de petróleo. En OWGIS hay animaciones para todas las capas principales con excepción de los percentiles, los percentiles mensuales y las rosas de viento.</p>
							<h5 id="line1_7_1">Sitio web<a href="#top"> Arriba</a></h5>
							<p>Las animaciones en el sitio web tienen una barra de controles de animación que permiten reproducir el conjunto de mapas de la climatología en orden cronológico y con distintas velocidades. Existen tres tipos de controles, uno para las climatologías mensuales, otro para las climatologías horarias mensuales y uno más para los escenarios de derrames de petróleo. </p>
							<p>Los controles para las climatologías mensuales permiten avanzar o retroceder de la imagen actual una por una, así como ir al inicio o al final del conjunto de imágenes. A continuación se presenta un diagrama con la función de cada botón.</p>
							<img src="{{ asset('img/manual/animacion_mensual_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<p>La única diferencias de los controles de animación para las climatologías horarias mensuales, es el menú desplegable para seleccionar el mes que se visualizará, como se muestra en el siguiente diagrama.</p>
							<img src="{{ asset('img/manual/animacion_horaria_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<p>La pestaña Animación muestra la animación en las horas ya definidas del escenario de derrame, con la opción de manipular la velocidad y la imagen mostrada de la animación con los controles de animación que se encuentran en la parte inferior del mapa. A continuación se presenta una descripción de los controles:</p>
							<img src="{{ asset('img/manual/animacion_derrames_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<h5 id="line1_7_2">OWGIS<a href="#top"> Arriba</a></h5>
							<p>Las animaciones en OWGIS consisten en 3 pasos: primero se debe seleccionar el periodo a animar en el calendario, eligiendo una fecha de inicio y una fecha de fin (procurando que la fecha de inicio sea anterior a la fecha de fin), después la configuración de la animación que abarca la resolución, el tipo de animación y dar clic en el botón de animación, por último está la manipulación de la animación con los controles de animación que se describen a continuación.</p>
							<img src="{{ asset('img/manual/animacion_owgis_manual.jpg')}}" class="img-responsive img-manual">
							<br>
	    					</div>
	    				</div>
	    			</section>
	    			<section id="line2" class="section">
	    				<div class="row">
	    					<div class="col-lg-12">
	    						<h2>Productos<a href="#top"> Arriba</a><hr></h2>
	    					</div>
	    				</div>
	    				<div class="row">
	    					<div class="col-lg-12">
							<p>	El Atlas Meteorológico del GoM tiene en total 20,730 productos, de los cuales 15,244 son mapas de las climatologías, 4680 son mapas que constituyen los escenarios de derrames de petróleo y 806 rosas de viento. A continuación se muestra una relación de los estadísticos generados, las variables y el total de mapas.</p>
							<table id="tabla-estas">
								<tr>
									<th>ESTÁDÍSTICOS</th>
									<th>No. VARIABLES CALCULADAS</th>
									<th>TOTAL DE MAPAS</th>
								</tr>
								<tr>
									<td>Climatología mensual</td>
									<td style="text-align: center">8 variables x 12 meses</td>
									<td style="text-align: center">96</td>
								</tr>
								<tr style="background-color: #def2f1;">
									<td>Climatología diaria</td>
									<td style="text-align: center">8 variables x 365 días</td>
									<td style="text-align: center">2920</td>
								</tr>
								<tr>
									<td>Climatología horaria mensual</td>
									<td style="text-align: center">7 variables x 12 meses x 24 horas <br> 1 variables x 12 meses x 8 horas</td>
									<td style="text-align: center">2112</td>
								</tr>
								<tr style="background-color: #def2f1;">
									<td>Máximas absolutas mensuales</td>
									<td style="text-align: center">8 variables x 12 meses</td>
									<td style="text-align: center">96</td>
								</tr>
								<tr>
									<td>Máximas absolutas diarias</td>
									<td style="text-align: center">3 variables x 365 días</td>
									<td style="text-align: center">1095</td>
								</tr>
								<tr style="background-color: #def2f1;">
									<td>Promedio de máximas mensuales</td>
									<td style="text-align: center">3 variables x 12 meses</td>
									<td style="text-align: center">36</td>
								</tr>
								<tr>
									<td>Promedio de mínimas mensuales</td>
									<td style="text-align: center">1 variable x 12 meses</td>
									<td style="text-align: center">12</td>
								</tr>
								<tr style="background-color: #def2f1;">
									<td>Mínimas absolutas mensuales</td>
									<td style="text-align: center">1 variable x 12 meses</td>
									<td style="text-align: center">12</td>
								</tr>
								<tr>
									<td>Anomalías mensuales</td>
									<td style="text-align: center">3 variables x 37 años x 12 meses</td>
									<td style="text-align: center">1332</td>
								</tr>
								<tr style="background-color: #def2f1;">
									<td>Percentiles <br>(0.1, 1, 5, 10, 25, 50, 75, 90, 95, 99, 99.9)</td>
									<td style="text-align: center">3 variables x 11 percentiles</td>
									<td style="text-align: center">33</td>
								</tr>
								<tr>
									<td>Percentiles mensuales<br>(0.1, 1, 5, 10, 25, 50, 75, 90, 95, 99, 99.9)</td>
									<td style="text-align: center">3 variables x 11 percentiles <br>x 12 meses</td>
									<td style="text-align: center">396</td>
								</tr>
								<tr style="background-color: #def2f1;">
									<td>Índices climatológicos máximos<br> (90, 95, 99, 99.9)</td>
									<td style="text-align: center">3 variables x 4 percentiles <br>x 37 años x 12 meses</td>
									<td style="text-align: center">5328</td>
								</tr>
								<tr>
									<td>Índices climatológicos mínimos <br> (0.1, 1, 5, 10)</td>
									<td style="text-align: center">1 variable x 4 percentiles <br>
									37 años x 12 meses</td>
									<td style="text-align: center">1776</td>
								</tr style="background-color: #def2f1;">
								<tr>
									<td>Rosas de viento</td>
									<td style="text-align: center">1 variable x 62 puntos x 12 meses <br> 1 variable x 62 puntos x 1 año</td>
									<td style="text-align: center">744 <br> 62</td>
								</tr>
								<tr style="background-color: #def2f1;">
									<td>Escenarios de derrames</td>
									<td style="text-align: center">6 puntos x 13 horas <br> x 12 meses x 5 alturas</td>
									<td style="text-align: center">4680</td>
								</tr>
								<tr>
									<td></td>
									<td><strong>TOTAL DE MAPAS GENERADOS</strong></td>
									<td style="text-align: center">20,730</td>
								</tr>
							</table>
							<br>
							<p>Para generar todos los productos primera se definió el dominio que se centra en la región del Golfo de México y cubre de -99.5214 a -78.2718 y de 16.4452 a 32.7302 latitud Norte, el cual se muestre en el siguiente mapa.</p>
							<img src="{{ asset('img/manual/dominio_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<p>Este dominio incluye los puntos de interés definidos para los que se generaron los escenarios de derrame y las rosas de viento. Estos se muestra en la siguiente tabla, con su ubicación en latitud y longitud.</p>
							<center><table id="climatologias-lista">
								<tr>
									<th>Punto</th>
									<th>Latitud</th>
									<th>Longitud</th>
								</tr>
								<tr>
									<td>1</td>
									<td>23.5122</td>
									<td>-96.8253</td>
								</tr>
								<tr style="background-color: #def2f1;">
									<td>2</td>
									<td>20.9710</td>
									<td>-96.7158</td>
								</tr>
								<tr>
									<td>3</td>
									<td>24.7516</td>
									<td>-96.5650</td>
								</tr>
								<tr style="background-color: #def2f1;">
									<td>4</td>
									<td>25.3612</td>
									<td>-95.2581</td>
								</tr>
								<tr>
									<td>5</td>
									<td>25.9710</td>
									<td>-95.0162</td>
								</tr>
								<tr style="background-color: #def2f1;">
									<td>6</td>
									<td>20.0406</td>
									<td>-94.7674</td>
								</tr>

							</table></center>
							<br>
							<p>El modelo utilizado para las simulaciones numéricas de la atmósfera es el denominado Weather Research & Forecasting Model (WRF) en su versión 3.8.1. El WRF es un sistema numérico de predicción del tiempo que sirve para hacer pronósticos operacionales e investigación atmosférica en escalas que van desde metros hasta miles de kilómetros. El período de tiempo que se consideró para generar el reanálisis para México fue de 1979 a 2017, período para el que se tienen datos disponibles del CFSR (NCEP Climate Forecast System Reanalysis). Además, se adaptaron datos de las Series de Uso de Suelo y Vegetación de INEGI.</p>
							<p>A partir de las variables del modelo necesarias para calcular las climatologías de las variables definidas para el atlas, así como los escenarios de derrames de petróleo y las rosas de viento, se generaron archivos resultantes de estadísticos que se almacenaron con formato NetCDF (Network Common Data Form), usando la convención CF (Climate and Forecast).</p>
							<p>A continuación se describen las climatologías y los escenarios de derrame.</p>
							<h4 id="line2_1">Climatologías<a href="#top"> Arriba</a></h4>
							<h5 id="line2_1_1">Variables<a href="#top"> Arriba</a></h5>
							<p>Las variables definidas para las climatologías del atlas son temperatura (a 2 metros), viento (a 10 metros), precipitación, evaporación, altura de capa límite, radiación de onda larga, radiación de onda corta y humedad relativa. Asimismo, los escenarios de derrame de petróleo que contemplan esas mismas variables del modelo WRF. </p>
							<h5 id="line2_1_2">Descripción de estadísticos<a href="#top"> Arriba</a></h5>
							<p>Los estadísticos calculados para las variables antes mencionadas son 13: climatología mensual, diaria y horaria mensual, máxima diaria, máximo y mínimo absoluto mensual, promedio máximo y mínimo mensual, anomalías mensuales, percentiles, percentiles mensuales, umbrales máximos y mínimos y rosas de viento. A continuación se muestran los estadísticos calculados para cada variable.</p>
							<table id="tabla-manual">
								<tr>
									<th>Variable-><br>Estadístico</th>
									<th>Temperatura</th>
									<th>Precipitación</th>
									<th>Viento</th>
									<th>Altura de capa límite</th>
									<th>Evaporación</th>
									<th>Radiación neta de onda larga</th>
									<th>Radiación de onda corta</th>
									<th>Humedad relativa</th>
								</tr>
								<tr>
									<th>Climatología mensual</th>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
								</tr>
								<tr style="background-color: #def2f1;">
									<th>Climatología diaria</th>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
								</tr>
								<tr>
									<th>Climatología horaria por mes</th>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
								</tr>
								<tr style="background-color: #def2f1;">
									<th>Máximas mensuales</th>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
								</tr>
								<tr>
									<th>Máximas diarias</th>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr style="background-color: #def2f1;">
									<th>Promedio de máximas mensuales</th>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<th>Promedio de mínimas mensuales</th>
									<td>X</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr style="background-color: #def2f1;">
									<th>Mínima mensual</th>
									<td>X</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<th>Anomalías mensuales</th>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr style="background-color: #def2f1;">
									<th>Percentiles</th>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<th>Índices climatológicos máximos</th>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr style="background-color: #def2f1;">
									<th>Índices climatológicos mínimos</th>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<th>Rosas de viento</th>
									<td></td>
									<td></td>
									<td>X</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</table>
							<br>
							<h5 id="line2_1_3">Metodología<a href="#top"> Arriba</a></h5>
							<p>A continuación se presenta metodología de cálculo para cada una de las climatologías generadas para las variables del atlas.</p>
							<p> Climatología diaria<p>
							<p>Se  procesó la información de 1980 al 2016 (37 años). Para cada día del año se suman los 888 valores horarios correspondientes (24*37) y el resultado se divide entre ese número total de datos. Como resultado de este proceso se obtienen 365 valores, que corresponden a los promedios diarios de los 365 días del año, considerando el período 1980-2016.</p>
							<p>Climatología mensual</p>
							<p>Para este cálculo se suman todos los datos horarios que correspondan a cada mes para todos los años del período. Por ejemplo, para el mes de enero se suman 27,528 valores (24x31x37) y el resultado se divide entre el total de datos. De esta manera se obtienen los 12 promedios mensuales de la variable en cuestión, correspondientes a cada mes del año, considerando los datos del período 1980-2016. Este estadístico se calculó para las mismas variables descritas en el apartado anterior.</p>
							<p>Climatología horaria por mes</p>
							<p>Para calcular la climatología horaria por mes, se suman los valores correspondientes a cada hora del día durante todos los días de un mismo mes en todos los años del periodo. Posteriormente se divide el resultado de la suma entre el total de datos. Por ejemplo, para calcular el promedio horario para alguna hora en específico del mes de enero, se suman los 1,147 valores (31x37) correspondientes a los 37 años de datos y el resultado se divide entre el total de datos. Este proceso se repite para cada hora y para cada mes del año, con lo que se obtienen 24 promedios horarios por mes, utilizando los datos del período 1980-2016. Es importante mencionar que para la variable Humedad Relativa, sólo se tienen lecturas cada 3 horas por lo que solo se tienen 8 horas por día.</p>
							<p>Máxima absoluta diaria</p>
							<p>Para este estadístico se tomó en cuenta el valor máximo de la variable en cuestión para cada día del año, por lo que se obtienen 365 valores para cada año. Esto se repite para cada uno de los años del período. Una vez que se tienen todos los valores máximos diarios para los 37 años, de 1980 al 2016, se considera nuevamente el máximo por día de ese conjunto de datos, obteniéndose así los 365 valores máximos absolutos diarios.</p>
							<p>Las variables para las cuales se calculó este estadístico son: temperatura a 2m, precipitación, y viento. </p>
							<p>Por medio de la función dim_max_n del lenguaje de programación NCL, que determina el máximo de todos los elementos en las dimensiones indicadas en el segundo parámetro para cada índice de las dimensiones restantes, así podemos determinar el valor máximo por día para cada punto de la malla, y guardarlo en una matriz auxiliar para cada variable por ejemplo para temperatura a 2m. la matriz sería T2_TOTAL(indice_anio, indice_día, lat, lon), donde :</p>
							<p>indice_anio, es el número total de años (37 años)</p>
							<p>indice_dia,  es el número total de dia en el año (solo se consideran 365 días)</p>
							<p>lat, es la latitud del dominio</p>
							<p>lon, es la longitud del dominio</p>
							<p>Obtenemos el máximo del dia iterando sobre la primer dimensión que representa las horas, y la guardamos en la matriz T2_TOTAL en los índices que representan el día y el año correspondiente.</p>
							<p>T2_actual := archivo->T2        ←  Cargamos la variable</p>
							<p>T2_TOTAL(indice_anio, j , : , : ) = dim_max_n(T2_actual, 0)</p>
							<p>Al terminar la matriz tendrá los máximos valores para cada pixel organizados por año, dia, latitud y longitud, por ejemplo:</p>
							<p>T2_TOTAL(0, : , : , :) tendrá los valores máximos para T2 por día del primer año del periodo (1980)</p>
							<p>Por último se vuelve a utilizar la función predefinida dim_max_n sobre la matriz T2_TOTAL de la siguiente manera: </p>
							<p>T2 = dim_max_n(T2_TOTAL, 0) , </p>
							<p>donde el 0 es la dimensión que representa los años y sobre la cual va a iterar para obtener los máximos para cada día de todo el período, dando como resultado una matriz de tres dimensiones (indice_dia, latitud, longitud). Dónde indice_dia hace referencia al día del año (ej. si indice_dia = 0, entonces hace referencia al 01 de enero, o si indice_dia = 364, entonces hace referencia al 31 de diciembre).</p>
							<p>Máxima absoluta por mes</p>
							<p>Para cada año del período considerado, se agrupan los archivos por mes y se extraen los valores máximos para cada uno de los 12 meses del año en cuestión. Una vez obtenidos los valores máximos por mes para todos los años del período, se extraen los valores máximos para cada mes, obteniéndose así los 12 máximos absolutos por mes de la variable analizada.</p>
							<p>Con ayuda de la función dim_max_n, que determina el máximo de todos los elementos en las dimensiones indicadas en el segundo parámetro para cada índice de las dimensiones restantes, podemos determinar el valor máximo para cada día de un mes en cada punto de la malla, de esta manera podemos guardar los valores máximos en una matriz auxiliar, por ejemplo T2_MAX_DIAS_DEL_MES(indice_dia, lat, lon), donde:</p>
							<p>indice_dia,  es el número total de dia en el mes (ej. indice_dia ∊ {0, 1, 2,..., 30}, 31 días para enero).</p>
							<p>lat, es la latitud del dominio</p>
							<p>lon, es la longitud del dominio</p>
							<p>a) T2_actual := archivo->U10      ←Cargamos la variable para cada día del mes</p>
							<p>Guardamos los máximos de cada día de cierto mes</p>
							<p>T2_MAX_DIAS_DEL_MES(indice_dia,lat , lon ) = dim_max_n(T2_actual, 0)</p>
							<p>De esta manera se tendrán los máximos valores para cada pixel organizados por dia del mes correspondiente. Por lo que podremos calcular el valor máximo de entre todos lo días del mes correspondiente, así podremos obtener el máximos de cada mes y guardarlos en otra matriz auxiliar T2_MAX_MES(latitud,longitud) ,</p>
							<p>b) T2_MAX_MES(latitud,longitud) = dima_max_n(T2_MAX_DIAS_DEL_MES, 0)</p>
							<p>T2_TOTAL(indice_anio, mes, latitud,longitud) = T2_MAX_MES(latitud,longitud)</p>
							<p>Se guardan los valores máximos para un año y mes dado</p>
							<p>Al tener los máximos organizados año, mes podemos volver a utilizar dim_max_n sobre la matriz T2_TOTAL de tal manera que iteramos sobre la dimensión que representa los años, de forma que comparará mes a mes para todos los años del periodo,</p>
							<p>c)  T2 = dim_max_n(T2_TOTAL, 0) , donde el 0 es la dimensión sobre la cual va a iterar para obtener el máximo</p>
							<p>Y así obtendremos las máximas mensuales para cada variable, en matrices con 3 dimensiones, por ejemplo para temperatura sería  T2(indice_mes, latitud, longitud).</p>
							<p>Máxima promedio mensual</p>
							<p>A partir de la serie obtenida de los valores máximos por mes dentro del período de 1980 al 2016, se calculan los promedios de la variable en cuestión tomando en cuenta los 37 datos que se tienen para cada año. Con ello se obtienen los 12 promedios de los valores máximos mensuales para la variable analizada.</p>
							<p>Las variables para las que se calculó este estadístico son: temperatura a 2m , precipitación, y viento.</p>
							<p>Para obtenerlas las máximas promedio mensual hacemos lo mismo que con las “Máximas Absolutas por Mes” hasta el paso (b), donde se tienen las máximas distribuidas por mes de cada año:</p>
							<p>T2_TOTAL(indice_anio, mes, latitud,longitud) = T2_MAX_MES(latitud,longitud)</p>
							<p>Aquí solo iteramos sobre el número total de años para sumar los valores máximos divididos entre el número de años del período para obtener el promedio de máximas por mes,</p>
							<p>do i = 0 → (total_años - 1) <br>
								T2 += T2_TOTAL(i, : , : , :) / total_años<br>
								end do</p>
							<p>Al final tendremos los promedios de máximos mensuales almecenados en matrices organizadas por mes, latitud y longitud, por ejemplo para temperatura tendremos T2(indice_mes, latitud, longitud).</p>
							<p>Mínima absoluta por mes</p>
							<p>Para determinar las mínimas absolutas por mes para la variable temperatura a 2m, se obtienen los valores mínimos mensuales para cada año del periodo 1980-2016, con lo cual podemos comparar los valores mínimos mensuales entre todos los años del periodo y obtener así los mínimos absolutos separados en 12 meses.</p>
							<p>Para poder obtener las mínimas absolutas por mes , la estructura y lógica es la misma que para calcular las “Máxima Absoluta por Mes” , con la única diferencia de que se usa la función de ncl dim_min_n iterando sobre una dimensión dada para poder obtener los mínimos valores de las dimensiones restantes.</p>
							<p>Mínima promedio mensual</p>
							<p>En este caso primero se obtuvieron las mínimas mensuales para el año correspondiente. A partir de este conjunto de 37 resultados, se calculó el promedio para cada mes de todo el periodo del reanálisis (1980-2016). Al igual que en el apartado anterior este estadístico solo se aplica a la variable temperatura a 2m.</p>
							<p>Para poder obtener la mínima promedio mensual, la estructura y lógica es la misma que para calcular la “Máxima Promedio Mensual” , con la única diferencia de que se usa la función de ncl dim_min_n para poder obtener los mínimos valores sobre cierta dimensión.</p>
							<p>Percentiles</p>
							<p>El cálculo de percentiles para la temperatura a 2m, la precipitación  y las componentes (u, v) del viento referidas a una altura de 10m  considerando sus valores históricos en el período 1980-2016 se realizó de la siguiente forma:</p>
							<p>1. Se generaron arreglos con múltiples rangos para cada variable. Por ejemplo, para la temperatura se generó un arreglo con valores desde -20 a 50 con incrementos de un grado.</p>
							<p>2. Posteriormente, se realizó un histograma para cada variable, el cual representa la distribución de frecuencias de los valores correspondientes en el período considerado.</p>
							<p>Finalmente, se calcularon  los percentiles 0.1, 1, 5, 10, 25, 50, 75, 90, 95, 99 y 99.9 a partir de la distribución obtenida.</p>
							<p>Percentiles mensuales</p>
							<p>A partir de los valores históricos del período 1980-2016 se realizó el cálculo de percentiles mensuales para la temperatura a 2m, la precipitación  y las componentes (u, v) del viento a una altura de 10m como se explica a continuación:</p>
							<p>1. Primero se crearon arreglos  con diferentes rangos para cada variable replicados por mes. Por ejemplo, desde el mes de Enero hasta Diciembre se generó para temperatura un arreglo con valores desde -20 a 50 con incrementos de un grado para cada mes.</p>
							<p>2. Después, en cada mes se realizó un histograma para cada variable, que representará la distribución de frecuencias organizadas por mes de los valores correspondientes en el período considerado.</p>
							<p>3. Por último, para cada mes se calcularon  los percentiles 0.1, 1, 5, 10, 25, 50, 75, 90, 95, 99 y 99.9 a partir de los histogramas mensuales.</p>
							<p>Anomalías mensuales por año</p>
							<p>El cálculo de este estadístico se obtuvo a partir de un pre-procesamiento previo  el cual consiste en la obtención de los promedios mensuales para cada uno de los 37 años del periodo del reanálisis (1980-2016). Una vez que se obtiene esta serie de datos, se hace una resta mes a mes entre los promedios mensuales de cada año y los promedios mensuales de todo el periodo. Por ejemplo, se toman los promedios del mes de enero del año 2000 y se le restan los promedios de enero obtenidos con todo el periodo, por lo que al final se obtienen 37 anomalías mensuales en total, una por año. En este caso las variables que se calcularon para este estadístico son: temperatura a 2m , precipitación, y viento.</p>
							<p>Porcentaje de días por mes que rebasan umbrales (90, 95, 99, 99.9) para cada año (umbrales máximos)</p>
							<p>Con los percentiles mensuales 90, 95, 99 y 99.9 calculados para el periodo completo del reanálisis  (1980-2016), se hace un conteo de cuántos días agrupados por mes rebasan cada uno de los percentiles para cada año, para después dividir el conteo entre el total de días del respectivo mes quedando valores entre el 0 y 1. Por ejemplo, se cuentan cuantos días para el mes de enero de 1980 rebasaron el percentil 90, para después dividirlo entre 31, que es el total de días del mes de enero, por lo que nos quedan 12 mapas para el año 1980. Las variables para las que se calculó este estadístico son: temperatura a 2m , precipitación, y viento.</p>
							<p>Porcentaje de días que están por debajo de los umbrales (0.1,1,5,10)</p>
							<p>Para determinar el número de valores que están por debajo de cada percentil (0.1, 1, 5, 10), se calculó el valor mínimo de cada día del mes y se realiza una verificación para conocer si es menor o no que su valor respectivo del percentil mensual. Una vez que se tiene el total de días, este valor se divide entre el total de días del mes que le corresponde. En este caso el estadístico se aplicó solo a la variable temperatura a 2m.</p>
							<p>Rosas de Viento</p>
							<p>Las rosas de viento se generan dinámicamente a partir de archivos json, para los puntos de interés definidos utilizando su latitud y longitud. Existe un archivo con todos los datos para U y V por cada punto y cada mes además de uno anual por punto.</p>
							<p>Para cada hora de los 30 años de información<br>
								Para cada punto, dada su longitud y su latitud se tomó los valores de la variables  U y V, en caso de no tener la posición exacta se tomó el valor más cercano a dicha posición.<br>
							Todos los valores recuperados para cada punto se guardan en un archivo .csv en cual contiene tres columna: fecha, U, V.</p>
							<p>A partir de los archivos .csv se tomaron los valores  de  U y V de cada mes para cada posición  y se genero un archivo json, cada archivo json tiene el siguiente formato:</p>
							<p>{ “U”:[arreglo con los valores de U] , “V”:[arreglo con los valores de V]}</p>
							<p>Para cada punto de interés se tienen 12 archivos json, uno para cada mes y un archivo extra el cual contiene la información total de las variables.</p>
							<p>Los rangos de las frecuencias fueron preestablecidos de la siguiente manera: 0-3 m/s, 3-6 m/s, 6-9 m/s, 9-12 m/s, 12-15 m/s y >15 m/s.</p>
							<h5 id="line2_1_4">Visualización<a href="#top"> Arriba</a></h5>
							<p>Debido al post-procesamiento que requieren las climatologías en formato NetCDF, en el sitio web se limitó a mostrar las climatologías mensuales, horarias mensuales, máximas y mínimas absolutas mensuales, máximas y mínimas promedios mensuales, así como las rosas de viento según correspondan las variables. A continuación se muestra una tabla con las variables y los estadísticos disponibles en el sitio.</p>
							<p>A continuación se muestra un ejemplo de una climatología y una rosa de viento como se visualizan en el sitio.</p>
							<table id="tabla-manual">
								<tr>
									<th>Variable-><br>Estadístico</th>
									<th>Temperatura</th>
									<th>Precipitación</th>
									<th>Viento</th>
									<th>Altura de capa límite</th>
									<th>Evaporación</th>
									<th>Radiación neta de onda larga</th>
									<th>Radiación de onda corta</th>
									<th>Humedad relativa</th>
								</tr>
								<tr>
									<th>Climatología mensual</th>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
								</tr>
								<tr style="background-color: #def2f1;">
									<th>Climatología horaria por mes</th>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
								</tr>
								<tr>
									<th>Máximas mensuales</th>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td>X</td>
								</tr>
								<tr style="background-color: #def2f1;">
									<th>Promedio de máximas mensuales</th>
									<td>X</td>
									<td>X</td>
									<td>X</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<th>Promedio de mínimas mensuales</th>
									<td>X</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr style="background-color: #def2f1;">
									<th>Mínima mensual</th>
									<td>X</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<th>Rosas de viento</th>
									<td></td>
									<td></td>
									<td>X</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</table>
							<br>
							<p>A continuación se muestra un ejemplo de una climatología y una rosa de viento como se visualizan en el sitio.</p>
							<img src="{{ asset('img/manual/paginaClimatologia_partes.jpg')}}" class="img-responsive img-manual"><center>Climatología</center>
							<br>
							<img src="{{ asset('img/manual/rosa_ejemplo_manual.jpg')}}" class="img-responsive img-manual"><center>Rosa de viento</center>
							<br>
							<p>En cambio, en el visualizador OWGIS se tiene el total de los estadísticos calculados para todas las variables definidas y su navegación se detalla en el apartado <a href="#line1_6_3">Navegación:OWGIS</a>. A continuación se presenta un ejemplo de la visualización de todos los tipos de productos en OWGIS (una climatología, una serie de tiempo, una rosa de viento y un escenario de derrame).</p>
							<img src="{{ asset('img/manual/climatologia_owgis_manual.jpg')}}" class="img-responsive img-manual"><center>Climatología</center>
							<br>
							<img src="{{ asset('img/manual/serie_owgis_manual.jpg')}}" class="img-responsive img-manual"><center>Serie de tiempo</center>
							<br>
							<img src="{{ asset('img/manual/rosa_owgis_manual.jpg')}}" class="img-responsive img-manual"><center>Rosa de viento</center>
							<br>
							<h4 id="line2_2">Escenarios<a href="#top"> Arriba</a></h4>
							<p>Los escenarios de derrames de petróleo se realizaron con el fin de apoyar en la toma de decisiones, para la creación de planes de emergencia, y para lograr una respuesta rápida en caso de que estos sucedan. En este caso, se generaron escenarios mensuales de concentración de partículas en la atmósfera considerando que su origen fue la quema de un derrame de hidrocarburos y se construyeron a partir de los principales factores que influyen en la propagación de los derrames (e.g. las condiciones climáticas, la altura a la cual llega la columna de humo, etc) y un número representativo de simulaciones que muestre la variabilidad de estos eventos.</p>
							<h5 id="line2_2_1">Características de las simulaciones<a href="#top"> Arriba</a></h5>
							<p>Los escenarios se realizaron para cada uno de los seis puntos de interés utilizando el dominio del atlas y con un módulo lagrangiano programado en Matlab disponible en <a href="https://github.com/AndreaAnguiano/atmos" target="blank">Github</a> para el movimiento de partículas en la atmósfera. El módulo utiliza datos de vientos de seis años (2010-2015) del modelo Weather Research and Forecasting Model (WRF). Además de la evolución de los derrames, los mapas incluyen las isóbatas 20m, 40m, 60m, 80m, 100m, 200m, 300m, 400m, 500m, 1000m, 1500m, 2000m, 2500m, 3000m, 3500m, 4000m, 5000m y 6000m; así como los ríos y estados de la República Mexicana y Estados Unidos, como se muestra en la siguiente figura.</p>
							<img src="{{ asset('img/manual/escenario_ejemplo_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<h5 id="line2_2_2">Metodología<a href="#top"> Arriba</a></h5>
							<p>Las simulaciones utilizan un esquema lagrangiano que representa la dispersión de la malla no resuelta por el modelo hidrodinámico, considerando la difusión turbulenta y agregando velocidades aleatorias v': "v’ = VR (1)" durante el cálculo de los desplazamientos de partículas.</p>
							<p>En la ecuación 1 v' es la velocidad de la  difusión turbulenta, V es la velocidad interpolada del viento, y R es un número aleatorio con una distribución uniforme que va desde -a a a, el coeficiente de dispersión. El usuario define el valor de a para controlar el grado de difusión turbulenta(Ref). Los desplazamientos de cada partícula se calculan multiplicando la velocidad de la partícula (advección + difusión turbulenta) por un tiempo dt definido por el usuario, utilizando un esquema de Runge Kutta de 4º orden. Para los escenarios se utilizó un dt = 3600 s.</p>
							<p>Se realizaron simulaciones diarias para el periodo 2010-2015 con una duración de 48 horas y se almacenaron las posiciones de las partículas. Se tomaron en cuenta los niveles de altura 10 m, 100 m, 500 m, 1000 m y 1500 m.</p>
							<p>Para la construcción de los mapas, se sumaron las posiciones de las partículas de manera mensual para los seis años de simulaciones y se calcula su promedio, resultando la concentración de partículas por km², para un rango de 48 horas con mapas cada 4 horas. Estos archivos resultantes se almacenaron en formato NetCDF y se pos-procesaron en NCL para su visualización en el sitio web.</p>
							<h5 id="line2_2_3">Visualización<a href="#top"> Arriba</a></h5>
							<p>Los escenarios de derrames de petróleo se encuentran disponibles en la sección que lleva su nombre en la página Productos y su navegación se explica en <a href="#line1_6_2">Navegación: Estáticos</a>. A continuación se muestra una representación gráfica de los escenarios que se encuentran en el sitio web.</p>
							<img src="{{ asset('img/manual/paginaEscenarios_partes_animacion.jpg')}}" class="img-responsive img-manual">
							<br>
							<p>En el visualizador OWGIS se accede a los escenarios seleccionando la capa principal Escenarios de derrames, el punto a visualizar y el mes. Por definición el rango de la animación comprende todo el periodo de la simulación del escenario, sin embargo el usuario puede elegir cambiar la hora y/o el día de inicio y fin de la simulación.</p>
							<img src="{{ asset('img/manual/escenario_owgis_manual.jpg')}}" class="img-responsive img-manual"><center>Escenario de derrame</center>
							<br>
	    					</div>
	    				</div>
	    			</section>
	    		</div>
	    		
	    	</div>
	    </div>
    </div>
        @endsection

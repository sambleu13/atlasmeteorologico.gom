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
	    									<li><a href="#line1_6_2">Mapas</a></li>
	    									<li><a href="#line1_6_3">OWGIS</a></li>
	    								</ul>
	    							</li>
	    							<li><a href="#line1_7">Animaciones</a>
	    								<ul class="nav">
	    									<li><a href="#line1_7_1">Sitio web</a></li>
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
	    									<li><a href="#line2_1_2">Descripción de los mapas</a></li>
	    									<li><a href="#line2_1_3">Metodología</a></li>
	    									<li><a href="#line2_1_4">Visualización</a></li>
	    								</ul>
	    							</li>
	    							<li><a href="#line2_2">Escenarios de derrames de petróleo</a>
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
		    							<p>Este manual describe la funcionalidad, navegación y contenido del sitio web del Atlas Meteorológico del Golfo de México para plantear escenarios de derrame, con el objetivo de ser una herramienta que el usuario pueda consultar para familiarizarse con el sitio, como consulta para aclarar alguna duda o para encontrar información detallada de interés. </p>
		    							<h4>Atlas Meteorológico del Golfo de México para plantear escenarios de derrames</h4>
		    							<p>	El contenido del sitio web que se describe a continuación forma parte del subproyecto 3.3 (Modelación numérica regional de la atmósfera sobre el Golfo de México) de la Línea 3 del proyecto y tiene como objetivo integrar y sintetizar la caracterización del estadio medio y la variabilidad atmosférica en distintas escalas de tiempo del Golfo de México (GoM) en un Atlas Meteorológico que además contenga escenarios de contaminantes atmosféricos derivados de derrames de petróleo. La información que conforma el Atlas Meteorológico se presenta en mapas, series de tiempo, rosas de viento y gráficos interactivos que se describen en el apartado “3 Productos”. </p>
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
							<p>	El sitio web se diseñó para integrar toda la información del Atlas de manera práctica y fácil de acceder, por lo cual se desarrolló siguiendo la estructura de árbol que se muestra en la siguiente tabla.</p>
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
							<p>La página principal a la cual se accede al entrar al sitio web es la página Inicio, en donde se encuentran las ligas a las secciones generales del despliegue de la información del Atlas Meteorológico, así como a la descripción detallada del mismo, incluyendo información acerca del proyecto, del Atlas Meteorológico, de los desarrolladores, y el manual del sitio web.</p>
							<p>Todas las páginas del sitio web comparten el mismo encabezado y pie de página, lo que facilita la navegación dentro del Atlas Meteorológico. El encabezado contiene los logos del CIGOM y de la UNAM y el nombre del Hito , así como la barra de navegación mediante la cual se accede a las páginas principales del sitio <i> (Inicio, Productos, Información, Acerca y Contacto). </i> </p>
							<img src="{{ asset('img/manual/encabezado_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<p>El pie de página que se divide en tres columnas: la primera (extremo izquierdo) enlista todas las páginas del sitio, la segunda columna contiene los logos de los participantes del proyecto y la tercera proporciona información del equipo que desarrolló el Atlas Meteorológico.</p>
							<img src="{{ asset('img/manual/pie_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<h4 id="line1_1">Página Inicio<a href="#top"> Arriba</a></h4>
							<p>En la página <a href="{{asset('/index.php')}}" target="blank">Inicio</a> se muestra una galería de imágenes representativas del Atlas Meteorológico que corresponden a climatologías de temperatura, viento y precipitación. Debajo se muestran mosaicos secundarios con los que se puede acceder a cada una de las secciones  directamente: climatologías, escenarios de derrame de petróleo y visualizador OWGIS. Debajo se muestra un texto destacado acerca del Atlas Meteorológico y un botón que redirecciona a la página Información.</p>
							<img src="{{ asset('img/manual/paginaInicio_partes.jpg')}}" class="img-responsive img-manual">
							<br>
							<h4 id="line1_2">Página Productos<a href="#top"> Arriba</a></h4>
							<p>La página <a href="{{ asset('products')}}" target="blank">Productos</a> reúne todo el contenido del Atlas Meteorológico en tres secciones: climatologías, escenarios de derrame de petróleo y visualizador OWGIS. La sección climatologías muestra mosaicos de las variables para las que se calcularon estadísticos: temperatura, viento, precipitación, altura de capa límite, evaporación, radiación neta de onda larga, radiación de onda corta y humedad relativa. La sección escenarios de derrame de petróleo muestra un mosaico con el ejemplo de animación de un derrame para un sitio y altura determinados, desde la hora 0 hasta las 48 horas, cada 4 horas. Por último, la sección visualizador OWGIS muestra un mosaico ejemplo del visualizador en 3D.</p>
							<img src="{{ asset('img/manual/paginaProductos_partes.jpg')}}" class="img-responsive img-manual">
							<br>
							<h4 id="line1_3">Página Información<a href="#top"> Arriba</a></h4>
							<p>La página <a href="{{asset('informacion')}}" target="blank">Información</a> describe el proceso de desarrollo del Atlas Meteorológico, empezando por presentar algunas cantidades significativas acerca del Atlas Meteorológico. Después se destacan sus características más importantes como su objetivo, utilidad, desarrollo y alcance, acompañados por una breve descripción. Por último, enlista las variables y estadísticos que conforman el Atlas Meteorológico.</p>
							<img src="{{ asset('img/manual/informacion_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<h4 id="line1_4">Página Acerca<a href="#top"> Arriba</a></h4>
							<p>La página <a href="{{ asset('acerca')}}" target="blank">Acerca</a> presenta al equipo de desarrollo del proyecto, desde las instituciones involucradas, hasta los participantes en la elaboración del Atlas Meteorológico. Al final se muestran los agradecimientos a las instituciones, proyecto y personas que hicieron posible el desarrollo de este proyecto.</p>
							<img src="{{ asset('img/manual/acerca_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<h4 id="line1_5">Página Contacto<a href="#top"> Arriba</a></h4>
							<p>La página <a href="{{ asset('contact-us')}}" target="blank">Contacto</a> permite visualizar la información del grupo de desarrollo del Atlas: la dirección, teléfono, correo electrónico y ubicación, para enviar cualquier comentario, pregunta, sugerencia o propuesta de proyecto.</p>
							<img src="{{ asset('img/manual/contacto_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<h4 id="line1_6">Navegación<a href="#top"> Arriba</a></h4>
							<p>La navegación dentro del sitio, consiste en acceder a las páginas de las variables, los mapas de  las climatologías de las variables atmosféricas y los escenarios de derrames de petróleo, así como el visualizador OWGIS. A continuación se describe la navegación para cada una de los componentes del sitio web.</p>
							<h5 id="line1_6_1">Páginas<a href="#top"> Arriba</a></h5>
							<p>Para ir de una página a otra se puede seleccionar la página deseada desde el encabezado en la barra de navegación, o seleccionar la página del pie de página en la columna izquierda. Cabe destacar que se puede acceder a todas las páginas desde ambos menús, con excepción de Manual de usuario. Además, es posible acceder desde la página Inicio, a través de mosaicos, a las secciones de la página Productos y a la página Información a través de un botón .</p>
							<h5 id="line1_6_2">Mapas<a href="#top"> Arriba</a></h5>
							<p>La navegación entre mapas es parte de la página Productos, para la secciones Climatologías y Escenarios de derrame de petróleo. Cada sección se caracteriza por contener mosaicos. en Climatologías aparecen 8 mosaicos que corresponden a cada una de las variables para las cuales existen climatologías y en Escenarios de derrame de petróleo existe un mosaico único  que redirige a la página de los escenarios.</p>
							<p>Para navegar entre diferentes climatologías, se debe seleccionar primero la variable y luego el mosaico que corresponde a la climatología de interés. Si se desea revisar otro estadístico de la misma variable se puede regresar con el botón atrás.</p>
							<p>Por ejemplo: Para acceder a la climatología mensual de temperatura es necesario seleccionar la sección de climatologías en la página Productos, después elegir la variable Temperatura y en el menú la variable seleccionar Mensual, lo que mostrará la animación de la climatología mensual de temperatura para cada uno de los meses del año. En caso de buscar otra climatología de la misma variable, se oprime el botón atrás para regresar al menú de los estadísticos disponibles para Temperatura.</p>
							<img src="{{ asset('img/manual/climatologias_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<img src="{{ asset('img/manual/temperatura_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<img src="{{ asset('img/manual/mensual_temperatura_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<p>La visualización de las <a href="{{ asset('products/viento/rosas_viento')}}" target="blank">rosas de viento</a> parte un mapa y mes determinando. El mapa contiene 6 sitios predeterminados. Para acceder a las rosas es necesario entrar primero a las climatologías de viento y ara regresar a otros estadísticos de la variable se oprime el botón atrás.</p>
							<img src="{{ asset('img/manual/rosas1_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<img src="{{ asset('img/manual/rosas2_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<p>Para navegar entre escenarios de derrame de petróleo, uno debe seleccionar el mosaico de la animación del escenario para acceder a la página  <a href="{{ asset('derrames')}}" target="blank">Escenarios de derrames de petróleo</a>.</p>
							<img src="{{ asset('img/manual/escenarios_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<p> Esta página se divide en dos pestañas: Variables y Animación. En la pestaña animación uno podrá elegir el punto para el cual se visualizará el escenario de derrame, dando clic sobre el ícono en color blanco de interés, el cual cambiará a un ícono de en color verde. También debe seleccionarse la altura (en metros) y el mes de las lista desplegables. Al final se debe dar clic al botón ver animación, lo que desplegará la pestaña animación en la cual se puede observar la evolución del escenario cada 4 horas. Para seleccionar otro escenario sólo es necesario dar clic en la pestaña Variables y volver a elegir el punto, altura y mes.</p>
							<img src="{{ asset('img/manual/paginaEscenarios_partes_variables.jpg')}}" class="img-responsive img-manual">
							<br>
							<img src="{{ asset('img/manual/mapa_escenarios_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<h5 id="line1_6_3">OWGIS<a href="#top"> Arriba</a></h5>
							<p>En la sección de productos se elige la opción Visualizador OWGIS y se entra a una implementación del Atlas Meteorológico en OWGIS, que es un Sistema de Información Geográfico en web con funcionalidad muy amplia.  La navegación en OWGIS se realiza en la misma ventana que se presenta al entrar y cambia con la selección de distintas opciones de los menús y ventanas que la componen a través de clics. Además,el mapa se puede mover  arrastrándolo con el ratón y es posible hacer zoom con el botón central del mismo, así como habilitar y deshabilitar los textos de ayuda.</p>
							<p>Los menús principales son la barra superior que permite personalizar la visualización de los productos, así como las ventanas de capas principales, capas opcionales y calendarios.</p>
							<img src="{{ asset('img/manual/ventana_owgis_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<p>El menú principal está compuesto por el botón Google Earth que permite descargar el mapa actual en un archivo KML, la transparencia que se identifica por un ícono de un ojo y los botones de aumentar o disminuir, el botón de una gota que permite personalizar la barra de color de las capas principales, el botón de gráfica que indica la herramienta de transectos verticales, el botón de restablecer que se distingue por un círculo con dos flechas, el botón de información que despliega información acerca de OWGIS, el botón de pregunta que activa y desactiva los textos de ayuda en el visualizador y el menú de selección del idioma (Español/Inglés).</p>
							<img src="{{ asset('img/manual/menu_owgis_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<p>Por otro lado, en la ventana de capas principales se encuentran las variables y los estadísticos para cada variable, en algunas ocasiones pueden aparecer tres menús desplegables en esta ventana, lo que corresponde a un estadístico más específico.</p>
							<img src="{{ asset('img/manual/capas_principales_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<p>En capas opcionales se pueden activar o desactivar los puntos de interés previamente definidos, los cuales se representan con estrellas dentro del GoM, la batimetría, el contorno de los países y de los estados de la República Mexicana.</p>
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
							<p>Todos los mapas muestran un título, el cual indica la variable, el estadístico y la fecha seleccionada. En la parte inferior izquierda se encuentra la barra de color con su numeración (la cual cambia con cada variable) y en el extremo derecho se encuentran los logos del proyecto.</p>
							<p>Otra funcionalidad es que para cada mapa se puede consultar la serie de tiempo de cualquier sitio dentro del dominio eligiendo una fecha inicial y final en los calendarios. A continuación se debe seleccionar el botón mostrar dentro de la ventana de información del punto de interés. A continuación se muestra un ejemplo de selección de serie de tiempo para la climatología horaria mensual de la Altura de capa límite para el mes de enero y un rango de tiempo de las 00:00 horas a las 23:00 horas.</p>
							<img src="{{ asset('img/manual/seriedetiempo_manual.jpg')}}" class="img-responsive img-manual"><center>Acercamiento a ventana de punto elegido en el mapa con opción a visualizar su serie de tiempo.</center>
							<br>
							<img src="{{ asset('img/manual/ventana_seriedetiempo_manual.jpg')}}" class="img-responsive img-manual"><center>serie de tiempo del punto anterior</center>
							<br>
							<h4 id="line1_7">Animaciones<a href="#top"> Arriba</a></h4>
							<p>El Atlas Meteorológico del GoM presenta animaciones tanto en el sitio web como en el visualizador OWGIS. Dentro del sitio hay animaciones para las climatologías con excepción de las rosas de viento. En OWGIS hay animaciones para todas las capas principales con excepción de los percentiles, los percentiles mensuales y las rosas de viento.</p>
							<h5 id="line1_7_1">Sitio web<a href="#top"> Arriba</a></h5>
							<p>Las animaciones en el sitio web tienen una barra de controles de animación que permiten reproducir el conjunto de mapas de la climatología en orden cronológico y con distintas velocidades. Existen tres tipos de controles, uno para las climatologías mensuales, otro para las climatologías horarias mensuales y uno más para los escenarios de derrames de petróleo.</p>
							<p>Los controles para las climatologías mensuales permiten avanzar o retroceder de la imagen actual una por una, así como ir al inicio o al final del conjunto de imágenes. A continuación se presenta un diagrama con la función de cada botón.</p>
							<img src="{{ asset('img/manual/animacion_mensual_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<p>La única diferencia de los controles para el despliegue de la animación para las climatologías horarias mensuales con relación a las climatologías mensuales es el menú desplegable para seleccionar el mes que se visualizará, como se muestra en el siguiente diagrama.</p>
							<img src="{{ asset('img/manual/animacion_horaria_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<p>La pestaña Animación muestra la animación en las horas ya definidas del escenario de derrames, con la opción de manipular la velocidad y la imagen mostrada de la animación con los controles de animación que se encuentran en la parte inferior del mapa. A continuación se presenta una descripción de los controles:</p>
							<img src="{{ asset('img/manual/animacion_derrames_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<h5 id="line1_7_2">OWGIS<a href="#top"> Arriba</a></h5>
							<p>Las animaciones en OWGIS consisten en 3 pasos: primero se debe seleccionar el periodo que se va a animar en el calendario, eligiendo fecha de inicio y fecha de fin (cuidando que la fecha de inicio sea anterior a la fecha de fin), después la configuración de la animación que abarca la resolución, el tipo de animación y dar clic en el botón de animación, por último está la manipulación de la animación con los controles de animación que se describen a continuación.</p>
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
							<p>	El Atlas Meteorológico del GoM tiene en total 20,730 productos, de los cuales 15,244 son mapas de las climatologías, 4,680 son mapas que constituyen los escenarios de derrames de petróleo y 806 rosas de viento. A continuación se muestra una relación de los estadísticos generados, las variables y el total de mapas.</p>
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
							<p>Para generar todos los productos primero se definió el dominio que se centra en la región del Golfo de México y cubre de 99.5214 W a 78.2718 W y de 16.4452 N a 32.7302 N, el cual se muestre en el siguiente mapa.</p>
							<img src="{{ asset('img/manual/dominio_manual.jpg')}}" class="img-responsive img-manual">
							<br>
							<p>Este dominio incluye los puntos de interés definidos para los que se generaron los escenarios de derrame y las rosas de viento. Estos se muestran en la siguiente tabla.</p>
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
							<p>El modelo utilizado para las simulaciones numéricas de la atmósfera es el denominado Weather Research & Forecasting Model (WRF) en su versión 3.8.1. El WRF es un sistema numérico de predicción del tiempo que sirve para hacer pronósticos operacionales e investigación atmosférica en escalas que van desde metros hasta miles de kilómetros. El período de tiempo que se consideró para generar el reanálisis para México fue del año 1979 al año 2017. Además, se adaptaron datos de las Series de Uso de Suelo y Vegetación de INEGI.</p>
							<p>A partir de las variables del modelo necesarias para calcular las climatologías de las variables definidas para el Atlas Meteorológico, así como los escenarios de derrames de petróleo y las rosas de viento, se generaron archivos resultantes de estadísticos que se almacenaron con formato NetCDF (Network Common Data Form), usando la convención CF (Climate and Forecast).</p>
							<p>A continuación se describen las climatologías y los escenarios de derrame.</p>
							<h4 id="line2_1">Climatologías<a href="#top"> Arriba</a></h4>
							<h5 id="line2_1_1">Variables<a href="#top"> Arriba</a></h5>
							<p>Las variables atmosféricas que se incluyen en el Atlas Meteorológico del GoM son las siguientes:</p>
							<ul>
								<li>Temperatura del aire a 2 m</li>
								<li>Precipitación acumulada</li>
								<li>Magnitud y dirección del viento a 10 m</li>
								<li>Humedad relativa</li>
								<li>Radiación de onda corta</li>
								<li>Radiación neta de onda larga</li>
								<li>Evaporación</li>
								<li>Altura de capa límite</li>
								
							</ul>
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
							<p>A continuación se describe la metodología que se siguió para el cálculo de cada una de las climatologías.</p>
							<p> Climatología diaria<p>
							<p>Se  procesó la información de 1980 al 2016 (37 años). Para cada día del año se suman los 888 valores horarios correspondientes (24*37) y el resultado se divide entre ese número total de datos. Como resultado de este proceso se obtienen 365 valores, que corresponden a los promedios diarios de los 365 días del año, considerando el período 1980-2016.</p>
							<p>Climatología horaria mensual</p>
							<p>Para calcular la climatología horaria mensual, se suman los valores correspondientes a una hora dada del día durante todos los días de un mismo mes para todos los años del periodo y el resultado se divide entre el total de datos. Por ejemplo, para calcular el promedio para una hora específica del mes de enero, se suman los 1,147 (=31x37) valores horarios  correspondientes a los 37 años de datos y el resultado se divide entre el total de datos. Este proceso se repite para cada hora y para cada mes del año, con lo que se obtienen 24 promedios horarios por mes. Cabe mencionar que para la variable de precipitación se trabaja con el acumulado horario, de igual manera para la evaporación se hace la conversión de unidades de segundos a hora, es decir que las unidades para estas dos variables son de mm/hr. Es importante señalar que para la variable humedad relativa se tienen valores cada 3 horas, por lo que sólo se tienen 8 datos por día (00, 03, 06, 09, 12, 15, 18 y 21 hrs). Para cada uno de los 365 días del año se consideraron los correspondientes 24 valores horarios en cada uno de los 37 años del período analizado. Lo anterior da un total de 888 (=24x37) valores horarios para cada día del año a partir de los cuales se calcula el promedio climatológico diario. Los mapas de las climatologías diarias únicamente están disponibles a través del visualizador OWGIS. En el caso de la precipitación se toman lecturas por día, entonces el número de valores que se usan para calcular el promedio son 37 para cada día del año, dándonos como unidades mm/dia. Para el caso de evaporación solo se hace una conversión de unidades de mm/s por mm/dia.</p>
							<p>Climatología mensual</p>
							<p>Para el cálculo de las climatologías mensuales se consideraron todos los datos horarios correspondientes a un mes dado para todos los años del período. Es decir, para el mes de enero se suman los 27,528 (=24x31x37) valores horarios y el resultado se divide entre este total de datos. De esta manera se obtienen los 12 promedios climatológicos mensuales para cada una de las variables consideradas. Para precipitación el número total de valores es 37 debido a que se toma el acumulado por mes para cada año, siendo mm/mes sus unidades. En el caso de Evaporación las unidades son mm/mes ya que se hace una conversión de unidades.</p>
							<p>Máxima absoluta diaria</p>
							<p>Para este estadístico se tomó en cuenta el valor máximo de la variable para cada día del año, por lo que se obtienen 365 valores para cada uno de los años del período. Una vez que se tienen todos los valores máximos diarios para los 37 años, se considera nuevamente el máximo de ese conjunto de datos, obteniéndose así los 365 mapas con los valores máximos absolutos diarios. Las variables para las cuales se calculó este estadístico son: temperatura a 2m, precipitación y viento. Los mapas correspondientes están disponibles únicamente a través del visualizador OWGIS. Para la variable de precipitación se trabaja de una manera diferente tomando la precipitación acumulada por día teniendo como unidades mm/dia.</p>
							<p>Máxima absoluta por mes</p>
							<p>Para cada año del período considerado, se agrupan los archivos por mes y se extraen los valores máximos para cada uno de los 12 meses del año. Esta operación se repite para todos los años del período. A partir de esta nueva base de datos se extraen los valores máximos para cada mes de entre los 37 años, obteniéndose así los 12 mapas con los valores máximos absolutos mensuales para cada una de las variables consideradas. Es importante mencionar que la variable precipitación tienen unidades de mm/dia, esto es porque se toma la máxima de entre todos los días de cada mes.</p>
							<p>Promedio mensual de máximas</p>
							<p>A partir de los valores máximos mensuales de cada año, se calcula el promedio de los 37 valores correspondientes para cada mes. Por ejemplo, para el mes de enero se obtienen sus valores máximos en cada uno de los 37 años del periodo analizado y se calcula su promedio. Con esto se obtienen los 12 promedios de los valores máximos mensuales para cada variable analizada. Para el caso de la variable precipitación se trabaja con acumulados por día es decir que las unidades que se tienen son mm/dia.</p>
							<p>Mínima absoluta por mes</p>
							<p>Para obtener los mínimos absolutos mensuales se sigue un procedimiento similar al descrito en la sección de los máximos absolutos mensuales, pero considerando ahora los valores mínimos. En este caso, se obtuvieron los 12 mapas con los valores mínimos absolutos por mes únicamente para la variable de temperatura del aire a 2m. </p>
							<p>Mínima promedio mensual</p>
							<p>En este caso se sigue un procedimiento similar al descrito en la sección de las máximas promedio mensuales, pero considerando ahora los valores mínimos. Con esto se obtienen los 12 mapas con los promedios de los valores mínimos mensuales, únicamente para la temperatura del aire a 2m como en el apartado anterior.</p>
							<p>Percentiles del período</p>
							<p>Se calcularon percentiles para las variables de temperatura del aire a 2m, precipitación y componentes del viento referidas a una altura de 10 m (U10, V10), considerando los valores históricos en el período 1980-2016. El procedimiento utilizado fue el siguiente:</p>
							<p>1. Se generaron histogramas para cada variable, los cuales representan la distribución de frecuencias de los valores correspondientes en todo el período analizado. Por ejemplo, para los datos de temperatura se consideró un rango de valores de -20°C a 50°C con incrementos de un grado.</p>
							<p>2. Posteriormente se calcularon los percentiles 0.1, 1, 5, 10, 25, 50, 75, 90, 95, 99 y 99.9 a partir de la distribución obtenida.</p>
							<p>Los mapas de los percentiles únicamente se muestran en el visualizador OWGIS</p>
							<p>Percentiles mensuales</p>
							<p>Mediante un procedimiento similar al utilizado para los percentiles de todo el período, se calcularon los valores de los percentiles mensuales para las variables de temperatura del aire a 2m, precipitación y componentes del viento U10 y V10. En este caso, en lugar de considerar los valores de las variables para todo el período, se trabajó con los datos separados por meses, de enero a diciembre. Los percentiles calculados fueron los mismos que para el caso anterior. En la Figura 3.10 se muestra el mapa del percentil 99 para la precipitación en el mes de enero.</p>
							<p>Anomalías mensuales por año</p>
							<p>El cálculo de este estadístico se obtuvo a partir de un pre-procesamiento de los datos, el cual consiste en la obtención de los doce promedios mensuales para cada uno de los 37 años del periodo del reanálisis (1980-2016). Posteriormente, a cada uno de esos promedios mensuales se le resta la climatología del mes correspondiente. Por ejemplo, se toma el promedio del mes de enero del año 2000 y se le resta el promedio de todos los eneros del periodo, por lo que al final se obtienen 37 anomalías mensuales en total, una por año. Igual que para el caso de los percentiles, las variables para las cuales se calcularon las anomalías mensuales son temperatura a 2m, precipitación y viento a 10m. Los mapas correspondientes sólo se pueden consultar a través de OWGIS.</p>
							<p>Índices climáticos</p>
							<p>Se calcularon una serie de índices climáticos con el objeto de determinar valores extremos de las siguientes variables: temperatura a 2m (T), precipitación (R) y magnitud del viento a 10m (W). Dichos índices están basados en los valores de los percentiles mensuales y representan el número o porcentaje de días en un mes determinado en que la variable superó o estuvo por debajo del percentil dado. Los índices que consideran el recuento de días con base en umbrales determinados por percentiles son expresiones de anomalías relativas al clima local. Los umbrales se eligen de manera que son superados con una frecuencia fija durante el período base que se utiliza para definirlos (WMO, 2009). Los percentiles que se consideraron en el Atlas para establecer los umbrales máximos fueron: 90, 95, 99 y 99.9; y para los umbrales mínimos fueron: 0.1, 1, 5 y 10.</p>
							<p>Para cada variable se designó un acrónimo para el índice correspondiente siguiendo un mismo formato. Los acrónimos están compuestos por la inicial de la variable (T, R o W) seguida de la letra “N” para los umbrales mínimos o de la letra “X” para los umbrales máximos, especificando después el percentil correspondiente seguido de la letra “p” de percentil. En la Tabla 3.1 se presentan los acrónimos de los índices calculados para cada variable.</p>
							<center><table id="tabla-manual">
								<tr>
									<th>Variables</th>
									<th>Temperatura</th>
									<th>Precipitación</th>
									<th>Viento</th>
								</tr>
								<tr>
									<th>Índices climáticos<br>para umbrales<br>máximos</th>
									<td>TX90p<br>TX95p<br>TX99p<br>TX99.9p</td>
									<td>RX90p<br>RX95p<br>RX99p<br>RX99.9p</td>
									<td>WX90p<br>WX95p<br>WX99p<br>WX99.9p</td>
								</tr>
								<tr style="background-color: #def2f1;">
									<th>Índices climáticos<br>para umbrales<br>mínimos</th>
									<td>TN0.1p<br>TN1p<br>TN5p<br>TN10p</td>
									<td></td>
									<td></td>
								</tr>
							</table></center>
							<p>Índices climáticos para umbrales máximos</p>
							<p>Considerando los percentiles mensuales 90, 95, 99 y 99.9, se hace un conteo del número de días en un mes dado en los que la variable de interés haya rebasado el valor del percentil correspondiente, y después se divide entre el total de días en dicho mes para obtener la proporción (cuyo valor estará entre 0 y 1) o el porcentaje (si se multiplica por 100)</p>
							<p>Índices climáticos para umbrales mínimos</p>
							<p>En este caso se consideraron los percentiles mensuales 0.1, 1, 5 y 10 para realizar el conteo del número de días en un mes dado en que la variable de interés haya estado por debajo del percentil correspondiente, para después obtener su proporción o porcentaje. Estos índices se calcularon únicamente para la temperatura a 2m.</p>
							<p>Rosas de Viento</p>
							<p>Las rosas de viento se generan dinámicamente a partir de archivos json, para los puntos de interés definidos utilizando su latitud y longitud. Existe un archivo con todos los datos para U y V por cada punto y cada mes además de uno anual por punto.</p>
							<p>Para cada hora de los 30 años de información<br>Para cada punto, dada su longitud y su latitud se tomó los valores de la variables  U y V, en caso de no tener la posición exacta se tomó el valor más cercano a dicha posición.<br>
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
							<p>En cambio, en el visualizador OWGIS se tiene el total de los estadísticos calculados para todas las variables definidas y su navegación se detalla en el apartado <a href="#line1_6_3">Navegación:OWGIS</a>. A continuación se presenta un ejemplo de la visualización de todos los tipos de productos en OWGIS (una climatología, una serie de tiempo, una rosa de viento y un escenario de derrame)</p>
							<img src="{{ asset('img/manual/climatologia_owgis_manual.jpg')}}" class="img-responsive img-manual"><center>Climatología</center>
							<br>
							<img src="{{ asset('img/manual/serie_owgis_manual.jpg')}}" class="img-responsive img-manual"><center>Serie de tiempo</center>
							<br>
							<img src="{{ asset('img/manual/rosa_owgis_manual.jpg')}}" class="img-responsive img-manual"><center>Rosa de viento</center>
							<br>
							<h4 id="line2_2">Escenarios<a href="#top"> Arriba</a></h4>
							<p>Los escenarios se construyeron a partir de simulaciones numéricas para varios puntos específicos de interés dentro del GoM y que, en conjunto, muestran la variabilidad de estos eventos en escala horaria-mensual y para diferentes niveles de la atmósfera. Para ello, se consideraron diversos factores que influyen en la propagación de los contaminantes en la atmósfera (en este caso considerados como partículas inertes), como son los patrones de viento, la altura a la cual llega la columna de contaminantes, y la ubicación de las partículas que simulan la concentración de los contaminantes con respecto al punto de origen del derrame.</p>
							<h5 id="line2_2_1">Características de las simulaciones<a href="#top"> Arriba</a></h5>
							<p>Los escenarios se construyeron utilizando los vientos horarios generados con la simulación del modelo WRF y un módulo de dispersión lagrangiana programado en Matlab.Este módulo realiza las siguientes acciones en cada paso de tiempo:</p>
							<ul>
								<li>Lectura de datos de los campos de viento (componentes U y V).</li>
								<li>Interpolación de las componentes del viento a la posición y tiempo de cada partícula.</li>
								<li>Desplazamiento de las partículas (mediante advección y difusión turbulenta).</li>
							</ul>
							<p>Se utilizan datos de los campos de viento para el periodo 2010-2015 que se obtuvieron de la reconstrucción histórica de las condiciones meteorológicas sobre el GoM con el modelo atmosférico WRF. El dominio considerado para las simulaciones se muestra en la Figura 36.</p>
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

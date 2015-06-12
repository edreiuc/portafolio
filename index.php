<?php
	$titlesite = 'Samuel UC Inicio, pagina principal del sitio web profesional';
	$metadescription = '<meta name="description" content="Descripción personal y profesional de mis habilidades y capacidades, información sobre las herramientas y detalles sobre mis formaciones académicas.">';
	$metakey= '<meta name="keywords" content="pagina,principal,sitio,web,profesional,Inicio,Samuel,UC">';
	include 'header.php';
?>
		<div class="row">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="img/s2.jpg" alt="geometry wallpaper desing">
			      <div class="carousel-caption">
			      		<h3>Sitios web y aplicaciones</h3>			     
			      </div>
			    </div>
			    <div class="item">
			      <img src="img/s3.jpg" alt="ideas innovaciones desarrollo">
			      <div class="carousel-caption">
			        <h3>Mejorando tus oportunidades</h3>
			      </div>
			    </div>
			
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div class="row space1">
					
					<div class="col-sm-6 col-md-3">
					    <div class="thumbnail">
					      <img src="img/2.jpg" alt="foto samuel Uc">
					      <div class="caption">
					        <h3>Samuel Uc Angulo</h3>
					        <p>23 años, Mexicano</p>
					        
					      </div>
					    </div>
					</div>
					<div class="col-md-9 col-sm-6 cuadro1">
						<div class="blocke2"><h2>Sobre mi</h2></div>
						<p>Soy un joven de 23 años entusiasta por el desarrollo de tecnologías web, mis principales objetivos son el enriquecimiento de mis habilidades como desarrollador de software, tengo gusto por el aprendizaje, pasión por la música y amor por la fotografía, me considero una persona proactiva, tiendo a salir de la monotonía para efectuar de otra manera mis actividades y variar la dinámica de las mismas. Soy desarrollador de software y es un placer estar al servicio de los demás. </p>
						<div class="pull-right floatrig">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Más Información</button></div>
					</div>
					<!-- Modal -->
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							        <h3 class="modal-title" id="myModalLabel">Biografía (25/12/1991)</h3>
							      </div>
							      <div class="modal-body">
							        <div class="biograf">
							        	<h4>CEDULA PROFESIONAL <small>08748267</small></h4>
							        	<p></p>
							        	<hr>
							        	<h4>FORMACION ACADEMICA</h4>
							        	<div class="center-block">
							        		<h5><strong>Institut Universitaire Technologique de Troyes, Troyes, 10000, Francia</strong></h5>
							        		<p>Métiers de l'internet et du multimedia</p>
							        		<h5><strong>Universidad Tecnológica Metropolitana, Santa Rosa, 97000, Merida, Yucatán</strong></h5>
							        		<p>Multimedia y comercio electrónico</p>
							        		<h5><strong>Colegio de Bachilleres del Estado de Yucatán Plantel Umán, 97390, Umán, Yucatán</strong></h5>
							        		<p>Físico matemático</p>
							        	</div>
							        	<hr>
							        	<h4>CONOCIMIENTOS INFORMATICOS</h4>
							        	<p>*Paqueteria Office *Photoshop *Illustrator *Premiere *After Effects *3D MAX *SublimeText</p>
							        	<p>*PHP *JavaScript *Jquery *Bootstrap *AJAX *Css3 *HTML5</p>
							        	<hr>
							        	<h4>IDIOMAS</h4>
							        	<ol>
							        		<li>Frances Nivel B1.3</li>
							        		<li>Ingles A2</li>
							        	</ol>
							        </div>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
							<!-- modal -->
				</div>
				<hr class="style-six" />
				<div class="row space1">
					<div class="col-md-12">
						<div class="blocke2"><h2>Conocimientos</h2></div>
					</div>
					
					<div class="col-md-6">
						<div class="media">
						  <div class="media-left">
						    <a href="#">
						      <img class="media-object" src="img/html5.png" alt="html5 logotipo">
						    </a>
						  </div>
						  <div class="media-body">
						    <h4 class="media-heading">HTML5</h4>
						    <p>Establece una serie de nuevos elementos y atributos que reflejan el uso típico de los sitios web modernos. Algunos de ellos son técnicamente similares a las etiquetas &#60;div&#62; y &#60;span&#62;, pero tienen un significado semántico.<p>
						  </div>
						</div>

						<div class="media">
						  <div class="media-left">
						    <a href="#">
						      <img class="media-object" src="img/css-64.png" alt="css3 logotipo">
						    </a>
						  </div>
						  <div class="media-body">
						    <h4 class="media-heading">CSS3</h4>
						    <p>Viene con interesantes novedades que permitirán hacer webs más elaboradas y más dinámicas, con mayor separación entre estilos y contenidos. Dará soporte a muchas necesidades de las webs actuales, sin tener que recurrir a trucos de diseñadores o lenguajes de programación.</p>
						  </div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="media">
						  <div class="media-left">
						    <a href="#">
						      <img class="media-object" src="img/javascript-64.png" alt="js logotipo">
						    </a>
						  </div>
						  <div class="media-body">
						    <h4 class="media-heading">JS</h4>
						    <p>Se utiliza principalmente en su forma del lado del cliente, implementado como parte de un navegador web permitiendo mejoras en la interfaz de usuario y páginas web dinámicas aunque existe una forma de JavaScript del lado del servidor.<p>
						  </div>
						</div>

						<div class="media">
						  <div class="media-left">
						    <a href="#">
						      <img class="media-object" src="img/jquery.png" alt="jquery logotipo">
						    </a>
						  </div>
						  <div class="media-body">
						    <h4 class="media-heading">Jquery</h4>
						   	<p> Permite simplificar la manera de interactuar con los documentos HTML, manipular el árbol DOM, manejar eventos, desarrollar animaciones y agregar interacción con la técnica AJAX a páginas web. Fue presentada el 14 de enero de 2006 en el BarCamp NYC. jQuery es la biblioteca de JavaScript más utilizada.</p>
						  </div>
						</div>
					</div>
				</div>
				<hr class="style-six" />
				<div class="row space1">
					<div class="col-md-12">
						<div class="blocke2"><h2>En formacion</h2></div>
						<ul>
							<li><h1>CakePHP</h1></li>
							<li><h1>ASP.NET</h1></li>
						</ul>
						<br>
						<br>
					</div>
					
				</div>	
			</div>
		</div>
<?php
	include 'footer.php';
?>
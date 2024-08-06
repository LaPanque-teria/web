<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Universidad Hispana - Huauchinango</title>
        <meta name="keywords" content="Universidad Hispana Huauchinango universidades sierra norte de puebla licenciaturas maestrias diplomados" />
        <meta name="description" content="Página oficial de la Universidad Hispana Huauchinango" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
    <script src="Scripts/swfobject_modified.js"></script>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">
		  <div id="header">

					<!-- Logo --><!-- Nav -->
						<nav id="nav">
							<ul>
								<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1300" height="199" id="FlashID" title="banner">
								  <param name="movie" value="encabezado/banner.swf">
								  <param name="quality" value="high">
								  <param name="wmode" value="opaque">
								  <param name="swfversion" value="7.0.70.0">
								  <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
								  <param name="expressinstall" value="Scripts/expressInstall.swf">
								  <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
								  <!--[if !IE]>-->
								  <object type="application/x-shockwave-flash" data="encabezado/banner.swf" width="1300" height="199">
								    <!--<![endif]-->
								    <param name="quality" value="high">
								    <param name="wmode" value="opaque">
								    <param name="swfversion" value="7.0.70.0">
								    <param name="expressinstall" value="Scripts/expressInstall.swf">
								    <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
								    <div>
								      <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
								      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="250" height="200" /></a></p>
							        </div>
								    <!--[if !IE]>-->
							      </object>
								  <!--<![endif]-->
							  </object>
								<li><a href="index.html">Inicio</a></li>
								<li><a href="#">Instituci&oacute;n</a>
									<ul>
                                    	<li><a href="directorio.html">Directorio</a></li>
                                        <li><a href="misionvision.html">Misi&oacute;n y visi&oacute;n</a></li>
                                        <li><a href="valores.html">Valores</a></li>
                                    </ul>
                                 </li>
								<li><a href="#">Oferta acad&eacute;mica</a>
                                	<ul>
                                    	<li><a href="licenciaturas.html">Licenciaturas</a></li>
                                        <li><a href="maestrias.html">Maestr&iacute;as</a></li>
                                        <li><a href="diplomados.html">Diplomados</a></li>
                                    </ul>
                                </li>
								<li><a href="#">Servicios</a>
                                	<ul>
                                    	<li><a href="titulacion.html">Titulaci&oacute;n</a></li>
                                    	<li><a href="calendario.html">Calendario de actividades</a></li>
                                        <li><a href="doctos/reglamento_general.pdf" target="_blank">Reglamento interno</a></li>
                                    </ul>
                                </li>
								<li class="current"><a href="galeria.php">Galer&iacute;a</a></li>
								<li><a href="contacto.html">Contacto</a></li>
							</ul>
						</nav>

				</div>
			<!-- Main -->
<section class="wrapper style1">
					<div class="container">
						<div id="content">

							<!-- Content -->

								<article>
									<header>
										<h2>Galer&iacute;a</h2>
										<p>Algunos momentos captados en c&aacute;mara</p>
									</header>
<!-- Highlights -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row gtr-200">
                                    <?php
$folder_path = 'images/galeria/'; //image's folder path

$num_files = glob($folder_path . "*.{JPG,jpg,jpeg,JPEG,gif,png,bmp}", GLOB_BRACE);

$folder = opendir($folder_path);
 
if($num_files > 0)
{
 while(false !== ($file = readdir($folder))) 
 {
  $file_path = $folder_path.$file;
  $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
  if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp' || $extension == 'jpeg') 
  {
   ?>
		<section class="col-4 col-12-narrower">
			<div class="box post">
			<a href="<?php echo $file_path; ?>" class="image left"><img src="<?php echo $file_path; ?>" alt="<?php echo $file_path; ?>" /></a>
			</div>
		</section>
            <?php
  }
 }
}
else
{
 echo "the folder was empty !";
}
closedir($folder);
?>
				</div>
			</div>
		</section>
									
								</article>

						</div>
					</div>
				</section>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
							<section class="col-3 col-6-narrower col-12-mobilep">
								<h3>Sitios de interés</h3>
								<ul class="links">
									<li><a href="misionvision.html">Misi&oacute;n y Visi&oacute;n</a></li>
									<li><a href="valores.html">Valores</a></li>
									<li><a href="licenciaturas.html">Licenciaturas</a></li>
									<li><a href="maestrias.html">Maestr&iacute;as</a></li>
                                    <li><a href="cursos.html">Cursos</a></li>
                                    <li><a href="doctos/reglamento_general.pdf" target="_blank">Reglamento interno</a></li>
									<li><a href="contacto.html">Contacto</a></li>
								</ul>
							</section>
							<section class="col-3 col-6-narrower col-12-mobilep">
								<h3>Datos generales</h3>
								<center><strong>Alianza Hispana</strong></center><strong>Clave de Centro de Trabajo:</strong> 21PSU1507U <br />
Av. Revolución Lote 02 Mza 39<br />
Col. El Potro, Huauchinango, Pue.<br />
<strong>Horarios de atención:</strong><br />
Lunes a Viernes de 08:00 a 14:00 hrs. y de 16:00 a 19:00 hrs.<br />
Sábados de 08:00 a 14:00 hrs.
							    <br />
                                Teléfonos:<br />
                                Oficina: (776) 762 4159<br />
                                Celular: 776 102 5099</section>
							<section class="col-6 col-12-narrower">
								<h3>Ubicaci&oacute;n</h3>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3745.079056757332!2d-98.07268408555035!3d20.17243358646839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d08a40f87220d3%3A0xac5d667bb42ce9e9!2sInstituto+universitario+Hispana+suc.+Huauchinango!5e0!3m2!1ses-419!2smx!4v1558909203185!5m2!1ses-419!2smx" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
							</section>
						</div>
					</div>

					<!-- Icons -->
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://www.facebook.com/maestriasydiplomados.huachinango" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
							<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
						</ul>

					<!-- Copyright -->
						<div class="copyright">
							<ul class="menu">
								<li>&copy; Universidad Hispana Huauchinango, Pue. Todos los derechos reservados</li><li>Diseño: HTML5 UP</li>
							</ul>
						</div>

		  </div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
    <script type="text/javascript">
swfobject.registerObject("FlashID");
            </script>
	</body>
</html>
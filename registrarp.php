
<!DOCTYPE html>
<html lang="es">
  <head>
	<!-- meta tags requeridos -->
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<meta name="author" content="Universidad de Colima"/>
	<meta http-equiv="x-ua-compatible" content="ie=edge"/>
	<meta property="og:type" content="website"/>
	<meta property="og:description" content="Universidad de Colima"/>
	<meta property="og:image" content="http://wayf.ucol.mx/ucol_mini.png"/>
	<meta property="og:locale:alternate" content="es_ES" />
	<meta property="og:site_name" content="Universidad de Colima" />
		
	<!-- Titulo principal -->
	<title>HDUNI</title>
	<!-- link requeridos -->
	<link href="http://wayf.ucol.mx/ucol_mini.png" rel="image_src" />
	<link href="//www.ucol.mx/cms/img/favicon.ico" type="image/x-icon" rel="icon" />
	<!-- jQuery -->
	<script src="//www.ucol.mx/cms/beta/js/jquery.min.js"></script> 
	<!-- Bootstrap y header & footer agregados -->
	<link href="//www.ucol.mx/cms/headerfooterapp2.css?v=1" rel="stylesheet">
	<link href="//www.ucol.mx/cms/beta/css/carrusel.css" rel="stylesheet">
    
  
    <style>
		.breadcrumb li {
			font-size: 14px !important;
		}
		.page-breadcrumb a.btn-danger {
			padding: 0 15px;
			color: #fff !important;
		}
		
		body {font-family: Arial;}
		input[type=text], input[type=email], input[type=tel], input[type=file],select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
	</style>
  </head>
  <body>
  	<div id="estructura">
	<!-- Fixed navbar -->
	<nav class="navbar navbar-light bg-faded theme-primary pos-f-t">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-xs-12">
					<button class="navbar-toggler hidden-md-up pull-right collapsed" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false">&#x2630;</button>			        <div class="collapse navbar-toggleable-sm" id="navbar-header">
				        
			            <a class="navbar-brand" id="logo" href="//www.ucol.mx/" target="_blank">Universidad de Colima</a>
			            <span class="home-href"><a href="./"></a></span>
			            						   <!--<ul id="navlist" class="nav navbar-primary navbar-nav pull-md-right">
						   <li class="nav-item">
						      <a class="nav-link" data-hover="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
						         Opcion 1
						      </a>
						           <ul id="subnavlist" class="dropdown-menu">
						              <li><a href="#">Sub opcion 1</a></li>
						              <li><a href="#">Sub opcion 2</a></li>
						           </ul>
						   </li>
						   <li class="nav-item">
						      <a class="nav-link" href="#">
						         Opcion 2
						      </a>
						   </li>
						   <li class="nav-item">
						      <a class="nav-link" href="#">
						         Opcion 3
						      </a>
						   </li>
						</ul>-->
			        </div>
				</div>
			</div>
		</div>
    </nav> <!-- /navbar -->
     <section class="page-breadcrumb"> 
     <div class="container "> 
     	<div id="path">
	        	<ol class="breadcrumb">
	            	<!--<li>Usted está en:</li> -->
	           <!--  <li><a href="cdeprincipal.php">Inicio</a></li> -->
				
				   <li><a href="#">Capturador</a></li>
			</ol>
        </div>
        <div id="sesion">
	        	<ol class="breadcrumb">
	            	
	            <li class="user-name"><?php echo $nombrea; ?></li>
	            <li><a href="logout.php">Salir</a></li>
			</ol>
        </div>
     </div> <!--cierra path-->
    </section>
	<section class="page-header">
        <div class="container">
	        <h1 class="title-ucol">HISTORIA DEL DEPORTE UNIVERSITARIO (HDUNI)</h1>
	    </div><!--/ Cierra .container /-->
    </section>
    <nav class="nav-sistema">
    		<button class="navbar-toggler hidden-md-up pull-right collapsed" type="button" data-toggle="collapse" data-target="#navbar-header2" aria-controls="navbar-header2" aria-expanded="false">☰</button>
		<div class="collapse navbar-toggleable-sm" id="navbar-header2">
	        <ul id="navlist" class="nav navbar-primary navbar-nav pull-md-right">
			    <li class="nav-item">
	                <a class="a3 nav-link" href="index.php">
	                    <div class="oIcono opcion3"></div>
	                    Inicio
	                </a>
	                <!--[if gte IE 7]><!--><!--<![endif]-->
	            </li>
	            <li class="nav-item">
	                <a class="a1 nav-link" data-hover="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
	                    <div class="oIcono opcion1"></div>
	                    Noticias
	                </a>
	                <!--[if gte IE 7]><!--><!--<![endif]--><!--[if lte IE 6]>
	                <table>
	                    <tr>
	                        <td>
	                            <![endif]-->
	                            <ul id="subnavlist" class="dropdown-menu">
	                                <li><a href="registrarn.php">Registrar</a></li>
				                    <li><a href="consultarn.php">Consultar</a></li>
				                    <!--<li><a href="cdeconsulta.php">Consulta</a></li>
				                    <li><a href="#Paris">Consultas</a></li> -->
	                            </ul>
	                            <!--[if lte IE 6]>
	                        </td>
	                    </tr>
	                </table>
	                </a><![endif]-->
	            </li>
	           
	        <!--    <li class="nav-item">
	                <a class="a3 nav-link" href="#">
	                    <div class="oIcono opcion3"></div>
	                    Nutricion
	                </a>
	                
	            </li> -->
	        </ul>
	    </div>
	</nav>
    
    
 <div class="container c-principal">
  <div class="row p-contenido">
		<div class="col-xl-2 col-lg-4 col-md-4 col-xs-12 sidebar">
		   <h3>Noticias</h3>
      	   <p>Registrar Noticia</p>
			
  	 
			</div>
			 <div class="col-xl-8 col-lg-8 col-md-8 col-xs-12 main"> <!--Con  contenido izquierdo o derecho uno de los dos
			<div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 main"> 
			<div class="col-xl-6 col-lg-4 col-md-4 col-xs-12 main"> 
	<div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 main" align="center"> -->
		
	     <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="registrarp.php" method="post" enctype="multipart/form-data">
	    <div class="w3-section"> 
	    	<label>dia:</label>
		  	<select  name="dia">
 			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			   <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			   <option value="7">7</option>
			  <option value="8">8</option>
			  <option value="9">9</option>
			   <option value="10">10</option>
			  <option value="11">11</option>
			  <option value="12">12</option>
			   <option value="13">13</option>
			   <option value="14">14</option>
			  <option value="15">15</option>
			  <option value="16">16</option>
			   <option value="17">17</option>
			   <option value="18">18</option>
			  <option value="19">18</option>
			  <option value="20">20</option>
			   <option value="21">21</option>
			   <option value="22">22</option>
			  <option value="23">23</option>
			  <option value="24">24</option>
			   <option value="25">25</option>
			   <option value="26">26</option>
			  <option value="27">27</option>
			  <option value="28">28</option>
			   <option value="29">29</option>
			   <option value="30">30</option>
			  <option value="31">31</option>
		    </select>
		</div>
		<div class="w3-section"> 
	    	<label>Mes:</label>
		  	<select name="mes" >
 			  <option value="1">Enero</option>
			  <option value="2">Febrero</option>
			  <option value="3">Marzo</option>
			  <option value="4">Abril</option>
			  <option value="5">Mayo</option>
			  <option value="6">Junio</option>
			  <option value="7">Julio</option>
			  <option value="8">Agosto</option>
			  <option value="9">Septiembre</option>
			  <option value="10">Octubre</option>
			  <option value="11">Noviembre</option>
			  <option value="12">Diciembre</option>
		    </select>
		</div>
		<div class="w3-section"> 
	    	<label>Año:</label>
		  	<select name="ano" >
 			  <option value="1985">1985</option>
			  <option value="1986">1986</option>
			  <option value="1987">1987</option>
			  <option value="1988">1988</option>
			  <option value="1989">1989</option>
			  <option value="1990">1990</option>
			  <option value="1991">1991</option>
			  <option value="1992">1992</option>
			  <option value="1993">1993</option>
			  <option value="1994">1994</option>
			  <option value="1995">1995</option>
			  <option value="1996">1996</option>
			  <option value="1997">1997</option>
			  <option value="1998">1998</option>
			  <option value="1999">1999</option>
			  <option value="2000">2000</option>
			  <option value="2001">2001</option>
			  <option value="2002">2002</option>
			  <option value="2003">2003</option>
			  <option value="2004">2004</option>
			  <option value="2005">2005</option>
			  <option value="2006">2006</option>
			  <option value="2007">2007</option>
			  <option value="2008">2008</option>
			  <option value="2009">2009</option>
			  <option value="2010">2010</option>
			  <option value="2011">2011</option>
			  <option value="2012">2012</option>
			  <option value="2013">2013</option>
			  <option value="2014">2014</option>
			  <option value="2015">2015</option>
			  <option value="2016">2016</option>
			  <option value="2017">2017</option>
			  <option value="2018">2018</option>
			  <option value="2019">2019</option>
			  <option value="2020">2020</option>
			  <option value="2021">2021</option>
			  <option value="2022">2022</option>
			  
		    </select>
		</div>
		<div class="w3-section">      
          <label>Titulo de la Noticia:</label>
          <input  type="text" name="titulo" >
        </div>  
        <div class="w3-section"> 
	    	<label>Etapa Deportiva: </label>
		  	<select name="etapa" >
 			  <option value="regional">Regional</option>
			  <option value="nacional">Nacional</option>
			  <option value="mundial">Mundial</option>
			  <option value="internacional">Internacional</option>
			  
		    </select>
		</div>
        <div class="w3-section"> 
	    	<label>Deporte: </label>
		  	<select name="deporte" >
 			  <option value="futbolAsoc">Futbol Asociacion</option>
			  <option value="futbolBardas">Futbol Bardas</option>
			  <option value="basquetbol">Basquetbol</option>
			  <option value="basquetbol3x3">Basquetbol 3x3</option>
			  <option value="voleibolS">Voleibol de Sala</option>
			  <option value="voleibolP">Voleibol de Playa</option>
			  <option value="beisbol">Beisbol</option>
			  <option value="hanball">Hanball</option>
			  <option value="rugby">rugby Sevens</option>
			  <option value="softbol">Softbol</option>
			  <option value="tochito">Tochito</option>
              <option value="atletismo">Atletismo</option>
              <option value="natacion">Natacion</option>
			  <option value="ajedrez">Ajedrez</option>
			  <option value="badminton">Badminton</option>
			  <option value="boxeo">Boxeo</option>
			  <option value="escalada">Escalada Deportiva</option>
			  <option value="esgrima">Esgrima</option>
			  <option value="gimnasia">Gimnasia Aerobica</option>
			  <option value="judo">Judo</option>
			  <option value="karate">Karate Do</option>
			  <option value="pesas">Levantamiento de Pesas</option>
			  <option value="lucha">Lucha Universitaria</option>
			  <option value="taewondo">Taekwondo</option>
			  <option value="tenisM">Tenis de Mesa</option>
			  <option value="tenis">Tenis</option>
			  <option value="tiroA">Tiro con Arco</option>
		    </select>
		</div>
        <div class="w3-section"> 
	    	<label>Rama: </label>
		  	<select name="rama" >
 			  <option value="varonil">Varonil</option>
			  <option value="femenil">Femenil</option>
			  
		    </select>
		</div>
		<div class="w3-section">      
          <label>Examina la imagen d ela noticia:</label>
          <input  type="file" name="image">
        </div>  
		<input type="hidden" name="nombrea" value="<?php echo $nombrea ?>" >
			
        <button type="submit" name="submit1" >Agregar</button>
      </form>
      <?php
		///////////////////////////////  MK USUAURIOS ALTAS  ////////////////////////////////////
		if(isset($_POST['submit1'])){
			$dia =  $_POST['dia'];
			$mes =  $_POST['mes'];
			$ano =   $_POST['ano'];
			$titulo =   $_POST['titulo'];
            $etapa = $_POST['etapa'];
            $deporte = $_POST['deporte'];
            $rama = $_POST['rama'];
			// 1.- IDENTIFICACION nombre de la base, del usuario, clave y servidor
			require_once('conexiona.php');

			// 2.- CONEXION A LA BASE DE DATOS
			$link = new mysqli($db_host, $db_login, $db_pswd, $db_name);
			
			
  			  $revisar = getimagesize($_FILES["image"]["tmp_name"]);
  			  if($revisar !== false){
  			      $image = $_FILES['image']['tmp_name'];
   			     $imgContenido = addslashes(file_get_contents($image));
				echo $image;
		         $tabla='noticiasuni';
			    $query2="insert into $tabla (dianoticia, mesnoticia, anonoticia, imagen, titulonoticia, etapa, deporte, rama, fecha_tiempo) VALUES ('$dia','$mes','$ano','$imgContenido','$titulo','$etapa','$deporte','$rama', NOW())";
		 	    $result = mysqli_query($link, $query2);
		    	//echo '<script>alert("Noticia registrada al sistema.")</script>';
	 	   
		        if($result){
                     echo '<script>alert("Noticia registrada y subida correctamente.")</script>';
            	}else{
                    echo '<script>alert("Ha fallado la subida de la noticia. Intente nuevamente.")</script>';
       		     } 
            // Sie el usuario no selecciona ninguna imagen
   		     }else{
               echo '<script>alert("Por favor seleccione una imagen para poder registrar la noticia.")</script>';
   		    }
	
		 mysqli_close($link);
		}
		?>	     
		
	</div>

			<div class="col-xl-2 col-lg-4 col-md-4 col-xs-12 sidebar">
				
			</div> 
  </div>
		<div class="row p-inferior">
			<div class="col-md-12 p-content"></div>
		</div>
 </div>

</div>
 
    <footer class="bd-footer text-muted" role="contentinfo">
	    <div class="container">
		    <div class="row">
			    <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 center-links">
				    <img src="//www.ucol.mx/cms/beta/img/icon/ubicacion.svg" width="20"> Direcci&oacute;n: Av. Universidad No. 333, Las V&iacute;boras; CP 28040 Colima, Colima, M&eacute;xico
			    </div>
			    <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 center-links">
				    &copy; Derechos Reservados 2018-2021 Universidad de Colima
			    </div>
		    </div>
	    </div>
	</footer>
    
    <!-- JS Bootstrap -->
    <script src="//www.ucol.mx/cms/beta/dist/js/tether.min.js" type="text/javascript"></script>
    <script src="//www.ucol.mx/cms/beta/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="//www.ucol.mx/cms/beta/dist/js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <!-- JS adds -->
    <script src="//www.ucol.mx/cms/beta/js/jquery.slides.js" type="text/javascript"></script>
    <script src="//www.ucol.mx/cms/beta/js/carruselV3.2.js" type="text/javascript"></script>
    <script src="//www.ucol.mx/cms/beta/js/jquery.flexisel0815.js" type="text/javascript"></script>
    <script src="//www.ucol.mx/cms/beta/js/purl.js"></script>
    <script src="//www.ucol.mx/cms/beta/js/custom.min.js" type="text/javascript"></script>
    <script src="//www.ucol.mx/cms/js/custom.js" type="text/javascript"></script>
    <!-- HTML5 shim y Respond.js para soporte IE8 de elementos HTML5 y media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--script>
        // Carousel Auto-Cycle
		$(document).ready(function() {
			//$('#navcontainer > #navlist').attr('data-spy','affix').attr('data-offset-top',100).attr('data-offset-bottom', 531);
			$('#sliderNaN>.rslides').responsiveSlides({auto:true,pager:true,nav:true,timeout:6000,speed:800});
			$(function () {
			  $('[data-toggle="tooltip"]').tooltip()
			})
		    $( '.form-search-ucol' ).click( function() {
				$( this ).addClass( 'active' );
			}).focusout( function() {
				$( this ).removeClass( 'active' );
			});
			$('#navcontainer > #navlist').affix({
			  offset: {
			    top: 100,
			    bottom: function () {
			      return (this.bottom = $('footer').outerHeight(true)+100)
			    }
			  }
			});
			var modWidth = $( '#navcontainer' ).width() - 30;
		    $( '#navlist' ).width( modWidth );
			jQuery( window ).resize( function () {
		        if ( jQuery( window ).width() ) {
			        var modWidth = $( '#navcontainer' ).width() - 30;
		           $( '#navlist' ).width( modWidth );
		        }
			});

			
		});
    </script-->
			
  </body>
</html>

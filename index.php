<!DOCTYPE HTML>
<html>
  <head>
  	<meta content="text/html; charset=ISO-8859-1"
  	      http-equiv="content-type">
  	<title>R.C.A. Publicidad, S.L. Regalos de Empresas. Reclamos
  	    Publicitarios</title>
  	<link type="text/css" rel="stylesheet" href="estilo.css">
  </head>
      <body>
          <?php
              session_start();

              if( isset($_SESSION['error']) ) {
                  $errorEnd = "Se han producido errores en el formulario: \n";
                  foreach($_SESSION['error'] as $error) {
                      $errorEnd .= $error.'\n';
                  }

                  $errorEnd = str_replace(array("\r", "\n"), '', $errorEnd);

                  echo "<script>window.alert(\"";
                  echo $errorEnd;
                  echo "\");</script>";

                  unset($_SESSION['error']);

              }

              if(isset($_SESSION['form'])){
                  $form = $_SESSION['form'];
                  unset($_SESSION['form']);
              } else {
                  $form['nombre'] = "";
                  $form['comentario'] = "";
                  $form['empresa'] = "";
                  $form['telefono'] = "";
                  $form['email'] = "";
                  $form['tipo'] = "Informacion";
              }

          ?>
    	<div class="div_principal">
    	    <div class="div_header">
        		<div class="div_header_imagenes">
        		  <div class="div_header_imagenes_eppa">
            		<img id="eppa_crs" alt="" title="EPPA" src="graficos/EPPA_CRS_COMMITTED.png">
            		<img id="eppa_fyvar" alt="" src="graficos/EPPA_FYVAR.png">
          		</div>
          		<img id="img_portada" src="graficos/Nuevos/Cabecera_web_RCA.png" alt="RCA Publicidad">
          		    <!--
          		    <div class="div_header_imagenes_titulo">
          		       <img id="rca_logo_circulo" alt="" src="graficos/RCA_logo_circulo_208_72ppp_.png">
          		       <img id="rca_logo" src="graficos/RCA_Publicidad_.png" alt="">
          		    </div>
        		      -->
        		</div>
        		<div class="div_header_items">USBs,
        		    RELOJES, MALETINES, ESTUCHES, AGENDAS, CARPETAS, BOLSAS, ALFOMBRILLAS,
        		    CALCULADORAS, PORTALÁPICES, REGLAS, CUTTERS, LIBRETAS, BOLÍGRAFOS,
        		    LANYARDS, PETOS, CHALECOS, VACIABOLSILLOS, MOUSES, ANTIESTRES,
        		    MECHEROS, LLAVEROS, LINTERNAS, CEPILLOS, PORTADOCUMENTOS, CORREAS,
        		    MONEDEROS, BILLETEROS, SET MANICURA, ESPEJOS, PEINES, FOULARDS,
        		    BUFANDAS, CUELGABOLSOS, NAVAJAS, TAZAS, CARRITOS, DELANTALES,
        		    ABREBOTELLAS, SACACORCHOS, CAMISETAS, GORRAS, PAÑUELOS, PARAGUAS,
        		    SOMBRILLAS, ABANICOS, PORTAMÓBILES, SUDADERAS, TOPS, POLOS, PORTAFOTOS,
        		    CHUBASQUEROS...
        		</div>
        		<!--
        		   No se sabe si debe estar o no.
        		   <div class="div_header_titulo">
        		      <img id="img_dropdown" alt="" src="graficos/Pix_gris.png">
        		      <img id="img_titulo" alt="" src="graficos/RCA_Publicidad.png">
        		   </div>
        		-->
        		<div class="div_header_catalogos">
        		  <img id="imagen_catalogo" alt="" src="graficos/catalogos.png">
        		  <div class="div_header_catalogos_imagenes">
        			  <div class="div_header_catalogos_imagen_makito">
        			    <a target="_blank" title="Cat�logo Makito 2015" href="http://www.stockcatalogue2016.com/iberia/">
          			    <img title="Makito 2016" alt="Cat�logo Makito 2015" src="graficos/Nuevos/Makito_2016.png">
          			    Makito 2016
        			    </a>
      			    </div>
      			    <div class="div_header_catalogos_imagen_mid">
    			        <a target="_blank" title="Cat�logo MOB" href="http://brochures.viewfx.co.uk/morethangifts16/es/">
        				    <img title="Mid Ocean Brands" alt="Cat�logo MOB" src="graficos/Nuevos/More_Than_Gift_2016.png">
        			      <br/>
        			      Mid Ocean Brands
        		      </a>
        		    </div>
        		    <div class="div_header_catalogos_publi">
        		      <a target="_blank" title="Publicitarios" href="http://www.catalogopublicitarios.com/">
        				    <img alt="Publicitarios" src="graficos/Nuevos/Publicitario_2016.png">
        				    Publicitarios
        		      </a>
        		    </div>
        		    <div class="div_header_catalogos_roly">
        		      <a target="_blank" title="Roly" href="http://www.catalogoroly.es">
        			      <img alt="Roly" src="graficos/Nuevos/Roly.png">
        			      Roly
        		      </a>
        		    </div>
        		    <div class="div_header_catalogos_blanco">
        		      <a target="_blank" title="Catalogo banderas" href="http://www.catalogoblancodebanderas.com/">
        			      <img alt="" title="Cat�logo de banderas" src="graficos/Nuevos/Flyer_banderas.png">
        			      Banderas
        		      </a>
        		    </div>
        		    <div class="div_header_catalogos_carteleria">
        		      <a target="_blank" title="Carteleria" href="Carteleria.html">
        			      <img alt="" src="graficos/Nuevos/Enara_1.png">
        			      Carteler�a
        		      </a>
        		    </div>
        	    </div>
        	  </div>
    	    </div>
    	    <div class="div_contenido">
    		    <div class="div_contenido_titulo">
    		      R.C.A. Publicidad, S.L.
    		    </div>
    		    <div class="div_contenido_img">
    		      <img id="img_portada" alt="" src="graficos/portada.gif">
    		    </div>
    		    <div class="div_contenido_texto">
      		    Somos una empresa sevillana dedicada desde hace más de 30 años a la
      		    fabricación, importación, comercialización e impresión de una gran
      		    variedad de objetos publicitarios y regalos de empresa. Durante este
      		    tiempo hemos procurado dar a nuestros clientes el mejor servicio
      		    posible, mejorando los medios de producción con la incorporación de la
      		    maquinaria más moderna y eficaz. Nos sentimos orgullosos de haber
      		    estado en todo momento a la altura de las espectativas de nuestros
      		    clientes, entre los que se encuentran tanto empresas privadas como
      		    públicas. Nos ponemos a su disposición ofreciéndole nuestro equipo
      		    humano y técnico para dar respuesta a sus necesidades de promoción
      		    publicitaria.

      		    <br>
      		    <br>

      		    Contamos con un ámplio abanico de catálogos, varios de ellos accesibles desde
      		    estas páginas, donde podrá encontrar los objetos que mejor se adapten a
      		    sus necesidades promocionales.
    		    </div>
    	    </div>
    	    <div class="div_footer">
    		    <div class="div_footer_contacto"> <!-- Faltan iconos para correo y/o telefono -->
    		      <div class="div_footer_contacto_datos">
    			      Teléfono:954331200 <br> Fax: 954330592 <br> Móvil: 669756812 <br> E-mail:<a href="mailto:rca@publicidad.com">rca@rcapublicidad.com</a>
    		      </div>
    		    <div class="div_footer_contacto_mapa">
          			Le esperamos en:<br>
          			Polígono Industrial PIBO<br>
          			C/. Aznalcázar, 5<br>
          			Naves Monteguadiana Méd. 35 y 36<br>
          			41110 BOLLULLOS DE LA MITACIÓN
    		    </div>
    		    <div class="div_footer_webmaster_email">
    			    <hr>
    			    <a href="mailto:rcapublicidad@telefonica.es">Contactar con encargado</a>
    		    </div>
    		  </div>
    		  <div class="div_footer_formulario">
    		    <form method="post" action="form.php">
        			<input name="id" value="formularioRCA" type="hidden">
        			<div class="div_footer_formulario_nombre">
        			    <label for="input_nombre" >Nombre: </label>
        			    <input id="input_nombre" name="nombre" type="text" placeholder="Nombre" value="<?php echo $form['nombre']; ?>">
        			</div>
          		<div class="div_footer_formulario_comentarios">
          			<label for="input_comentarios">Comentarios:</label>
          			  <textarea id="input_comentarios" title="Comentarios" name="comentarios" value="<?php echo $form['comentario']; ?>"></textarea>
          		</div>
          		<br>
          		<div class="div_footer_formulario_empresa">
          		    <label for="input_empresa">Empresa: </label>
          		    <input id="input_empresa" name="empresa" type="text" placeholder="Empresa" value="<?php echo $form['empresa']; ?>">
          		</div>
          		<br>
          		<div class="div_footer_formulario_telefono">
          		    <label for="input_telefono">Teléfono de contacto:</label>
          		    <input id="input_telefono" name="telefono" type="text" placeholder="Telefono" value="<?php echo $form['telefono']; ?>">
          		</div>
        			<br>
        			<div class="div_footer_formulario_email">
        			    <label for="input_email">E-Mail: </label>
        			    <input id="input_email" name="email" type="text" placeholder="Email" value="<?php echo $form['email']; ?>">
        			</div>
        			<br>
        			<div class="div_footer_formulario_tipo">
      			    <label for="input_tipo">Tipo de consulta: </label>
      			    <select name="tipo" id="input_tipo">
          				<option value="Informacion"
            				<?php
            				    if($form['tipo'] == 'Informacion') {
            				        echo 'selected="selected"';
            				    }
            				 ?>
          				  >Información </option>
            			<option value="Presupuesto"
              			<?php
              			    if($form['tipo'] == 'Presupuesto') {
              			        echo 'selected="selected"';
              			    }
              			 ?>
            				>Presupuesto </option>
            			<option value="Pedido"
                    <?php
              			    if($form['tipo'] == 'Pedido') {
              			        echo 'selected="selected"';
              			    }
              			  ?>
            				>Pedido </option>
            			<option value="otra"
            				<?php
            			     if($form['tipo'] == 'otra') {
            				        echo 'selected="selected"';
            				    }
            				 ?>
            				>Otra
                  </option>
          		  </select>
          		</div>
        			<div class="div_footer_formulario_submit">
        			  <input type="submit" title="Enviar" value="Enviar">
        			</div>
        			<br>
    		    </form>
    		  </div>
    		  <div class="div_footer_items">
    		    USBs,
    		    RELOJES, MALETINES, ESTUCHES, AGENDAS, CARPETAS, BOLSAS, ALFOMBRILLAS,
    		    CALCULADORAS, PORTALÁPICES, REGLAS, CUTTERS, LIBRETAS, BOLÍGRAFOS,
    		    LANYARDS, PETOS, CHALECOS, VACIABOLSILLOS, MOUSES, ANTIESTRES,
    		    MECHEROS, LLAVEROS, LINTERNAS, CEPILLOS, PORTADOCUMENTOS, CORREAS,
    		    MONEDEROS, BILLETEROS, SET MANICURA, ESPEJOS, PEINES, FOULARDS,
    		    BUFANDAS, CUELGABOLSOS, NAVAJAS, TAZAS, CARRITOS, DELANTALES,
    		    ABREBOTELLAS, SACACORCHOS, CAMISETAS, GORRAS, PAÑUELOS, PARAGUAS,
    		    SOMBRILLAS, ABANICOS, PORTAMÓBILES, SUDADERAS, TOPS, POLOS, PORTAFOTOS,
    		    CHUBASQUEROS...
    		  </div>
    	  </div>
    	</div>
    </body>
</html>

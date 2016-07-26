<?php
  session_start();
  
  if( isset($_REQUEST['nombre']) && isset($_REQUEST['comentarios']) && isset($_REQUEST['empresa']) && isset($_REQUEST['telefono']) && isset($_REQUEST['email']) && isset($_REQUEST['tipo']) ) {
        $nombre = $_REQUEST['nombre'];
        $comentarios = $_REQUEST['comentarios'];
        $empresa = $_REQUEST['empresa'];
        $telefono = $_REQUEST['telefono'];
        $email = $_REQUEST['email'];
        $tipo = $_REQUEST['tipo'];
        
        if( !validaForm( $nombre, $comentarios, $empresa, $telefono, $email, $tipo ) ) {
          header('Location: error.php');
        }
        
        $completed = mail( 'dinossolatte@gmail.com', 'Form', "Formulario rellenado\nDatos:\n\nNombre: $nombre\nEmail: $email\nTelefono: $telefono\nTipo: $tipo\nComentarios: $comentarios " );
        
        if( $completed != true ) {
          $_SESSION['error'] = 'Fallo en el envio del formulario, se ha comunicado la incidencia al encargado correspondiente.';
          header('Location: error.php');
        }
  }
        
  header('Location: exito.php');
?>
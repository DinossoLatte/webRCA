<?php
  session_start();

  if( isset($_REQUEST['nombre']) && isset($_REQUEST['comentarios']) && isset($_REQUEST['empresa']) && isset($_REQUEST['telefono']) && isset($_REQUEST['email']) && isset($_REQUEST['tipo']) ) {
        $nombre = $_REQUEST['nombre'];
        $comentarios = $_REQUEST['comentarios'];
        $empresa = $_REQUEST['empresa'];
        $telefono = $_REQUEST['telefono'];
        $email = $_REQUEST['email'];
        $tipo = $_REQUEST['tipo'];

        $_SESSION['form']['nombre'] = $nombre;
        $_SESSION['form']['comentario'] = $comentarios;
        $_SESSION['form']['empresa'] = $empresa;
        $_SESSION['form']['telefono'] = $telefono;
        $_SESSION['form']['email'] = $email;
        $_SESSION['form']['tipo'] = $tipo;

        unset($_SESSION['error']);

        if( !validaForm( $nombre, $comentarios, $empresa, $telefono, $email, $tipo ) || isset($_SESSION['error']) ) {
          header('Location: index.php');
          exit();
        }

        $completed = mail( 'dinossolatte@gmail.com', 'Form', "Formulario rellenado\n\rDatos:\n\r\n\rNombre: $nombre\n\rEmail: $email\n\rTelefono: $telefono\n\rTipo: $tipo\n\rComentarios: $comentarios." );

        if( $completed != true ) {
          $_SESSION['error'][] = 'Fallo en el envio del formulario, se ha comunicado la incidencia al encargado correspondiente.';
          header('Location: error.php');
        }

        header('Location: exito.php');
  }

  header('Location: index.php');

  function validaForm($nom,$com,$empr,$tel,$mail,$tipo) {
      if(!isset($nom) || empty($nom)) {
          $_SESSION['error'][] = "Nombre vacio\n";
      }

      if(!isset($com) || empty($com)) {
          $_SESSION['error'][] = "Comentarios vacios, comente lo que busca.\n";
      }

      if(isset($mail) && !filter_var($mail, FILTER_VALIDATE_EMAIL)) {
          $_SESSION['error'][] = "Email introducido incorrecto\n";
          $_SESSION['form']['email'] = "";
      }

      if(isset($tel) && !preg_match('/^[0-9]{9}$/',$tel)) {
        $_SESSION['error'][] = "Telefono introducido no valido";
        $_SESSION['form']['telefono'] = "";
      }

      if(isset($_SESSION['error'])) {
          return false;
      } else {
          return true;
      }
  }
?>

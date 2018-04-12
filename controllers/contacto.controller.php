<?php
class ControllerContacto{
  static public function ctr_enviar_correo(){

    if (isset($_POST['submit'])) {
      $nombre = $_POST['nombre'];
      $asunto = $_POST['asunto'];
      $correo = $_POST['correo'];
      $mensaje = $_POST['mensaje'];

      if (!empty($nombre)) {
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
      } else {
        $errores .= 'Por favor ingresa un nombre <br />';
      }

      if (!empty($correo)) {
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
          $errores .= 'Por favor ingresa un correo valido <br />';
        }
      } else {
        $errores .= 'Por favor ingresa un correo <br />';
      }

      if(!empty($mensaje)){
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje);
      } else {
        $errores .= 'Por favor ingresa el mensaje <br />';
      }

      if(!$errores){
        $enviado = ModelContacto::mdl_enviar_correo($nombre, $correo, $asunto, $mensaje);
        echo $enviado;
      } else {
        echo $enviado;
      }
    }
  }
}


?>

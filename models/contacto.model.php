<?php
class ModelContacto{
  static public function mdl_enviar_correo($nombre, $correo, $asunto, $mensaje){
    try {
      $enviar_a = 'tunombre@tuempresa.com';
      $asunto = 'nexumport.cl - ASUNTO: ' . $asunto;
      $mensaje_preparado = "De: $nombre \n";
      $mensaje_preparado .= "Correo: $correo \n";
      $mensaje_preparado .= "Mensaje: " . $mensaje;

      mail($enviar_a, $asunto, $mensaje_preparado);

      return 'Mensaje enviado';
    } catch (\Exception $e) {
      return 'Error: ' . $e;
    }
  }
}
?>

<?php
class UsuarioModelo extends BaseLibreria
{
   private $id;
   private $nombre_usuario;
   private $correo_usuario;
   private $clave;
   private $fecha_proceso;
   private $consultas;
   private $datos_usuario;

   protected function __construct()
   {
      $this->fecha_proceso = date("Y-m-d");
   }
   protected function get_atributo_modelo($atributo)
   {
      return $this->$atributo;
   }
   protected function set_atributo_modelo($atributo, $valor)
   {
      $this->$atributo = $valor;
   }
   protected function get_usuario_modelo()
   {
      $this->consultas = $this->conectar()->prepare("SELECT * FROM usuarios WHERE correo_usuario = :correo_usuario");
      $this->consultas->bindParam(":correo_usuario", $this->correo_usuario);
      $this->consultas->execute();
      $this->datos_usuario = $this->consultas->fetch();
      if (!empty($this->datos_usuario)) {
         $this->id = $this->datos_usuario["id"];
         $this->nombre_usuario = $this->datos_usuario["nombre_usuario"];
         $this->correo_usuario = $this->datos_usuario["correo_usuario"];
         $this->clave = $this->datos_usuario["clave"];
         $this->conexion = null;
         return true;
      } else {
         $this->conexion = null;
         return false;
      }
   }
}

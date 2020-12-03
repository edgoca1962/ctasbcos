<?php
class Usuario extends UsuarioModelo
{
   private $id;
   private $nombre_usuario;
   private $correo_usuario;
   private $clave;
   private $fecha_proceso;
   private $consulta_base_datos;

   public function __construct()
   {
      parent::__construct();
      $this->vista = get_class($this) . ".php";
      $this->fecha_proceso = date("Y-m-d");
   }
   public function inicio($parametros)
   {
   }
   public function get_atributo($atributo)
   {
      return $this->$atributo;
   }
   public function set_atributo($atributo, $valor)
   {
      $this->$atributo = $valor;
   }
   public function get_usuario()
   {
      $this->set_atributo_modelo("correo_usuario", $this->correo_usuario);
      if ($this->get_usuario_modelo()) {
         $this->id = $this->get_atributo_modelo("id");
         $this->nombre_usuario = $this->get_atributo_modelo("nombre_usuario");
         $this->correo_usuario = $this->get_atributo_modelo("correo_usuario");
         $this->clave = $this->get_atributo_modelo("clave");
         return true;
      } else {
         $this->id = null;
         $this->nombre_usuario = null;
         $this->correo_usuario = null;
         $this->clave = null;
         return false;
      }
   }
}

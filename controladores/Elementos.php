<?php
class Elementos extends ElementosModelo
{
   private $id;
   private $nombre_vista;
   private $componente;
   private $atributo;
   private $descripcion;
   private $valor;
   private $fecha_proceso;
   private $datos_elementos;
   private $vista;
   private $respuesta;

   public function __construct()
   {
      $this->vista = get_class($this) . ".php";
      $this->get_datos();
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
   public function get_datos()
   {
      $this->set_atributo_modelo("nombre_vista", $this->nombre_vista);
      if ($this->get_datos_modelo()) {
         $this->datos_elementos = $this->get_atributo_modelo("datos_elementos");
         return true;
      } else {
         return false;
      }
   }
}

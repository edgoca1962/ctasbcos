<?php
class Bancos extends BancosModelo
{
   private $id;
   private $nombre_banco;
   private $codigo_pais;
   private $fecha_proceso;
   private $vista;
   private $respuesta;
   public function __construct()
   {
      $this->vista = get_class($this) . ".php";
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
   }
}

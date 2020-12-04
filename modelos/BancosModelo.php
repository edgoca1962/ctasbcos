<?php
class BancosModelo extends BaseLibreria
{
   private $id;
   private $nombre_banco;
   private $codigo_pais;
   private $fecha_proceso;
   private $consultas;
   private $datos_consulta;
   protected function __construct()
   {
   }
   protected function get_atributo_modelo($atributo)
   {
      return $this->$atributo;
   }
   protected function set_atributo_modelo($atributo, $valor)
   {
      $this->$atributo = $valor;
   }
   protected function get_datos_modelo()
   {
   }
}

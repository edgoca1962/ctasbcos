<?php
class IngresoModelo extends BaseLibreria
{
   private $descripcion;
   private $palabras_claves;
   private $titulo;
   private $elementos;
   private $datos_elementos;
   private $consulta_base_datos;
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

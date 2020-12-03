<?php
class TransaccionesModelo extends BaseLibreria
{
   private $id;
   private $codigo_movimiento;
   private $descripcion;
   private $fecha_proceso;
   protected function __construct()
   {
      $this->id = null;
      $this->codigo_movimiento = null;
      $this->descripcion = null;
      $this->fecha_proceso = null;
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

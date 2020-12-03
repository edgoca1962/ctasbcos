<?php
class RutasModelo extends BaseLibreria
{
   private $id;
   private $ruta_descripcion;
   private $ruta;
   private $fecha_proceso;
   private $consultas;
   private $datos_rutas;
   protected function __construct()
   {
      $this->id = null;
      $this->ruta_descripcion = null;
      $this->ruta = null;
      $this->fecha_proceso = null;
      $this->consultas = null;
      $this->datos_rutas = null;
   }
   protected function get_atributo_modelo($atributo)
   {
      return $this->$atributo;
   }
   protected function set_atributo_modelo($atributo, $valor)
   {
      $this->$atributo = $valor;
   }
   protected function get_rutas_modelo()
   {
      $this->consultas = $this->conectar()->prepare("SELECT * FROM rutas_proyecto");
      $this->consultas->execute();
      $this->datos_rutas = $this->consultas->fetchAll();
      $this->conexion = null;
      if (count($this->datos_rutas) > 0) {
         $this->conexion = null;
         return true;
      } else {
         $this->rutas_proyecto = null;
         $this->conexion = null;
         return false;
      }
   }
}

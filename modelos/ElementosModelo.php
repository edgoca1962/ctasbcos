<?php
class ElementosModelo extends BaseLibreria
{
   private $id;
   private $nombre_vista;
   private $componente;
   private $atributo;
   private $descripcion;
   private $valor;
   private $fecha_proceso;
   private $consultas;
   private $datos_elementos;

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
      $this->consultas = $this->conectar()->prepare("SELECT * FROM vistas WHERE nombre_vista = :vista");
      $this->consultas->bindParam(':vista', $this->nombre_vista, PDO::PARAM_STR);
      $this->consultas->execute();
      $this->datos_elementos = $this->consultas->fetchAll();
      $this->conexion = null;
      if (count($this->datos_elementos) > 0) {
         return true;
      } else {
         return false;
      }
   }
}

<?php
class PlantillaModelo extends BaseLibreria
{
   private $id;
   private $titulo;
   private $icono;
   private $logotipo;
   private $rutas_proyecto;

   private $consulta_base_datos;
   private $datos_rutas_proyecto;
   private $datos_componentes;

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
   protected function insertar_registro_modelo()
   {
      $this->id = $this->get_atributo_modelo('id');
      $this->consulta_base_datos = $this->conectar()->prepare(
         "INSERT INTO modelo (id) VALUES (:id)"
      );
      $this->consulta_base_datos->bindParam(':id', $this->id, PDO::PARAM_STR);
      if ($this->consulta_base_datos->execute()) {
         $this->conexion = null;
         return true;
      } else {
         $this->conexion = null;
         return false;
      }
   }
   protected function eliminar_registro_modelo()
   {
      $this->id = $this->get_atributo_modelo('id');
      $this->consulta_base_datos = $this->conectar()->prepare(
         "DELETE FROM modelo WHERE id = :valor"
      );
      $this->consulta_base_datos->bindParam(':id', $this->id, PDO::PARAM_STR);
      if ($this->consulta_base_datos->execute()) {
         $this->conexion = null;
         return true;
      } else {
         $this->conexion = null;
         return false;
      }
   }
   protected function modifica_registro_modelo()
   {
      $this->id = $this->get_atributo_modelo('id');
      $this->consulta_base_datos = $this->conectar()->prepare(
         "UPDATE tabla SET campo1='modificación', campo2='modificacion', campo3='modificacion' WHERE id = :valor"
      );
      $this->consulta_base_datos->bindParam(':id', $this->id, PDO::PARAM_STR);
      if ($this->consulta_base_datos->execute()) {
         $this->conexion = null;
         return true;
      } else {
         $this->conexion = null;
         return false;
      }
   }
}

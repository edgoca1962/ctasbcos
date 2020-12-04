<?php
class CuentasBancariasModelo extends BaseLibreria
{
   private $id;
   private $id_entidad;
   private $id_usuario_apertura;
   private $id_usuario_cierre;
   private $id_banco;
   private $iban;
   private $saldo_cuenta;
   private $codigo_moneda;
   private $estatus_cuenta;
   private $fecha_registro;
   private $fecha_apertura;
   private $fecha_cierre;
   private $fecha_proceso;
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

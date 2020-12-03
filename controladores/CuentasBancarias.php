<?php
class CuentasBancarias extends CuentasBancariasModelo
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

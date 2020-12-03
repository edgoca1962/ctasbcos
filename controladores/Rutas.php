<?php
class Rutas extends RutasModelo
{
   private $id;
   private $ruta_descripcion;
   private $ruta;
   private $fecha_proceso;
   private $datos_rutas;
   private $datos_rutas_modelo;
   private $ruta_dominio;
   private $ruta_contenidos;
   private $ruta_css;
   private $ruta_js;
   private $ruta_img_banners;
   private $ruta_img_generales;
   private $ruta_img_usr;
   private $vista;
   private $respuesta;

   public function __construct()
   {
      $this->get_rutas();
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
   public function get_rutas()
   {
      if ($this->get_rutas_modelo()) {
         $this->datos_rutas_modelo = $this->get_atributo_modelo('datos_rutas');
         foreach ($this->datos_rutas_modelo as  $value) {
            $this->datos_rutas[$value['ruta_descripcion']] = $value;
         }
         $this->ruta_dominio = $this->datos_rutas["dominio"]["ruta"];
         $this->ruta_contenidos = $this->datos_rutas["contenidos"]["ruta"];
         $this->ruta_css = $this->ruta_dominio . $this->datos_rutas["css"]["ruta"];
         $this->ruta_js = $this->ruta_dominio . $this->datos_rutas["js"]["ruta"];
         $this->ruta_img_banners = $this->ruta_dominio . $this->datos_rutas["img_banners"]["ruta"];
         $this->ruta_img_generales = $this->ruta_dominio . $this->datos_rutas["img_generales"]["ruta"];
         $this->ruta_img_usr = $this->ruta_dominio . $this->datos_rutas["img_usrs"]["ruta"];
         return true;
      } else {
         $this->datos_rutas = null;
         return false;
      }
   }
}

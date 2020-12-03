<?php
class Plantilla extends PlantillaModelo
{
   private $rutas_proyecto;
   private $datos_rutas_proyecto;
   private $titulo;
   private $logo;
   private $icono;
   private $rutas;
   private $ruta_dominio;
   private $ruta_contenidos;
   private $ruta_css;
   private $ruta_js;
   private $ruta_img_banners;
   private $ruta_img_generales;
   private $ruta_img_usrs;
   private $ruta_js_plugins;
   private $elementos;
   private $datos_elementos;


   public function __construct()
   {
      parent::__construct();
      $this->get_rutas_proyecto();
      $this->get_elementos();
   }
   public function inicio($parametros = null)
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
   public function get_rutas_proyecto()
   {
      $this->rutas = new Rutas;
      if ($this->rutas->get_rutas()) {
         $this->ruta_dominio = $this->rutas->get_atributo("ruta_dominio");
         $this->ruta_contenidos = $this->rutas->get_atributo("ruta_contenidos");
         $this->ruta_css = $this->rutas->get_atributo("ruta_css");
         $this->ruta_js = $this->rutas->get_atributo("ruta_js");
         $this->ruta_img_banners = $this->rutas->get_atributo("ruta_img_banners");
         $this->ruta_img_generales = $this->rutas->get_atributo("ruta_img_generales");
         $this->ruta_img_usrs = $this->rutas->get_atributo("ruta_img_usr");
         return true;
      } else {
         return false;
      }
   }
   public function get_elementos()
   {
      $this->elementos = new Elementos;
      $this->elementos->set_atributo("nombre_vista", "Plantilla");
      if ($this->elementos->get_datos()) {
         $this->titulo = $this->elementos->get_atributo("datos_elementos")[0]["titulo"];
         $this->icono = $this->ruta_img_generales . $this->elementos->get_atributo("datos_elementos")[0]["icono"];
         $this->logo = $this->ruta_img_generales . $this->elementos->get_atributo("datos_elementos")[0]["logo"];
         return true;
      } else {
         return false;
      }
   }
}

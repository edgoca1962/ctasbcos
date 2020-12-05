<?php
class Usuario extends UsuarioModelo
{
   private $id;
   private $nombre_usuario;
   private $correo_usuario;
   private $clave;
   private $fecha_proceso;
   private $consulta_base_datos;
   public function __construct()
   {
      parent::__construct();
      $this->sesion = new Sesion;
      $this->id_sesion = session_id();
      $this->vista = get_class($this) . ".php";
      $this->fecha_proceso = date("Y-m-d");
   }
   public function inicio($parametros)
   {
      $this->sesion->set_atributo("id_sesion", $this->id_sesion);
      if ($this->sesion->get_datos_sesion()) {
         if ($this->sesion->get_atributo("estado_sesion") == 0) {
            $this->rutas = new Rutas;
            $this->ruta_dominio = $this->rutas->get_atributo("ruta_dominio");
            $this->conexion = null;
            header("Location: " . $this->ruta_dominio . "Ingreso");
            exit();
         } else {
            $this->nombre_usuario = $this->sesion->get_atributo("nombre_usuario");
            $this->tipo_usuario = $this->sesion->get_atributo("tipo_usuario");
            $this->foto_usuario = $this->sesion->get_atributo("foto_usuario");
            $this->get_componentes();
            $this->conexion = null;
         }
      }
   }
   public function get_atributo($atributo)
   {
      return $this->$atributo;
   }
   public function set_atributo($atributo, $valor)
   {
      $this->$atributo = $valor;
   }
   public function get_usuario()
   {
      $this->set_atributo_modelo("correo_usuario", $this->correo_usuario);
      if ($this->get_usuario_modelo()) {
         $this->id = $this->get_atributo_modelo("id");
         $this->nombre_usuario = $this->get_atributo_modelo("nombre_usuario");
         $this->correo_usuario = $this->get_atributo_modelo("correo_usuario");
         $this->clave = $this->get_atributo_modelo("clave");
         return true;
      } else {
         return false;
      }
   }
   public function get_componentes()
   {
      $this->elementos = new Elementos;
      $this->elementos->set_atributo("nombre_vista", get_class($this));
      if ($this->elementos->get_datos()) {
         $this->descripcion = $this->elementos->get_atributo("datos_elementos")[0]["descripcion"];
         $this->titulo = $this->elementos->get_atributo("datos_elementos")[0]["titulo"];
         $this->datos_palabras_claves = $this->elementos->get_atributo("datos_elementos")[0]["palabras_claves"];
         return true;
      } else {
         return false;
      }
   }
}

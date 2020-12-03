<?php
class Sesion extends SesionModelo
{
    private $id;
    private $id_usuario;
    private $id_sesion;
    private $fecha_inicio;
    private $hora_inicio;
    private $fecha_salida;
    private $hora_salida;
    private $estado_sesion;
    private $nombre_usuario;
    private $foto_usuario;
    private $tipo_usuario;
    private $campo;
    private $valor;
    private $rutas;
    private $ruta_dominio;
    private $vista;
    private $script;
    public function __construct()
    {
        parent::__construct();
        $this->estado_sesion = 0;
    }
    public function get_atributo($atributo)
    {
        return $this->$atributo;
    }
    public function set_atributo($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
    public function inicio()
    {
    }
    public function get_usuario_sesion()
    {
        $this->set_atributo_modelo('id_usuario', $this->get_atributo('id_usuario'));
        if ($this->get_usuario_sesion_modelo()) {
            $this->id_sesion = $this->get_atributo_modelo('id_sesion');
            $this->tipo_usuario = $this->get_atributo_modelo('tipo_usuario');
            return true;
        } else {
            return false;
        }
    }
    public function set_datos_sesion()
    {
        $this->set_atributo_modelo('id_sesion', $this->get_atributo('id_sesion'));
        $this->set_atributo_modelo('id_usuario', $this->get_atributo('id_usuario'));
        $this->set_atributo_modelo('estado_sesion', $this->get_atributo('estado_sesion'));
        if ($this->set_datos_sesion_modelo()) {
            return true;
        } else {
            return false;
        }
    }
    public function get_datos_sesion()
    {
        $this->set_atributo_modelo('id_sesion', $this->id_sesion);
        if ($this->get_datos_sesion_modelo()) {
            $this->nombre_usuario = $this->get_atributo_modelo('nombre_usuario');
            $this->tipo_usuario = $this->get_atributo_modelo('tipo_usuario');
            $this->estado_sesion = $this->get_atributo_modelo('estado_sesion');
            if (empty($this->get_atributo_modelo('foto_usuario'))) {
                $this->foto_usuario = "generico.png";
            } else {
                $this->foto_usuario = $this->get_atributo_modelo('foto_usuario');
            }
            return true;
        } else {
            return false;
        }
    }
    public function cierra_sesion()
    {
        $this->set_atributo_modelo('id_sesion', session_id());
        if ($this->cierra_sesion_modelo()) {
            $this->rutas = new Rutas;
            $this->ruta_dominio = $this->rutas->get_atributo("ruta_dominio");
            header("Location: " . $this->ruta_dominio . "Ingreso");
            exit();
            return true;
        } else {
            return false;
        }
    }
    public function elimina_datos_sesion()
    {
        $this->set_atributo_modelo('id_sesion', $this->get_atributo('id_sesion'));
        if ($this->elimina_datos_sesion_modelo()) {
            return true;
        } else {
            return false;
        }
    }
    public function cierra_sesion_ajax()
    {
        if (empty($this->id_usuario)) {
            session_start();
            $this->campo = "id_sesion";
            $this->valor = session_id();
        } else {
            $this->campo = "id_usuario";
            $this->valor = $this->id_usuario;
        }
        $this->set_atributo_modelo("campo", $this->campo);
        $this->set_atributo_modelo("valor", $this->valor);
        $this->set_atributo_modelo($this->campo, $this->valor);
        if ($this->cierra_sesion_ajax_modelo()) {
            return true;
        } else {
            return false;
        }
    }
}

<?php
class Jscrip
{
    private $ingreso;
    private $parametros;
    private $usuario;
    private $id_usuario;
    private $sesion;
    private $respuesta;
    private $rutas;
    private $ruta_dominio;
    public function __construct($parametros = "")
    {
        switch ($parametros) {
            case 'frm_ingreso':
                $this->frm_ingreso();
                break;
            case 'cerrar_sesion':
                $this->cerrar_sesion();
                break;
            default:
                echo false;
                break;
        }
    }
    public function frm_ingreso()
    {
        $this->ingreso = new Ingreso;
        $this->parametros = ["usuario" => $_POST['usuario'], "clave" => $_POST['clave']];
        if ($this->ingreso->inicio($this->parametros)) {
            $this->respuesta = $this->ingreso->get_atributo("respuesta");
        } else {
            $this->respuesta = ["tipo" => 1, "mensaje" => "No se pudo crear una nueva sesión"];
        }
        $this->respuesta = json_encode($this->respuesta);
        echo $this->respuesta;
    }
    public function cerrar_sesion()
    {
        $this->usuario = new Usuario;
        if (isset($_POST['usuario'])) {
            $this->usuario->set_atributo("correo_usuario", $_POST['usuario']);
        }
        $this->usuario->get_usuario();
        $this->id_usuario = $this->usuario->get_atributo("id");
        $this->sesion = new Sesion;
        $this->sesion->set_atributo("id_usuario", $this->id_usuario);
        if ($this->sesion->cierra_sesion_ajax()) {
            $this->rutas = new Rutas;
            $this->ruta_dominio = $this->rutas->get_atributo("ruta_dominio");
            $this->respuesta = ["tipo" => 1, "direccion" => $this->ruta_dominio . "Ingreso"];
            $this->respuesta = json_encode($this->respuesta);
            echo $this->respuesta;
        } else {
            $this->respuesta = ["tipo" => 2, "mensaje" => "La sesión se encuentra cerrada."];
        }
    }
}
require_once "../librerias/NucleoLibreria.php";
$nucleo = new NucleoLibreria("Ajax");

if (isset($_POST["elemento"])) {
    $jscript = new Jscrip($_POST["elemento"]);
} else {
    echo false;
}

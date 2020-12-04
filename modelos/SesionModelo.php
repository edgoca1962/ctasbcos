<?php
class SesionModelo extends BaseLibreria
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
    private $consultas;
    private $datos_usuario;
    private $datos_sesion;
    protected function __construct()
    {
        $this->fecha_inicio = date("Y-m-d");
        $this->hora_inicio = date("H:i:s");
    }
    protected function get_atributo_modelo($atributo)
    {
        return $this->$atributo;
    }
    protected function set_atributo_modelo($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
    protected function get_usuario_sesion_modelo()
    {
        $this->consultas = $this->conectar()->prepare(
            "SELECT * FROM sesiones INNER JOIN usuarios
             ON sesiones.id_usuario = usuarios.id
            WHERE id_usuario = :id_usuario AND estado_sesion = 1"
        );
        $this->consultas->bindParam(":id_usuario", $this->id_usuario, PDO::PARAM_STR);
        $this->consultas->execute();
        $this->datos_usuario = $this->consultas->fetch();
        $this->conexion = null;
        if (!empty($this->datos_usuario)) {
            $this->id_sesion = $this->datos_usuario["id_sesion"];
            $this->tipo_usuario = $this->datos_usuario["tipo_usuario"];
            $this->conexion = null;
            return true;
        } else {
            $this->conexion = null;
            return false;
        }
    }
    protected function set_datos_sesion_modelo()
    {
        $this->consultas = $this->conectar()->prepare("INSERT INTO sesiones (id_usuario,id_sesion,fecha_inicio,hora_inicio,estado_sesion) 
        VALUES(:id_usuario,:id_sesion,:fecha_inicio,:hora_inicio,:estado_sesion)");
        $this->consultas->bindParam(':id_sesion', $this->id_sesion, PDO::PARAM_STR);
        $this->consultas->bindParam(':id_usuario', $this->id_usuario, PDO::PARAM_STR);
        $this->consultas->bindParam(':fecha_inicio', $this->fecha_inicio, PDO::PARAM_STR);
        $this->consultas->bindParam(':hora_inicio', $this->hora_inicio, PDO::PARAM_STR);
        $this->consultas->bindParam(':estado_sesion', $this->estado_sesion, PDO::PARAM_STR);
        if ($this->consultas->execute()) {
            $this->conexion = null;
            return true;
        } else {
            $this->conexion = null;
            return false;
        }
    }
    protected function get_datos_sesion_modelo()
    {
        $this->consultas = $this->conectar()->prepare(
            "SELECT * FROM usuarios INNER JOIN sesiones 
               ON usuarios.id = sesiones.id_usuario
               WHERE sesiones.id_sesion = :id_sesion
            "
        );
        $this->consultas->bindParam(":id_sesion", $this->id_sesion);
        $this->consultas->execute();
        $this->datos_sesion = $this->consultas->fetch();
        $this->conexion = null;
        if (empty($this->consultas)) {
            $this->conexion = null;
            return false;
        } else {
            $this->nombre_usuario = $this->datos_sesion['nombre_usuario'];
            $this->estado_sesion = $this->datos_sesion['estado_sesion'];
            $this->foto_usuario = $this->datos_sesion['foto_usuario'];
            $this->tipo_usuario = $this->datos_sesion['tipo_usuario'];
            $this->conexion = null;
            return true;
        }
    }
    protected function cierra_sesion_modelo()
    {
        $this->fecha_salida = date("Y-m-d");
        $this->hora_salida = date("H:i:s");
        $this->estado_sesion = 0;
        $this->consultas = $this->conectar()->prepare("UPDATE sesiones SET fecha_salida = :fecha_salida, hora_salida = :hora_salida, estado_sesion = :estado_sesion WHERE id_sesion = :id_sesion");
        $this->consultas->bindParam(':fecha_salida', $this->fecha_salida, PDO::PARAM_STR);
        $this->consultas->bindParam(':hora_salida', $this->hora_salida, PDO::PARAM_STR);
        $this->consultas->bindParam(':estado_sesion', $this->estado_sesion, PDO::PARAM_STR);
        $this->consultas->bindParam(':id_sesion', $this->id_sesion, PDO::PARAM_STR);
        if ($this->consultas->execute()) {
            $this->conexion = null;
            return true;
        } else {
            $this->conexion = null;
            return false;
        }
    }
    protected function cierra_sesion_ajax_modelo()
    {
        $this->fecha_salida = date("Y-m-d");
        $this->hora_salida = date("H:i:s");
        $this->estado_sesion = 0;
        $this->consultas = $this->conectar()->prepare("UPDATE sesiones SET fecha_salida = :fecha_salida, hora_salida = :hora_salida, estado_sesion = :estado_sesion WHERE $this->campo = :valor AND estado_sesion = 1");
        $this->consultas->bindParam(':fecha_salida', $this->fecha_salida, PDO::PARAM_STR);
        $this->consultas->bindParam(':hora_salida', $this->hora_salida, PDO::PARAM_STR);
        $this->consultas->bindParam(':estado_sesion', $this->estado_sesion, PDO::PARAM_STR);
        $this->consultas->bindParam(':valor', $this->valor, PDO::PARAM_STR);
        if ($this->consultas->execute()) {
            $this->conexion = null;
            return true;
        } else {
            $this->conexion = null;
            return false;
        }
    }
    protected function elimina_datos_sesion_modelo()
    {
        $this->consultas = $this->conectar()->prepare("DELETE FROM sesiones WHERE id = :id");
        $this->consultas->bindParam(':id', $this->id_sesion, PDO::PARAM_STR);
        if ($this->consultas->execute()) {
            $this->conexion = null;
            return true;
        } else {
            $this->conexion = null;
            return false;
        }
    }
}

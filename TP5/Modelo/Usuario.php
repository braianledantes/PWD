<?php
include_once './Conector/BaseDatos.php';

class Usuario{
    private $id_usuario;
    private $us_nombre;
    private $us_pass;
    private $us_mail;
    private $us_deshabilitado;
    private $mensajeOperacion;

    private function __construct(){
        $this->id_usuario = "";
        $this->us_nombre = "";
        $this->us_pass = "";
        $this->us_mail = "";
        $this->us_deshabilitado = "";
        $this->mensajeOperacion = "";
    }

    // Getter y Setter para id_usuario
    public function getIdUsuario() {
        return $this->id_usuario;
    }
    public function setIdUsuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    // Getter y Setter para us_nombre
    public function getUsNombre() {
        return $this->us_nombre;
    }
    public function setUsNombre($us_nombre) {
        $this->us_nombre = $us_nombre;
    }

    // Getter y Setter para us_pass
    public function getUsPass() {
        return $this->us_pass;
    }
    public function setUsPass($us_pass) {
        $this->us_pass = $us_pass;
    }

    // Getter y Setter para us_mail
    public function getUsMail() {
        return $this->us_mail;
    }
    public function setUsMail($us_mail) {
        $this->us_mail = $us_mail;
    }

    // Getter y Setter para us_deshabilitado
    public function getUsDeshabilitado() {
        return $this->us_deshabilitado;
    }
    public function setUsDeshabilitado($us_deshabilitado) {
        $this->us_deshabilitado = $us_deshabilitado;
    }

    // Getter y Setter para mensajeOperacion
    public function getMensajeOperacion() {
        return $this->mensajeOperacion;
    }
    public function setMensajeOperacion($mensajeOperacion) {
        $this->mensajeOperacion = $mensajeOperacion;
    }

    public function setear($idUsuario, $usuarioNombre, $usuarioPassword, $usuarioEmail, $usuarioDeshabilitado)
    {
        $this->setIdusuario($idUsuario);
        $this->setUsNombre($usuarioNombre);
        $this->setUsPass($usuarioPassword);
        $this->setUsMail($usuarioEmail);
        $this->setUsDeshabilitado($usuarioDeshabilitado);
    }

    public static function listar($parametro = "")
    {
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM usuario ";
        if ($parametro != "") {
            $sql .= 'WHERE ' . $parametro;
        }
        $res = $base->Ejecutar($sql);
        if ($res > -1) {
            if ($res > 0) {
                while ($row = $base->Registro()) {
                    $objUsuario = new usuario();
                    $objUsuario->setear(
                        $row['id_usuario'],
                        $row['usuario_nombre'],
                        $row['usuario_pass'],
                        $row['usuario_email'],
                        $row['usuario_deshabilitado']
                    );
                    array_push($arreglo, $objUsuario);
                }
            }
        } else {
            $this->setMensajeOperacion("Tabla->listar: " . $base->getError());
        }
        return $arreglo;
    }


    public function insertar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "INSERT INTO usuario (usnombre, uspassword, usmail) VALUES('" . $this->getUsNombre() . "', '" . $this->getUsPass() . "' , '" . $this->getUsMail() . "')";
        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                $this->setIdUsuario($elid);
                $resp = true;
            } else {
                $this->setMensajeOperacion("Usuario->insertar: " . $base->getError());
            }
        } else {
            $this->setMensajeOperacion("Usuario->insertar: " . $base->getError());
        }
        return $resp;
    }

    public function modificar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "UPDATE usuario SET usuario_nombre = '{$this->getUsNombre()}', usuario_pass = '{$this->getUsPass()}', usmail = '{$this->getUsMail()}', usdeshabilitado = {$this->getUsDeshabilitado()} WHERE idusuario = {$this->getIdUsuario()}";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeOperacion("Usuario->modificar: " . $base->getError());
            }
        } else {
            $this->setMensajeOperacion("Usuario->modificar: " . $base->getError());
        }
        return $resp;
    }

    public function eliminar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "DELETE FROM 'usuario' WHERE idusuario = '" . $this->getIdUsuario() . "'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setMensajeOperacion("Usuario->eliminar: " . $base->getError());
            }
        } else {
            $this->setMensajeOperacion("Usuario->eliminar: " . $base->getError());
        }
        return $resp;
    }

    public function cargar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM 'usuario' WHERE id_usuario = " . $this->getIdUsuario();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $this->setear(
                        $row['idusuario'],
                        $row['usnombre'],
                        $row['uspass'],
                        $row['usemail'],
                        $row['usdeshabilitado']
                    );
                }
            }
        } else {
            $this->setMensajeOperacion("Tabla->listar: " . $base->getError());
        }
        return $resp;
    }
}
?>
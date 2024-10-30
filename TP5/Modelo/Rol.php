<?php

include_once 'conector/BaseDatos.php';

Class Rol{
    private $id_rol;
    private $rol_descipcion;
    private $mensajeOperacion;

    public function __construct(){
        $this->id_rol = "";
        $this->rol_descipcion = "";
        $this->mensajeOperacion = "";
    }

    // Getter y Setter para id_rol
    public function getIdRol() {
        return $this->id_rol;
    }
    public function setIdRol($id_rol) {
        $this->id_rol = $id_rol;
    }

    // Getter y Setter para rol_descipcion
    public function getRolDescripcion() {
        return $this->rol_descipcion;
    }
    public function setRolDescripcion($rol_descipcion) {
        $this->rol_descipcion = $rol_descipcion;
    }

    // Getter y Setter para mensajeOperacion
    public function getMensajeOperacion() {
        return $this->mensajeOperacion;
    }
    public function setMensajeOperacion($mensajeOperacion) {
        $this->mensajeOperacion = $mensajeOperacion;
    }

    public function setear($idRol, $rolDescripcion){
        $this->setIdRol($idRol);
        $this->setRolDescripcion($rolDescripcion);
    }

    //seleccionar, ingresar, modificar y eliminar los datos de cada tabla. 
    public function cargar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM 'rol' WHERE idrol = " . $this->getIdRol();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $this->setear(
                        $row['idrol'],
                        $row['roldescripcion'],
                    );
                }
            }
        } else {
            $this->setMensajeOperacion("Tabla->listar: " . $base->getError());
        }
        return $resp;
    }

    public function insertar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "INSERT INTO rol (roldescripcion) VALUES('" . $this->getRolDescripcion() . "')";
        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                $this->setIdRol($elid);
                $resp = true;
            } else {
                $this->setMensajeOperacion("Rol->insertar: " . $base->getError());
            }
        } else {
            $this->setMensajeOperacion("Rol->insertar: " . $base->getError());
        }
        return $resp;
    }


    public static function listar($parametro = "")
    {
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM rol ";
        if ($parametro != "") {
            $sql .= 'WHERE ' . $parametro;
        }
        $res = $base->Ejecutar($sql);
        if ($res > -1) {
            if ($res > 0) {
                while ($row = $base->Registro()) {
                    $objRol = new rol();
                    $objRol->setear(
                        $row['id_rol'],
                        $row['rol_descripcion'],
                    );
                    array_push($arreglo, $objRol);
                }
            }
        } else {
            $this->setMensajeOperacion("Tabla->listar: " . $base->getError());
        }
        return $arreglo;
    }

    public function modificar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "UPDATE rol SET roldescripcion = '{$this->getRolDescripcion()}' WHERE idrol = '" . $this->getIdRol() . "'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeOperacion("Rol->modificar: " . $base->getError());
            }
        } else {
            $this->setMensajeOperacion("Rol->modificar: " . $base->getError());
        }
        return $resp;
    }

    public function eliminar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "DELETE FROM 'rol' WHERE idrol = '" . $this->getIdRol() . "'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setMensajeOperacion("Rol->eliminar: " . $base->getError());
            }
        } else {
            $this->setMensajeOperacion("Rol->eliminar: " . $base->getError());
        }
        return $resp;
    }
}
?>
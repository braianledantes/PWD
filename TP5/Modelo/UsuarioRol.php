<?php

Class UsuarioRol{
    private $objUsuario;
    private $objRol;
    private $mensajeOperacion;

    private function __costruct(){
        $this->objUsuario= "";
        $this->objRol = "";
        $this->mensajeOperacion = "";
    }

    // Getter y Setter para id_usuario
    public function getObjUsuario() {
        return $this->objUsuario;
    }
    public function setObjUsuario($objUsuario) {
        $this->objUsuario = $objUsuario;
    }

    // Getter y Setter para id_rol
    public function getObjRol() {
        return $this->objRol;
    }
    public function setObjRol($objRol) {
        $this->objRol = $objRol;
    }

    // Getter y Setter para mensajeOperacion
    public function getMensajeOperacion() {
        return $this->mensajeOperacion;
    }
    public function setMensajeOperacion($mensajeOperacion) {
        $this->mensajeOperacion = $mensajeOperacion;
    }

    public function setear($objUsuario, $objRol)
    {

        $this->setObjUsuario($objUsuario);
        $this->setObjRol($objRol);
    }

    public static function listar($parametro = "")
    {

        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM usuariorol ";
        //echo $sql;
        if ($parametro != "") {
            $sql .= 'WHERE ' . $parametro;
        }
        //  echo $sql;

        $res = $base->Ejecutar($sql);
        if ($res > -1) {
            if ($res > 0) {
                while ($row = $base->Registro()) {

                    $objUsuario = null;
                    $objRol = null;

                    if ($row['idrol'] != null) {
                        $objRol = new Rol();
                        $objRol->setIdRol($row['idrol']);
                        $objRol->cargar();
                    }

                    if ($row['idusuario'] != null) {
                        $objUsuario = new Usuario();
                        $objUsuario->setIdUsuario($row['idusuario']);
                        $objUsuario->cargar();
                    }

                    $obj = new UsuarioRol();
                    $obj->setear($objUsuario, $objRol);
                    array_push($arreglo, $obj);
                }
            }
        } else {
            //     $this->setmensajeoperacion("reclamo->listar: ".$base->getError());
        }
        return $arreglo;
    }

    public function insertar()
    {
        $resp = false;
        $base = new BaseDatos();

        $sql = "INSERT INTO usuariorol(idusuario, idrol)VALUES(" . $this->getObjUsuario()->getIdUsuario() . "," . $this->getObjRol()->getIdRol() . ");";
        //echo $sql;
        if ($base->Iniciar()) {

            if ($base->Ejecutar($sql)) {
                $resp = true;

            } else {
                $this->setMensajeOperacion("usuario_rol->insertar: " . $base->getError());
            }
        } else {
            $this->setMensajeOperacion("usuario_rol->insertar: " . $base->getError());
        }
        return $resp;
    }

    public function modificar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = " UPDATE usuariorol SET ";
        $sql .= " idrol = " . $this->getObjRol()->getIdRol();
        $sql .= " WHERE idusuario =" . $this->getObjUsuario()->getIdUsuario();
        // echo $sql;
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;

            } else {
                $this->setMensajeOperacion("usuariorol->modificar 1: " . $base->getError());
            }
        } else {
            $this->setMensajeOperacion("usuariorol->modificar 2: " . $base->getError());
        }
        return $resp;
    }

    public function eliminar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "DELETE FROM usuariorol WHERE idusuario=" . $this->getObjUsuario()->getIdUsuario() . " AND idrol=" . $this->getObjRol()->getIdRol();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setMensajeOperacion("usuariorol->eliminar: " . $base->getError());
            }
        } else {
            $this->setMensajeOperacion("usuariorol->eliminar: " . $base->getError());
        }
        return $resp;
    }

}
?>
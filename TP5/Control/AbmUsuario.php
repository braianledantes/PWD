<?php
class AbmUsuario {
    private function cargarObjeto($parametro)
    {
        $usuario = null;
        if (array_key_exists('idusuario', $parametro) && array_key_exists('usnombre', $parametro) && array_key_exists('uspass', $parametro) && array_key_exists('usmail', $parametro) && array_key_exists('usdeshabilitado', $parametro)) {
            $usuario = new Usuario();
            $usuario->setear(
                $parametro['idusuario'],
                $parametro['usnombre'],
                $parametro['uspass'],
                $parametro['usmail'],
                $parametro['usdeshabilitado']
            );
        }
        return $usuario;
    }

    private function cargarObjetoConClave($parametro)
    {
        $objUsuario = null;
        if (isset($parametro['idusuario'])) {
            $objUsuario = new usuario();
            $objUsuario->setear($parametro['idusuario'], null, null, null, null);
        }
        return $objUsuario;
    }

    private function seteadosCamposClaves($parametro)
    {
        $resp = false;
        if (isset($parametro)) {
            $resp = true;
        }
        return $resp;
    }

    public function alta($parametro)
    {
        $respuesta = false;
        $objUsuario = $this->cargarObjeto($parametro);
        if ($objUsuario != null and $objUsuario->insertar()) {
            $respuesta = true;
        }
        return $respuesta;
    }

    public function baja($parametro)
    {
        $respuesta = false;
        if ($this->seteadosCamposClaves($parametro)) {
            $objUsuario = $this->cargarObjetoConClave($parametro);
            if ($objUsuario != null && $objUsuario->eliminar()) {
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    public function modificar($parametro)
    {
      
        $respuesta = false;
        if ($this->seteadosCamposClaves($parametro)) {
            $objUsuario = $this->buscar($parametro);

            $objUsuario = $this->cargarObjeto($parametro);

            if ($objUsuario != null && $objUsuario->modificar()) {
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    public function buscar($param)
    {
        $where = " true ";
        if ($param != null) {
            if (isset($param['idusuario'])) {
                $where .= " and idusuario = '" . $param['idusuario'] . "'";
            }

            if (isset($param['usnombre'])) {
                $where .= " and usnombre = '" . $param['usnombre'] . "'";
            }

            if (isset($param['uspass'])) {
                $where .= " and uspass ='" . $param['uspass'] . "'";
            }

            if (isset($param['usmail'])) {
                $where .= " and usmail = '" . $param['usmail'] . "'";
            }

            if (isset($param['usdeshabilitado'])) {
                $where .= " and usdeshabilitado = '" . $param['usdeshabilitado'] . "'";
            }
        }
        
        $arreglo = usuario::listar($where);
        echo "acaAAAAAAAAAA";
        var_dump($arreglo);
        return $arreglo;
    }
}
<?php

class Archivo
{
    private $dir;
    
    public function __construct()
    {
        $this->dir = '../../archivos/';
    }

    public function getDir()
    {
        return $this->dir;
    }

    public function setDir($dir)
    {
        $this->dir = $dir;
    }

    public function subirArchivo($array)
    {
        $respuesta = "";

        if ($array['archivo']['error'] <= 0) {
            $respuesta = "1";
            if (!copy($array['archivo']['tmp_name'], $this->dir . $array['archivo']['name'])) {
                $respuesta = "0";
            }
        } else {
            $respuesta = "-1";
        }

        return $respuesta;
    }
}

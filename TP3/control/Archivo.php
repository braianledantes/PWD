<?php

class Archivo
{
    private $files;
    private $dir;
    
    public function __construct($data)
    {
        $this->dir = '../../archivos/';
        $this->files = $data;
    }

    public function getDir()
    {
        return $this->dir;
    }

    public function setDir($dir)
    {
        $this->dir = $dir;
    }

    public function subirArchivo()
    {
        // devuelve la ruta del archivo subido
        $respuesta = null;

        $archivo = $this->files['archivo'];
        $rutaArticulo = $this->dir . $archivo['name'];

        if ($archivo['error'] <= 0) {
            $respuesta = "1";
            if (!copy($archivo['tmp_name'], $rutaArticulo)) {
                $respuesta = $rutaArticulo;
            }
        }

        return $respuesta;
    }

    public function obtenerContenidoTxt()
    {
        $archivo = $this->files['archivo'];
        $fileName = $this->files['archivo']['name'];
        $extFile = pathinfo($fileName, PATHINFO_EXTENSION) === "txt";
       
        if ($extFile) {
            $contenido = file_get_contents($archivo['tmp_name']);
        } else {
            $contenido = "El archivo no es un txt";
        }
        return $contenido;
    }
}

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
        $fileName = $this->files['archivo']['name'];
        $ruta = $this->dir . $fileName;

        if (move_uploaded_file($archivo['tmp_name'], $ruta)) {
            $respuesta = $ruta;
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

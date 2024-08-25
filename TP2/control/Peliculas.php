<?php

class Pelicula {
    private $listadoPeliculas = [];

    public function crearPelicula($titulo, $actores, $director, $guion, $produccion, $anio, $nacionalidad, $genero, $duracion, $edad) {
        $pelicula = [
            'titulo' => $titulo,
            'actores' => $actores,
            'director' => $director,
            'guion' => $guion,
            'produccion' => $produccion,
            'anio' => $anio,
            'nacionalidad' => $nacionalidad,
            'genero' => $genero,
            'duracion' => $duracion,
            'edad' => $edad
        ];

        $this->listadoPeliculas[] = $pelicula;

        $result = [
            'Título' => $titulo,	
            'Actores' => $actores,
            'Director' => $director,
            'Guión' => $guion,
            'Producción' => $produccion,
            'Anio' => $anio,
            'Nacionalidad' => $nacionalidad,
            'Género' => $genero,
            'Duración' => $duracion,
            'Restricciones de edad' => $edad
        ];

        return $result;
    }
}
<?php

/**
 * Interfaz que define los métodos que debe implementar un DAO de Auto
 */
interface AutoDao
{
    public function getAuto($patente);
    public function insertAuto(Auto $auto);
    public function deleteAuto($patente);
    public function updateAuto(Auto $auto);
    public function getAutos();
    public function getAutosSegunDuenio($dniDuenio);
}

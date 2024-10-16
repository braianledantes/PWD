<?php

/**
 * Interfaz que define los métodos que debe implementar un DAO de Persona
 */
interface PersonaDao
{
    public function getPersona($numDni);
    public function insertPersona(Persona $persona);
    public function deletePersona($numDni);
    public function updatePersona(Persona $persona);
    public function getPersonas();
}

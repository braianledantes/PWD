<?php

/**
 * Clase controladora de Persona
 */
class PersonaController
{
    private $database;
    private $personaDao;

    public function __construct()
    {
        $this->database = new DataBase();
        $this->personaDao = $this->database->getPersonaDao();
    }

    public function obtenerPersonas()
    {
        try {
            return ['personas' => $this->personaDao->getPersonas()];
        } catch (Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function crearPersona($nroDni, $nombre, $apellido, $fechaNac, $telefono, $domicilio)
    {
        try {
            $persona = new Persona($nroDni,  $apellido, $nombre, $fechaNac, $telefono, $domicilio);
            $this->personaDao->insertPersona($persona);
            return [
                'mensaje' => 'Persona creada correctamente',
                'persona' => $persona
            ];
        } catch (Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function buscarPersona($dni)
    {
        try {
            $persona = $this->personaDao->getPersona($dni);
            return ['persona' => $persona];
        } catch (Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function actualizarPersona($dni, $nombre, $apellido, $fechaNac, $telefono, $domicilio)
    {
        try {
            $persona = new Persona($dni, $apellido, $nombre, $fechaNac, $telefono, $domicilio);
            $this->personaDao->updatePersona($persona);
            return ['mensaje' => 'Persona actualizada correctamente'];
        } catch (Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
}

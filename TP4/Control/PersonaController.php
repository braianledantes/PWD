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
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                return ['error' => "Ya existe una persona con DNI $nroDni"];
            }
            return ['error' => 'Error al crear la persona en la base de datos'];
        } catch (Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function buscarPersona($dni)
    {
        try {
            $persona = $this->personaDao->getPersona($dni);
            if ($persona == null) {
                return ['error' => 'Persona no encontrada'];
            }
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

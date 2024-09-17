<?php

/**
 * Clase controladora de Auto
 */
class AutoController
{
    private $database;
    private $autoDao;
    private $personaDao;

    public function __construct()
    {
        $this->database = new DataBase();
        $this->autoDao = $this->database->getAutoDao();
        $this->personaDao = $this->database->getPersonaDao();
    }

    public function obtenerAutos()
    {
        try {
            return ['autos' => $this->autoDao->getAutos()];
        } catch (Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function obtenerAutosConDuenio()
    {
        try {
            $autos = $this->autoDao->getAutos();
            $personas = $this->personaDao->getPersonas();

            $result = [];

            foreach ($autos as $auto) {
                // Buscamos la persona dueña del auto
                $duenio = null;
                foreach ($personas as $persona) {
                    if ($persona->getNroDni() == $auto->getDniDuenio()) {
                        $duenio = $persona;
                        break;
                    }
                }

                $result[] = [
                    'auto' => $auto,
                    'duenio' => $duenio
                ];
            }

            return $result;
        } catch (Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function buscarAuto($patente)
    {
        try {
            $auto = $this->autoDao->getAuto($patente);
            if ($auto == null) {
                return ['error' => 'Auto no encontrado'];
            }
            return ['auto' => $auto];
        } catch (Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function obtenerAutosSegunDuenio($dniDuenio) {
        try {
            $autos = $this->autoDao->getAutosSegunDuenio($dniDuenio);
            $persona = $this->personaDao->getPersona($dniDuenio);

            $result = [];

            foreach ($autos as $auto) {
                $result[] = [
                    'auto' => $auto,
                    'duenio' => $persona
                ];
            }

            return $result;
        } catch (Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function crearAuto($patente, $marca, $modelo, $dniDuenio)
    {
        try {
            // si no existe la persona se lanza una excepción
            $this->personaDao->getPersona($dniDuenio);
            
            $auto = new Auto($patente, $marca, $modelo, $dniDuenio);
            
            // se crea el auto
            $this->autoDao->insertAuto($auto);
            
            return ['mensaje' => 'Auto creado correctamente'];
        } catch (Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function cambiarDuenio($patente, $dniDuenio)
    {
        try {
            // si no existe la persona se lanza una excepción
            $this->personaDao->getPersona($dniDuenio);
            
            $auto = $this->autoDao->getAuto($patente);
            
            // cambia el dueño del auto
            $autoActualizado = new Auto($auto->getPatente(), $auto->getMarca(), $auto->getModelo(), $dniDuenio);
            $this->autoDao->updateAuto($autoActualizado);

            return ['mensaje' => 'Dueño cambiado correctamente'];
        } catch (Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
}

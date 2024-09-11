<?php
require_once '../Modelo/DataBase.php';

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

}
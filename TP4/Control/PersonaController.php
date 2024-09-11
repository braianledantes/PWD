<?php
class PersonaController
{
    private $database;
    private $personaDao;

    public function __construct()
    {
        $this->database = new DataBase();
        $this->personaDao = $this->database->getPersonaDao();
    }

}
<?php
require_once 'AutoDao.php';
require_once 'PersonaDao.php';

/**
 * Clase que representa la base de datos con sus respectivos DAO
 */
class DataBase extends PDO
{
    private AutoDao $autoDao;
    private PersonaDao $personaDao;

    public function __construct()
    {
        parent::__construct('mysql:host=localhost;dbname=infoautos', 'root', '');
        $this->autoDao = new AutoDao($this);
        $this->personaDao = new PersonaDao($this);
    }

    public function getAutoDao()
    {
        return $this->autoDao;
    }

    public function getPersonaDao()
    {
        return $this->personaDao;
    }
}

<?php
require_once 'AutoDao.php';
require_once 'PersonaDao.php';

/**
 * Clase que representa la base de datos con sus respectivos DAO
 */
class DataBase
{
    private PDO $conn;
    private AutoDao $autoDao;
    private PersonaDao $personaDao;

    public function __construct()
    {
        $this->conn = new PDO('mysql:host=localhost;dbname=infoautos', 'root', '');
        $this->autoDao = new AutoDaoImp($this->conn);
        $this->personaDao = new PersonaDaoImp($this->conn);
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

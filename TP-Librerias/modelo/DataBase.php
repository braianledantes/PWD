<?php
/**
 * Clase que representa la base de datos con sus respectivos DAO
 */
class DataBase
{
    private PDO $conn;
    private PersonaDao $personaDao;

    public function __construct()
    {
        $dbhost = $_ENV['DB_HOST'];
        $dbport = $_ENV['DB_PORT'];
        $dbname = $_ENV['DB_NAME'];
        $dbuser = $_ENV['DB_USER'];
        $dbpass = $_ENV['DB_PASS'];
        $this->conn = new PDO("mysql:host=$dbhost;port=$dbport;dbname=$dbname", $dbuser, $dbpass);
        $this->personaDao = new PersonaDaoImp($this->conn);
    }
    
    public function getPersonaDao()
    {
        return $this->personaDao;
    }
}

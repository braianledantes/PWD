<?php
require_once 'Auto.php';

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

/**
 * Clase que se encarga de realizar operaciones en la base de datos con la entidad auto
 */
class AutoDaoImp implements AutoDao
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAuto($patente)
    {
        $query = $this->db->prepare('SELECT * FROM auto WHERE patente = :patente');
        $query->execute(['patente' => $patente]);
        $auto = $query->fetch();
        if (!$auto) {
            return null;
        }
        return new Auto($auto['Patente'], $auto['Marca'], $auto['Modelo'], $auto['DniDuenio']);
    }

    public function insertAuto(Auto $auto)
    {
        $query = $this->db->prepare('INSERT INTO auto(patente, marca, modelo, dniDuenio) VALUES(:patente, :marca, :modelo, :dniDuenio)');
        $query->execute([
            'patente' => $auto->getPatente(),
            'marca' => $auto->getMarca(),
            'modelo' => $auto->getModelo(),
            'dniDuenio' => $auto->getDniDuenio()
        ]);
    }

    public function deleteAuto($patente)
    {
        $query = $this->db->prepare('DELETE FROM auto WHERE patente = :patente');
        $query->execute(['patente' => $patente]);
    }

    public function updateAuto(Auto $auto)
    {
        $query = $this->db->prepare('UPDATE auto SET marca = :marca, modelo = :modelo, dniDuenio = :dniDuenio WHERE patente = :patente');
        $query->execute([
            'patente' => $auto->getPatente(),
            'marca' => $auto->getMarca(),
            'modelo' => $auto->getModelo(),
            'dniDuenio' => $auto->getDniDuenio()
        ]);
    }

    public function getAutos()
    {
        $query = $this->db->query('SELECT * FROM auto');
        $autos = [];
        foreach ($query as $auto) {
            $autos[] = new Auto($auto['Patente'], $auto['Marca'], $auto['Modelo'], $auto['DniDuenio']);
        }
        return $autos;
    }

    public function getAutosSegunDuenio($dniDuenio)
    {
        $query = $this->db->prepare('SELECT * FROM auto WHERE dniDuenio = :dniDuenio');
        $query->execute(['dniDuenio' => $dniDuenio]);
        $autos = [];
        foreach ($query as $auto) {
            $autos[] = new Auto($auto['Patente'], $auto['Marca'], $auto['Modelo'], $auto['DniDuenio']);
        }
        return $autos;
    }
}

<?php

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
        try {
            $query = $this->db->prepare('SELECT * FROM auto WHERE patente = :patente');
            $query->execute(['patente' => $patente]);
            $auto = $query->fetch();
            if (!$auto) {
                throw new ModeloException("No se encontro el auto con patente $patente");
            }
            return new Auto($auto['Patente'], $auto['Marca'], $auto['Modelo'], $auto['DniDuenio']);
        } catch (PDOException $e) {
            throw new ModeloException('Error al obtener el auto', $e);
        }
    }

    public function insertAuto(Auto $auto)
    {
        try {
            $query = $this->db->prepare('INSERT INTO auto(patente, marca, modelo, dniDuenio) VALUES(:patente, :marca, :modelo, :dniDuenio)');
            $query->execute([
                'patente' => $auto->getPatente(),
                'marca' => $auto->getMarca(),
                'modelo' => $auto->getModelo(),
                'dniDuenio' => $auto->getDniDuenio()
            ]);
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                $patente = $auto->getPatente();
                throw new ModeloException("Ya existe un auto con patente $patente");
            }
            throw new ModeloException('Error al crear el auto', $e);
        }
    }

    public function deleteAuto($patente)
    {
        try {
            $query = $this->db->prepare('DELETE FROM auto WHERE patente = :patente');
            $query->execute(['patente' => $patente]);
        } catch (PDOException $e) {
            throw new ModeloException('Error al eliminar el auto', $e);
        }
    }

    public function updateAuto(Auto $auto)
    {
        try {
            $query = $this->db->prepare('UPDATE auto SET marca = :marca, modelo = :modelo, dniDuenio = :dniDuenio WHERE patente = :patente');
            $query->execute([
                'patente' => $auto->getPatente(),
                'marca' => $auto->getMarca(),
                'modelo' => $auto->getModelo(),
                'dniDuenio' => $auto->getDniDuenio()
            ]);
        } catch (PDOException $e) {
            throw new ModeloException('Error al actualizar el auto', $e);
        }
    }

    public function getAutos()
    {
        try {
            $query = $this->db->query('SELECT * FROM auto');
            $autos = [];
            foreach ($query as $auto) {
                $autos[] = new Auto($auto['Patente'], $auto['Marca'], $auto['Modelo'], $auto['DniDuenio']);
            }
            return $autos;
        } catch (PDOException $e) {
            throw new ModeloException('Error al obtener los autos', $e);
        }
    }

    public function getAutosSegunDuenio($dniDuenio)
    {
        try {
            $query = $this->db->prepare('SELECT * FROM auto WHERE dniDuenio = :dniDuenio');
            $query->execute(['dniDuenio' => $dniDuenio]);
            $autos = [];
            foreach ($query as $auto) {
                $autos[] = new Auto($auto['Patente'], $auto['Marca'], $auto['Modelo'], $auto['DniDuenio']);
            }
            return $autos;
        } catch (PDOException $e) {
            throw new ModeloException('Error al obtener los autos', $e);
        }
    }
}

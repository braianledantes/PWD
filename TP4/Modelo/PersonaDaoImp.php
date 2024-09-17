<?php

/**
 * Clase que se encarga de realizar operaciones en la base de datos con la entidad persona
 */
class PersonaDaoImp implements PersonaDao
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getPersona($numDni)
    {
        try {
            $query = $this->db->prepare('SELECT * FROM persona WHERE nroDni = :nroDni');
            $query->execute(['nroDni' => $numDni]);
            $persona = $query->fetch();
            if (!$persona) {
                throw new ModeloException("No se encontro la persona con DNI $numDni");
            }
            return new Persona($persona['NroDni'], $persona['Apellido'], $persona['Nombre'], $persona['fechaNac'], $persona['Telefono'], $persona['Domicilio']);
        } catch (PDOException $e) {
            throw new ModeloException('Error al obtener la persona', $e);
        }
    }

    public function insertPersona(Persona $persona)
    {
        try {
            $query = $this->db->prepare('INSERT INTO persona(nroDni, apellido, nombre, fechaNac, telefono, domicilio) VALUES(:nroDni, :apellido, :nombre, :fechaNac, :telefono, :domicilio)');
            $query->execute([
                'nroDni' => $persona->getNroDni(),
                'apellido' => $persona->getApellido(),
                'nombre' => $persona->getNombre(),
                'fechaNac' => $persona->getFechaNac(),
                'telefono' => $persona->getTelefono(),
                'domicilio' => $persona->getDomicilio()
            ]);
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                throw new ModeloException("Ya existe una persona con DNI {$persona->getNroDni()}");
            }
            throw new ModeloException('Error al crear la persona', $e);
        }
    }

    public function deletePersona($numDni)
    {
        try {
            $query = $this->db->prepare('DELETE FROM persona WHERE nroDni = :nroDni');
            $query->execute(['nroDni' => $numDni]);
        } catch (PDOException $e) {
            throw new ModeloException('Error al eliminar la persona', $e);
        }
    }

    public function updatePersona(Persona $persona)
    {
        try {
            $query = $this->db->prepare('UPDATE persona SET apellido = :apellido, nombre = :nombre, fechaNac = :fechaNac, telefono = :telefono, domicilio = :domicilio WHERE nroDni = :nroDni');
            $query->execute([
                'nroDni' => $persona->getNroDni(),
                'apellido' => $persona->getApellido(),
                'nombre' => $persona->getNombre(),
                'fechaNac' => $persona->getFechaNac(),
                'telefono' => $persona->getTelefono(),
                'domicilio' => $persona->getDomicilio()
            ]);
        } catch (PDOException $e) {
            throw new ModeloException('Error al actualizar la persona', $e);
        }
    }

    public function getPersonas()
    {
        try {
            $query = $this->db->query('SELECT * FROM persona');
            $personas = [];
            foreach ($query as $persona) {
                $personas[] = new Persona($persona['NroDni'], $persona['Apellido'], $persona['Nombre'], $persona['fechaNac'], $persona['Telefono'], $persona['Domicilio']);
            }
            return $personas;
        } catch (PDOException $e) {
            throw new ModeloException('Error al obtener las personas', $e);
        }
    }
}

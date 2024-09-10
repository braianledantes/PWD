<?php
require_once 'Persona.php';

/**
 * Clase que se encarga de realizar operaciones en la base de datos con la entidad persona
 */
class PersonaDao
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getPersona($numDni): Persona | null
    {
        $query = $this->db->prepare('SELECT * FROM persona WHERE nroDni = :nroDni');
        $query->execute(['nroDni' => $numDni]);
        $persona = $query->fetch();
        if (!$persona) {
            return null;
        }
        return new Persona($persona['NroDni'], $persona['Apellido'], $persona['Nombre'], $persona['fechaNac'], $persona['Telefono'], $persona['Domicilio']);
    }

    public function insertPersona(Persona $persona)
    {
        $query = $this->db->prepare('INSERT INTO persona(nroDni, apellido, nombre, fechaNac, telefono, domicilio) VALUES(:nroDni, :apellido, :nombre, :fechaNac, :telefono, :domicilio)');
        $query->execute([
            'nroDni' => $persona->getNroDni(),
            'apellido' => $persona->getApellido(),
            'nombre' => $persona->getNombre(),
            'fechaNac' => $persona->getFechaNac(),
            'telefono' => $persona->getTelefono(),
            'domicilio' => $persona->getDomicilio()
        ]);
    }

    public function deletePersona($numDni)
    {
        $query = $this->db->prepare('DELETE FROM persona WHERE nroDni = :nroDni');
        $query->execute(['nroDni' => $numDni]);
    }

    public function updatePersona(Persona $persona)
    {
        $query = $this->db->prepare('UPDATE persona SET apellido = :apellido, nombre = :nombre, fechaNac = :fechaNac, telefono = :telefono, domicilio = :domicilio WHERE nroDni = :nroDni');
        $query->execute([
            'nroDni' => $persona->getNroDni(),
            'apellido' => $persona->getApellido(),
            'nombre' => $persona->getNombre(),
            'fechaNac' => $persona->getFechaNac(),
            'telefono' => $persona->getTelefono(),
            'domicilio' => $persona->getDomicilio()
        ]);
    }

    public function getPersonas()
    {
        $query = $this->db->query('SELECT * FROM persona');
        $personas = [];
        foreach ($query as $persona) {
            $personas[] = new Persona($persona['NroDni'], $persona['Apellido'], $persona['Nombre'], $persona['fechaNac'], $persona['Telefono'], $persona['Domicilio']);
        }
        return $personas;
    }
}

<?php

require_once 'Persona.php'

class Hogar 
{
    private string $direccion;
    private Persona $propietario;
    /**
     * @var Persona[]
     */
    private $habitantes;

    public function __construct(string $direccion)
    {
        $this->direccion = $direccion;
        $this->habitantes = [];
    }

    public function agregarHabitantes(Persona $persona)
    {
        array_push($this->habitantes, $persona);
    }
    public function cantidadDeHabitantes() {
        return count($this->habitantes);
    }





    /**
     * Get the value of direccion
     *
     * @return  string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @param  string  $direccion
     *
     * @return  self
     */
    public function setDireccion(string $direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of propietario
     *
     * @return  Persona
     */
    public function getPropietario()
    {
        return $this->propietario;
    }

    /**
     * Set the value of propietario
     *
     * @param  Persona  $propietario
     *
     * @return  self
     */
    public function setPropietario(Persona $propietario)
    {
        $this->propietario = $propietario;

        return $this;
    }
}
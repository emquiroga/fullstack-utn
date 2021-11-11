<?php

require_once "Persona.php";
require_once "Hogar.php";
echo "Test <br/>";

$unaPersona = new Persona("Emiliano", "Quiroga");
// echo $unaPersona->getNombre();
// echo "<br/>";
// echo $unaPersona->getApellido();
// echo "<br/>";
// $unaPersona->setNombre("Manuel");
// echo $unaPersona->getNombre();

$unaCasa = new Hogar("Evergreen 1234");
$unaCasa->agregarHabitantes($unaPersona);
$otraPersona = new Persona("Juan", "Perez");
$unaCasa->agregarHabitantes($otraPersona);
echo $unaCasa->cantidadDeHabitantes();


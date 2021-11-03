<?php

require 'abm_alumnos.php';

$mysqli = mysqli_connect("127.0.0.1:3306", "root", "", "curso");

$res = mysqli_query($mysqli, "SELECT * FROM alumno");



while($unaFila = mysqli_fetch_assoc($res)){
    print_r($unaFila);
    echo "<br>";
}

addAlumno($mysqli, "Pajarito");

// $pudoInsertar = mysqli_query($mysqli, "INSERT INTO alumno (nombre) VALUES('Juan')");

// if ($pudoInsertar) {
//     echo "Se insertó correctamente";
//     echo "<br>";
//     echo "ID: " . mysqli_insert_id($mysqli);
// } else {
//     echo "No se pudo insertar";
// }

mysqli_close($mysqli);


// ARRAYS (Vector, Colección, Lista)

// LAS SIGUIENTES SON DOS FORMAS EQUIVALENTES DE DECLARAR E INICIALIZAR ARRAYS
/*$nombres = [];
$nombres2 = array();*/

// $nombres = ["Ezequiel", "Lucas", "Juani", "Agustín", "Lorena"];
// array_push($nombres, "Pablo");
// print_r($nombres);

// echo "<br>";

// $juani = $nombres[2];
// print_r($juani);

// echo "<br>";

// $datosPersonales = [
//     "nombre" => "Ezequiel",
//     "apellido" => "Escobar",
//     "edad" => 26,
// ];
// $datosPersonales["email"] = "ezequiel@gmail.com";

// print_r($datosPersonales);

// echo "<br>";

// foreach ($nombres as $nombre) {
//     echo $nombre;
//     echo "<br>";
// }

// foreach ($datosPersonales as $clave => $valor) {
//     echo $clave.": ".$valor;
//     echo "<br>";
// }





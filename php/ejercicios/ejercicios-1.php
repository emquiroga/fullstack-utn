<?php
echo "<h1>Ejercicios</h1><br>";
echo "<p><strong>1) Se tiene dos variables con valores numéricos, calcular la suma de
ellos, la multiplicación y la resta.</strong></p>";

function suma($val1, $val2) {
    echo "La suma de ".$val1." y ".$val2." da como resultado ". ($val1 + $val2) .".<br>";
}
function resta($val1, $val2) {
    echo "De restarle ".$val1." a ".$val2." obtenemos ". ($val1 - $val2) .".<br>";
}
function multi($val1, $val2) {
    echo "Al multiplicar ".$val1." por ".$val2." obtenemos ". ($val1 * $val2) .".<br>";
}
function divi($val1, $val2) {
    echo "De dividir ".$val1." por ".$val2." obtenemos ". ($val1 / $val2) .".<br>";
}
  
// TESTS:
suma(15, 10);
resta(15, 10);
multi(15, 10);
divi (15, 3);

echo "<p><strong>2) Se tiene tres variables con valores numéricos, estas representan
las notas de un alumno. Se necesita obtener el promedio de un
estudiante a partir de sus tres notas parciales.</strong></p></br>";

function promedio($val1, $val2, $val3) {
    echo "El promedio de tus tres notas es de ".(($val1 + $val2 + $val3) / 3).".<br>";
}
  
//TEST
echo promedio(10, 10, 9);

echo "<p><strong>3) Dado un número ingresado en una variable determinar si el mismo
es IMPAR.</strong></p></br>";


function esPar($val) {
    if (($val % 2) == 0){
      echo "Tu número es PAR<br>";
    } else{
        echo "Tu número es IMPAR<br>";
    }
}

//TEST
echo esPar(5);

echo "<p><strong>4) Dados 10 valores numéricos en variables separadas, informar cual
es el mayor. Investigar el concepto de ARRAY, como puede
cambiar el ejercicio con la utilización del mismo.</strong></p></br>";



$val1 = 30;
$val2 = 33;
$val3 = 66;
$val4 = 19;
$val5 = 16;
$val6 = 68;
$val7 = 24;
$val8 = 99;
$val9 = 85;
$val10 = 72;

$arrOfVal = [$val1, $val2, $val3, $val4, $val5, $val6, $val7, $val8, $val9, $val10];

function showHighest ($arr) {
    rsort($arr);
    echo "El valor más alto de tus variables es ".$arr[0].".<br>";
}

//TEST
showHighest($arrOfVal);

echo "<p><strong>5) Utilizando el concepto de ARRAY, dados 50 números enteros,
informar el promedio de los mayores que 100 y la suma de los
menores que –10.</strong></p></br>";


$myArray = [170, 685, 670, 980, -785, 838, 678, 159, 717, 309, 269, 920, 700, 95, 909, -732, 998, 198, 866, 860, 614, 617, 141, 305, 546, -87, 465, 066, 529, 873, 106, 877, 828, 710, 63, -6, 443, 130, -337, 450, 375, 599, 926, 945, 358, -386, 567, 023, 657, 223];

//CALLBACK FUNCTIONS
function filterHigher($values) {
  return $values > 100;
}

function filterLower($values) {
  return $values < -10;
}

//REQUESTED FUNCTIONS
function higher($arr) {
  $filtValues = array_filter($arr, "filterHigher");
  $average = array_sum($filtValues)/count($filtValues);
  echo"El promedio de los números mayores que 100 es de ".($average).".<br>";
}

function lower($arr) {
  $filtValues = array_filter($arr, "filterLower");
  $totals = array_sum($filtValues);
  echo "La suma de los numeros menores a -10 es igual a ".($totals).".<br>";
}

//TESTS
higher($myArray);
lower($myArray);



echo "<p><strong>6) Dado un valor numérico X, imprimir los X primeros múltiplos de 3
que no sean múltiplos de 5.</strong></p></br>";

// function isMult($value){
//     if($value % 3 == 0 && !($value % 5 == 0)) {
//       echo "Es múltiplo de 3 y no de 5";
//     } else {
//       echo "Tu número no cumple con los parámetros";
//     }
// }
// function multiplos($value){
//     $arrOfThrees = [];
//     for ($i = 0; $i <= $value; $i = $i + 3) {
        
//         print_r($arrOfThrees);
//     }
//     // for ($i = 0; $i <= $value; $i = $i + 5) {
//     //     $arrOfFives =  $i;
//     // }
// }

// multiplos(60);
// //TEST
// // isMult(30);

echo "<p><strong>7) Define las variables \$tipo, \$grosor, \$diametro y \$marca. Establece
que el tipo sea “Rueda de camión”, el grosor 0.23, el diámetro
1.35 y la marca “Kimashuki”. Crea el código PHP donde a través
de condicionales if realices la siguiente comprobación: si el
diámetro es superior a 1.4 debe mostrarse por pantalla el mensaje
“La rueda es para un vehículo grande”. Si es menor o igual a 1.4
debe mostrarse por pantalla el mensaje “La rueda es para un
vehículo pequeño”. En otro caso, debe mostrarse “No existe un
tamaño de rueda válido”. Modifica los valores de diámetro y
comprueba que los resultados obtenidos por pantalla sean
correctos.</strong></p></br>";


$tipo = "Rueda de camion";
$grosor = 0.23;
$diametro = 1.4;
$marca = "Kimashiki";

function ruedas($value) {
  if($value > 1.4 && is_numeric($value)) {
    echo "La rueda es para un vehículo grande. <br>";
  } else if ($value <= 1.4 && is_numeric($value)) {
    echo "La rueda es para un vehículo pequeño. <br>";
  } else {
    echo "No existe un tamaño de rueda válido. <br>";
  }
}
//TEST
ruedas($diametro);
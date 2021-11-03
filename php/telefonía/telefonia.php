<?php

// 1. Listar los nombres de los usuarios.
// 2. Calcular el saldo máximo de los usuarios que tienen más de 30 años. Investigar sobre la
// utilización de la función MAX().
// 3. Listar nombre y teléfono de los usuarios con teléfono NOKIA, BLACKBERRY o SONY.
// Investigar sobre la utilización de la función IN().
// 4. Contar los usuarios sin saldo o inactivos.
// 5. Listar los números de teléfono con saldo menor o igual a 300.
// 6. Calcular la suma de los saldos de los usuarios de la compañía telefónica NEXTEL. Investigar
// sobre la utilización de la función SUM().
// 7. Contar el número de usuarios por compañía telefónica. Investigar sobre la utilización de la
// función COUNT() y GROUPBY().
// 8. Contar el número de usuarios por nivel.
// 9. Listar los usuarios con nivel 2.
// 10. Mostrar el email de los usuarios que usan gmail. Investigar sobre la utilización de la
// función LIKE().
// 11. Listar nombre y teléfono de los usuarios con teléfono LG, SAMSUNG o MOTOROLA.

$mysqli = mysqli_connect("127.0.0.1:3306", "root", "", "telefonia");

if ($res = mysqli_query($mysqli, "SELECT * FROM usuario")) {
    echo "Conexión extablecida<br><hr>";
}

while($row = mysqli_fetch_array($res)) {
    echo $row['nombre'] . " " . $row['telefono'] . "<br>";
}

// echo 
// "<table>
//     <thead>
//         <tr>
//             <th>Usuario</th>
//         </tr>
//     </thead>
//     <tbody>
        
//     </tbody>
// </table>";

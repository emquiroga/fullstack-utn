<?php

isset($_POST['nombre']) ? $nombre = $_POST['nombre'] : $nombre = "";
isset($_POST['email']) ? $email = $_POST['email'] : $email = "";
echo "<p>El nombre ingresado es $nombre</p><br>";
echo "<p>El email ingresado es $email</p><br>";

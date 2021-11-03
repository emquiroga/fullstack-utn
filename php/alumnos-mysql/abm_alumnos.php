<?php
function alumnos ($mysqli) {
   return mysqli_query($mysqli, "SELECT * FROM alumnos");
}
function addAlumno($mysqli, $alumno) {
    mysqli_query($mysqli, "INSERT INTO alumno (nombre) VALUES($alumno)");
}
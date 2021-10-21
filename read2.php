<?php
include 'connect.php';

@$buscare = $_POST['buscar'];

$SQL_READ= "
SELECT DISTINCT alumno.nombres, alumno.apellido,alumno.dni, alumno_adeuda.Materias_titulo,alumno_adeuda.Materias_turno,alumno_adeuda.tipo,alumno_adeuda.division FROM alumno
INNER JOIN alumno_adeuda 
ON  alumno.dni = alumno_adeuda.alumno_dni WHERE alumno.dni = '$buscare' ";


$sql_query = mysqli_query($conn,$SQL_READ);


  ?>

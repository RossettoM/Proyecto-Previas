<?php

include 'connect.php';


$value11 = $_POST['dni2'];
$value12 = $_POST['titulo'];
$value13 = $_POST['turno'];
$value14 = $_POST['tipo'];
$value15 = $_POST['division'];


$sql_create2 = "INSERT INTO alumno_adeuda(alumno_dni,Materias_titulo,Materias_turno,tipo,division) VALUES('$value11','$value12','$value13','$value14','$value15')";
$sql_create_result = mysqli_query($conn,$sql_create2);


header('location:../index4.php');
?>
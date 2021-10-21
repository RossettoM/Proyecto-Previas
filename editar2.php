<?php
include 'connect.php';

$val2 = $_POST['dni'];
$val3 = $_POST['previa'];
$val4 = $_POST['division'];
$val5 = $_POST['tipo'];

$SQL_READ = "UPDATE alumno_adeuda SET tipo='$val5' WHERE alumno_dni ='$val2' AND Materias_titulo ='$val3' AND division='$val4' ";

$sql_query = mysqli_query($conn,$SQL_READ);
  header('location:../index5.php');
  ?>
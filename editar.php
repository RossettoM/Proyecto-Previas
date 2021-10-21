<?php
include 'connect.php';

$buscar = $_POST['editar'];
$val1 = $_POST['dia'];
$val2 = $_POST['nombre'];
$val4 = $_POST['turno'];
$val5 = $_POST['tipo'];

$SQL_READ = "UPDATE previas SET idprevias='$buscar',fecha='$val1',profesor_nombre='$val2',turno='$val4',tipo='$val5' WHERE idprevias ='$buscar'";

$sql_query = mysqli_query($conn,$SQL_READ);
  header('location:../index3.php');
  ?>
<?php
include 'connect.php';

$buscar = $_POST['borrar'];


$SQL_READ = "DELETE FROM previas WHERE idprevias='$buscar' ";

$sql_query = mysqli_query($conn,$SQL_READ);
  header('location:../index3.php');
  ?>
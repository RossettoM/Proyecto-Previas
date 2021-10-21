<?php
include 'connect.php';

@$buscar = $_POST['buscare'];

$SQL_READ = "SELECT * FROM 
previas WHERE Materias_titulo LIKE '%".$buscar."%' OR profesor_nombre LIKE '%".$buscar. "%' OR turno LIKE '%".$buscar. "%' OR tipo LIKE '%".$buscar. "%' " ;



$sql_query = mysqli_query($conn,$SQL_READ);


  ?>
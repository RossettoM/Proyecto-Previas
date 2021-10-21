
<html>
    <head>
    	<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


    </head>

    <body>
    	<main>
<div id="navbar">
   <a href="index2.php">Registro de previa</a>
<a href="index3.php">Buscador de previas inscriptas</a>
 <a href="index4.php">Registro de alumnos</a>
 <a href="index5.php">Buscador de alumnos inscriptos</a>
 <a href="index.php">Logout</a> 
</div>
  

     <form action="index5.php" method="POST" >
<h1>Buscador</h1>
<div class="form-group">

	<b>Ingrese dni:</b> </label> 
<input type="text"id="buscar" maxlength="100" class="form-control" placeholder="ingrese dni"  
 name="buscar" />
</div>	
<input type="submit" id="envio"  class="btn btn-primary btn-lg btn-block" value="Buscar">
        </form>
    
<h1>Resultados</h1>
<table border="2px">
	<thead>
		
		<th>nombre</th>
		<th>apellido</th>
		<th>dni</th>
		<th>materia</th>
		<th>turno</th>}
		<th>tipo</th>
        <th>año</th>
	</thead>
	<tbody>

<?php
include 'php/read2.php';
while ($rows = mysqli_fetch_array($sql_query)){
 ?>
<tr>
	<td><?=$rows['nombres'] ?></td>
	<td><?=$rows['apellido'] ?></td>
	<td><?=$rows['dni'] ?></td>
	<td><?=$rows['Materias_titulo'] ?></td>
	<td><?=$rows['Materias_turno'] ?></td>
    <td><?=$rows['tipo'] ?></td>
	<td><?=$rows['division'] ?></td>
	<td><a href="#editar" class="btn"  role="button">editar</td>
</tr>


<?php  }
?>
	</tbody>
</table>



 <div class="container">
   <div class="row">


		<div class="col-lg-6 col-md-6 col-sm-12">
	           <form  action="php/editar2.php" method="POST" id="editar">
	<h1>Editar</h1>
	
	<div class="form-group">
		<label for="dni"> <b>Dni:</b> </label> 
<input type="number"id="dni" maxlength="100"  class="form-control" placeholder="dni  " name="dni" required/>
</div>

<div class="form-group">
	<label for="previa"> <b>Previa:</b> </label> 
<input type="text"id="previa" maxlength="100"  class="form-control" placeholder="ingrese previa" name="previa" required/>
</div>
	
	
 <div class="form-group">
      <label for="dni2"><b> Año:</b> </label> 
<input type="number"id="division" maxlength="1" class="form-control" placeholder="ingrese año" min="1" max="6"
 name="division" 
required/>
 <div class="form-group">
 <label> <h5>Modificar tipo</h5></label>
    <br>

<input type="radio" name="tipo" value="previa">Previa

<br>

<input type="radio" name="tipo" value="completar estudio">Completar estudio
 <br>
<input type="radio" name="tipo" value="libre">Libre
 <br>
<input type="radio" name="tipo" value="Finalizado">Finalizado
</div>
</div>

<input type="submit" id="envio" class="btn btn-primary btn-lg btn-block" value="Guardar">

</form>

		</div>
	
</div><!--fin row-->
</div>

</main>
<script src="js/java.js">

</script>
    </body>
</html>
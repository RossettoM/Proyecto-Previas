
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
 <a href="index.php" >Logout</a> 
</div>
  

     <form action="index3.php" method="POST" >
<h1>Buscador</h1>
<div class="form-group">

	
	  <label for="buscar"><b> Ingrese materia/profesor:</b> </label> 
<input type="text"id="buscar" maxlength="100" class="form-control" placeholder="ingrese  materia/profesor"  
 name="buscare" />
</div>	
<input type="submit" id="envio"  class="btn btn-primary btn-lg btn-block" value="Buscar">
        </form>
   

 
  





<h1>Resultados</h1>
<table border="2px">
	<thead>
		
		<th>fecha</th>
	    <th>nombre y apellido</th>
		<th>materia</th>
		<th>turno</th>
		<th>tipo</th>
		<th>año</th>
			<th>id</th>
	</thead>
	<tbody>

<?php
include 'php/read.php';
while ($row = mysqli_fetch_array($sql_query)){
 ?>
<tr>
	
	<td><?=$row['fecha'] ?></td>
	<td><?=$row['profesor_nombre'] ?></td>
	<td><?=$row['Materias_titulo'] ?></td>
	<td><?=$row['turno'] ?></td>
	<td><?=$row['tipo'] ?></td>
	<td><?=$row['division'] ?></td>
	<td><?=$row['idprevias'] ?></td>

	<td><a href="#editar" class="btn"  role="button">editar</td>
</tr>


<?php  }
?>
	</tbody>
</table>
 <div class="container">
   <div class="row">
	

		<div class="col-lg-6 col-md-6 col-sm-12">
	           <form action="php/editar.php" method="POST" id="editar">
	<h1>Editar</h1>
	
<div class="form-group">
		<label for="editar"> <b>Ingrese id:</b> </label> 
<input type="number"id="editar" maxlength="100"  class="form-control" placeholder="ingrese id " autocomplete="off" name="editar" required/>
</div>

	<div class="form-group">
	  <label for="dia"><b> Día:</b> </label> 
<input type="date"id="dia" maxlength="15" class="form-control"
  min="2019-12-01" placeholder="ingrese día "  
 name="dia" max="2020-3-25" 
required/>
</div>	
	<div class="form-group">
		<label for="nombre"> <b>Nombre y apellido del profesor:</b> </label> 
<input type="text"id="nombre" maxlength="100"  class="form-control" placeholder="ingrese nombre y apellido  " name="nombre" required/>
</div>


<div class="form-group">
	<label> <h5>Turno</h5></label>
	<br>
<input type="radio" name="turno" value="mañana">mañana

<br>

<input type="radio" name="turno" value="tarde">tarde
	</div>
	 <div class="form-group">
 <label> <h5>Tipo de previa</h5></label>
    <br>

<input type="radio" name="tipo" value="previa">previa

<br>

<input type="radio" name="tipo" value="completar estudio">completar estudio
 <br>
<input type="radio" name="tipo" value="libre">libre
 <br>
 
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
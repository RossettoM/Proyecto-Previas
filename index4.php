<?php
?>
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
  
<form action="php/create2.php" method="POST" id="formulario">
    <h1>Registro de alumnos</h1>

    <div class="form-group">
      <label for="dni2"><b> Dni:</b> </label> 
<input type="number"id="dni2" maxlength="15" class="form-control" placeholder="ingrese dni "
 name="dni2" 
required/>
</div>
    <div class="form-group">
        <label for="titulo"> <b>Materia:</b> </label> 
<input type="text"id="titulo" maxlength="100"  class="form-control" placeholder="ingrese materia " name="titulo" required/>

</div>
<div class="form-group">
  <label> <h5>año</h5></label>
    <br>
<input type="radio" name="turno" value="mañana">mañana

<br>

<input type="radio" name="turno" value="tarde">tarde
  </div>
 
  <div class="form-group">
    <label> <h5>tipo de previa</h5></label>
    <br>

<input type="radio" name="tipo" value="previa">previa

<br>

<input type="radio" name="tipo" value="completar estudio">completar estudio
 <br>
<input type="radio" name="tipo" value="libre">libre
  </div>
    <div class="form-group">
      <label for="dni2"><b> Año:</b> </label> 
<input type="number"id="division" maxlength="1" class="form-control" placeholder="ingrese año" min="1" max="6"
 name="division" 
required/>
</div>


<input type="submit" id="envio" class="btn btn-primary btn-lg btn-block" value="Guardar">
</form>








    </tbody>
</table>
</main>
<script src="js/java.js">

</script>
    </body>
</html>
<html lang="es">
<head>
    <title>Formulario</title>
    <meta charset="utf-8">
    <style type="text/css">
        body{
    font-family:Arial, Helvetica, sans-serif;
    font-size:12px;
    margin: 0;
    

}
 
#registrar{
        float:left;
        width:80%;
        font-size:24px;
        font-weight:bold;
        color:#FFF;
        text-align:right;
}
 
#envoltura{
        position:absolute;
    /*left y top al 50% para que quede centrado en la pantalla*/
    left:50%;
    top:50%;
    margin-left:-165px;
    margin-top: -210px;
    width: 330px;
 
}
 
#contenedor{
    background-color:red;
    /*background-color:#red;*/
    /*box-shadow: 0 0 0 9px rgba(128,0,0,.1);*/
    /*Margen de sombra alrededor del contenedor 8px negro*/
    box-shadow: 3px 3px 10px 5px rgba(0,0,0,.8);
    /*Las 3 líneas siguientes, sirven para el borde redondeado
     * pero para diferentes navegadores*/
    -webkit-border-radius:5px;
    -moz-border-radius:10px;
    border-radius:10px;
}
 
#cabecera{
    /*linea azul que separa logo*/
    border-bottom: 5px solid #333;
    padding-top: 5px;
    /*color:#FFF;*/
    height:70px;
    line-height:50px;
    text-align:center;
}
 img{
     height:70px;
 }
 
#cuerpo{
    background:#ececec;
    border:solid #ccc;
    /*aumentando el 2px 'aparece' un borde*/
    border-width: 2px 0;
    padding:15px 35px;
}
 
label{
    color: #666;
    font-weight: bold
}

input{
    /*border: 1px solid #999; No usar esta línea y dejar box-shadow hace efecto de profundidad*/
    border-radius:5px; /*probar con 10px se hacen ovalados los inputs*/
    box-shadow: 2px 2px 3px 1px rgba(0,0,0,.8);
    font:bold 12px Arial, Helvetica, sans-serif;
    height: 24px;
    line-height: 20px;
    padding:0 2px;
    width: 230px;
}
 
input#usuario{
    background:#ffc url(./images/loquito.jpg) no-repeat 0 2px; /*probar con #ddf.
                                                                Para mover arriba-abajo la imagen 'jugar' con 2px, 5px */
    /*Para que el texto dentro del input se mueva*/
    padding-left: 25px; /*Sirve para darle espacio ala imagen, probar con 30px 10px y ver comportamiento*/
}
 
input#contrasenia{
    background:#ffc url(./images/infinio.jpg) no-repeat 0 5px;
    padding-left: 25px;
 
}
 
.boton{
    background: #ccc;
    /*background: -moz-linear-gradient(top,#eee,#ccc);*/
    /*background: -moz-linear-gradient(top,#fc6,#f63);*/
    background: -webkit-linear-gradient(top,#fc6,#f63);
    background: linear-gradient(top,#fc6,#f63);
    /*Color del texto*/
    color: #666;
    width: 120px;
}
 
/*Tip estas instrucciones animan al boton enviar
 * para que se vea como si se pulsara*/
.boton:active{
    position: relative;
    top: 3px;
}
 
#pie{
    border-top: 5px solid #333;
    color: #fff;
    font-size: 11px;
    height: 25px;
    line-height: 24px;
    text-align: center;
}
 
form,p{
    margin:0;
}
 
p{
    /*Para que los elementos del cuerpo
     * se separen entre ellos probar con
     * 10px 20px                      */
    padding-bottom: 5px;
}
 
/*Para separar el botón de ingresar*/
p#bot{
    padding-top: 10px;
}
    </style>
</head>
 
<body background="css/fondo.jpeg" style="background-size: cover">
    <div id="envoltura">
        <div id="contenedor">
 
            <div id="cabecera"> 
                <img src="css/otto.png">
            </div>
 
            <div id="cuerpo">
                <form id="form-login" action="index2.php" method="" autocomplete="off">
                    <!--A saber, el atributo for funciona como el id.-->
                    <!--ejemplo <label for="usuario">Usuario:</label>-->
                    <!--required es nuevo en html5, si el campo está vacío te avisa, pero cuidado, no valida la información-->
                    <p><label >Usuario:</label></p>
                        <input name="usuario" type="text" id="usuario" placeholder="Ingresa Usuario" autofocus="" required=""></p>
 
                    <p><label>Contraseña:</label></p>
                        <input name="contrasenia" type="password" id="contrasenia" placeholder="Ingresa Password" required=""></p>
 
                    <input type="submit" id="submit" name="submit" value="Ingresar" class="boton">
                </form>
            </div><!--fin cuerpo-->
 
            <div id="pie">Sistema de Log In</div>
        </div><!-- fin contenedor -->
    </div><!--fin envoltura-->
</body>
 
</html>

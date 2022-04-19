<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PDF</title>
  <link rel="icon"  href="icons/atrys.ico" />
	 <script type="text/javascript" src="jsPDF/dist/jspdf.min.js"></script>
<?php

include 'lib/generador.php';

 ?>
</head>
<body>

<!-- CSS -->

<style type="text/css">
body{

  background: blue;
  margin: 0;

  }
h1	{
  color: hsla(0, 0%, 0%, .9);
  font: normal 30px Varela Round, sans-serif;lc
  height: 20px;
  left: 0;
  letter-spacing: 2px;
  text-transform: uppercase;
  top: 50%;
  width: 100%;
  animation: move linear 2000ms infinite;  
}
@keyframes move {
  0% {
    text-shadow:
      4px -4px 0 hsla(0, 100%, 50%, 1), 
      3px -3px 0 hsla(0, 100%, 50%, 1), 
      2px -2px 0 hsla(0, 100%, 50%, 1), 
      1px -1px 0 hsla(0, 100%, 50%, 1),
      -4px 4px 0 hsla(180, 100%, 50%, 1), 
      -3px 3px 0 hsla(180, 100%, 50%, 1), 
      -2px 2px 0 hsla(180, 100%, 50%, 1), 
      -1px 1px 0 hsla(180, 100%, 50%, 1)
    ;
  }
  25% {    
    text-shadow:      
      -4px -4px 0 hsla(180, 100%, 50%, 1), 
      -3px -3px 0 hsla(180, 100%, 50%, 1), 
      -2px -2px 0 hsla(180, 100%, 50%, 1), 
      -1px -1px 0 hsla(180, 100%, 50%, 1),
      4px 4px 0 hsla(0, 100%, 50%, 1), 
      3px 3px 0 hsla(0, 100%, 50%, 1), 
      2px 2px 0 hsla(0, 100%, 50%, 1), 
      1px 1px 0 hsla(0, 100%, 50%, 1)      
    ;
  }
  50% {
    text-shadow:
      -4px 4px 0 hsla(0, 100%, 50%, 1), 
      -3px 3px 0 hsla(0, 100%, 50%, 1), 
      -2px 2px 0 hsla(0, 100%, 50%, 1), 
      -1px 1px 0 hsla(0, 100%, 50%, 1),
      4px -4px 0 hsla(180, 100%, 50%, 1), 
      3px -3px 0 hsla(180, 100%, 50%, 1), 
      2px -2px 0 hsla(180, 100%, 50%, 1), 
      1px -1px 0 hsla(180, 100%, 50%, 1)
    ;
  }
  75% {
    text-shadow:
      4px 4px 0 hsla(180, 100%, 50%, 1), 
      3px 3px 0 hsla(180, 100%, 50%, 1), 
      2px 2px 0 hsla(180, 100%, 50%, 1), 
      1px 1px 0 hsla(180, 100%, 50%, 1),
      -4px -4px 0 hsla(0, 100%, 50%, 1), 
      -3px -3px 0 hsla(0, 100%, 50%, 1), 
      -2px -2px 0 hsla(0, 100%, 50%, 1), 
      -1px -1px 0 hsla(0, 100%, 50%, 1)      
    ;
  }
  100% {
    text-shadow:
      4px -4px 0 hsla(0, 100%, 50%, 1), 
      3px -3px 0 hsla(0, 100%, 50%, 1), 
      2px -2px 0 hsla(0, 100%, 50%, 1), 
      1px -1px 0 hsla(0, 100%, 50%, 1),
      -4px 4px 0 hsla(180, 100%, 50%, 1), 
      -3px 3px 0 hsla(180, 100%, 50%, 1), 
      -2px 2px 0 hsla(180, 100%, 50%, 1), 
      -1px 1px 0 hsla(180, 100%, 50%, 1)
    ;
  }  
}
.title-1{

  background-color: white;
  border: 8px solid black;
  border-radius: 10px;
  position: static;
}
.form-person{
  background-color: white;
  width: 80%;
  border: 4px solid white;
  border-radius: 10px;
  font-size: 20px ;
font-family: Garamond, serif;
text-transform: capitalize;
text-shadow: 2px 2px white;
}
input{
  background-color: transparent;
  color: black;
  font-size: 17px;
  border: 2px solid blue;
  border-radius: 10px;
  text-align: center;
  font-family: "Times New Roman", Times, serif;

}
input:focus{

  background-color: transparent;
  color: blue;
  font-size: 17px;
  border: 2px solid black;
  border-radius: 10px;
  text-align: center;
  font-family: "Times New Roman", Times, serif;

}
.nombre{
  width: 80%;
  text-align: center;
}

.form-person{
  border: solid 5px black;
  border-radius: 10px ;
}
.color{
  color: blue;

}
</style>


<!-- HTML -->
<div class="title-1">
  <br>
  <center>
<h1> ITMS / ATRYS</h1>

<h1>GENERADOR DE CERTIFICADOS</h1><button class="uk-button uk-button-primary"><a href="../index.php">Volver</a></button><br>

</center>
</div>
<br>
<br>
<center>
<form name="registro"  class="form-person" id="form-person">
  <h2 class="color">Formulario para generar</h2><br>
  <hr><span class="color"> Datos de persona a certificar</span><hr>
  <br>
  <input type="text" id="nombre" name="nombre" placeholder="Nombre persona a certificar" class="nombre"><br><br>
  <input type="number" name="documento" placeholder="Numero de documento">
  <input type="text" name="ciudad" placeholder="Ciudad de expedición" class="document">
  <br>
<hr>
<span class="color"> Fecha en que se expide certificado</span>
<hr>
<input type="date" name="fecha" class="fecha">
<hr>
<span class="color"> 
Expedido por
</span>
<hr>
<input type="text" name="nombre-en" placeholder="Nombre persona que expide" class="nombre">
<br><br>
<input type="button" value="Generar" onclick="genPDF()">
<input type="reset" value="Borrar">
<br><br>
</form>
<br>

</center>
</body>
</html>
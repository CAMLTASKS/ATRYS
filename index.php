<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ATRYS - DIVISION SOFTWARE</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit-icons.min.js"></script>
<script src="js/firma.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
      <center>
<img id="precarga" src="images/atrys.gif">
</center>
<script type="text/javascript">
	
        $(window).on("load", function(){
        $(".coontenido").css("opacity",1);
        $("#precarga").css("display", "none");
        });

</script>
<body>
<style type="text/css">
	
	    .coontenido {
background-image: url(images/fondo-atrys.jpg); background-position: center center; background-repeat: no-repeat; background-attachment: fixed; background-size: cover; color: black; margin: 0; font-family: "Open Sans", Helvetica Neue, Helvetica, Arial, sans-serif; color: #fff; 
height: 100vh;
}

.coontenido{
  opacity: 0;
  transition: 1s;
}

#precarga{

width:100%;
  height: 100%;
  background-color: white;
  margin-top: 0;
  margin-left: 0;
  display: block;
  position: fixed;
}
.titulo{
	height: 20vh;
	margin: 0;
	width: 100%;
	background-color: white;
	color: black;
	font-size: 50px;
	text-shadow: 1px 1px blue;
	border-bottom: blue solid 5px;

}
a{

	text-decoration: none;
	color: white;
}
</style>
	<div class="coontenido">

		<div class="titulo">
			<center>ATRYS - División</center>

		</div>
<br><br><br><br>
<div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">CERTIFICADOS</h3>
            <p>Generador de certificados en linea.</p>
            <button class="uk-button uk-button-primary"><a href="certificados/">IR</a></button>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-hover uk-card-body">
            <h3 class="uk-card-title">ORDENES DE TRABAJO</h3>
            <p>Generador de ordenes de trabajo en linea.</p>
            <button class="uk-button uk-button-primary"><a href="ordenes/">IR</a></button>

        </div>
    </div>

    <div>
        <div class="uk-card uk-card-default uk-card-hover uk-card-body">
            <h3 class="uk-card-title">Servicios</h3>
            <p>Revisión de servicios problematicas y soluciones.</p>
            <button class="uk-button uk-button-primary"><a href="#">IR</a></button>

        </div>
    </div>    

	</div>




</body>
</html>
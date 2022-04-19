


	<style type="text/css">
		html{
			background-color: rgba(0,0,0,0.3);
		}
		body{

			margin: 20px;
			background-color: white;
			border-radius: 10px;
			border-style:groove;

		}
		.color{ color: blue;} hr{   border: 10px solid blue; border-radius: 5px; }
	header{
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  padding: 5px;
  background-color: rgba(0,0,0,0.3);
  border: 2px solid blue;
  border-radius: 5px;
  color: blue;
		}


#draw-canvas {
  border: 2px dotted #8b0404;
  border-radius: 5px;
  cursor: crosshair;
}

#draw-dataUrl {
  width: 100%;
}
	</style>
	<br>
<article class="uk-comment">
        <div class="uk-grid-medium uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <img class="uk-comment-avatar" src="images/atrys.png" width="80" height="80" alt="">
            </div>
            <div class="uk-width-expand">
                <h4 class="uk-comment-title uk-margin-remove color"><a class="uk-link-reset" href="#">ATRYS DIVISION</a></h4>
                <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                    <li><?php echo date("d M,Y"); ?></li>
                    <li><?php $user="Alejandro"; echo $user;?></li>
                    <button class="uk-button uk-button-primary"><a href="../index.php">Volver</a></button>
                </ul>
            </div>
        </div>
    <div class="uk-comment-body">
    	<br>
        <p>Bienvenido al generador de Ordenes de trabajo virtual, por favor llena los campos requeridos de acuerdo a la visita o procedimiento realizado.</p>
    </div>
</article>

<hr>


<form class="form" autocomplete="on">
		<legend class="uk-legend">Razón social del cliente</legend>
	    <div class="uk-margin">
            <input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Nombre del cliente"><br> 
            <input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Dirección del cliente"><br>
            <input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Sede del cliente"><br>
            Fecha de generación*<input class="uk-input" type="date" placeholder="Sede del cliente" required><br>
            Fecha de visita*<input class="uk-input" type="date" placeholder="Sede del cliente" required><br>
			<input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Nombre funcionario ATRYS*" required><br>
        </div>
<hr>

	    <div class="uk-margin">
            <input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Nombre gerente"><br> 
            <input class="uk-input" type="number" title="Escribe un numero de telefono correcto" placeholder="Telefono gerente"><br> 
            <input class="uk-input" type="email" title="Escribe una dirección de correo valida" placeholder="Email gerente"><br> 
            <input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Nombre director cientifico"><br> 
            <input class="uk-input" type="number" title="Escribe un numero de telefono correcto" placeholder="Telefono director cientifico"><br> 
            <input class="uk-input" type="email" title="Escribe una dirección de correo valida" placeholder="Email director cientifico"><br> 

        </div>
		<legend class="uk-legend">ACTIVIDADES REALIZADAS</legend>
		<hr>
            <label><input class="uk-radio" type="checkbox" name="check-1">Implementación de servicio</label><br>
            <label><input class="uk-radio" type="checkbox" name="check-2">Capacitación</label><br>
            <label><input class="uk-radio" type="checkbox" name="check-2">Cambio de equipo</label><br>
            <label><input class="uk-radio" type="checkbox" name="check-2">Entrega de equipo</label><br>
            <label><input class="uk-radio" type="checkbox" name="check-2">Brigada de telesalud</label><br>
            <label><input class="uk-radio" type="checkbox" name="check-2">Retiro de equipo</label><br>
            <label><input class="uk-radio" type="checkbox" name="check-2">Revisión de equipo y o servicio</label><br>
            <label><input class="uk-radio" type="checkbox" name="check-2">Proyecto:</label>
            <input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Escribe el proyecto en caso de seleccionar">
<br>
		<legend class="uk-legend">Lineas de servicio</legend>
		<hr>
            <label><input class="uk-radio" type="checkbox" name="check-1">Electrocardiografia</label><br>
            <label><input class="uk-radio" type="checkbox" name="check-2">Holter de ritmo</label><br>
            <label><input class="uk-radio" type="checkbox" name="check-2">Teleconsulta</label><br>
            <label><input class="uk-radio" type="checkbox" name="check-2">Mapa</label><br>
            <label><input class="uk-radio" type="checkbox" name="check-2">Rayos X</label><br>
            <label><input class="uk-radio" type="checkbox" name="check-2">Mamografia</label><br>
            <label><input class="uk-radio" type="checkbox" name="check-2">Tomografia</label><br>
            <label><input class="uk-radio" type="checkbox" name="check-2">Espirometria</label><br>
            <label><input class="uk-radio" type="checkbox" name="check-2">Resonancia</label><br>
            <hr>

		<legend class="uk-legend">Movimientos</legend>
		<hr>
<h4>Entrega de equipo y accesorios</h4>

<!-- This is a button toggling the modal -->
<center>
<button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #entrega-equipo"><span uk-icon="file-edit">Añadir un  equipo</span></button>
</center>
<!-- This is the modal -->
<div id="entrega-equipo" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title color">Añade un equipo</h2>
        <p>Por favor ingresa los datos correctos de la tecnología.</p>
            <input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Tipo de equipo"><br>
            <input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Marca de equipo"><br> 
            <input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Modelo de equipo"><br> 
            <input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Placa de inventario"><br> 
            <input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Serial"><br>             
<center>
			<label>Cobro o cliente</label><br>
            <label><input class="uk-radio" type="radio" name="check-1">Si</label>
            <label><input class="uk-radio" type="radio" name="check-1">No</label>
</center>
 			<textarea class="uk-textarea" placeholder="Observaciones"></textarea>

        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancelar</button>
            <button class="uk-button uk-button-primary" type="button">Guardar</button>
        </p>
    </div>
</div>

<hr>
<h4>Retiro de equipo y accesorio</h4>

<!-- This is a button toggling the modal -->
<center>
<button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #retiro-equipo"><span uk-icon="file-edit">Añadir un  equipo</span></button>
</center>
<!-- This is the modal -->
<div id="retiro-equipo" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title color">Añade un equipo</h2>
        <p>Por favor ingresa los datos correctos de la tecnología.</p>
            <input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Tipo de equipo"><br>
            <input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Marca de equipo"><br> 
            <input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Modelo de equipo"><br> 
            <input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Placa de inventario"><br> 
            <input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Serial"><br>             
<center>
			<label>Cobro o cliente</label><br>
            <label><input class="uk-radio" type="radio" name="check-1">Si</label>
            <label><input class="uk-radio" type="radio" name="check-1">No</label>
</center>
 			<textarea class="uk-textarea" placeholder="Observaciones"></textarea>

        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancelar</button>
            <button class="uk-button uk-button-primary" type="button">Guardar</button>
        </p>
    </div>
</div>

<hr>
		<legend class="uk-legend">Contenido de la capacitación</legend>
            <label><input class="uk-radio" type="checkbox" name="check-1">Conceptos basicos de telemedicina</label><br>
            <label><input class="uk-radio" type="checkbox" name="check-2">Legislación y normatividad</label><br>
            <label><input class="uk-radio" type="checkbox" name="check-2">Presentación ATRYS y soluciones</label><br>
            <label><input class="uk-radio" type="checkbox" name="check-2">Flujo de trabajo</label><br>
            <label><input class="uk-radio" type="checkbox" name="check-2">Manejo de dispositivos</label><br>
            <label><input class="uk-radio" type="checkbox" name="check-2">Manejo de plataforma</label><br>
            <label><input class="uk-radio" type="checkbox" name="check-2">Soporte tecnico</label><br>
            <label><input class="uk-radio" type="checkbox" name="check-2">Mesa de ayuda</label><br>
<hr>
		<legend class="uk-legend">Documentación anexa</legend>

        <div class="uk-margin">
        	Hoja de vida de los equipos
            <select class="uk-select uk-form-width-medium">
                <option>Si</option>
                <option>No</option>
            </select><br>
			Cronograma de mantenimientos preventivos
            <select class="uk-select uk-form-width-medium">
                <option>Si</option>
                <option>No</option>
            </select><br>
        	Consecutivos de mantenimientos
            <select class="uk-select uk-form-width-medium">
                <option>Si</option>
                <option>No</option>
            </select><br>
        	Copia de registro sanitario
            <select class="uk-select uk-form-width-medium">
                <option>Si</option>
                <option>No</option>
            </select><br>
        	Certificado de calibración
            <select class="uk-select uk-form-width-medium">
                <option>Si</option>
                <option>No</option>
            </select><br>
        	Manual de usuario y del equipo
            <select class="uk-select uk-form-width-medium">
                <option>Si</option>
                <option>No</option>
            </select><br>
        	Manuales de plataformas
            <select class="uk-select uk-form-width-medium">
                <option>Si</option>
                <option>No</option>
            </select><br>
        	Manual de habilitación
            <select class="uk-select uk-form-width-medium">
                <option>Si</option>
                <option>No</option>
            </select><br>
        	Carta de bienvenida y/o entrega de equipos.
            <select class="uk-select uk-form-width-medium">
                <option>Si</option>
                <option>No</option>
            </select><br>
        	Orden de trabajo y de capacitación
            <select class="uk-select uk-form-width-medium">
                <option>Si</option>
                <option>No</option>
            </select><br>
        	Observaciones tecnicas
            <select class="uk-select uk-form-width-medium">
                <option>Si</option>
                <option>No</option>
            </select><br>
        </div>
<hr>
		<legend class="uk-legend">Observaciones tecnicas</legend>

<textarea class="uk-textarea" placeholder="Observaciones "></textarea>


<br>
<hr>
		<legend class="uk-legend">Encuesta de satisfacción</legend>
        	Considera usted que la capacitación brindada fue la adecuada para el correcto manejo de los equipos y plataformas entregados por ITMS
            <select class="uk-select uk-form-width-medium">
                <option>Si</option>
                <option>No</option>
            </select>

<h4>Califique de 1 a 5 donde (5 indica que fue un servicio excelente y 1 un servicio malo)</h4>
<input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Puntualidad"><br>
<input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Presentación personal"><br>
<input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Conocimientos de plataforma y los equipos"><br>
<input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Cumplimiento cronograma"><br>
<input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Cordialidad"><br>
<input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Metodología utilizada"><br>
<textarea class="uk-textarea" placeholder="Observaciones "></textarea>
<hr>
<legend class="uk-legend">Firmas</legend>
<br>
<input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Nombre funcionario ATRYS"><br>
<input class="uk-input" type="number" title="Escribe aca el numero de telefono" placeholder="Telefono"><br>
<input class="uk-input" type="text" title="Escribe aca el correo electronico" placeholder="Email"><br>
<center>
<button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #firma" uk-icon="italic"><span uk-icon="file-edit">Añadir Firma Funcionario ATRYS</span></button>
</center>
<!-- This is the modal -->
<div id="firma" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title color">Firma funcionario ATRYS</h2>
        <p>Coloca tu firma en el siguiente recuadro.</p>  

<?php

include 'lib/firma.php';

?>

        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancelar</button>
            <button class="uk-button uk-button-primary" type="button">Guardar</button>
        </p>
    </div>
</div>
<hr>
<br>
<input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Nombre del cliente"><br>
<input class="uk-input" type="number" title="Escribe aca el numero de telefono" placeholder="Identificación"><br>
<input class="uk-input" type="number" title="Escribe aca el numero de telefono" placeholder="Telefono"><br>
<input class="uk-input" type="text" title="Escribe aca una cadena de texto" placeholder="Cargo"><br>
<input class="uk-input" type="email" title="Escribe aca el correo electronico" placeholder="Email"><br>
<center>
<button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #firma" uk-icon="italic"><span uk-icon="file-edit">Añadir Firma Funcionario ATRYS</span></button>
</center>
<!-- This is the modal -->
<div id="firma" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title color">Firma funcionario ATRYS</h2>
        <p>Coloca tu firma en el siguiente recuadro.</p>  

<?php

include 'lib/firma.php';

?>
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancelar</button>
            <button class="uk-button uk-button-primary" type="button">Guardar</button>
        </p>
    </div>
</div>

<hr>
</form>

<footer>
	
<center><footer>
<ul class="uk-breadcrumb">
    <li><a href="https://www.atryscolombia.com/">atrys</a></li>
    <li><a href="http://camltasks1.epizy.com/portafolio/">Autor: Carlos Maldonado / camltasks service</a></li>
    <li class="uk-disabled"><a>©Copyright camltasks service</a></li>
    <li><span>Software orden de trabajo</span></li>
</ul>

</footer></center>
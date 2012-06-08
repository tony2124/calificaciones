<br>
<hr></hr>
<div class="longinA">
	<p class="titulo_log">Inciar sesión</p>
	<hr size="3px" color="gray">

	<form class="nice" method="post" action="<?php print get('webURL').'/default/verificar_login' ?>">
		<label>Usuario: </label>
		<input class="input-text" type="text" name="user" placeholder="Escribe tu usuario">
		<label>Contraseña: </label>
		<input class="input-text" type="password" name="password" placeholder="Escribe tu contraseña">
		<center><input type="submit" value="Iniciar" class="nice small radius green button"></center>

	</form>
	

	<a href='#' data-reveal-id='myModal'>Registrarse...</a><br>

	<div style="width:300px; margin-left: -150px; top: 0px;" id="myModal" class="reveal-modal" >
	    <h3 style="text-align:center">Registrar Alumno</h3>
	    <form class="nice" method="post" action="<?php print get('webURL').'/default/registrarAlumno' ?>">
	    	<p class="lead">Número de control: <input  class="input-text" type="text" name="num_control"placeholder="Escribe tu número de control"> </p>
	   		<p class="lead">Contraseña: <input  class="input-text" type="password" name="password" placeholder="Escribe tu contraseña"> </p>
	   		<p class="lead">Nombre: <input  class="input-text" type="text" name="nombre" placeholder="Escribe tu número de control"> </p>
	   		<p class="lead">Apellido Paterno: <input  class="input-text" type="text" name="apellido_p" placeholder="Escribe tu apellido paterno"> </p>
	   		<p class="lead">Apellido Materno: <input  class="input-text" type="text" name="apellido_m" placeholder="Escribe tu apellido materno"> </p>
	   		<p class="lead">Año inscrito: <input  class="input-text" type="text" name="anio" placeholder="Escribe el año en el que estas inscrito"> </p>
			<center><input type="submit" value="Registrar" class="nice small radius blue button"></center>
	    </form>
	   
	    <a class="close-reveal-modal">&#215;</a>
	</div>
</div>
<div class="redesSociales">
	<ul>
		<li>
			<img class="red_social" src="<?php print path("images/redessociales/facebook.png","zan"); ?>">
		</li>
		<li>
			<img class="red_social" src="<?php print path("images/redessociales/twitter.png","zan"); ?>">
		</li>
		<li>
			<img class="red_social" src="<?php print path("images/redessociales/utube.png","zan"); ?>">
		</li>
	</ul>
</div>
<br>
<hr>

<?php 
		if(isset($error)){
			echo '<div class="alert-box error error_mio"> Error al iniciar sesión, intente de nuevo porfavor <a href="#" class="close">&times;</a></div>';
		}
		if(isset($error_re)){
			echo '<div class="alert-box error error_mio"> Error al registrar, intente de nuevo porfavor <a href="#" class="close">&times;</a></div>';
		}
		if(isset($bien)){
			echo '<div class="alert-box  success error_mio"> Se ha hecho el registro correctamente <a href="#" class="close">&times;</a></div>';
		}
	 ?>

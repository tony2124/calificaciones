<div class="longinA">
	<p class="titulo_log">Inciar sesión</p>
	<hr size="3px" color="gray">

	<form class="nice" method="post" action="<?php print get('webURL').'/default/verificar_login' ?>">
		<label>Usuario: </label>
		<input class="input-text" type="text" name="user" placeholder="Escribe tu usuario">
		<label>Contraseña: </label>
		<input class="input-text" type="password" name="password" placeholder="Escribe tu contraseña">
		<input type="submit" href="#" value="Iniciar" class="nice small radius blue button">

	</form>
	<?php 
		if(isset($error)){
			echo '<div class="alert-box error error_mio"> Error</div>';
		}
	 ?>

	<a href='#' data-reveal-id='myModal'>Registrarse...</a><br>

	<div id="myModal" class="reveal-modal">
	    <h2>Registrar Alumno</h2>
	    <form class="nice" method="post">
	    	<p class="lead">Número de control: <input  class="input-text" type="text" name="num_control"placeholder="Escribe tu número de control"> </p>
	   		<p class="lead">Contraseña: <input  class="input-text" type="password" name="password" placeholder="Escribe tu contraseña"> </p>
	   		<p class="lead">Apellido Paterno: <input  class="input-text" type="text" name="apellido_p" placeholder="Escribe tu apellido paterno"> </p>
	   		<p class="lead">Apellido Materno: <input  class="input-text" type="text" name="apellido_m" placeholder="Escribe tu apellido materno"> </p>
	   		<p class="lead">Periodo actual: <select name="semestre">
	   		<option active> Elige...</option>
	   		<option value="primero"> Primero</option>
	   		<option value="segundo"> Segundo</option>
	   		<option value="tercero"> Tercero</option>
	   		<option value="cuarto"> Cuarto</option>
	   		<option value="quinto"> Quinto</option>
	   		<option value="sexto"> Sexto</option>
	   		</select> </p>
			<center><input type="submit" value="Registrar" class="nice small radius blue button"></center>
	    </form>
	   
	    <a class="close-reveal-modal">&#215;</a>
	</div>
</div>
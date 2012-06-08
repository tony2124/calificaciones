
  <div class="row">
  	<div class="five columns centered">
  		<hr>
  		<form action="<?php print get('webURL')._sh.'profesor/iniciandosesion' ?>" method="post" class="nice">
			<table class="panel">
				<thead>
					<th colspan="2">Inicio de sesión PROFESORES</th>
				</thead>
				<tbody>
					<tr>
						<td>Usuario</td>
						<td><input type="text" name="usuario" class="input-text" placeholder="Escribe el usuario"></td>
					</tr>
					<tr>
						<td><label>Contraseña</label></td>
						<td><input type="password" name="clave" class="input-text" placeholder="Escribe la contraseña"></td>
					</tr>
					<tr>
						<td colspan="2">
							<div class="five columns centered">
								<input type="submit" class="button green nice" value="Entrar"></div>
						</td>
					</tr>
				</tbody>
			</table>
			<a href="#"  data-reveal-id='myModal'>Regístrate</a>
		</form>
		 <hr>
		 <?php if(isset($error)) { ?>
		 	<div class="alert-box error">
		 		Error al iniciar sesión, por favor intente de nuevo
		 		<a href="#" class="close">&times;</a>
		 	</div>
		 <?php } ?>
	</div>
   </div>

   <div id="myModal" class="reveal-modal" style="width: 300px; margin-left: -200px; top: 0px">
	    <h4>Registro de Profesores</h4>
	    <form class="nice" method="post" action="<?php print get('webURL')._sh.'profesor/registrandoProfesor' ?>">
	    	<p class="lead">Usuario: 
	    		<input  class="input-text" type="text" name="usuario" placeholder="Escribe el usuario"> 
	    	</p>
	   		<p class="lead">Contraseña: 
	   			<input  class="input-text" type="password" name="clave" placeholder="Escribe tu contraseña"> 
	   		</p>
	   		<p class="lead">Nombre: 
	    		<input  class="input-text" type="text" name="nombre" placeholder="Escribe tu nombre"> 
	    	</p>
	   		<p class="lead">Apellido Paterno: 
	   			<input  class="input-text" type="text" name="ap" placeholder="Escribe tu apellido paterno"> 
	   		</p>
	   		<p class="lead">Apellido Materno: 
	   			<input  class="input-text" type="text" name="am" placeholder="Escribe tu apellido materno"> 
	   		</p>
			<center>
				<input type="submit" value="Registrar" class="nice small radius green button">
			</center>
	    </form>
	    <a class="close-reveal-modal">&#215;</a>
	</div>



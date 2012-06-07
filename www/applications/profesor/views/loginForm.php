
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
			<a href="<?php print get('webURL')._sh.'profesor/registrorm' ?>">Regístrate</a>
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



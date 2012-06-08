<div>
	<hr>
<label>Selecciona el año de clases</label><br>
<select name="anio" id="anio" onchange="location.href='<?php print get('webURL')._sh.'profesor/calificaciones/' ?>'+$('#anio').val()">
	<option>Selecciona...</option>
	<option <?php if(isset($anio) && $anio == '1') print 'selected="selected"' ?> value="1">Primer año</option>
	<option <?php if(isset($anio) && $anio == '2') print 'selected="selected"' ?> value="2">Segundo año</option>
	<option <?php if(isset($anio) && $anio == '3') print 'selected="selected"' ?> value="3">Tercer año</option>
	<option <?php if(isset($anio) && $anio == '4') print 'selected="selected"' ?> value="4">Cuarto año</option>
	<option <?php if(isset($anio) && $anio == '5') print 'selected="selected"' ?> value="5">Quinto año</option>
	<option <?php if(isset($anio) && $anio == '6') print 'selected="selected"' ?> value="6">Sexto año</option>
</select>
<?php 
	if(isset($materias))
	{	?> 
		<select id="materia" onchange="location.href='<?php print get('webURL')._sh.'profesor/calificaciones/'.$anio._sh ?>'+$('#materia').val();">
			<option>Selecciona...</option>
		<?php
		foreach ($materias as $mat) { ?>
			<option <?php if(isset($idmateria) && $mat['id_materia'] == $idmateria) print 'selected="selected"' ?> value="<?php print $mat['id_materia'] ?>"><?php print $mat['nombre_materia'] ?></option>
		<?php }
		print '</select>';
	}

	if(isset($idmateria) && $alumnos!=NULL)	{ ?>
		<form action="<?php print get('webURL')._sh.'profesor/guardarCalificacion' ?>" method="post">
		<table>
			<tr>
				<td>N. Control</td>
				<td>Nombre</td>
				<td>B1</td>
				<td>B2</td>
				<td>B3</td>
				<td>B4</td>
				<td>B5</td>
				<td>Promedio</td>
			</tr>
		<?php
		foreach ($alumnos as $alum) { ?>
		<tr>
			<td><?php print $alum['numero_control'] ?></td>
			<td><?php print $alum['nombre_alumno'].' '.$alum['ap_alumno'].' '.$alum['am_alumno']  ?></td>
			<td><input type="text" size="2" value="<?php print ($alum['b1']!='0') ? $alum['b1'] : '0'; ?>"></td>
			<td><input type="text" size="2" value="<?php print ($alum['b2']!='0') ? $alum['b2'] : '0'; ?>"></td>
			<td><input type="text" size="2" value="<?php print ($alum['b3']!='0') ? $alum['b3'] : '0'; ?>"></td>
			<td><input type="text" size="2" value="<?php print ($alum['b4']!='0') ? $alum['b4'] : '0'; ?>"></td>
			<td><input type="text" size="2" value="<?php print ($alum['b5']!='0') ? $alum['b5'] : '0'; ?>"></td>
		</tr>
		<?php } ?>
	</table>
	<input type="submit" class="button nice green">
	</form>
	<?php
	}
 ?>
</div>


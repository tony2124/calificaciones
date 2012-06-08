<div>
	<hr>

<?php 
	if(isset($materias))
	{	?> 
		<select id="materia" onchange="location.href='<?php print get('webURL')._sh.'profesor/calificaciones/' ?>'+$('#materia').val();">
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
		<?php $i=0;
		foreach ($alumnos as $alum) { ?>
		<tr>
			<td><?php print $alum['numero_control'] ?></td>
			<td><?php print $alum['nombre_alumno'].' '.$alum['ap_alumno'].' '.$alum['am_alumno']  ?></td>
			<td><input name="al<?php print $i ?>[]" type="text" size="2" value="<?php print ($alum['b1']!='0') ? $alum['b1'] : '0'; $sum = $alum['b1'] ?>"></td>
			<td><input name="al<?php print $i ?>[]" type="text" size="2" value="<?php print ($alum['b2']!='0') ? $alum['b2'] : '0'; $sum += $alum['b2'] ?>"></td>
			<td><input name="al<?php print $i ?>[]" type="text" size="2" value="<?php print ($alum['b3']!='0') ? $alum['b3'] : '0'; $sum += $alum['b3'] ?>"></td>
			<td><input name="al<?php print $i ?>[]" type="text" size="2" value="<?php print ($alum['b4']!='0') ? $alum['b4'] : '0'; $sum += $alum['b4'] ?>"></td>
			<td><input name="al<?php print $i ?>[]" type="text" size="2" value="<?php print ($alum['b5']!='0') ? $alum['b5'] : '0'; $sum += $alum['b5'] ?>"></td>
			<td><?php print $sum / 5; ?></td>
			<input type="hidden" name="nc<?php print $i++ ?>" value="<?php print $alum['numero_control'] ?>" >
		</tr>
		<?php } ?>
	</table>
	<input type="hidden" name="materia" value="<?php print $idmateria ?>">
	<input type="hidden" name="num" value="<?php print $i ?>">
	<input type="submit" class="button nice green">
	</form>
	<?php
	}
 ?>
</div>


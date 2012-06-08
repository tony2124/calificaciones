<br><br>
<div class="perfil_principal">
		<div style='width:400px; margin:0px auto;' class='alert-box success'>Estás inscrito en el año: <?php  print SESSION('anio')."</div>";?>
		<div style='width:400px; margin:0px auto;' class='alert-box warning'>Número de control: <?php  print SESSION('usuario')."</div><br>"; $x=0;?><hr>
		

		<?php 
			foreach($calificaciones as $cal){
				print $cal['nombre_materia'].": ";
				?>
				<table>
					<tr>
						<td><center>-- Periodo 1 --</center></td>
						<td><center>-- Periodo 2 --</center></td>
						<td><center>-- Periodo 3 --</center></td>
						<td><center>-- Periodo 4 --</center></td>
						<td><center>-- Periodo 5 --</center></td>
						<td><center>-- Promedio --</center></td>
					</tr>
					<tr>
						<td><center><?php print $cal['b1']; ?></center></td>
						<td><center><?php print $cal['b2']; ?></center></td>
						<td><center><?php print $cal['b3']; ?></center></td>	
						<td><center><?php print $cal['b4']; ?></center></td>
						<td><center><?php print $cal['b5']; ?></center></td>
						<?php 
							$x = $x+($cal['b1']+$cal['b2']+$cal['b3']+$cal['b4']+$cal['b5']);
						 ?>
						<td><center><?php print ($cal['b1']+$cal['b2']+$cal['b3']+$cal['b4']+$cal['b5'])  ?></center></td>
												
					</tr>
				</table>
				<hr>


				<?php
				
	
			}

			print "<div style='width:400px'class='alert-box success'>Promedio General: ".$x."</div>";
	
		 ?>


	

</div>
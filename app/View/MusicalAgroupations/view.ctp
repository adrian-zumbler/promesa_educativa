
	<div class="SearchPanel-addContainer">
			<?php
						 echo $this->Html->link(
							'Agregar',
							'/SEWA/agroupations/add/',
							array(
								'class' =>'class="fui-plus-circle'
								)
						);
					?>
	</div>

	<div class="SearchPanel-listContainer">
		<ul id="agroupationList" class="SearchPanel-list">
			<?php
				foreach ($agroupations as $agroupation) {
					 $agroupationName = $agroupation['MusicalAgroupation']['name'] ;
					$agroupationId = $agroupation['MusicalAgroupation']['id'];
					 echo '<li class="SearchPanel-item" id="item" value="' . $agroupationId .'">' .
					 $this->Html->link($agroupationName, '/SEWA/agroupations/edit/' . $agroupationId)  . '</li>';
				}
			?>
		</ul>
	</div>


</section>
<div class="View">
	<table class="Table">
		
		<tr class="Table-header" >
			<td class="Table-titleContainer">
				<span class="Table-title">
					Nombre 
				</span>
			</td>
			<td class="Table-titleContainer">
				<span class="Table-title">
					Horario
				</span>
			</td>
			<td class="Table-titleContainer">
				<span class="Table-title">
					Antigüedad
				</span>
			</td>
			<td class="Table-titleContainer">
				<span class="Table-title">
					Horas
				</span>
			</td>
			<td class="Table-titleContainer">
				<span class="Table-title">
					Dias laborales
				</span>
			</td>
			<td class="Table-titleContainer">
				<span class="Table-title">
					Frecuencia
				</span>
			</td>
			<td class="Table-titleContainer large">
				<span class="Table-title">
					Integrantes
				</span>
			</td>
			<td class="Table-titleContainer">
				<span class="Table-title">
					Entidad
				</span>
			</td>
			<td class="Table-titleContainer">
				<span class="Table-title">
					Sede
				</span>
			</td>
			
		</tr>
		<?php
		foreach ($agroupations as $agroupation) {
			echo '<tr class="Table-row">
			<td class="Table-colum">
				<span id="completeName" class="Table-information">' .
					$agroupation['MusicalAgroupation']['name'] .
				'</span>
			</td>';
			
			echo '<td class="Table-colum">
				<span id="curp" class="Table-information">' .
					$agroupation['MusicalAgroupation']['work_schedule'] . 
				'</span>
			</td>';
			 echo '<td class="Table-colum">
				<span id="age" class="Table-information">' .
					$agroupation['MusicalAgroupation']['conformation_time_agroupation'] . 
				'</span>
			</td>';
			echo '<td class="Table-colum">
				<span id="genre" class="Table-information">' .
					$agroupation['MusicalAgroupation']['daily_work_hours'] . 
				'</span>
			</td>';
			echo '<td class="Table-colum">
				<span id="time_agroupation" class="Table-information">' .
					$agroupation['MusicalAgroupation']['week_work'] . 
				'</span>
			</td>';
			echo '<td class="Table-colum">
				<span id="family" class="Table-information">' .
					$agroupation['MusicalAgroupation']['presentation_concert_frecuency'] .
				'</span>
			</td>';
			echo '<td class="Table-colum">
				<span id="agroupation" class="Table-information">' .
					$agroupation['MusicalAgroupation']['number_integrants'] .
				'</span>
			</td>';
			echo '<td class="Table-colum">
				<span id="instrument" class="Table-information">' .
					$agroupation['Entity']['name'] .
				'</span>
			</td>';
			echo '<td class="Table-colum">
				<span id="instrument" class="Table-information">' .
					$agroupation['Seat']['name'] .
				'</span>
			</td>';


			
			  
		
			} ?>
		</tr>
		
	</table>
</div>

<script type="text/javascript">
	

</script>

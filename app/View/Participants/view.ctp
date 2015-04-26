
<?php
	#print_r($datos);
?>
<section class="SearchPanel">
	<div class="SearchPanel-searchContainer">
		<?php
			#$options = array('0' => 'Todos');
			#array_push($agroupations,);
			$optionsButton = array(
				'label'=> 'Buscar',
				'class'=> 'btn btn-lg btn-primary',
				'div' => false
				);
			echo $this->Form->create('Participant', array('controller' => 'participants', 'action'=> 'view'));
			echo $this->Form->input('name', array(
				'label' => 'Nombre:',
				'placeholder'=> 'Nombre',
				'div' => array(
					'class' => 'SearchPanel-formInput')
				)
			);
			echo $this->Form->input('group_id', array(
				'label' => 'Agrupacion:',
				'options' => $agroupations,
				'empty' => array('0' => 'Todos'))
			);
			echo $this->Form->end($optionsButton);
		?>
	</div>
	<div class="SearchPanel-addContainer">
			<?php
						 echo $this->Html->link(
							'Agregar',
							'/SEWA/participants/add/',
							array(
								'class' =>'class="fui-plus-circle'
								)
						);
					?>
	</div>

	<div class="SearchPanel-listContainer">
		<ul id="participantList" class="SearchPanel-list">
			<?php
				foreach ($participants as $participant) {
					$participantName = $participant['Participant']['first_name'] . ' ' . $participant['Participant']['last_name'];
					$participantId = $participant['Participant']['id'];
					 echo '<li class="SearchPanel-item" id="item" value="' . $participantId .'">' .
					 $this->Html->link($participantName, '/SEWA/participants/edit/' . $participantId)  . '</li>';
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
					Nombre Completo
				</span>
			</td>
			<td class="Table-titleContainer">
				<span class="Table-title">
					Curp
				</span>
			</td>
			<td class="Table-titleContainer">
				<span class="Table-title">
					Age
				</span>
			</td>
			<td class="Table-titleContainer">
				<span class="Table-title">
					Genero
				</span>
			</td>
			<td class="Table-titleContainer">
				<span class="Table-title">
					Tiempo en la agrupación
				</span>
			</td>
			<td class="Table-titleContainer">
				<span class="Table-title">
					Familiares
				</span>
			</td>
			<td class="Table-titleContainer large">
				<span class="Table-title">
					Agrupación
				</span>
			</td>
			<td class="Table-titleContainer">
				<span class="Table-title">
					Instrumento
				</span>
			</td>
			
		</tr>
		<?php
			foreach ($participants as $participant) {
			echo '<tr class="Table-row">
			<td class="Table-colum">
				<span id="completeName" class="Table-information">' .
					$participant['Participant']['first_name'] . ' ' . $participant['Participant']['last_name'] . '
				</span>
			</td>';
			echo '<td class="Table-colum">
				<span id="curp" class="Table-information">' .
					$participant['Participant']['curp'] . 
				'</span>
			</td>';
			 echo '<td class="Table-colum">
				<span id="age" class="Table-information">' .
					$participant['Participant']['age'] . 
				'</span>
			</td>';
			echo '<td class="Table-colum">
				<span id="genre" class="Table-information">' .
					$participant['Participant']['genre'] .
				'</span>
			</td>';
			echo '<td class="Table-colum">
				<span id="time_agroupation" class="Table-information">' .
					$participant['Participant']['time_in_agroupation'] .
				'</span>
			</td>';
			echo '<td class="Table-colum">
				<span id="family" class="Table-information">' .
					$participant['Participant']['number_family'] .
				'</span>
			</td>';
			echo '<td class="Table-colum">
				<span id="agroupation" class="Table-information">' .
					$participant['MusicalAgroupation']['name'] .
				'</span>
			</td>';
			echo '<td class="Table-colum">
				<span id="instrument" class="Table-information">' .
					$participant['Instrument']['name'] .
				'</span>
			</td>';


			
			 } 
		?>
		</tr>
		
	</table>
</div>
</div>
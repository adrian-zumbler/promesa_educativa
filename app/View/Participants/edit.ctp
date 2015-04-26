<section class="Menu">
	<nav class="Menu-container">
		<ul class="Menu-list">
			<li class="Menu-option">
					<?php
						 echo $this->Html->link(
							'Agrupaciones Musicales',
							'/SEWA/agroupations/view/',
							array(
								'class' =>'Menu-link"'
								)
						);
					?>
			</li>
			<li class="Menu-option">
					<?php
						 echo $this->Html->link(
							'Inscritos',
							'/SEWA/participants/view/',
							array(
								'class' =>'Menu-link"'
								)
						);
					?>
			</li>
			<!--<li class="Menu-option">
				<?php
						 echo $this->Html->link(
							'Personal',
							'/SEWA/agroupations/view/',
							array(
								'class' =>'Menu-link"'
								)
						);
					?>
			</li>
			<li class="Menu-option">
				<?php
						 echo $this->Html->link(
							'Instrumentos',
							'/SEWA/agroupations/view/',
							array(
								'class' =>'Menu-link"'
								)
						);
					?>
			</li>-->
		</ul>
	</nav>
</section>
<section class="RegisterSewa">
<h3><?php echo $participant['Participant']['first_name'] . ' ' . $participant['Participant']['last_name'];?></h3>
	<div class="RegisterSewa-form">

			<?php
			$participantId = $participant['Participant']['id'];
			$participantName = $participant['Participant']['first_name'];
			$participantLastName = $participant['Participant']['last_name'];
			$participantCurp = $participant['Participant']['curp'];
			$participantAge = $participant['Participant']['age'];
			$participantGenre = $participant['Participant']['genre'];
			$participantTime = $participant['Participant']['time_in_agroupation'];
			$participantFamily = $participant['Participant']['number_family'];
			$musicalId = $participant['MusicalAgroupation']['id'];
			$instrumentId = $participant['Instrument']['id'];

				$divOptions = array(
						'class' => 'RegisterSewa-formInput'	
					);
				$optionsButton = array(
				'label'=> 'Editar',
				'class'=> 'btn btn-lg btn-primary',
				'div' => false
				);
				echo $this->Form->create('Participant',array('action' => 'edit'));
				echo $this->Form->input('first_name',array(
					'label' => 'Nombre',
					'div'=> $divOptions,
					'value' => $participantName,
					'placeholder' => 'Nombre'));
				echo $this->Form->input('last_name',array(
					'label' => 'Apellidos',
					'div'=> $divOptions,
					'value' => $participantLastName,
					'placeholder' => 'Apellidos'));
				echo $this->Form->input('curp',array(
					'label' => 'Curp',
					'value' => $participantCurp,
					'div'=> $divOptions,
					'placeholder' => 'Curp'));
				echo $this->Form->input('age',array(
					'label' => 'Edad',
					'value' => $participantAge,
					'div'=> $divOptions,
					'placeholder' => 'Edad'));
				echo $this->Form->input('genre',array(
					'label' => 'Genero',
					'div'=> $divOptions,
					'options' => array('femenino' => 'Femenino','masculino'=>'Masculino'),
					'default' => $participantGenre));
				echo $this->Form->input('time_in_agroupation',array(
					'label' => 'Tiempo en la agrupación',
					'div'=> $divOptions,
					'value' => $participantTime,
					'placeholder' => 'Tiempo en la agrupación'));
				echo $this->Form->input('number_family',array(
					'label' => 'Familiares',
					'div'=> array(
						'class' => 'RegisterSewa-formInput'),
					'value' => $participantFamily,
					'placeholder' => 'Familiares'));
				echo $this->Form->input('musical_agroupation_id',array(
					'options' => $agroupations,
					'default' => $musicalId,
					'div' => $divOptions,
					'label' => 'Entidad'
					));
				echo $this->Form->input('instrument_id',array(
					'options' => $instruments,
					'default' => $instrumentId,
					'div' => $divOptions,
					'label' => 'Sede'
					));
				echo $this->Form->input('id', array(
					'type' => 'hidden',
					'value' => $participantId)
				);

				echo $this->Form->end($optionsButton);
				echo '<br>';
				echo $this->Html->link(
					'eliminar', 
					'/SEWA/participants/delete/'. $participantId,
					array('class' => 'btn btn-lg btn-danger'));
			?>
			<?php echo $this->Session->flash(); ?>
	</div>


	
</section>
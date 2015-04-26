
<section class="RegisterSewa">
<h3><?php echo $agroupation['MusicalAgroupation']['name'];?></h3>
	<div class="RegisterSewa-form">

			<?php
			$agroupationId = $agroupation['MusicalAgroupation']['id'];
			$agroupationName = $agroupation['MusicalAgroupation']['name'];
			$agroupationWork = $agroupation['MusicalAgroupation']['work_schedule'];
			$agroupationConformation = $agroupation['MusicalAgroupation']['conformation_time_agroupation'];
			$agroupationWeek = $agroupation['MusicalAgroupation']['week_work'];
			$agroupationPresentation = $agroupation['MusicalAgroupation']['presentation_concert_frecuency'];
			$agroupationNumber = $agroupation['MusicalAgroupation']['number_integrants'];
			$agroupationEntity = $agroupation['Entity']['id'];
			$agroupationSeat = $agroupation['Seat']['id'];

			$divOptions = array(
						'class' => 'RegisterSewa-formInput'	
					);
				$optionsButton = array(
				'label'=> 'Editar',
				'class'=> 'btn btn-lg btn-primary',
				'div' => false
				);
				echo $this->Form->create('MusicalAgroupation',array('action' => 'edit'));
				echo $this->Form->input('first_name',array(
					'label' => 'Nombre',
					'div'=> $divOptions,
					'value' => $agroupationName,
					'placeholder' => 'Nombre'));
				echo $this->Form->input('last_name',array(
					'label' => 'Horario',
					'div'=> $divOptions,
					'value' => $agroupationWork,
					'placeholder' => 'Horario'));
				echo $this->Form->input('curp',array(
					'label' => 'Conformacion',
					'value' => $agroupationConformation,
					'div'=> $divOptions,
					'placeholder' => 'Conformacion'));
				echo $this->Form->input('age',array(
					'label' => 'Dias laborales',
					'value' => $agroupationWeek,
					'div'=> $divOptions,
					'placeholder' => 'Dias laborales'));
				echo $this->Form->input('time_in_agroupation',array(
					'label' => 'Frecuencia',
					'div'=> $divOptions,
					'value' => $agroupationPresentation,
					'placeholder' => 'Frecuencia'));
				echo $this->Form->input('number_family',array(
					'label' => 'Integrantes',
					'div'=> array(
						'class' => 'RegisterSewa-formInput'),
					'value' => $agroupationNumber,
					'placeholder' => 'Integrantes'));
				echo $this->Form->input('musical_agroupation_id',array(
					'options' => $entities,
					'default' => $agroupationEntity,
					'div' => $divOptions,
					'label' => 'Entidad'
					));
				echo $this->Form->input('instrument_id',array(
					'options' => $seats,
					'default' => $agroupationSeat,
					'div' => $divOptions,
					'label' => 'Sede'
					));
				echo $this->Form->input('id', array(
					'type' => 'hidden',
					'value' => $agroupationId)
				);

				echo $this->Form->end($optionsButton);
				echo '<br>';
				echo $this->Html->link(
					'eliminar', 
					'/SEWA/agroupations/delete/'. $agroupationId,
					array('class' => 'btn btn-lg btn-danger'));
			?>
			<?php echo $this->Session->flash(); ?>
	</div>


	
</section>
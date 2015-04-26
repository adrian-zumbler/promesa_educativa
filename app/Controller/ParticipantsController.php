<?php

class ParticipantsController extends AppController {
	public $helpers = array('Html','Form');

	public function index() {
		
	}

	public function view($id = null) {
		if($id != null) {
			$participant = $this->Participant->findById($id);
			$this->set('participantes', $participant);
		}
		if($this->request->is('post')) {
			$groupId = $this->request->data['Participant']['group_id'];
			$name = $this->request->data['Participant']['name'];
			if($groupId == '0') {
				if($name != '') {
					$participantsByAgroupations = $this->Participant->find('all',array(
						'conditions' => array('Participant.last_name LIKE' => $name . '%' )));	
				} else {
					$participantsByAgroupations = $this->Participant->find('all');	
				}
				
			} else {
				$participantsByAgroupations = $this->Participant->find('all',array(
				'conditions' => array(
					'Participant.musical_agroupation_id' => $groupId)));	
			}
			
			$this->set('participants',$participantsByAgroupations);
			$this->set('agroupations',$this->Participant->MusicalAgroupation->find('list',array(
				'fields' => array('id', 'name')
				)
			)
			);
		} else {
			$this->set('participants',$this->Participant->find('all'));
			$this->set('agroupations',$this->Participant->MusicalAgroupation->find('list',array(
				'fields' => array('id', 'name')
				)
			)
			);
		}
	}

	public function edit($id = null) {
		$this->set('agroupations',$this->Participant->MusicalAgroupation->find('list',array(
				'fields' => array('id', 'name')
				)
			)
			);
		$this->set('instruments',$this->Participant->Instrument->find('list',array(
				'fields' => array('id', 'name')
				)
			)
			);

		if(!$id) {
			#throw new NotFoundException(__('Usuario Invalido'));
		}
		$participant =  $this->Participant->findById($id);
		$this->set('participant',$participant);

		 if ($this->request->is(array('post', 'put'))) {
        $this->Participant->id = $id;
        if ($this->Participant->save($this->request->data)) {
            
            return $this->redirect(array('action' => 'view'));
        }
        $this->Session->setFlash(__('Unable to update your post.'));
    }


	}

	public function add() {
		$this->set('agroupations',$this->Participant->MusicalAgroupation->find('list',array(
				'fields' => array('id', 'name')
				)
			)
			);
		$this->set('instruments',$this->Participant->Instrument->find('list',array(
				'fields' => array('id', 'name')
				)
			)
			);
		if($this->request->is('post')) {
			$this->Participant->create();
			if($this->Participant->save($this->request->data)) {
				$this->Session->setFlash(__('La agrupacion ha sido guardada'));
			} else {
				$this->Session->setFlash(__('La agrupacion no ha sido guardada '));
			}
		}
	}
	


	public function jsonresponse() {
		$this->request->onlyAllow('ajax');
		if($this->request->is('post')) {
			$id = $this->request->data['id'];
			$datos = $this->Participant->find('first',array(
				'conditions' => array('Participant.id' => $id)));
		}

		$this->set('data',$datos);
	}

	public function delete($id) {
    if ($this->request->is('get')) {
    }

    if ($this->Participant->delete($id)) {
        
        return $this->redirect(array('action' => 'view'));
    }
}
}

 function _init_elements() {
	$this->set('agroupations',$this->Participant->MusicalAgroupation->find('list',array(
				'fields' => array('id', 'name')
				)
			)
			);
		$this->set('instruments',$this->Participant->Instrument->find('list',array(
				'fields' => array('id', 'name')
				)
			)
			);
}
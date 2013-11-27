<?php
App::uses('AppController', 'Controller');
/**
 * Contacts Controller
 *
 * @property Contact $Contact
 * @property PaginatorComponent $Paginator
 * @property securityComponent $security
 */
class ContactsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Contact->recursive = 0;
		$this->set('contacts', $this->Paginator->paginate());

		if ($this->request->is('post')):
		$this->Contact->create();

		// Salva a noticia
		if ($this->Contact->save($this->request->data)):
			$this->Session->setFlash('Adicionado com sucesso.', SUCCESS);
			$this->redirect(array('action' => 'index', 'admin' => false));
		else:
			$this->Session->setFlash('Verifique os erros encontrado no formulário de preenchimento.', WARNING);
		endif;
	endif;

	// Set
	$this->set(
		array(
			'title_for_layout' 	=> 'Contatos',
			'action'			=> 'index'
		)
	);

}
	

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Contact->exists($id)) {
			throw new NotFoundException(__('Contato Invalido'));
		}
		$options = array('conditions' => array('Contact.' . $this->Contact->primaryKey => $id));
		$this->set('contact', $this->Contact->find('first', $options));
		$this->set(
			array(
				'title_for_layout' 	=> 'Contatos'
			)
		);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Contact->create();
			if ($this->Contact->save($this->request->data)) {
				$this->Session->setFlash(__('O contato foi salvo.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O contato não foi salvo. Por favor tente de novo.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Contact->exists($id)) {
			throw new NotFoundException(__('Contato Invalido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Contact->save($this->request->data)) {
				$this->Session->setFlash(__('O contato foi salvo.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O contato não foi salvo. Por favor tente de novo.'));
			}
		} else {
			$options = array('conditions' => array('Contact.' . $this->Contact->primaryKey => $id));
			$this->request->data = $this->Contact->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Contact->id = $id;
		if (!$this->Contact->exists()) {
			throw new NotFoundException(__('Invalid contact'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Contact->delete()) {
			$this->Session->setFlash(__('The contact has been deleted.'));
		} else {
			$this->Session->setFlash(__('The contact could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}



	public function admin_index() 
	{
		// Retorna todos os resultados
		$results = $this->paginate();

		// Set
		$this->set(
			array(
				'title_for_layout' 	=> 'Contatos',
				'class'				=> 'success',
				'is_save'			=> false,
				'results'			=> $results
			)
		);
	}
}
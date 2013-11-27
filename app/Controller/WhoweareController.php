<?php
App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class WhoweareController extends AppController {

	/**
	 * Index
	 */
	public function index()
	{

		// Retorna todos os resultados
		$results = $this->paginate();

		// Set
		$this->set(
			array(
				'title_for_layout' 	=> 'Quem Somos',
				'results'			=> $results
			)
		);	
		
	}

	public function admin_index($id = 2) {

		// Usuário
		$this->Whoweare->id = $id;

		// Efetua ação de edição
		if ($this->request->is('post') || $this->request->is('put')):

			if ($this->Whoweare->save($this->request->data)):
				$this->Session->setFlash('Alterado com sucesso.', SUCCESS);
				$this->redirect(array('action' => 'index', 'admin' => true));
			else:
				$this->Session->setFlash('Verifique os erros encontrado no formulário de preenchimento.', WARNING);
			endif;

		else:

			$this->request->data = $this->Whoweare->read(null, $id);

		endif;

		// Set
		$this->set(
			array(
				'title_for_layout' 	=> 'Quem Somos',
				'action'			=> 'index',
				'button'			=> 'Cancelar',
				'class'				=> 'danger',
				'is_save'			=> true
			)
		);

	}

	

}
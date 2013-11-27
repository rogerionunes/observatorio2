<?php
App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class AboutodmController extends AppController {





	public $uses = array(
		'Aboutodm'
	);
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
				'title_for_layout' 	=> 'Sobre ODM',
				'results'			=> $results
			)
		);	
		
	}


	public function admin_index()
	{

		// Retorna todos os resultados
		$this->Aboutodm->recursive = 0;
		$results = $this->paginate();

		// Set
		$this->set(
			array(
				'title_for_layout' 	=> 'Sobre ODM',
				'class'				=> 'success',
				'is_save'			=> false,
				'results'			=> $results
			)
		);

	}

	// public function admin_edit($id = 2) {

	// 	// Usuário
	// 	$this->Aboutodm->id = $id;

	// 	// Efetua ação de edição
	// 	if ($this->request->is('post') || $this->request->is('put')):

	// 		if ($this->Aboutodm->save($this->request->data)):
	// 			$this->Session->setFlash('Alterado com sucesso.', SUCCESS);
	// 			$this->redirect(array('action' => 'index', 'admin' => true));
	// 		else:
	// 			$this->Session->setFlash('Verifique os erros encontrado no formulário de preenchimento.', WARNING);
	// 		endif;

	// 	else:

	// 		$this->request->data = $this->Aboutodm->read(null, $id);

	// 	endif;

	// 	// Set
	// 	$this->set(
	// 		array(
	// 			'title_for_layout' 	=> 'Sobre ODM',
	// 			'action'			=> 'index',
	// 			'button'			=> 'Cancelar',
	// 			'class'				=> 'danger',
	// 			'is_save'			=> true
	// 		)
	// 	);

	// }

	public function admin_edit($id = null) {

		// Notícia
		$this->Aboutodm->id = $id;
		if (!$this->Aboutodm->exists()) {
        throw new NotFoundException(__('Sobre ODM Invalida'));
	    }

	    $this->set('aboutodm', $this->Aboutodm->read(null, $id));

		// Efetua ação de edição
		if ($this->request->is('post') || $this->request->is('put')):

			if ($this->Aboutodm->save($this->request->data)):
				$this->Session->setFlash('Alterado com sucesso.', SUCCESS);
				$this->redirect(array('action' => 'index', 'admin' => true));
			else:
				$this->Session->setFlash('Verifique os erros encontrado no formulário de preenchimento.', WARNING);
			endif;

		else:

			$this->request->data = $this->Aboutodm->read(null, $id);

		endif;

		// Set
		$this->set(
			array(
				'title_for_layout' 	=> 'Sobre ODM',
				'action'			=> 'index',
				'button'			=> 'Cancelar',
				'class'				=> 'danger',
				'is_save'			=> true
			)
		);

	}

	

}
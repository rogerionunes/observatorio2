<?php
/**
 * 
 * PartnerController
 * 
 */

App::uses('AppController', 'Controller');

class PartnersController extends AppController {


	/**
	 * Chama os models definidos
	 */
	public $uses = array(
		'Partner'
	);


/**
	 * index 
	 */
	public function index() 
	{

	// Retorna todos os resultados
		$results = $this->paginate();

		// Set
		$this->set(
			array(
				'title_for_layout' 	=> 'Parceiros',
				'results'			=> $results
			)
		);	

	}

	public function admin_index() {

		// Retorna todos os resultados
		$this->Partner->recursive = 0;
		$results = $this->paginate();

		// Set
		$this->set(
			array(
				'title_for_layout' 	=> 'Parceiros',
				'action'			=> 'add',
				'button'			=> 'Adicionar Parceiro',
				'class'				=> 'success',
				'is_save'			=> false,
				'results'			=> $results
			)
		);

	}

	public function admin_add() {

    if ($this->request->is('post')):
			 $this->Partner->create();

			// Salva a notícia
			if ($this->Partner->save($this->request->data)):
				$this->Session->setFlash('Adicionado com sucesso.', SUCCESS);
				$this->redirect(array('action' => 'index', 'admin' => true));
			else:
				$this->Session->setFlash('Verifique os erros encontrado no formulário de preenchimento.', WARNING);
			endif;
		endif;

		// Set
		$this->set(
			array(
				'title_for_layout' 	=> 'Adicionar Parceiro',
				'action'			=> 'index',
				'button'			=> 'Cancelar',
				'class'				=> 'danger',
				'is_save'			=> true
			)
		);
}

	public function admin_edit($id = null) {

		// Notícia
		$this->Partner->id = $id;
		if (!$this->Partner->exists()) {
        throw new NotFoundException(__('Parceiro Invalida'));
	    }

	    $this->set('partner', $this->Partner->read(null, $id));

		// Efetua ação de edição
		if ($this->request->is('post') || $this->request->is('put')):

			if ($this->Partner->save($this->request->data)):
				$this->Session->setFlash('Alterado com sucesso.', SUCCESS);
				$this->redirect(array('action' => 'index', 'admin' => true));
			else:
				$this->Session->setFlash('Verifique os erros encontrado no formulário de preenchimento.', WARNING);
			endif;

		else:

			$this->request->data = $this->Partner->read(null, $id);

		endif;

		// Set
		$this->set(
			array(
				'title_for_layout' 	=> 'Editar Notícia',
				'action'			=> 'index',
				'button'			=> 'Cancelar',
				'class'				=> 'danger',
				'is_save'			=> true
			)
		);

	}


	public function admin_delete($id = null)
	{

		// Usuário
		$this->Partner->id = $id;

		// Se o registro não for encontrado
		if (!$this->Partner->exists()):
			throw new NotFoundException('Parceiro não encontrado.');
		endif;

		// Se existir efetua a ação de exclusão
		if ($this->Partner->delete()):
			$this->Session->setFlash('Excluído com sucesso.', SUCCESS);
			$this->redirect(array('action' => 'index', 'painel' => true));
		endif;

		// Mensagem de erro
		$this->Session->setFlash('Falha ao excluir.', WARNING);

		// Redireciona
		$this->redirect(array('action' => 'index', 'painel' => true));

	}
}
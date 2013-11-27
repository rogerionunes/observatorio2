<?php
/**
 * 
 * NoticeController
 * 
 */

App::uses('AppController', 'Controller');

class NoticesController extends AppController {


	/**
	 * Chama os models definidos
	 */
	public $uses = array(
		'Notice'
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
				'title_for_layout' 	=> 'Notícias',
				'results'			=> $results
			)
		);	

	}

	public function view($id = null, $slug = null) {

		$this->Notice->id = $id;

		// Busca a prova de acordo com id e slug passado
		$result = $this->Notice->find('first', array('conditions' => array('Notice.id' => $id, 'Notice.slug' => $slug)));

		// Se o registro não for encontrado
		if (!$this->Notice->exists()):
			throw new NotFoundException('Notícia não encontrada.');
		endif;

		// Set
		$this->set(
			array(
				'title_for_layout' 	=> $result['Notice']['title'] . ' | Notícias',
				'result' => $result
			)
		);
}

public function admin_index() 
	{
		// Retorna todos os resultados
		$results = $this->paginate();

		// Set
		$this->set(
			array(
				'title_for_layout' 	=> 'Notícias',
				'action'			=> 'add',
				'button'			=> 'Adicionar Notícia',
				'class'				=> 'success',
				'is_save'			=> false,
				'results'			=> $results
			)
		);
	}

/**
 * add method
 *
 * @return void
 */
 public function admin_add()
{

	if ($this->request->is('post')):
		$this->Notice->create();

		// Salva a noticia
		if ($this->Notice->save($this->request->data)):
			$this->Session->setFlash('Adicionado com sucesso.', SUCCESS);
			$this->redirect(array('action' => 'index', 'admin' => true));
		else:
			$this->Session->setFlash('Verifique os erros encontrado no formulário de preenchimento.', WARNING);
		endif;
	endif;

	// Set
	$this->set(
		array(
			'title_for_layout' 	=> 'Adicionar Notícia',
			'action'			=> 'index',
			'button'			=> 'Cancelar',
			'class'				=> 'danger',
			'is_save'			=> true
		)
	);

}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {

		// Notícia
		$this->Notice->id = $id;
		if (!$this->Notice->exists()) {
        throw new NotFoundException(__('Noticia Invalida'));
	    }

	    $this->set('notice', $this->Notice->read(null, $id));

		// Efetua ação de edição
		if ($this->request->is('post') || $this->request->is('put')):

			if ($this->Notice->save($this->request->data)):
				$this->Session->setFlash('Alterado com sucesso.', SUCCESS);
				$this->redirect(array('action' => 'index', 'admin' => true));
			else:
				$this->Session->setFlash('Verifique os erros encontrado no formulário de preenchimento.', WARNING);
			endif;

		else:

			$this->request->data = $this->Notice->read(null, $id);

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

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {

		// Notícia
		$this->Notice->id = $id;

		// Se o registro não for encontrado
		if (!$this->Notice->exists()):
			throw new NotFoundException('Usuário não encontrado.');
		endif;

		// Se existir efetua a ação de exclusão
		if ($this->Notice->delete()):
			$this->Session->setFlash('Excluído com sucesso.', SUCCESS);
			$this->redirect(array('action' => 'index', 'admin' => true));
		endif;

		// Mensagem de erro
		$this->Session->setFlash('Falha ao excluir.', WARNING);

		// Redireciona
		$this->redirect(array('action' => 'index', 'admin' => true));
	}}

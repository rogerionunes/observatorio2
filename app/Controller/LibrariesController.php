<?php
/**
 * 
 * LibraryController
 * 
 */

App::uses('AppController', 'Controller');

class LibrariesController extends AppController {

	/**
	 * Chama os models definidos
	 */
	public $uses = array(
		'Library'
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
				'title_for_layout' 	=> 'Bibliotecas',
				'results'			=> $results
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
	public function view($id = null, $slug = null) {

		$this->Library->id = $id;

		// Busca a prova de acordo com id e slug passado
		$result = $this->Library->find('first', array('conditions' => array('Library.id' => $id, 'Library.slug' => $slug)));

		// Se o registro não for encontrado
		if (!$this->Library->exists()):
			throw new NotFoundException('Biblioteca não encontrada.');
		endif;

		// Set
		$this->set(
			array(
				'title_for_layout' 	=> $result['Library']['title'] . ' | Bibliotecas',
				'result' => $result
			)
		);
}

	/**
	 * Admin Index
	 */
	public function admin_index()
	{
		// Retorna todos os resultados
		$results = $this->paginate();

		// Set
		$this->set(
			array(
				'title_for_layout' 	=> 'Bibliotecas',
				'action'			=> 'add',
				'button'			=> 'Adicionar Biblioteca',
				'class'				=> 'success',
				'is_save'			=> false,
				'results'			=> $results
			)
		);

	}


	/**
	 * Admin Add
	 */
	public function admin_add(){

		if ($this->request->is('post')):
			$this->Library->create();

			// Salva a biblioteca
			if ($this->Library->save($this->request->data)):
				$this->Session->setFlash('Adicionado com sucesso.', SUCCESS);
				$this->redirect(array('action' => 'index', 'admin' => true));
			else:
				$this->Session->setFlash('Verifique os erros encontrado no formulário de preenchimento.', WARNING);
			endif;
		endif;

		// Set
		$this->set(
			array(
				'title_for_layout' 	=> 'Adicionar Biblioteca',
				'action'			=> 'index',
				'button'			=> 'Cancelar',
				'class'				=> 'danger',
				'is_save'			=> true
			)
		);

	}

	/**
	 * Admin Edit
	 */
	public function admin_edit($id = null){

		// Biblioteca
		$this->Library->id = $id;
		if (!$this->Library->exists()){
			throw new NotFoundException(__('Biblioteca Inválida.'));
		}

		$this->set('library', $this->Library->read(null, $id));


		// Efetua ação de edição
		if ($this->request->is('post') || $this->request->is('put')):

			if ($this->Library->save($this->request->data)):
				$this->Session->setFlash('Alterado com sucesso.', SUCCESS);
				$this->redirect(array('action' => 'index', 'admin' => true));
			else:
				$this->Session->setFlash('Verifique os erros encontrado no formulário de preenchimento.', WARNING);
			endif;

		else:

			$this->request->data = $this->Library->read(null, $id);

		endif;

		// Set
		$this->set(
			array(
				'title_for_layout' 	=> 'Editar Biblioteca',
				'action'			=> 'index',
				'button'			=> 'Cancelar',
				'class'				=> 'danger',
				'is_save'			=> true
			)
		);

	}


	/**
	 * Admin Delete
	 */
	public function admin_delete($id = null)
	{

		// Biblioteca
		$this->Library->id = $id;

		// Se o registro não for encontrado
		if (!$this->Library->exists()):
			throw new NotFoundException('Biblioteca não encontrada.');
		endif;

		// Se existir efetua a ação de exclusão
		if ($this->Library->delete()):
			$this->Session->setFlash('Excluído com sucesso.', SUCCESS);
			$this->redirect(array('action' => 'index', 'admin' => true));
		endif;

		// Mensagem de erro
		$this->Session->setFlash('Falha ao excluir.', WARNING);

		// Redireciona
		$this->redirect(array('action' => 'index', 'admin' => true));

	}

}
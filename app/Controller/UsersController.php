<?php
/**
 * UsersController
 */

App::uses('AppController', 'Controller');

class UsersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function admin_login()
	{

		// Ação de Login
		if ($this->request->is('post')):
			if ($this->Auth->login()):
				if(!empty($this->request->data['User']['remember_me']) && $this->request->data['User']['remember_me'] == 's'):
					$cookie = array();
					$cookie['username'] = $this->request->data['User']['username'];

					// Escreve os dados no cookie (30 Dias)
					$this->Cookie->write('Auth.Admin', $cookie, true);
				endif;

				return $this->redirect($this->Auth->redirectUrl());
			else:
				$this->Session->setFlash('Usuário ou senha inválidos, tente novamente.', DANGER);
			endif;
		endif;

		// Set
		$this->set(
			'title_for_layout', 'Acessar'
		);

	}
	
	/**
	 * Função para sair do painel
	 */
	public function admin_logout()
	{

		// Destroi o Cookie
		$this->Cookie->delete('Auth.Admin');

		// Destroi a Sessão
		return $this->redirect($this->Auth->logout());

	}

	/**
	 * Função para listar os registros
	 */
	public function admin_index()
	{

		// Retorna todos os resultados
		$this->User->recursive = 0;
		$results = $this->paginate();

		// Set
		$this->set(
			array(
				'title_for_layout' 	=> 'Usuários',
				'action'			=> 'add',
				'button'			=> 'Adicionar Usuário',
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

	/**
	 * Função para adicionar os registros
	 */
	public function admin_add() {
		if ($this->request->is('post')):
			$this->User->create();

			// Salva o usuário
			if ($this->User->save($this->request->data)):
				$this->Session->setFlash('Adicionado com sucesso.', SUCCESS);
				$this->redirect(array('action' => 'index', 'admin' => true));
			else:
				$this->Session->setFlash('Verifique os erros encontrado no formulário de preenchimento.', WARNING);
			endif;
		endif;

		// Set
		$this->set(
			array(
				'title_for_layout' 	=> 'Adicionar Usuário',
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

	/**
	 * Função para editar os registros
	 */
	public function admin_edit($id = null) {

		// Usuário
		$this->User->id = $id;

		// Efetua ação de edição
		if ($this->request->is('post') || $this->request->is('put')):

			// Remove o usuário para não ser alterado de forma alguma
			unset($this->request->data['User']['username']);

			if ($this->User->save($this->request->data)):
				$this->Session->setFlash('Alterado com sucesso.', SUCCESS);
				$this->redirect(array('action' => 'index', 'admin' => true));
			else:
				$this->Session->setFlash('Verifique os erros encontrado no formulário de preenchimento.', WARNING);
			endif;

		else:

			$this->request->data = $this->User->read(null, $id);

		endif;

		// Set
		$this->set(
			array(
				'title_for_layout' 	=> 'Editar Usuário',
				'action'			=> 'index',
				'button'			=> 'Cancelar',
				'class'				=> 'danger',
				'is_save'			=> true
			)
		);

	}

	/**
	 * Função para excluir os registros
	 */
	public function admin_delete($id = null)
	{

		// Usuário
		$this->User->id = $id;

		// Se o registro não for encontrado
		if (!$this->User->exists()):
			throw new NotFoundException('Usuário não encontrado.');
		endif;

		// Se existir efetua a ação de exclusão
		if ($this->User->delete()):
			$this->Session->setFlash('Excluído com sucesso.', SUCCESS);
			$this->redirect(array('action' => 'index', 'admin' => true));
		endif;

		// Mensagem de erro
		$this->Session->setFlash('Falha ao excluir.', WARNING);

		// Redireciona
		$this->redirect(array('action' => 'index', 'admin' => true));

	}

}
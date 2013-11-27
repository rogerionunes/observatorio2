<?php
/**
 * 
 * NoticeController
 * 
 */

App::uses('AppController', 'Controller');

class HomeController extends AppController {


	/**
	 * Chama os models definidos
	 */
	public $uses = array(
		'Notice',
		'Contact',
		'Partner'
	);

	/**
	 * Index
	 */
	public function index()
	{
		//$this->User->save(array('username' => 'NomeDoUsuario', 'password' => 'SenhaDoUsuario', 'email' => 'EmailDoUsuario', 'is_active' => true));
		
		// Retorna todos os resultados parceiros e noticias
		$results = $this->paginate();

		// Set
		$this->set(
			array(
				'title_for_layout' 	=> 'Início',
				'results'			=> $results
			)
		);	

		// Contatos 

		if ($this->request->is('post')):
		$this->Contact->create();

		// Salva em contaots
		if ($this->Contact->save($this->request->data)):
			$this->Session->setFlash('Adicionado com sucesso.', SUCCESS);
			$this->redirect(array('action' => 'index', 'admin' => false));
		else:
			$this->Session->setFlash('Verifique os erros encontrado no formulário de preenchimento.', WARNING);
		endif;
	endif;
}
	

	/**
	 * Painel Index
	 */
	public function admin_index()
	{


	}

}
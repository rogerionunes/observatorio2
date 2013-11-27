<?php
/**
 * Routes configuration
 */

// Home
Router::connect(
	'/', array(
		'controller' 		=> 'home',
		'action'			=> 'index'
	)
);

// Quem Somos
Router::connect(
	'/quem-somos', array(
		'controller' 		=> 'whoweare',
		'action'			=> 'index'
	)
);

// Parceiros
Router::connect(
	'/parceiros', array(
		'controller' 		=> 'partners',
		'action'			=> 'index'
	)
);

// Biblioteca
Router::connect(
	'/biblioteca', array(
		'controller' 		=> 'libraries',
		'action'			=> 'index'
	)
);

// Noticias
Router::connect(
	'/noticias', array(
		'controller' 		=> 'notices',
		'action'			=> 'index'
	)
);

Router::connect(
    '/notices/:id-:slug',
    array(
    	'controller' => 'notices',
    	'action' => 'view'
    ),
    array(
        'pass' => array('id', 'slug'),
        'id' => '[0-9]+'
    )
);

// Sobre ODM
Router::connect(
	'/sobre-odm', array(
		'controller' 		=> 'aboutodm',
		'action'			=> 'index'
	)
);

// Contatos
Router::connect(
	'/contatos', array(
		'controller' 		=> 'contacts',
		'action'			=> 'index'
	)
);

// Admin
Router::connect(
	'/admin', array(
		'controller' 		=> 'home',
		'action'			=> 'index',
		'admin'				=> true
	)
);

Router::connect(
	'/admin/login', array(
		'controller' 		=> 'users',
		'action'			=> 'login',
		'admin'				=> true
	)
);

Router::connect(
	'/admin/logout', array(
		'controller' 		=> 'users',
		'action'			=> 'logout',
		'admin'				=> true
	)
);

// Load all plugin routes.
CakePlugin::routes();

// Carrega as rotas padrão do CakePHP.
require CAKE . 'Config' . DS . 'routes.php';

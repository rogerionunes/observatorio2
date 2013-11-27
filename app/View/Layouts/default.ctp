<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $title_for_layout; ?> | <?php echo Configure::read('Application.name'); ?></title>
	<meta http-equiv="Content-Language" content="en-us" />
	
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="MSSmartTagsPreventParsing" content="true" />
	
	<meta name="description" content="Description" />
	<meta name="keywords" content="Keywords" />
	
	<meta name="Fábrica de Software - UNIPÊ" content="Observatório do Milênio" />
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	</style>

	<!-- Start WOWSlider.com HEAD section -->
	<?php echo $this->Html->css('style'); ?>
	<!-- End WOWSlider.com HEAD section -->

	<!-- css das paginas -->
	<?php echo $this->Html->css('css_observatorio'); ?>
	<?php echo $this->Html->css('quemsomos'); ?>
	<?php echo $this->Html->css('biblioteca'); ?>
	<?php echo $this->Html->css('noticias'); ?>
	<?php echo $this->Html->css('contato'); ?>
	<?php echo $this->Html->css('parceiros'); ?>
	<?php echo $this->Html->css('sobre'); ?>

	<!-- Chamando Icone -->
	<?php echo $this->Html->meta('/img/cms/favicon.ico', '/img/cms/icon.png', array('type' => 'icon'), true); ?>

	

</head>
<body>

<div id="divtotal">

  <div id="header">
  <?php echo $this->Html->image('index/logonova.png', array('width' => '960', 'height'=>'231')); ?>
  <div id="link">
    
<div align="center">

	<?php echo
							$this->Html->link(
    							$this->Html->image('index/menu/inicio_2.png', array('width' => '48', 'height'=>'19')),
								array(
									'controller' => 'home',
									'action' => 'index',
								),
								array(
									'escape' => false,
								)
							); ?>: 
      <?php echo
							$this->Html->link(
    							$this->Html->image('index/menu/quemsomos.png', array('width' => '111', 'height'=>'14')),
								array(
									'controller' => 'whoweare',
									'action' => 'index',
								),
								array(
									'escape' => false,
								)
							); ?> : 
      <?php echo
							$this->Html->link(
    							$this->Html->image('index/menu/parceiros.png', array('width' => '89', 'height'=>'13')),
								array(
									'controller' => 'partners',
									'action' => 'index',
								),
								array(
									'escape' => false,
								)
							); ?> : 
      <?php echo
							$this->Html->link(
    							$this->Html->image('index/menu/biblioteca.png', array('width' => '92', 'height'=>'14')),
								array(
									'controller' => 'libraries',
									'action' => 'index',
								),
								array(
									'escape' => false,
								)
							); ?> : 
      <?php echo
							$this->Html->link(
    							$this->Html->image('index/menu/noticias.png', array('width' => '76', 'height'=>'14')),
								array(
									'controller' => 'notices',
									'action' => 'index',
								),
								array(
									'escape' => false,
								)
							); ?> : 
      <?php echo
							$this->Html->link(
    							$this->Html->image('index/menu/sobreodm.png', array('width' => '96', 'height'=>'14')),
								array(
									'controller' => 'aboutodm',
									'action' => 'index',
								),
								array(
									'escape' => false,
								)
							); ?> : 
      <?php echo
							$this->Html->link(
    							$this->Html->image('index/menu/contatos.png', array('width' => '86', 'height'=>'14')),
								array(
									'controller' => 'contacts',
									'action' => 'index',
								),
								array(
									'escape' => false,
								)
							); ?>


  </div>
  </div>
  
  <div id="cordel">
  	<?php echo $this->Html->image('index/indicadores.png', array('width' => '960', 'height'=>'160')); ?>
  </div>
 
<!-- Codigo que chama o index de acordo com pagina acessada -->
<?php echo $this->fetch('content'); ?>

<!-- Parte de baixo do site -->
<div id="footer">
	<div id="footerleft" class="footerleft">
	<?php echo $this->Html->image('index/logomarcas/lp_logo_unipe.png', array('width'=>'140','height'=>'70')); ?>
    </div>
    <div id="footermiddle">
    <p class="footerstyle">
    	<?php
					echo
						$this->Html->link(
							'Início',
							array(
								'controller' 			=> 'home',
								'action' 				=> 'index',
								'admin' 				=> false
							),
							array(
								'escape' 				=> false
							)
						);
					?> : <?php
					echo
						$this->Html->link(
							'Quem Somos',
							array(
								'controller' 			=> 'whoweare',
								'action' 				=> 'index',
								'admin' 				=> false
							),
							array(
								'escape' 				=> false
							)
						);
					?> : <?php
					echo
						$this->Html->link(
							'Parceiros',
							array(
								'controller' 			=> 'partners',
								'action' 				=> 'index',
								'admin' 				=> false
							),
							array(
								'escape' 				=> false
							)
						);
					?> : <?php
					echo
						$this->Html->link(
							'Biblioteca',
							array(
								'controller' 			=> 'libraries',
								'action' 				=> 'index',
								'admin' 				=> false
							),
							array(
								'escape' 				=> false
							)
						);
					?>  <br /><?php
					echo
						$this->Html->link(
							'Notícias',
							array(
								'controller' 			=> 'notices',
								'action' 				=> 'index',
								'admin' 				=> false
							),
							array(
								'escape' 				=> false
							)
						);
					?> : <?php
					echo
						$this->Html->link(
							'Sobre ODM',
							array(
								'controller' 			=> 'aboutodm',
								'action' 				=> 'index',
								'admin' 				=> false
							),
							array(
								'escape' 				=> false
							)
						);
					?> : <?php
					echo
						$this->Html->link(
							'Contatos',
							array(
								'controller' 			=> 'contacts',
								'action' 				=> 'index',
								'admin' 				=> false
							),
							array(
								'escape' 				=> false
							)
						);
					?>
     </p>
     </div>
    <div id="footerright">
     <div id="un">
     	<?php echo $this->Html->image('index/logomarcas/pnud.png', array('width'=>'40','height'=>'70')); ?>
     </div>
     <p align="left" class="footerstyle">Fábrica de Software ® 2013 <br />
      Todos os Direitos Reservados</p>	
    </div>                   
  </div>
</div>

	<!-- Scripts -->
	<?php echo $this->Html->script('jquery.js'); ?>
	<?php echo $this->Html->script('wowslider.js'); ?>
	<?php echo $this->Html->script('script.js'); ?>
	<?php echo $this->Html->script('cms/tinymce/tinymce.min.js'); ?>
	
</body>
</html>

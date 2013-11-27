<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title_for_layout; ?> | Observatório</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<!-- Styles -->
	<?php echo $this->Html->css('http://fonts.googleapis.com/css?family=Lato:100,300,400,700'); ?>

	<?php echo $this->Html->css('cms/bootstrap.min'); ?>

	<?php echo $this->Html->css('cms/theme'); ?>


    <!--[if lt IE 9]>
    <?php echo $this->Html->script('//html5shim.googlecode.com/svn/trunk/html5.js'); ?>
    <![endif]-->

</head>
<body>
    <?php 	
    if ($this->Session->read('Auth.Admin')):

    	echo $this->element('cms/navbar');

    	echo $this->element('cms/sidebar');

    ?>

	<div class="content col-md-10">

		<?php
		echo
			$this->element(
				'cms/pageheader',
				array(
					'name' 			=> $title_for_layout,
					'controller' 	=> isset($controller) ? $controller : $this->params['controller'],
					'action' 		=> isset($action) ? $action : false,
					'button' 		=> isset($button) ? $button : false,
					'class'			=> isset($class) ? $class : false,
					'is_save'		=> isset($is_save) ? $is_save : false
				)
			);
		?>

        <?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>

	</div>
	<?php else: ?>
	<?php echo $this->fetch('content'); ?>

	<?php endif; ?>

	<!-- Scripts -->
	<?php echo $this->Html->script('lib/jquery.min'); ?>

	<?php echo $this->Html->script('lib/bootstrap.min'); ?>

	<?php echo $this->Html->script('cms/plugins'); ?>

	<?php echo $this->Html->script('cms/tinymce/tinymce.min'); ?>

	<?php echo $this->Html->script('cms/theme'); ?>

</body>
</html>
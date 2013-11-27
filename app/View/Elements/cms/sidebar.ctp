	<aside class="sidebar col-md-2">
		<nav id="sidebar-menu" role="complementary">
			<ul>
				<li<?php echo $this->Active->add('home'); ?>>
					<?php
					echo
						$this->Html->link(
							'<i class="glyphicon glyphicon-home"></i><span>Home</span>',
							array(
								'plugin'				=> false,
								'controller' 			=> 'home',
								'action' 				=> 'index',
								'admin' 				=> true
							),
							array(
								'title' 				=> 'Home',
								'escape' 				=> false
							)
						);
					?>

				</li>
				<li<?php echo $this->Active->add('whoweare'); ?>>
					<?php
					echo
						$this->Html->link(
							'<i class="glyphicon glyphicon-home"></i><span>Quem Somos</span>',
							array(
								'controller' 			=> 'whoweare',
								'action' 				=> 'index',
								'admin' 				=> true
							),
							array(
								'title' 				=> 'Quem Somos',
								'escape' 				=> false
							)
						);
					?>

				</li>
				<li<?php echo $this->Active->add('aboutodm'); ?>>
					<?php
					echo
						$this->Html->link(
							'<i class="glyphicon glyphicon-home"></i><span>Sobre ODM</span>',
							array(
								'controller' 			=> 'aboutodm',
								'action' 				=> 'index',
								'admin' 				=> true
							),
							array(
								'title' 				=> 'Sobre ODM',
								'escape' 				=> false
							)
						);
					?>

				</li>
				<li<?php echo $this->Active->add('libraries'); ?>>
					<?php
					echo
						$this->Html->link(
							'<i class="glyphicon glyphicon-home"></i><span>Biblioteca</span>',
							array(
								'controller' 			=> 'libraries',
								'action' 				=> 'index',
								'admin' 				=> true
							),
							array(
								'title' 				=> 'Biblioteca',
								'escape' 				=> false
							)
						);
					?>

				</li>
				<li<?php echo $this->Active->add('partners'); ?>>
					<?php
					echo
						$this->Html->link(
							'<i class="glyphicon glyphicon-home"></i><span>Parceiros</span>',
							array(
								'controller' 			=> 'partners',
								'action' 				=> 'index',
								'admin' 				=> true
							),
							array(
								'title' 				=> 'Parceiros',
								'escape' 				=> false
							)
						);
					?>

				</li>
				<li<?php echo $this->Active->add('notices'); ?>>
					<?php
					echo
						$this->Html->link(
							'<i class="glyphicon glyphicon-home"></i><span>Notícias</span>',
							array(
								'controller' 			=> 'notices',
								'action' 				=> 'index',
								'admin' 				=> true
							),
							array(
								'title' 				=> 'Notícias',
								'escape' 				=> false
							)
						);
					?>

				</li>
					<li<?php echo $this->Active->add('contacts'); ?>>
					<?php
					echo
						$this->Html->link(
							'<i class="glyphicon glyphicon-home"></i><span>Contatos</span>',
							array(
								'controller' 			=> 'contacts',
								'action' 				=> 'index',
								'admin' 				=> true
							),
							array(
								'title' 				=> 'Contatos',
								'escape' 				=> false
							)
						);
					?>

				</li>
				<li<?php echo $this->Active->add('users'); ?>>
					<?php
					echo
						$this->Html->link(
							'<i class="glyphicon glyphicon-home"></i><span>Usuários</span>',
							array(
								'controller' 			=> 'users',
								'action' 				=> 'index',
								'admin' 				=> true
							),
							array(
								'title' 				=> 'Usuários',
								'escape' 				=> false
							)
						);
					?>

				</li>
			</ul>
		</nav>
	</aside>

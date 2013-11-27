<!-- Navbar -->
    <header class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php
            echo
                $this->Html->link(
                '<b>Observatório</b>',
                    array(
                        'controller'            => 'home',
                        'action'                => 'index',
                        'admin'                => true
                    ),
                    array(
                        'class'                 => 'navbar-brand',
                        'title'                 => 'Observatório',
                        'escape'                => false
                    )
                );
            ?>

        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <?php
                    echo
                        $this->Html->link(
                            'Olá, ' . $user['username'],
                            array(
                                'title'                 => 'Olá, ' . $user['username'],
                                'escape'                => false
                            )
                        );
                    ?>

                </li>
                <li>
                    <?php
                    echo
                        $this->Html->link(
                            'Ir para o site',
                            array(
                                'controller'            => 'home',
                                'action'                => 'index',
                                'admin'                => false
                            ),
                            array(
                                'title'                 => 'Ir para o site',
                                'target'                => '_blank'
                            )
                        );
                    ?>

                </li>
                <li>
                    <?php
                    echo
                        $this->Html->link(
                            'Sair',
                            array(
                                'controller'            => 'users',
                                'action'                => 'logout',
                                'admin'                => true
                            ),
                            array(
                                'title'                 => 'Sair',
                                'escape'                => false
                            )
                        );
                    ?>

                </li>
            </ul>
        </div>
    </header>

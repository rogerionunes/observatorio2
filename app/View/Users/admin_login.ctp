<div class="login">
    <header class="text-center">
        <h1><b>Observatório</b></h1>
    </header>
    <div class="box">
        <?php echo $this->Session->flash(); ?>
        <?php
        echo $this->Form->create(
            'User',
                array(
                    'url' => array(
                        'controller'    => 'users',
                        'action'        => 'admin_login',
                    ),
                    'role'              => 'form',
                    'inputDefaults' => array(
                        'label' => false,
                        'error' => false
                    )
                )
            );
        ?>
            <div class="form-group">
                <input type="text" name="data[User][username]" class="form-control" id="usuario" placeholder="Seu usuário" />
            </div>
            <div class="form-group">
                <input type="password" name="data[User][password]" class="form-control" id="senha" placeholder="Sua senha" />
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="data[User][remember_me]" value="s"> Mantenha-me conectado
                </label>
            </div>
            <button type="submit" title="Acessar" class="btn btn-primary btn-block">Acessar</button>
        </form>
        <br /><br />
       
        </button>

    </div>
</div>
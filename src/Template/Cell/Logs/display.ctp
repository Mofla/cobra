<!-- src/Template/Cell/Logs/display.ctp -->
<div class="user-area">
    <div class="actions">
        <?php
            if(null !== $this->request->session()->read('Auth.User.id'))
            {
                echo $this->Html->link(__('Profil'),['controller' => 'Users', 'action' => 'view',$this->request->session()->read('Auth.User.id')]);
                if($this->request->session()->read('Auth.User.is_admin'))
                {
                    echo $this->Html->link(__('Gestion des partenaires'),['controller' => 'Users', 'action' => 'index']);
                }
                echo $this->Html->link(__('Déconnexion'),['controller' => 'Users', 'action' => 'logout']);
                }
                else
                {
                    echo $this->Html->link(__('S\'inscrire'),['controller' => 'Users', 'action' => 'add']);
                    echo $this->Html->link(__('Connexion'),['controller' => 'Users', 'action' => 'login']);
                }
        ?>
                <?= $this->Html->link(__('Nous contacter'),['controller' => 'Infos', 'action' => 'contact']); ?>
    </div>
</div>

Aujourd'hui nous sommes le <?= $date ?>. Il est <?= $time ?>.
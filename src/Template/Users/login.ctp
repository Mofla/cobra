<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
<?= $this->Form->input('username',['label' => 'Identifiant']) ?>
<?= $this->Form->input('password',['label' => 'Mot de passe']) ?>
<?= $this->Form->submit(__('Connexion')) ?>
<?= $this->Form->end() ?>
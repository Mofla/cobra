<?= $this->Form->create($user) ?>

<?= $this->Form->input('username',['label' => 'Identifiant']) ?>
<?= $this->Form->input('email',['label' => 'Email']) ?>
<?= $this->Form->checkbox('email_is_hidden', ['label' => 'Cacher l\'email']) ?>
<?= $this->Form->input('password',['label' => 'Mot de passe', 'type' => 'password']) ?>

<?= $this->Form->input('first_name',['label' => 'Prénom']) ?>
<?= $this->Form->input('last_name',['label' => 'Nom']) ?>
<?= $this->Form->input('company_name',['label' => 'Agence']) ?>
<?= $this->Form->select('type_user_id',$list) ?>

<?= $this->Form->input('address',['label' => 'Adresse']) ?>
<?= $this->Form->input('zipcode',['label' => 'Code Postal']) ?>
<?= $this->Form->input('city',['label' => 'Ville']) ?>
<?= $this->Form->input('phone',['label' => 'Téléphone','type' => 'phone']) ?>
<?= $this->Form->input('website_link',['label' => 'Site Web', 'required' => false]) ?>
<?= $this->Form->input('facebook_link',['label' => 'Facebook', 'required' => false]) ?>
<?= $this->Form->input('twitter_link',['label' => 'Twitter', 'required' => false]) ?>
<?= $this->Form->input('linkedin_link',['label' => 'Linkedin', 'required' => false]) ?>
<?= $this->Form->submit('Editer') ?>
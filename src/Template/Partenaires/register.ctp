<?= $this->Form->create('formulaire',['url' => '/partenaire/enregistrement/', 'class' => 'formulaire']) ?>
<?= $this->Form->hidden('id', ['value' => '']) ?>
<?= $this->Form->input('username',['label' => 'Identifiant', 'required' => true]) ?>
<?= $this->Form->input('email',['label' => 'Email', 'required' => true]) ?>
<?= $this->Form->checkbox('email_is_hidden', ['label' => 'Cacher l\'email']) ?>
<?= $this->Form->input('password',['label' => 'Mot de passe', 'type' => 'password','id' => 'test','onkeyup' => 'Test()', 'required' => true]) ?><span class="checkbtn"></span>

<?= $this->Form->input('first_name',['label' => 'Prénom']) ?>
<?= $this->Form->input('last_name',['label' => 'Nom']) ?>
<?= $this->Form->input('company_name',['label' => 'Agence']) ?>
<?= $this->Form->select('type_user_id',$list) ?>

<?= $this->Form->input('address',['label' => 'Adresse']) ?>
<?= $this->Form->input('zipcode',['label' => 'Code Postal']) ?>
<?= $this->Form->input('city',['label' => 'Ville']) ?>
<?= $this->Form->input('phone',['label' => 'Téléphone','type' => 'phone']) ?>
<?= $this->Form->input('website_link',['label' => 'Site Web']) ?>
<?= $this->Form->input('facebook_link',['label' => 'Facebook']) ?>
<?= $this->Form->input('twitter_link',['label' => 'Twitter']) ?>
<?= $this->Form->input('linkedin_link',['label' => 'Linkedin']) ?>
<?= $this->Form->input('description',['label' => 'Description']) ?>
<?= $this->Form->submit('Inscription') ?>

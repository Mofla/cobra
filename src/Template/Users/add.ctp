<?= $this->Form->create('formulaire',['class' => 'formulaire']) ?>
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
<?= $this->Form->input('website_link',['label' => 'Site Web', 'required' => false]) ?>
<?= $this->Form->input('facebook_link',['label' => 'Facebook', 'required' => false]) ?>
<?= $this->Form->input('twitter_link',['label' => 'Twitter', 'required' => false]) ?>
<?= $this->Form->input('linkedin_link',['label' => 'Linkedin', 'required' => false]) ?>
<?= $this->Form->hidden('is_admin', ['value' => '0']) ?>
<?= $this->Form->hidden('is_active', ['value' => '0']) ?>
<?= $this->Form->hidden('is_member', ['value' => '1']) ?>
<?= $this->Form->submit('Inscription') ?>
<?= $this->Form->end() ?>


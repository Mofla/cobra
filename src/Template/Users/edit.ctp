<?= $this->Form->create($user) ?>

<?= $this->Form->input('username',['label' => 'Identifiant']) ?>
<?= $this->Form->input('email',['label' => 'Email']) ?>
<hr>
<label>Cacher l'email :   </label>
<?= $this->Form->checkbox('email_is_hidden') ?><br>
<?php
    if($this->request->session()->read('Auth.User.is_admin'))
    {
        echo '<br><label>Administrateur ?   </label>';
        echo $this->Form->checkbox('is_admin');
        echo '<br>';
        echo '<br><label>Membre ?   </label>';
        echo $this->Form->checkbox('is_member');
        echo '<br>';
        echo '<br><label>Compte activé ?   </label>';
        echo $this->Form->checkbox('is_active');
    }
?>
<hr>
<?= $this->Form->input('password',['label' => 'Mot de passe', 'type' => 'password']) ?>

<?= $this->Form->input('first_name',['label' => 'Prénom']) ?>
<?= $this->Form->input('last_name',['label' => 'Nom']) ?>
<?= $this->Form->input('company_name',['label' => 'Agence']) ?>
<?= $this->Form->select('type_user_id',$list) ?>

<?= $this->Form->input('address',['label' => 'Adresse']) ?>
<?= $this->Form->input('zipcode',['label' => 'Code Postal']) ?>
<?= $this->Form->input('city',['label' => 'Ville']) ?>
<?= $this->Form->input('phone',['label' => 'Téléphone']) ?>
<?= $this->Form->input('website_link',['label' => 'Site Web', 'required' => false]) ?>
<?= $this->Form->input('facebook_link',['label' => 'Facebook', 'required' => false]) ?>
<?= $this->Form->input('twitter_link',['label' => 'Twitter', 'required' => false]) ?>
<?= $this->Form->input('linkedin_link',['label' => 'Linkedin', 'required' => false]) ?>
<?= $this->Form->input('description',['label' => 'Description', 'required' => false]) ?>
<?= $this->Form->submit('Editer') ?>

</div>
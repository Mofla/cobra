<table>
    <thead>
        <tr><th colspan=2>Informations</th></td>
        <?= ($this->request->session()->read('Auth.User.id') == $user['id'] || $this->request->session()->read('Auth.User.is_admin')) ? '<tr><th colspan=2>'.$this->Html->link(__('Editer '), ['controller' => 'Users', 'action' => 'edit', $this->request->session()->read('Auth.User.id')]).'</th></tr>' : '' ?>
    </thead>
    <tbody>
        <tr>
            <td>Login : </td><td><?= $user['username'] ?></td>
        </tr>
        <tr>
            <td>Agence : </td>
            <td><?= $user['company_name'] ?></td>
        </tr>
        <tr>
            <td>Prénom : </td><td><?= $user['first_name'] ?></td>
        </tr>
        <tr>
            <td>Nom : </td><td><?= $user['last_name'] ?></td>
        </tr>
        <?= ($user['email_is_hidden']) ? '' : '<tr><td>Email</td><td>'.$user['email'].'</td></tr>' ?>
        <tr>
            <td>Adresse :</td>
            <td><?= $user['address'].'<br>'.$user['zipcode'].' - '.$user['city'] ?></td>
        </tr>
</table>
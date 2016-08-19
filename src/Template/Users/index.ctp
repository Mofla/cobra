<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th colspan=2>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user): ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->username ?></td>
            <td><?= $this->Html->link(__('Editer'),['controller' => 'Users', 'action' => 'edit', $user->id]) ?></td>
            <td><?= $this->Html->link(__('Supprimer'),['controller' => 'Users', 'action' => 'delete', $user->id]) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<ul class="pagination">
    <?= $this->Paginator->prev('< ' . __('previous')) ?>
    <?= $this->Paginator->numbers() ?>
    <?= $this->Paginator->next(__('next') . ' >') ?>
</ul>


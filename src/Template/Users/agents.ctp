<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <h3>Utilisateur</h3>
        </div>
        <div class="col-md-6 col-sm-12">
            <h3>Agence</h3>
        </div>
        <div class="col-md-2 col-sm-4">
            <h3>Lien</h3>
        </div>
        <hr>
    </div>
    <?php foreach($users as $user): ?>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <?= $user->username ?>
        </div>
        <div class="col-md-6 col-sm-12">
            <?= $user->company_name ?>
        </div>
        <div class="col-md-2 col-sm-4">
            <?= $this->Html->link(__('Voir le profil'),['controller' => 'Users', 'action' => 'view',$user->id]) ?>
        </div>
        <hr>
    </div>
    <?php endforeach; ?>
    <div class="col-md-10 col-sm-20 center">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
    </div>
</div>
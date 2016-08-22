<div class="container">
    <?= $this->Form->create() ?>
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <?= $this->Form->input('first_name',['label' => 'Prénom', 'placeholder' => $this->request->session()->read('Auth.User.first_name')]) ?>
            </div>
            <div class="col-md-3 col-sm-3">
                <?= $this->Form->input('last_name',['label' => 'Nom', 'placeholder' => $this->request->session()->read('Auth.User.last_name')]) ?>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <?= $this->Form->input('email',['label' => 'Email', 'placeholder' => $this->request->session()->read('Auth.User.email')]) ?>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <?= $this->Form->input('message',['label' => 'Votre message', 'placeholder' => 'Votre message.']) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <hr>
            </div>
        </div>
        <div class="row center">
            <div class="col-md-6 col-sm-6">
                <?= $this->Form->submit(__('Envoyer'),['id' => 'account-submit', 'class' => 'btn btn-default']) ?>
            </div>
        </div>
    <?= $this->Form->end() ?>

</div>

<?= $this->Flash->render('auth') ?>
<div class="container">
    <div class="row">
        <!-- Results -->
        <div class="col-md-9 col-sm-9">
            <section id="results">
                <header><h1>Se connecter</h1></header>
                <div class="row">
                    <br>
                    <br>
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        <form role="form" id="form-create-account" method="post" >
                        <?= $this->Form->create('form-create-account',['id' => 'form-create-account','role' => 'form']) ?>
                            <div class="form-group">
                                <label for="form-create-account-email">Login:</label>
                                <?= $this->Form->input('username',['label' => '','class' => 'form-control', 'id' => 'form-create-account-email', 'required' =>true]) ?>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label for="form-create-account-password">Mot de passe:</label>
                                <?= $this->Form->input('password',['label' => '','class' => 'form-control', 'id' => 'form-create-account-password', 'required' =>true]) ?>
                            </div><!-- /.form-group -->
                            <div class="form-group clearfix">
                            <?= $this->Form->submit('Connexion',['class' => 'btn pull-right btn-default', 'id' => 'account-submit']) ?>
                            </div><!-- /.form-group -->
                        </form>
                        <hr>
                        <div class=""><a href="" class="col-md-offset-2 ">S'inscrire</a> <a href="" class="col-md-offset-2"  >Mot de passe oublié ?</a></div>
                    </div>
                </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
</div>
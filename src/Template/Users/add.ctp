<div class="container">
    <header><h1>Inscription</h1></header>
    <div class="row">
        <div class="col-md-8 col-sm-12 col-md-offset-3">
            <h3>Type de vendeur</h3>
            <?= $this->Form->create('formulaire',['class' => 'formulaire']) ?>
            <?= $this->Form->hidden('id', ['value' => '']) ?>
            <?= $this->Form->hidden('is_admin', ['value' => '0']) ?>
            <?= $this->Form->hidden('is_active', ['value' => '0']) ?>
            <?= $this->Form->hidden('is_member', ['value' => '1']) ?>

                <div class="radio" id="create-account-user">
                    <label>
                        <input type="radio" id="account-type-user" name="account-type" required>Particulier
                    </label>
                </div>
                <div class="radio" id="agent-switch" data-agent-state="">
                    <label>
                        <input type="radio" id="account-type-agent" name="account-type" required>professionnelle
                    </label>
                </div>

                <div id="agency" class="disabled">
                    <div class="col-md-4 col-sm-4 col-md-offset-1">
                        <div class="form-group">
                            <label for="account-agency">Sélectionner votre categorie:</label>
                            <?= $this->Form->select('type_user_id',$list,['id' => 'account-agency') ?>
                        </div>
                    </div>

                    <div class="form-group col-md-4 col-sm-4">

                        <label for="form-create-account-full-name">Nom d'agence:</label>
                        <?= $this->Form->input('company_name',['class' => 'form-control']) ?>
                    </div>

                    <br>
                    <br>
                    <br>
                    <br>
                </div>

                <hr>

                <div class="form-group col-md-5 col-sm-12 ">

                    <!--  <div id="agency" class="disabled"> -->
                    <label for="form-create-account-full-name">Nom:</label>
                    <?= $this->Form->input('last_name',['class' => 'form-control']) ?>
                    <!-- </div> --><!-- /.form-group -->
                </div>

                <div class="form-group col-md-5 col-sm-12">
                    <!--  <div id="agency" class="disabled"> -->
                    <label for="form-create-account-full-name">Prénom:</label>
                    <?= $this->Form->input('first_name',['class' => 'form-control']) ?>
                    <!-- </div> --><!-- /.form-group -->
                </div>


                <div class="form-group col-md-5 col-sm-12">
                    <!--  <div id="agency" class="disabled"> -->
                    <label for="form-create-account-full-name">Identifiant:</label>
                    <?= $this->Form->input('username',['class' => 'form-control']) ?>
                    <!-- </div> --><!-- /.form-group -->
                </div>


                <div class="form-group col-md-5 col-sm-12">
                    <!--  <div id="agency" class="disabled"> -->
                    <label for="form-create-account-full-name">adresse:</label>
                    <?= $this->Form->input('address',['class' => 'form-control']) ?>
                    <!-- </div> --><!-- /.form-group -->
                </div>


                <div class="form-group col-md-3 col-sm-12">
                    <!--  <div id="agency" class="disabled"> -->
                    <label for="form-create-account-full-name">Ville:</label>
                    <?= $this->Form->input('city',['class' => 'form-control']) ?>

                    <!-- </div> --><!-- /.form-group -->
                </div>



                <div class="form-group col-md-2 col-sm-12">

                    <label for="form-create-account-full-name">
                        Code postal:</label>
                    <?= $this->Form->input('zipcode',['class' => 'form-control']) ?>
                    <!-- </div> --><!-- /.form-group -->
                </div>


                <div class="form-group col-md-5 col-sm-12 ">
                    <label for="form-create-account-email">Email:</label>
                    <?= $this->Form->input('email',['class' => 'form-control']) ?>

                </div><!-- /.form-group -->


                <div class="form-group col-md-5 col-sm-12 ">
                    <label for="form-create-account-password">Mot de passe:</label>
                    <?= $this->Form->input('password',['class' => 'form-control', 'name' => 'password']) ?>
                </div><!-- /.form-group -->


                <div class="form-group col-md-5 col-sm-12">
                    <label for="form-create-account-confirm-password">Confirmer le mot de passe:</label>
                    <?= $this->Form->input('password',['class' => 'form-control']) ?>
                </div><!-- /.form-group -->


                <div class=" clearfix col-md-offset-4">
                    <?= $this->Form->submit('Inscription',['id' => 'account-submit', 'class' => 'btn btn-default']) ?>
                </div>
            </form>
            <hr>

            <div class="center">
                <figure class="note">En cliquant sur le bouton “Valider l'inscription” vous serez d'accord avec nos termes et nos conditions<a href="terms-conditions.html">Termes et conditions</a></figure>
            </div>
        </div>
    </div>
</div>
</div>

</div>
</div>


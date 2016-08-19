<div class="wrapper">
    <!-- Navigation -->
    <div class="navigation">
        <div class="secondary-navigation">
            <div class="container">
                <div class="contact">
                    <figure><strong>Téléphone:</strong><?= ($user['phone'] != '') ? $user['phone'] : 'Non renseigné' ?></figure>
                    <figure><strong>Email:</strong><?= (!$user['email_is_hidden']) ? $user['email'] : 'Non public' ?></figure>
                </div>

            </div>
        </div>
        <div class="container">
            <header class="navbar" id="top" role="banner">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand nav" id="brand">
                        <a href="index-google-map-fullscreen.html"><?= $this->Html->image('cci_lor.png') ?></a>
                    </div>
                </div>

                <div class="add-your-property">
                    <a href="submit.html" class="btn btn-default"><i class="fa fa-plus"></i><span class="text">Vendez votre Bien !</span></a>
                </div>
            </header><!-- /.navbar -->
        </div><!-- /.container -->
    </div><!-- /.navigation -->
    <!-- end Navigation -->
    <!-- Page Content -->
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="index.html">Accueil</a></li>
                <li><?= $this->Html->link(__('Agents'),['controller' => 'Users', 'action' => 'agents']) ?></li>
                <li class="active">Détails Agents</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <div class="row">
                <!-- Agent Detail -->
                <div class="col-md-9 col-sm-9">
                    <section id="agent-detail">
                        <header><h1>Profil de <?= ucfirst($user['username']) ?></h1>
                        <?= ($this->request->session()->read('Auth.User.username') == $user['username']) ? $this->Html->link(__('Editer mon profil'),['controller' => 'Users', 'action' => 'edit', $this->request->session()->read('Auth.User.id')]) : '' ?>
                        </header>
                        <section id="agent-info">
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <figure class="agent-image"><?= $this->Html->image('cci.jpg') ?></figure>
                                </div><!-- /.col-md-3 -->
                                <div class="col-md-5 col-sm-5">
                                    <h3>Informations Contact</h3>
                                    <dl>
                                        <dt>Nom</dt>
                                        <dd><?= ucfirst($user['first_name']) ?> <?= strtoupper($user['last_name']) ?></dd>
                                        <dt>Téléphone:</dt>
                                        <dd><?= ($user['phone'] != '') ? $user['phone'] : 'Non renseigné' ?></dd>
                                        <dt>Email:</dt>
                                        <dd><?= (!$user['email_is_hidden']) ? $this->Text->autoLinkEmails($user['email']) : 'Caché' ?></dd>
                                    </dl>
                                </div><!-- /.col-md-5 -->
                                <div class="col-md-4 col-sm-4">
                                    <h3>A propos de nous</h3>
                                    <p><?= $user['description'] ?>
                                    </p>
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-offset-3 col-md-5 col-sm-offset-3 col-sm-5">
                                    <h3>Agence :</h3>
                                    <?= $user['company_name'] ?>
                                    </div><!-- /.col-md-5 -->
                                <div class="col-md-4 col-sm-4">
                                    <h3>Réseaux sociaux</h3>
                                    <div class="agent-social">
                                        <?= $this->Html->link(__('Twitter'),['class' => 'fa fa-twitter btn btn-grey-dark', 'url' => $user['twitter_link']]) ?>
                                        <?= $this->Html->link(__('Facebook'),['class' => 'fa fa-facebook btn btn-grey-dark', 'url' => $user['twitter_link']]) ?>
                                        <?= $this->Html->link(__('Linkedin'),['class' => 'fa fa-linkedin btn btn-grey-dark', 'url' => $user['linkedin']]) ?>
                                    </div>
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->
                        </section><!-- /#agent-info -->
                        <hr class="thick">
                        <section id="agent-properties">
                            <header><h3>Propriétés du(10)</h3></header>
                            <div class="layout-expandable">


                            <!-- début des infos des offres -->
                                <div class="row"> <!-- nouvelle row toutes les 3 offres -->

                                    <div class="col-md-4 col-sm-4">

                                        <div class="property">
                                            <a href="property-detail.html">
                                                <div class="property-image">

                                                <!-- images des offres -->

                                                </div>
                                                <div class="overlay">
                                                    <div class="info">
                                                        <div class="tag price">50 €/m²</div>
                                                        <h3>88000 Epinal</h3>
                                                        <figure>Commerce, Zone de la Voivre</figure>
                                                    </div>
                                                    <ul class="additional-info">
                                                        <li>
                                                            <header>Surface:</header>
                                                            <figure>800m²<sup></sup></figure>
                                                        </li>
                                                        <li>
                                                            <header>Divisible:</header>
                                                            <figure>Oui<sup></sup></figure>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div><!-- /.property -->
                                    </div><!-- /.col-md-4 -->

                                    <!-- fin des infos des offres -->

                                </div><!-- /.row-->


                            <div class="center">
                                <span class="show-all">Voir + de propriétés</span>
                            </div>
                        </section><!-- /#agent-properties -->
                        <hr class="thick">
                        <div class="row">
                            <div class="col-md-5">
                                <h3><b>Contacter le vendeur :</b></h3>
                            </div><!-- /.col-md-5 -->
                            <div class="col-md-7">
                                <h3>Envoyer un Message</h3>
                                <div class="agent-form">
                                    <?= $this->Form->create('form',['role' => 'form', 'id' => 'form-contact-agent', 'class' => 'clearfix']) ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form-contact-agent-name">Votre Nom<em>*</em></label>
                                                    <?= $this->Form->input('name',['label' => '', 'class' => 'form-control', 'id' => 'form-contact-agent-name', 'name' => 'form-contact-agent-name', 'required' => true]) ?>
                                                </div><!-- /.form-group -->
                                            </div><!-- /.col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form-contact-agent-email">Email<em>*</em></label>
                                                    <?= $this->Form->input('email',['label' => '', 'class' => 'form-control', 'id' => 'form-contact-agent-email', 'name' => 'form-contact-agent-email', 'required' => true]) ?>

                                                </div><!-- /.form-group -->
                                            </div><!-- /.col-md-6 -->
                                        </div><!-- /.row -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="form-contact-agent-message">Votre Message<em>*</em></label>
                                                    <?= $this->Form->textarea('message',['class' => 'form-control', 'id' => 'form-contact-agent-message', 'rows' => 5, 'name' => 'form-contact-agent-message', 'required' => true]) ?>

                                                </div><!-- /.form-group -->
                                            </div><!-- /.col-md-12 -->
                                        </div><!-- /.row -->
                                        <div class="form-group clearfix">
                                            <?= $this->Form->submit(__('Soumettre'),['class' => 'btn pull-right btn-default', 'id' => 'form-contact-agent-submit']) ?>
                                        </div><!-- /.form-group -->
                                        <div id="form-rating-status"></div>
                                    <?= $this->Form->end() ?><!-- /#form-contact -->
                                </div><!-- /.rating-form -->
                            </div>
                        </div><!-- /.row -->
                    </section><!-- /#agent-detail -->
                </div><!-- /.col-md-9 -->
                <!-- end Agent Detail -->

                <!-- sidebar -->
                <div class="col-md-3 col-sm-3">
                    <section id="sidebar">
                        <aside id="edit-search">
                            <header><h3>Recherche</h3></header>
                            <form role="form" id="form-sidebar" class="form-search" action="properties-listing.html">
                                <div class="form-group">
                                    <select name="type">
                                        <option value="">Type transaction</option>
                                        <option value="1">Location</option>
                                        <option value="2">Vente</option>
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <select name="country">
                                        <option value="">Pays</option>
                                        <option value="1">France</option>
                                        <option value="2">Great Britain</option>
                                        <option value="3">Spain</option>
                                        <option value="4">Russia</option>
                                        <option value="5">United States</option>
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <select name="city">
                                        <option value="">Ville</option>
                                        <option value="1">Nancy</option>
                                        <option value="2">Epinal</option>
                                        <option value="3">Lyon</option>
                                        <option value="4">Paris</option>
                                        <option value="5">Lille</option>
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <select name="district">
                                        <option value="0">Départements</option>
                                        <option value="1">Vosges</option>
                                        <option value="2">Moselle</option>
                                        <option value="3">Meurthe & Moselle</option>
                                        <option value="4"></option>
                                        <option value="5"></option>
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <select name="property-type">
                                        <option value="">Type de propriétés</option>
                                        <option value="1">Bureau</option>
                                        <option value="2">Commerce</option>
                                        <option value="3">Industrie</option>
                                        <option value="4">Terrain</option>
                                        <option value="5">Entrepôt</option>
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <div class="price-range">
                                        <input id="price-input" type="text" name="price" value="1000;299000">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Rechercher maintenant !</button>
                                </div><!-- /.form-group -->
                            </form><!-- /#form-map -->
                        </aside><!-- /#edit-search -->

                        <aside id="our-guides">
                            <header></header>
                            <a href="#" class="universal-button">
                                <figure class="fa fa-home"></figure>
                                <span class="arrow fa fa-angle-right"></span>
                            </a><!-- /.universal-button -->
                            <a href="#" class="universal-button">
                                <figure class="fa fa-umbrella"></figure>
                                <span class="arrow fa fa-angle-right"></span>
                            </a><!-- /.universal-button -->
                        </aside><!-- /#our-guide -->
                    </section><!-- /#sidebar -->
                </div><!-- /.col-md-3 -->
                <!-- end Sidebar -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->
</div>
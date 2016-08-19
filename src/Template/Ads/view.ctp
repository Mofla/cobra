<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ad'), ['action' => 'edit', $ad->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ad'), ['action' => 'delete', $ad->id], ['confirm' => __('Êtes vous sur de vouloir supprimer # {0}?', $ad->id)]) ?> </li>
    </ul>
</nav>

<div class="wrapper">

    <!-- Page Content -->
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Accueil</a></li>
                <li class="active">Détail de l'offre</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <div class="row">
                <!-- Property Detail Content -->
                <div class="col-md-9 col-sm-9">
                    <section id="property-detail">
                        <div class="property-title">
                            <h1><?= h($ad->type_ad->type_name) ?> / <?= h($ad->town->town_name)?> / <?= h($ad->town->town_zip_code)?></h1>
                            <figure><?='offre n°' ,($ad->id) ?></figure>

                        </div>

                        <?php if (!empty($ad->images)): ?>
                        <?php foreach ($ad->images as $images): ?>
                        <section id="property-gallery">
                            <div class="owl-carousel property-carousel">
                                <div class="property-slide">
                                    <a href="assets/img/properties/"<?=$images->description?> class="image-popup">
                                        <div class="overlay"><h3>Front View</h3></div>

                                                <?= $this->Html->image($images->description) ?></td>

                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </a>
                                </div><!-- /.property-slide -->
                                <div class="property-slide">
                                    <a href="assets/img/properties/property-detail-02.jpg" class="image-popup">
                                        <div class="overlay"><h3>Bedroom</h3></div>
                                        <img alt="" src="assets/img/properties/property-detail-02.jpg">
                                    </a>
                                </div><!-- /.property-slide -->
                                <div class="property-slide">
                                    <a href="assets/img/properties/property-detail-03.jpg" class="image-popup">
                                        <div class="overlay"><h3>Bathroom</h3></div>
                                        <img alt="" src="assets/img/properties/property-detail-03.jpg">
                                    </a>
                                </div><!-- /.property-slide -->
                            </div><!-- /.property-carousel -->
                        </section>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <section id="quick-summary" class="clearfix">
                                    <header><h2>Résumé</h2></header>
                                    <dl>
                                        <dt>En location : <?= $ad->for_rent ? __(' Oui') : __(' Non'); ?></dt>
                                        <br>
                                        <dt>En vente : <?= $ad->for_sale ? __(' Oui') : __(' Non'); ?></dt>
                                        <dd> <?= h($ad->town->town_name)?> / code postal / département</dd>
                                        <dt> Type de bien:</dt>
                                        <dd><?= h($ad->type_ad->type_name) ?></dd>
                                        <dt>Surface:</dt>
                                        <dd><?= $this->Number->format($ad->surface) ?>m<sup>2</sup></dd>
                                        <dt>Divisible:</dt>
                                        <dd><?= $ad->is_divisible ? __(' Oui') : __(' Non'); ?></dd>
                                        <dt>Prix</dt>
                                        <dd><span class="tag price"><?= h($ad->price) ?>€</span></dd>
                                        <br>
                                        <dt>Date de création:</dt>
                                        <dd><?= h($ad->created) ?></dd>
                                        <br>
                                        <dt>Dernière modification:</dt>
                                        <dd><?= h($ad->modified) ?></dd>

                                    </dl>
                                </section><!-- /#quick-summary -->
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-8 col-sm-12">
                                <section id="description">
                                    <header><h2>Description</h2></header>
                                    <p>
                                        <?= h($ad->price_info) ?>
                                    </p>
                                    <br>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum,
                                        bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt.
                                        Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat. Sed ac
                                        turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam
                                        mauris rutrum a. Curabitur sit amet pretium lectus, nec consequat orci.
                                    </p>

                                </section><!-- /#description -->


                                <section id="property-map">
                                    <header><h2>Map</h2></header>
                                    <div class="property-detail-map-wrapper">
                                        <div class="property-detail-map" id="property-detail-map">

                                        </div>
                                    </div>
                                </section><!-- /#property-map -->

                            </div><!-- /.col-md-8 -->
                            <div class="col-md-12 col-sm-12">
                                <section id="contact-agent">
                                    <header><h2>Contacter le vendeur</h2></header>
                                    <div class="row">
                                        <section class="agent-form">
                                            <div class="col-md-7 col-sm-12">
                                                <aside class="agent-info clearfix">
                                                    <figure><a href="agent-detail.html"><img alt="" src="assets/img/agent-01.jpg"></a></figure>
                                                    <div class="agent-contact-info">
                                                        <h3>Nom et prénom</h3>
                                                        <p>Description</p>

                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum,
                                                            bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt.
                                                            Duis euismod placerat rhoncus.
                                                        </p>
                                                        <dl>
                                                            <dt>Téléphone:</dt>
                                                            <dd>(123) 456 789</dd>
                                                            <dt>Email:</dt>
                                                            <dd><a href="mailto:#">john.doe@example.com</a></dd>
                                                            <dt>facebook   </dt>
                                                            <dt>Twitter   </dt>
                                                            <dt>Linkedin</dt> <br>

                                                        </dl>
                                                        <hr>
                                                        <a href="agent-detail.html" class="link-arrow">Voir le profil</a>
                                                    </div>
                                                </aside><!-- /.agent-info -->
                                            </div><!-- /.col-md-7 -->
                                            <div class="col-md-5 col-sm-12">
                                                <div class="agent-form">
                                                    <form role="form" id="form-contact-agent" method="post"  class="clearfix">
                                                        <div class="form-group">
                                                            <label for="form-contact-agent-name">Votre nom<em>*</em></label>
                                                            <input type="text" class="form-control" id="form-contact-agent-name" name="form-contact-agent-name" required>
                                                        </div><!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label for="form-contact-agent-email">Votre email<em>*</em></label>
                                                            <input type="email" class="form-control" id="form-contact-agent-email" name="form-contact-agent-email" required>
                                                        </div><!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label for="form-contact-agent-message">Votre message<em>*</em></label>
                                                            <textarea class="form-control" id="form-contact-agent-message" rows="2" name="form-contact-agent-message" required></textarea>
                                                        </div><!-- /.form-group -->
                                                        <div class="form-group">
                                                            <button type="submit" class="btn pull-right btn-default" id="form-contact-agent-submit">Envoyer le message</button>
                                                        </div><!-- /.form-group -->
                                                        <div id="form-contact-agent-status"></div>
                                                    </form><!-- /#form-contact -->
                                                </div><!-- /.agent-form -->
                                            </div><!-- /.col-md-5 -->
                                        </section><!-- /.agent-form -->
                                    </div><!-- /.row -->
                                </section><!-- /#contact-agent -->

                                <hr class="thick">

                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </section><!-- /#property-detail -->
                </div><!-- /.col-md-9 -->
                <!-- end Property Detail Content -->

                <!-- sidebar -->
                <div class="col-md-3 col-sm-3">
                    <section id="sidebar">

                        <aside id="featured-properties">
                            <header><h3>Offres similaires</h3></header>
                            <div class="property small">
                                <a href="property-detail.html">
                                    <div class="property-image">
                                        <img alt="" src="assets/img/properties/property-06.jpg">
                                    </div>
                                </a>
                                <div class="info">
                                    <a href="property-detail.html"><h4>Type de bien</h4></a>
                                    <figure>Ville / Code postal </figure>
                                    <div class="tag price">Prix € / info prix</div>
                                </div>
                            </div><!-- /.property -->
                            <div class="property small">
                                <a href="property-detail.html">
                                    <div class="property-image">
                                        <img alt="" src="assets/img/properties/property-09.jpg">
                                    </div>
                                </a>
                                <div class="info">
                                    <a href="property-detail.html"><h4>Type de bien</h4></a>
                                    <figure>Ville / Code postal </figure>
                                    <div class="tag price">Prix € / info prix</div>
                                </div>
                            </div><!-- /.property -->
                            <div class="property small">
                                <a href="property-detail.html">
                                    <div class="property-image">
                                        <img alt="" src="assets/img/properties/property-09.jpg">
                                    </div>
                                </a>
                                <div class="info">
                                    <a href="property-detail.html"><h4>Type de bien</h4></a>
                                    <figure>Ville / Code postal </figure>
                                    <div class="tag price">Prix € / info prix</div>
                                </div>
                            </div><!-- /.property -->
                            <div class="property small">
                                <a href="property-detail.html">
                                    <div class="property-image">
                                        <img alt="" src="assets/img/properties/property-09.jpg">
                                    </div>
                                </a>
                                <div class="info">
                                    <a href="property-detail.html"><h4>Type de bien</h4></a>
                                    <figure>Ville / Code postal </figure>
                                    <div class="tag price">Prix € / info prix</div>
                                </div>
                            </div><!-- /.property -->
                            <div class="property small">
                                <a href="property-detail.html">
                                    <div class="property-image">
                                        <img alt="" src="assets/img/properties/property-03.jpg">
                                    </div>
                                </a>
                                <div class="info">
                                    <a href="property-detail.html"><h4>Type de bien</h4></a>
                                    <figure>Ville / Code postal </figure>
                                    <div class="tag price">Prix € / info prix</div>
                                </div>
                            </div><!-- /.property -->
                        </aside><!-- /#featured-properties -->

                    </section><!-- /#sidebar -->
                </div><!-- /.col-md-3 -->
                <!-- end Sidebar -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->

</div>

<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="assets/js/markerwithlabel_packed.js"></script>
<script type="text/javascript" src="assets/js/infobox.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.raty.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="assets/js/jshashtable-2.1_src.js"></script>
<script type="text/javascript" src="assets/js/jquery.numberformatter-1.2.3.js"></script>
<script type="text/javascript" src="assets/js/tmpl.js"></script>
<script type="text/javascript" src="assets/js/jquery.dependClass-0.1.js"></script>
<script type="text/javascript" src="assets/js/draggable-0.1.js"></script>
<script type="text/javascript" src="assets/js/jquery.slider.js"></script>
<script type="text/javascript" src="assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="assets/js/custom-map.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
<!--[if gt IE 8]>
<script type="text/javascript" src="assets/js/ie.js"></script>
<![endif]-->
<script type="text/javascript">
    var propertyId = 0;
    google.maps.event.addDomListener(window, 'load', initMap(propertyId));
    $(window).load(function(){
        initializeOwl(false);
    });
</script>

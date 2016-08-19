<!DOCTYPE>
<html>
<head>
<meta charset="UTF-8">
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="ThemeStarz">

<?= $this->Html->css("http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css") ?>
<?= $this->Html->css('assets/fonts/font-awesome.css rel="stylesheet" type="text/css"') ?>
<?= $this->Html->css('assets/bootstrap/css/bootstrap.css') ?>
<?= $this->Html->css('assets/css/bootstrap-select.min.css') ?>
<?= $this->Html->css('assets/css/magnific-popup.css') ?>
<?= $this->Html->css('assets/css/jquery.slider.min.css') ?>
<?= $this->Html->css('assets/css/owl.carousel.css') ?>
<?= $this->Html->css('assets/css/style.css') ?>
<?= $this->Html->css('assets/css/bootstrap-select.min.css') ?>

<?= $this->Html->script('jquery-2.1.0.min.js') ?>
<?= $this->Html->script('http://maps.google.com/maps/api/js?sensor=false') ?>
<?= $this->Html->script('jquery-migrate-1.2.1.min.js') ?>
<?= $this->Html->script('assets/bootstrap/js/bootstrap.min.js') ?>
<?= $this->Html->script('smoothscroll.js') ?>
<?= $this->Html->script('markerwithlabel_packed.js') ?>
<?= $this->Html->script('infobox.js') ?>
<?= $this->Html->script('owl.carousel.min.js') ?>
<?= $this->Html->script('assets/js/bootstrap-select.min.js') ?>
<?= $this->Html->script('jquery.validate.min.js') ?>
<?= $this->Html->script('jquery.placeholder.js') ?>
<?= $this->Html->script('icheck.min.js') ?>
<?= $this->Html->script('jquery.vanillabox-0.1.5.min.js') ?>
<?= $this->Html->script('retina-1.1.0.min.js') ?>
<?= $this->Html->script('jshashtable-2.1_src.js') ?>
<?= $this->Html->script('jquery.numberformatter-1.2.3.js') ?>
<?= $this->Html->script('tmpl.js') ?>
<?= $this->Html->script('jquery.dependClass-0.1.js') ?>
<?= $this->Html->script('draggable-0.1.js') ?>
<?= $this->Html->script('jquery.slider.js') ?>
<?= $this->Html->script('markerclusterer_packed.js') ?>
<?= $this->Html->script('custom-map.js') ?>
<?= $this->Html->script('custom.js') ?>
<!--[if gt IE 8]-->
<?= $this->Html->script('ie') ?>

</head>
<body>
<header>
<div class="wrapper">

    <div class="navigation">
        <div class="secondary-navigation">
            <div class="container">
                <div class="user-area">
                    <div class="actions">
                        <?= $this->Html->link('S‘inscrire','/inscription/') ?>
                        <?= $this->Html->link('Connexion','/connexion/') ?>
                    </div>
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
                        <a href="index-google-map-fullscreen.html"></a>
                    </div>
                    <img src="logo.png" height="100px" width="300px">

                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">

                    <ul class="nav navbar-nav">
                        <li class="active has-child"><?= $this->Html->link('Accueil','/index')?></li>
                        <li class="active has-child"><?= $this->Html->link('Nos Offres','/offres/liste')?></li>
                        <li class="active has-child"><?= $this->Html->link('Deposer une offre','/offres/ajouter')?></li>
                        <li></li>
                    </ul>
                </nav><!-- /.navbar collapse-->
                </header>

                 <body class="page-sub-page page-listing-lines page-search-results" id="page-top">

<?= $this->fetch('content') ?>


                </body>

<footer>
<div class="wrapper">
    <footer id="page-footer">
        <div class="inner">
            <aside id="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <article>
                                <h3>A propos de nous</h3>
                                <p>Vel fermentum ipsum. Suspendisse quis molestie odio. Interdum et malesuada fames ac ante ipsum
                                    primis in faucibus. Quisque aliquet a metus in aliquet. Praesent ut turpis posuere, commodo odio
                                    id, ornare tortor
                                </p>
                                <hr>
                                <a href="#" class="link-arrow"> Lire plus</a>
                            </article>
                        </div><!-- /.col-sm-3 -->
                        <div class="col-md-3 col-sm-3">
                            <article>
                                <h3> </h3>
                                <div class="property small">
                                    <a href="property-detail.html">
                                        <div class="">
                                            <img src="logofooter.png" width="200px" height="100px">
                                        </div>
                                    </a>
                                    <div class="info">
                                        <a href="property-detail.html"><h4></h4></a>
                                        <figure> </figure>
                                        <div class="tag price"></div>
                                    </div>
                                </div><!-- /.property -->
                                <div class="property small">

                                    <a href="property-detail.html">
                                        <div class="">


                                        </div>
                                    </a>
                                    <div class="info">

                                    </div>
                                </div><!-- /.property -->
                            </article>
                        </div><!-- /.col-sm-3 -->
                    <div class="col-md-3 col-sm-3">
                            <article>
                                <h3>Contact</h3>
                                <address>
                                    <strong>Your Company</strong><br>
                                    4877 Spruce Drive<br>
                                    West Newton, PA 15089
                                </address>
                                +1 (734) 123-4567<br>
                                <a href="#">hello@example.com</a>
                            </article>
                        </div><!-- /.col-sm-3 -->
                        <div class="col-md-3 col-sm-3">
                            <article>
                                <h3>Menu</h3>
                                <ul class="list-unstyled list-links">
                                    <li><?= $this->Html->link('Accueil','/index')?></li>
                                    <li><?= $this->Html->link('Nos Offres','/offres/liste')?></li>
                                    <li><?= $this->Html->link('Deposer une offre','/offres/ajouter')?></li>
                                    <li><a href="9contact.html">Contacts</a></li>
                                    <li><a href="11terms-conditions.html">Terms and Conditions</a></li>
                                </ul>
                            </article>
                        </div><!-- /.col-sm-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </aside><!-- /#footer-main -->
            <aside id="footer-thumbnails" class="footer-thumbnails"></aside><!-- /#footer-thumbnails -->
            <aside id="footer-copyright">
                <div class="container">
                    <span>Copyright © 2013. All Rights Reserved.</span>
                    <span class="pull-right"><a href="#page-top" class="roll">Revenir en haut</a></span>
                </div>
            </aside>
            </aside>
                                              </div>
                                                    </footer>
</body>

</html>
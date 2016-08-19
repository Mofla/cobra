

<div class="ads index large-9 medium-8 columns content">
    <h3><?= __('Ads') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <?= $this->Html->link(__('Ajouter un offre'), ['controller' => 'Ads', 'action' => 'add']) ?>

            <tr>
                <th><?= $this->Paginator->sort('Vendeur') ?></th>
                <th><?= $this->Paginator->sort('Type d\'offre') ?></th>
                <th><?= $this->Paginator->sort('A vendre') ?></th>
                <th><?= $this->Paginator->sort('A louer') ?></th>
                <th><?= $this->Paginator->sort('Prix') ?></th>
                <th><?= $this->Paginator->sort('Information prix') ?></th>
                <th><?= $this->Paginator->sort('Surface') ?></th>
                <th><?= $this->Paginator->sort('Divisible') ?></th>
                <th><?= $this->Paginator->sort('Ville') ?></th>
                <th><?= $this->Paginator->sort('Photo') ?></th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>

TEMPLATE

(<!-- Wrapper -->
<div class="wrapper">

</div><!-- /.container -->
</div><!-- /.navigation -->
<!-- end Navigation -->
<!-- Page Content -->
<div id="page-content">
    <!-- Breadcrumb -->
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Accueil</a></li>
            <li class="active">Nos offres</li>
        </ol>
    </div>
    <!-- end Breadcrumb -->

    <div class="container">
        <div class="row">
            <!-- Results -->
            <div class="col-md-9 col-sm-9">
                <section id="results">
                    <header><h1>Nos offres</h1></header>
                    <section id="search-filter">
                        <figure><h3><i class="fa fa-search"></i>Résultat:</h3>
                            <span class="search-count"></span>
                            <div class="sorting">
                                <div class="form-group">
                                    <select name="sorting">
                                        <option value="">Trier par</option>

                                        <option value=<?= $this->Paginator->sort('price', 'tri par prix croissant', ['direction' => 'desc']); ?></option>
                                        <option value=<?= $this->Paginator->sort('price', 'tri par prix decroissant', ['direction' => 'asc']); ?></option>
                                        <option value=<?= $this->Paginator->sort('created', 'tri par date de création', ['direction' => 'desc']); ?></option>
                                    </select>
                                </div><!-- /.form-group -->
                            </div>
                        </figure>
                    </section>
                    <section id="properties" class="display-lines">
                        <div class="property">

                            <div class="property-image">
                                <figure class="ribbon">Transaction</figure>
                                <a href="property-detail.html">
                                    <img alt="" src="assets/img/properties/property-01.jpg">
                                </a>
                            </div>
                            <?php foreach ($ads as $ad): ?>
                                <tr>
                                    <td><?= $ad->has('user') ? $this->Html->link($ad->user->username, ['controller' => 'Users', 'action' => 'view', $ad->user->id]) : '' ?></td>
                                    <td><?= $ad->type_ad->type_name ?></td>
                                    <td><?= $this->BooleenTranslate->makeEdit($ad->for_sale)//Booleen
                                        //translate was an helper for traduct true on "oui" and false on "non" ?></td>
                                    <td><?= $this->BooleenTranslate->makeEdit($ad->for_rent) ?></td>
                                    <td><?= $this->Number->format($ad->price) ?></td>
                                    <td><?= ($ad->price_info) ?></td>
                                    <td><?= $this->Number->format($ad->surface) ?></td>
                                    <td><?= $this->BooleenTranslate->makeEdit($ad->is_divisible) ?></td>
                                    <td><?= $ad->town->town_name?></td>
                                    <td><?= $this->Html->image($ad->images[0]->description); ?></td>

                                    <td class="actions">
                                        <?= $this->Html->link(__('voir offre'), ['action' => 'view', $ad->id]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <div class="info">
                                <header>
                                    <a href="property-detail.html"><h3><?= $this->Html->link('Type de bien / Ville / Code Postal / Departement','/offres/detail')?></h3></a>
                                    <figure>N° de l'offre</figure>
                                </header>
                                <div class="tag price">Prix €, Prix info</div>
                                <aside>
                                    <p>Description ... Description ... Description ... Description ...
                                        Description ... Description ... Description ...
                                    </p>
                                    <dl>
                                        <dt>Surface:</dt>
                                        <dd>860 m<sup>2</sup></dd>
                                        <dt>Divisible:</dt>
                                        <dd>Oui</dd>
                                    </dl>
                                </aside>
                                <a href="property-detail.html" class="link-arrow"><?= $this->Html->link('Lire plus','/offres/detail')?></a>
                            </div>
                        </div><!-- /.property -->
                        <section id="properties" class="display-lines">
                            <div class="property">

                                <div class="property-image">
                                    <figure class="ribbon">Transaction</figure>
                                    <a href="property-detail.html">

                                        <img alt="" src="assets/img/properties/property-01.jpg">

                                    </a>
                                </div>
                                <div class="info">
                                    <header>
                                        <a href="property-detail.html"><h3><?= $this->Html->link('Type de bien / Ville / Code Postal / Departement','/offres/detail')?></h3></a>
                                        <figure>N° de l'offre</figure>
                                    </header>
                                    <div class="tag price">Prix €, Prix info</div>
                                    <aside>
                                        <p>Description ... Description ... Description ... Description ...
                                            Description ... Description ... Description ...
                                        </p>
                                        <dl>
                                            <dt>Surface:</dt>
                                            <dd>860 m<sup>2</sup></dd>
                                            <dt>Divisible:</dt>
                                            <dd>Oui</dd>
                                        </dl>
                                    </aside>
                                    <a href="property-detail.html" class="link-arrow"><?= $this->Html->link('Lire plus','/offres/detail')?></a>
                                </div>
                            </div><!-- /.property -->
                            <section id="properties" class="display-lines">
                                <div class="property">

                                    <div class="property-image">
                                        <figure class="ribbon">Transaction</figure>
                                        <a href="property-detail.html">
                                            <img alt="" src="assets/img/properties/property-01.jpg">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <header>
                                            <a href="property-detail.html"><h3><?= $this->Html->link('Type de bien / Ville / Code Postal / Departement','/offres/detail')?> </h3></a>
                                            <figure>N° de l'offre</figure>
                                        </header>
                                        <div class="tag price">Prix €, Prix info</div>
                                        <aside>
                                            <p>Description ... Description ... Description ... Description ...
                                                Description ... Description ... Description ...
                                            </p>
                                            <dl>
                                                <dt>Surface:</dt>
                                                <dd>860 m<sup>2</sup></dd>
                                                <dt>Divisible:</dt>
                                                <dd>Oui</dd>
                                            </dl>
                                        </aside>
                                        <a href="property-detail.html" class="link-arrow"><?= $this->Html->link('Lire plus','/offres/detail')?></a>
                                    </div>
                                </div><!-- /.property -->




                                <!-- Pagination -->
                                <div class="center">
                                    <ul class="pagination">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                    </ul><!-- /.pagination-->
                                </div><!-- /.center-->
                            </section><!-- /#properties-->
                        </section><!-- /#results -->
            </div><!-- /.col-md-9 -->
            <!-- end Results -->

            <!-- sidebar -->
            <div class="col-md-3 col-sm-3">
                <section id="sidebar">
                    <aside id="edit-search">
                        <header><h3>Critères de recherche</h3></header>
                        <form role="form" id="form-sidebar" class="form-search" action="properties-listing.html">
                            <div class="form-group">
                                <select name="country" >
                                    <option value="">Département</option>
                                    <option value="1">Vosges</option>
                                    <option value="2">Meurthe-et-Moselle</option>
                                    <option value="3">Moselle</option>
                                    <option value="4">Meuse</option>
                                </select>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                Ville: <input type="text" name="address"> <br>
                            </div>
                            <div class="form-group">
                                Code postal: <input type="text" name="address"> <br>
                            </div>
                            <div class="form-group">
                                <select name="type">
                                    <option value="">Transaction</option>
                                    <option value="1">Location</option>
                                    <option value="2">Vente</option>
                                    <option value="3">Vente ou location</option>
                                </select>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <select name="city">
                                    <option value="">Type de bien</option>
                                    <option value="1">Bureau</option>
                                    <option value="2">Commerce</option>
                                    <option value="3">Entrepôt</option>
                                    <option value="4">Industrie</option>
                                    <option value="5">Terrain</option>
                                </select>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <select name="district">
                                    <option value="">Divisible</option>
                                    <option value="1">Oui</option>
                                    <option value="2">Non</option>
                                </select>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                Prix:
                                <div class="price-range">
                                    <input id="price-input" type="text" name="price" value="1000;299000">
                                </div>
                            </div>
                            <div class="form-group">
                                Surface:
                                <div class="price-range">
                                    <input id="surface-input" type="text" name="price" value="1000;299000">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Rechercher</button>
                            </div><!-- /.form-group -->
                        </form><!-- /#form-map -->
                    </aside><!-- /#edit-search -->
                    <!--  <aside id="featured-properties">
                         <header><h3>Featured Properties</h3></header>
                         <div class="property small">
                             <a href="property-detail.html">
                                 <div class="property-image">
                                     <img alt="" src="assets/img/properties/property-06.jpg">
                                 </div>
                             </a>
                             <div class="info">
                                 <a href="property-detail.html"><h4>2186 Rinehart Road</h4></a>
                                 <figure>Doral, FL 33178 </figure>
                                 <div class="tag price">$ 72,000</div>
                             </div>
                         </div> --><!-- /.property -->
                    <!--  <div class="property small">
                         <a href="property-detail.html">
                             <div class="property-image">
                                 <img alt="" src="assets/img/properties/property-09.jpg">
                             </div>
                         </a>
                         <div class="info">
                             <a href="property-detail.html"><h4>2479 Murphy Court</h4></a>
                             <figure>Minneapolis, MN 55402</figure>
                             <div class="tag price">$ 36,000</div>
                         </div>
                     </div> --><!-- /.property -->
                    <!-- <div class="property small">
                        <a href="property-detail.html">
                            <div class="property-image">
                                <img alt="" src="assets/img/properties/property-03.jpg">
                            </div>
                        </a>
                        <div class="info">
                            <a href="property-detail.html"><h4>1949 Tennessee Avenue</h4></a>
                            <figure>Minneapolis, MN 55402</figure>
                            <div class="tag price">$ 128,600</div>
                        </div>
                    </div> --><!-- /.property -->
                    <!-- </aside> --><!-- /#featured-properties -->
                    <!-- <aside id="our-guides">
                        <header><h3>Our Guides</h3></header>
                        <a href="#" class="universal-button">
                            <figure class="fa fa-home"></figure>
                            <span>Buying Guide</span>
                            <span class="arrow fa fa-angle-right"></span>
                        </a> --><!-- /.universal-button -->
                    <!--  <a href="#" class="universal-button">
                         <figure class="fa fa-umbrella"></figure>
                         <span>Right Insurance for You</span>
                         <span class="arrow fa fa-angle-right"></span>
                     </a> --><!-- /.universal-button -->
                    <!--  </aside> --><!-- /#our-guide -->
                </section><!-- /#sidebar -->
            </div><!-- /.col-md-3 -->
            <!-- end Sidebar -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->



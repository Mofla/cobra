
<div class="ads form large-9 medium-8 columns content">
    <?= $this->Form->create($ad,['type' => 'file']); ?>
<fieldset>
    <legend><?= __('Ajouter une offre') ?></legend>

    <?php
    echo $this->Form->hidden('user_id', ['label' => 'users','value'=>'1']);
    echo $this->Form->hidden('is_active',['value'=>'1']);
    echo $this->Form->input('type_ad_id', ['options' => $typeAds,'label' => 'Type de bien']);
    echo $this->Form->input('for_sale', ['label' => 'A vendre']);
    echo $this->Form->input('for_rent', ['label' => 'A louer']);
    echo $this->Form->input('price', ['label' => 'Prix']);
    echo $this->Form->input('price_info' ,['label' => 'Information prix']);
    echo $this->Form->input('surface' ,['label' => 'Surface']);
    echo $this->Form->input('is_divisible', ['label' => 'Surface divisible']);
    echo $this->Form->input('town_id',['options' => $towns,'label' => 'ville','id'=>'ville','id'=>'submit-status']);?>
    <input id="submit" type="button" value="Localistion">




    <?php echo $this->element('map');//google Map
    echo $this->Form->hidden('latitude',['id'=>'lat']);
    echo $this->Form->hidden('longitude',['id'=>'lng']);
    echo $this->Form->input('description');
    echo $this->Form->input('image.description', ['type' => 'file','tmp_name' => 'C:/wamp64/www/cakephp/webroot/img',]);

    ?>
</fieldset>
<?= $this->Form->button(__('valider')) ?>
<?= $this->Form->end() ?>
</div>


TEMPLATE

<?= $this->Form->create($ad,['type' => 'file']);
echo $this->Form->hidden('user_id', ['label' => 'users','value'=>'1']);
echo $this->Form->hidden('is_active',['value'=>'1']);?>

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
            <li class="active">Déposer une offre</li>
        </ol>
    </div>
    <!-- end Breadcrumb -->

    <div class="container">
        <div class="row">
            <!-- Results -->
            <div class="col-md-9 col-sm-9">
                <section id="results">
                    <header><h1>Déposer une offre</h1></header>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                               <?php echo $this->Form->input('type_ad_id', ['options' => $typeAds,
                                'label' => 'Type de bien',
                                'id' =>"submit-property-type" ]);?>

                            </div><!-- /.form-group -->

                        </div>

                    </div><!-- /.form-group -->
            </div>
        </div>
        <div class="form-group">
           <?= $this->Form->input('Description',['class'=>"form-control",'id'=>"submit-description"]);?>
        </div><!-- /.form-group -->
        </section><!-- /#basic-information -->

        <section>
            <div class="row">
                <div class="block clearfix">
                    <div class="col-md-6 col-sm-6">
                        <section id="summary">
                            <div class="form-group">
                                <label for="submit-location">Départements</label>
                                <select name="type" id="submit-location">
                                    <option value="1">Ardennes</option>
                                    <option value="2">Vosges</option>
                                    <option value="3">Meurthe-et-Moselle</option>
                                    <option value="4">Moselle</option>
                                    <option value="5">Meuse</option>
                                    <option value="6">Aube</option>
                                    <option value="7">Marne</option>
                                    <option value="8">Haute-Marne</option>
                                    <option value="9">Haut-Rhin</option>
                                    <option value="10">Bas-Rhin</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="submit-Beds">Code Postal</label>
                                        <input type="text" class="form-control" id="submit-Beds" name="Beds" pattern="\d*" required>
                                    </div>
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-6 -->
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">

                                        <?php echo $this->Form->input('town_id',['options' => $towns,'label' => 'ville','id'=>'ville','id'=>'submit-status']);?>
                                    </div>
                                    <!-- /.form-group -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <?= $this->Form->input('for_sale', ['label' => 'A vendre', 'class'=>"i"]);?>
                                        <?=   $this->Form->input('for_rent', ['label' => 'A louer', 'class'=>""]);?>
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                            <div class="col-md-4">
                                <div class="form-group">
                                   <?= $this->Form->input('price', ['label' => 'Prix','id'=>"submit-price",'class'=>'form-control','pattern'=>'\d*']);?>
                                        <span class="input-group-addon">€</span>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <?=$this->Form->input('surface' ,['label' => 'Surface','id'=>'submit-area','class'=>'form-control','pattern'=>'\d*']);?>
                                                    <span class="input-group-addon">m<sup>2</sup></span>
                                                </div>
                                            </div><!-- /.form-group -->
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="submit-garages">Divisible</label>
                                                <select name="is_divisible" id="submit-garages">
                                                    <option value="0">Oui</option>
                                                    <option value="1">Non</option>
                                                </select>

                                            </div><!-- /.form-group -->
                                         </div>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                                <input id="file-upload" type="file" class="file" multiple="true" data-show-upload="false" data-show-caption="false" data-show-remove="false" accept="image/jpeg,image/png" data-browse-class="btn btn-default" data-browse-label="Télécharger vos photos">
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->

                        </section><!-- /#summary -->
                    </div><!-- /.col-md-6 -->


                    <div class="col-md-6 col-sm-6">
                        <section id="place-on-map">
                            <header class="section-title">
                                <h2>Carte</h2>
                                <span class="link-arrow geo-location">Aller à ma position</span>
                            </header>
                            <div class="form-group">
                                <label for="address-map">Adresse</label>
                                <input type="text" class="form-control" id="address-map" name="address" placeholder="Entrer une adresse">
                            </div><!-- /.form-group -->
                            <label for="address-map">Positionner le marqueur à l'adresse du bien</label>
                            <div id="submit-map"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="latitude" name="latitude" readonly>
                                    </div><!-- /.form-group -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="longitude" name="longitude" readonly>
                                    </div><!-- /.form-group -->
                                </div>
                            </div>
                        </section><!-- /#place-on-map -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.block -->
            </div><!-- /.row -->

            <div class="row">
                <div class="block">
                    <div class="col-md-9 col-sm-9">
                        <div class="center">
                            <div class="form-group">
                                <button type="submit" class="btn btn-default large">Ajouter l'offre</button>
                            </div><!-- /.form-group -->

                            <figure class="note block">En cliquant sur “Ajouter l'offre” vous serez en accord avec nos termes et nos conditions <a href="terms-conditions.html">Termes et conditions</a></figure>
                        </div>
                    </div>
                </div><!-- /.col-md-6 -->
            </div>
    </div>
</div><!-- /.container -->
</div>
<!-- end Page Footer -->
</div>


<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>
<script type="text/javascript" src="assets/js/markerwithlabel_packed.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="assets/js/fileinput.min.js"></script>
<script type="text/javascript" src="assets/js/custom-map.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>

<script>
    var _latitude = 48.15;
    var _longitude = 6.45;

    google.maps.event.addDomListener(window, 'load', initSubmitMap(_latitude,_longitude));
    function initSubmitMap(_latitude,_longitude){
        var mapCenter = new google.maps.LatLng(_latitude,_longitude);
        var mapOptions = {
            zoom: 15,
            center: mapCenter,
            disableDefaultUI: false,
            //scrollwheel: false,
            styles: mapStyles
        };
        var mapElement = document.getElementById('submit-map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new MarkerWithLabel({
            position: mapCenter,
            map: map,
            icon: 'assets/img/marker.png',
            labelAnchor: new google.maps.Point(50, 0),
            draggable: true
        });
        $('#submit-map').removeClass('fade-map');
        google.maps.event.addListener(marker, "mouseup", function (event) {
            var latitude = this.position.lat();
            var longitude = this.position.lng();
            $('#latitude').val( this.position.lat() );
            $('#longitude').val( this.position.lng() );
        });

//      Autocomplete
        var input = /** @type {HTMLInputElement} */( document.getElementById('address-map') );
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);
        google.maps.event.addListener(autocomplete, 'place_changed', function() {
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                return;
            }
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);
            }
            marker.setPosition(place.geometry.location);
            marker.setVisible(true);
            $('#latitude').val( marker.getPosition().lat() );
            $('#longitude').val( marker.getPosition().lng() );
            var address = '';
            if (place.address_components) {
                address = [
                    (place.address_components[0] && place.address_components[0].short_name || ''),
                    (place.address_components[1] && place.address_components[1].short_name || ''),
                    (place.address_components[2] && place.address_components[2].short_name || '')
                ].join(' ');
            }
        });

    }

    function success(position) {
        initSubmitMap(position.coords.latitude, position.coords.longitude);
        $('#latitude').val( position.coords.latitude );
        $('#longitude').val( position.coords.longitude );
    }

    $('.geo-location').on("click", function() {
        if (navigator.geolocation) {
            $('#submit-map').addClass('fade-map');
            navigator.geolocation.getCurrentPosition(success);
        } else {
            error('Geo Location is not supported');
        }
    });
</script>

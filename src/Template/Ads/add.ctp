
<div class="ads form large-9 medium-8 columns content">
    <?= $this->Form->create($ad,['type' => 'file']); ?>
<fieldset>
    <legend><?= __('Ajouter une offre') ?></legend>

    <?php
    echo $this->Form->hidden('user_id', ['label' => 'users','value'=>'1']);
    echo $this->Form->input('is_active');
    echo $this->Form->input('type_ad_id', ['options' => $typeAds,'label' => 'Type de bien']);
    echo $this->Form->input('for_sale', ['label' => 'A vendre']);
    echo $this->Form->input('for_rent', ['label' => 'A louer']);
    echo $this->Form->input('price', ['label' => 'Prix']);
    echo $this->Form->input('price_info' ,['label' => 'Information prix']);
    echo $this->Form->input('surface' ,['label' => 'Surface']);
    echo $this->Form->input('is_divisible', ['label' => 'Surface divisible']);
    echo $this->Form->input('town_id',['options' => $towns,'label' => 'ville','id'=>'ville']);?>
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
<script>
    var listCity;
    $.get("city.txt", function(data) {
        listCity = data.split(',');
        $("[name=city]").autocomplete({source:listCity})

    });
</script>
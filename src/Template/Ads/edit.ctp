
<div class="ads form large-9 medium-8 columns content">
    <?= $this->Form->create($ad) ?>
    <fieldset>
        <legend><?= __('Edit Ad') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('type_id', ['options' => $typeAds]);
            echo $this->Form->input('is_active');
            echo $this->Form->input('for_sale');
            echo $this->Form->input('for_rent');
            echo $this->Form->input('price');
            echo $this->Form->input('price_info');
            echo $this->Form->input('surface');
            echo $this->Form->input('is_divisible');
            echo $this->Form->input('town_id', ['options' => $towns]);
            echo $this->Form->input('description');
            echo $this->Form->input('latitude');
            echo $this->Form->input('longitude');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $typeAd->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $typeAd->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Type Ads'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="typeAds form large-9 medium-8 columns content">
    <?= $this->Form->create($typeAd) ?>
    <fieldset>
        <legend><?= __('Edit Type Ad') ?></legend>
        <?php
            echo $this->Form->input('type_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

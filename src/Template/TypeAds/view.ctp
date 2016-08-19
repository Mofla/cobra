<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Type Ad'), ['action' => 'edit', $typeAd->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Type Ad'), ['action' => 'delete', $typeAd->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeAd->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Type Ads'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type Ad'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typeAds view large-9 medium-8 columns content">
    <h3><?= h($typeAd->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Type Name') ?></th>
            <td><?= h($typeAd->type_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($typeAd->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($typeAd->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($typeAd->modified) ?></td>
        </tr>
    </table>
</div>

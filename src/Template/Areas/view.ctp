<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Area'), ['action' => 'edit', $area->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Area'), ['action' => 'delete', $area->id], ['confirm' => __('Are you sure you want to delete # {0}?', $area->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Areas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Area'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Towns'), ['controller' => 'Towns', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Town'), ['controller' => 'Towns', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="areas view large-9 medium-8 columns content">
    <h3><?= h($area->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Area') ?></th>
            <td><?= h($area->area) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($area->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($area->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($area->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Towns') ?></h4>
        <?php if (!empty($area->towns)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Area Id') ?></th>
                <th><?= __('Town Name') ?></th>
                <th><?= __('Town Zip Code') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($area->towns as $towns): ?>
            <tr>
                <td><?= h($towns->id) ?></td>
                <td><?= h($towns->area_id) ?></td>
                <td><?= h($towns->town_name) ?></td>
                <td><?= h($towns->town_zip_code) ?></td>
                <td><?= h($towns->created) ?></td>
                <td><?= h($towns->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Towns', 'action' => 'view', $towns->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Towns', 'action' => 'edit', $towns->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Towns', 'action' => 'delete', $towns->id], ['confirm' => __('Are you sure you want to delete # {0}?', $towns->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

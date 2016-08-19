<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ad'), ['action' => 'edit', $ad->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ad'), ['action' => 'delete', $ad->id], ['confirm' => __('Êtes vous sur de vouloir supprimer # {0}?', $ad->id)]) ?> </li>
    </ul>
</nav>
<div class="ads view large-9 medium-8 columns content">
    <h3><?='offre n°' ,($ad->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Vendeur') ?></th>
            <td><?= $ad->has('user') ? $this->Html->link($ad->user->username, ['controller' => 'Users', 'action' => 'view', $ad->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Type d\'offre') ?></th>
            <td><?= h($ad->type_ad->type_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Information prix') ?></th>
            <td><?= h($ad->price_info) ?></td>
        </tr>
        <tr>
            <th><?= __('Ville') ?></th>
            <td><?= h($ad->town->town_name)?></td>
        </tr>
        <tr>
            <th><?= __('Prix') ?></th>
            <td><?= $this->Number->format($ad->price) ?> €</td>
        </tr>
        <tr>
            <th><?= __('Surface') ?></th>
            <td><?= $this->Number->format($ad->surface) ?> m²</td>
        </tr>
        <tr>
            <th><?= __('Crée') ?></th>
            <td><?= h($ad->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modifié') ?></th>
            <td><?= h($ad->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('A vendre') ?></th>
            <td><?= $ad->for_sale ? __('oui') : __('non'); ?></td>
        </tr>
        <tr>
            <th><?= __('A louer') ?></th>
            <td><?= $ad->for_rent ? __('oui') : __('non'); ?></td>
        </tr>
        <tr>
            <th><?= __('Divisible') ?></th>
            <td><?= $ad->is_divisible ? __('oui') : __('non'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($ad->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Photos') ?></h4>
        <?php if (!empty($ad->images)): ?>

            <?php foreach ($ad->images as $images): ?>
            <?= $this->Html->image($images->description) ?></td>

            <?php endforeach; ?>

        <?php endif; ?>
    </div>

</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Provider[]|\Cake\Collection\CollectionInterface $providers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Provider'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders Providers Steps'), ['controller' => 'OrdersProvidersSteps', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Orders Providers Step'), ['controller' => 'OrdersProvidersSteps', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="providers index large-9 medium-8 columns content">
    <h3><?= __('Providers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delivery_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($providers as $provider): ?>
            <tr>
                <td><?= $this->Number->format($provider->id) ?></td>
                <td><?= h($provider->name) ?></td>
                <td><?= $this->Number->format($provider->delivery_time) ?></td>
                <td><?= h($provider->created) ?></td>
                <td><?= h($provider->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $provider->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $provider->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $provider->id], ['confirm' => __('Are you sure you want to delete # {0}?', $provider->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

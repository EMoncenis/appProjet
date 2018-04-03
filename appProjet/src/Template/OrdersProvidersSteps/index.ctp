<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrdersProvidersStep[]|\Cake\Collection\CollectionInterface $ordersProvidersSteps
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Orders Providers Step'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Providers'), ['controller' => 'Providers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Provider'), ['controller' => 'Providers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Steps'), ['controller' => 'Steps', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Step'), ['controller' => 'Steps', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ordersProvidersSteps index large-9 medium-8 columns content">
    <h3><?= __('Orders Providers Steps') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('provider_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('step_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ordersProvidersSteps as $ordersProvidersStep): ?>
            <tr>
                <td><?= $this->Number->format($ordersProvidersStep->id) ?></td>
                <td><?= h($ordersProvidersStep->state) ?></td>
                <td><?= $ordersProvidersStep->has('order') ? $this->Html->link($ordersProvidersStep->order->name, ['controller' => 'Orders', 'action' => 'view', $ordersProvidersStep->order->id]) : '' ?></td>
                <td><?= $ordersProvidersStep->has('provider') ? $this->Html->link($ordersProvidersStep->provider->name, ['controller' => 'Providers', 'action' => 'view', $ordersProvidersStep->provider->id]) : '' ?></td>
                <td><?= $ordersProvidersStep->has('step') ? $this->Html->link($ordersProvidersStep->step->name, ['controller' => 'Steps', 'action' => 'view', $ordersProvidersStep->step->id]) : '' ?></td>
                <td><?= h($ordersProvidersStep->created) ?></td>
                <td><?= h($ordersProvidersStep->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ordersProvidersStep->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ordersProvidersStep->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ordersProvidersStep->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersProvidersStep->id)]) ?>
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

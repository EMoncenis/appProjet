<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrdersProvidersStep $ordersProvidersStep
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Orders Providers Step'), ['action' => 'edit', $ordersProvidersStep->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Orders Providers Step'), ['action' => 'delete', $ordersProvidersStep->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersProvidersStep->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders Providers Steps'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orders Providers Step'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Providers'), ['controller' => 'Providers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Provider'), ['controller' => 'Providers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Steps'), ['controller' => 'Steps', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Step'), ['controller' => 'Steps', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ordersProvidersSteps view large-9 medium-8 columns content">
    <h3><?= h($ordersProvidersStep->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= $ordersProvidersStep->has('order') ? $this->Html->link($ordersProvidersStep->order->name, ['controller' => 'Orders', 'action' => 'view', $ordersProvidersStep->order->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Provider') ?></th>
            <td><?= $ordersProvidersStep->has('provider') ? $this->Html->link($ordersProvidersStep->provider->name, ['controller' => 'Providers', 'action' => 'view', $ordersProvidersStep->provider->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Step') ?></th>
            <td><?= $ordersProvidersStep->has('step') ? $this->Html->link($ordersProvidersStep->step->name, ['controller' => 'Steps', 'action' => 'view', $ordersProvidersStep->step->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ordersProvidersStep->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ordersProvidersStep->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($ordersProvidersStep->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $ordersProvidersStep->state ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Note') ?></h4>
        <?= $this->Text->autoParagraph(h($ordersProvidersStep->note)); ?>
    </div>
</div>

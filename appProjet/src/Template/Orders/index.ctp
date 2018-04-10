<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order[]|\Cake\Collection\CollectionInterface $orders
 */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Production Blocks'), ['controller' => 'ProductionBlocks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Production Block'), ['controller' => 'ProductionBlocks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Working Times'), ['controller' => 'WorkingTimes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Working Time'), ['controller' => 'WorkingTimes', 'action' => 'add']) ?></li>
    </ul>
</nav>

<div class="orders index large-10 medium-9 columns content">

    <h3><?=__('Orders') ?></h3>
    
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delivery_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('production_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order): ?>
            <tr>
                <td><?= $this->Number->format($order->id) ?></td>
                <td><?= h($order->name) ?></td>
                <td><?= h($order->delivery_date) ?></td>
                <td><?= $this->Number->format($order->production_time) ?></td>
                <td><?= $order->has('user') ? $this->Html->link($order->user->name, ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?></td>
                <td><?= h($order->created) ?></td>
                <td><?= h($order->updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $order->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

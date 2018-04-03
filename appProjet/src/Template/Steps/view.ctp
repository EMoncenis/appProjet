<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Step $step
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Step'), ['action' => 'edit', $step->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Step'), ['action' => 'delete', $step->id], ['confirm' => __('Are you sure you want to delete # {0}?', $step->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Steps'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Step'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders Providers Steps'), ['controller' => 'OrdersProvidersSteps', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orders Providers Step'), ['controller' => 'OrdersProvidersSteps', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="steps view large-9 medium-8 columns content">
    <h3><?= h($step->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($step->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($step->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($step->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($step->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated') ?></th>
            <td><?= h($step->updated) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Orders Providers Steps') ?></h4>
        <?php if (!empty($step->orders_providers_steps)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col"><?= __('Provider Id') ?></th>
                <th scope="col"><?= __('Step Id') ?></th>
                <th scope="col"><?= __('Note') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Updated') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($step->orders_providers_steps as $ordersProvidersSteps): ?>
            <tr>
                <td><?= h($ordersProvidersSteps->id) ?></td>
                <td><?= h($ordersProvidersSteps->state) ?></td>
                <td><?= h($ordersProvidersSteps->order_id) ?></td>
                <td><?= h($ordersProvidersSteps->provider_id) ?></td>
                <td><?= h($ordersProvidersSteps->step_id) ?></td>
                <td><?= h($ordersProvidersSteps->note) ?></td>
                <td><?= h($ordersProvidersSteps->created) ?></td>
                <td><?= h($ordersProvidersSteps->updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OrdersProvidersSteps', 'action' => 'view', $ordersProvidersSteps->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OrdersProvidersSteps', 'action' => 'edit', $ordersProvidersSteps->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrdersProvidersSteps', 'action' => 'delete', $ordersProvidersSteps->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersProvidersSteps->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

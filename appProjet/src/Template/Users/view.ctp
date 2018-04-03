<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Production Blocks'), ['controller' => 'ProductionBlocks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Production Block'), ['controller' => 'ProductionBlocks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Working Times'), ['controller' => 'WorkingTimes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Working Time'), ['controller' => 'WorkingTimes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($user->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Function') ?></th>
            <td><?= h($user->function) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Orders') ?></h4>
        <?php if (!empty($user->orders)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Delivery Date') ?></th>
                <th scope="col"><?= __('Production Time') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->orders as $orders): ?>
            <tr>
                <td><?= h($orders->id) ?></td>
                <td><?= h($orders->description) ?></td>
                <td><?= h($orders->name) ?></td>
                <td><?= h($orders->delivery_date) ?></td>
                <td><?= h($orders->production_time) ?></td>
                <td><?= h($orders->user_id) ?></td>
                <td><?= h($orders->created) ?></td>
                <td><?= h($orders->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Production Blocks') ?></h4>
        <?php if (!empty($user->production_blocks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Start') ?></th>
                <th scope="col"><?= __('End') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->production_blocks as $productionBlocks): ?>
            <tr>
                <td><?= h($productionBlocks->id) ?></td>
                <td><?= h($productionBlocks->start) ?></td>
                <td><?= h($productionBlocks->end) ?></td>
                <td><?= h($productionBlocks->created) ?></td>
                <td><?= h($productionBlocks->modified) ?></td>
                <td><?= h($productionBlocks->user_id) ?></td>
                <td><?= h($productionBlocks->order_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProductionBlocks', 'action' => 'view', $productionBlocks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProductionBlocks', 'action' => 'edit', $productionBlocks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductionBlocks', 'action' => 'delete', $productionBlocks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productionBlocks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Working Times') ?></h4>
        <?php if (!empty($user->working_times)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Day') ?></th>
                <th scope="col"><?= __('Start') ?></th>
                <th scope="col"><?= __('End') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->working_times as $workingTimes): ?>
            <tr>
                <td><?= h($workingTimes->id) ?></td>
                <td><?= h($workingTimes->day) ?></td>
                <td><?= h($workingTimes->start) ?></td>
                <td><?= h($workingTimes->end) ?></td>
                <td><?= h($workingTimes->created) ?></td>
                <td><?= h($workingTimes->modified) ?></td>
                <td><?= h($workingTimes->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'WorkingTimes', 'action' => 'view', $workingTimes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'WorkingTimes', 'action' => 'edit', $workingTimes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'WorkingTimes', 'action' => 'delete', $workingTimes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workingTimes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

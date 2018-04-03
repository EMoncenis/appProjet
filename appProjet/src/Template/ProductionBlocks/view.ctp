<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductionBlock $productionBlock
 */
?>

<div class="productionBlocks view large-9 medium-8 columns content">
    <h3><?= h($productionBlock->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $productionBlock->has('user') ? $this->Html->link($productionBlock->user->name, ['controller' => 'Users', 'action' => 'view', $productionBlock->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= $productionBlock->has('order') ? $this->Html->link($productionBlock->order->name, ['controller' => 'Orders', 'action' => 'view', $productionBlock->order->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($productionBlock->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start') ?></th>
            <td><?= h($productionBlock->start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End') ?></th>
            <td><?= h($productionBlock->end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($productionBlock->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated') ?></th>
            <td><?= h($productionBlock->updated) ?></td>
        </tr>
    </table>
</div>

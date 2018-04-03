<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>

<div class="orders view large-9 medium-8 columns content">
    <h3><?= h($order->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($order->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $order->has('user') ? $this->Html->link($order->user->name, ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($order->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Production Time') ?></th>
            <td><?= $this->Number->format($order->production_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Date') ?></th>
            <td><?= h($order->delivery_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($order->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated') ?></th>
            <td><?= h($order->updated) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($order->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Files') ?></h4>
        <?php if (!empty($order->files)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Path') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Updated') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($order->files as $files): ?>
            <tr>
                <td><?= h($files->id) ?></td>
                <td><?= h($files->path) ?></td>
                <td><?= h($files->created) ?></td>
                <td><?= h($files->updated) ?></td>
                <td><?= h($files->order_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Files', 'action' => 'view', $files->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Files', 'action' => 'edit', $files->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Files', 'action' => 'delete', $files->id], ['confirm' => __('Are you sure you want to delete # {0}?', $files->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Orders Providers Steps') ?></h4>
        <?php if (!empty($order->orders_providers_steps)): ?>
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
            <?php foreach ($order->orders_providers_steps as $ordersProvidersSteps): ?>
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
    <div class="related">
        <h4><?= __('Related Production Blocks') ?></h4>
        <?php if (!empty($order->production_blocks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Start') ?></th>
                <th scope="col"><?= __('End') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Updated') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($order->production_blocks as $productionBlocks): ?>
            <tr>
                <td><?= h($productionBlocks->id) ?></td>
                <td><?= h($productionBlocks->start) ?></td>
                <td><?= h($productionBlocks->end) ?></td>
                <td><?= h($productionBlocks->created) ?></td>
                <td><?= h($productionBlocks->updated) ?></td>
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
</div>

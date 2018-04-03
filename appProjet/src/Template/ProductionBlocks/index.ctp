<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductionBlock[]|\Cake\Collection\CollectionInterface $productionBlocks
 */
?>

<div class="productionBlocks index large-9 medium-8 columns content">
    <h3><?= __('Production Blocks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productionBlocks as $productionBlock): ?>
            <tr>
                <td><?= $this->Number->format($productionBlock->id) ?></td>
                <td><?= h($productionBlock->start) ?></td>
                <td><?= h($productionBlock->end) ?></td>
                <td><?= h($productionBlock->created) ?></td>
                <td><?= h($productionBlock->updated) ?></td>
                <td><?= $productionBlock->has('user') ? $this->Html->link($productionBlock->user->name, ['controller' => 'Users', 'action' => 'view', $productionBlock->user->id]) : '' ?></td>
                <td><?= $productionBlock->has('order') ? $this->Html->link($productionBlock->order->name, ['controller' => 'Orders', 'action' => 'view', $productionBlock->order->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $productionBlock->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productionBlock->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productionBlock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productionBlock->id)]) ?>
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

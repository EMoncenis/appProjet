<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
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

<div class="orders form large-10 medium-9 columns content">
    <?= $this->Form->create($order) ?>
    <fieldset>
        <legend><?= __('Add Order') ?></legend>
        <?php
            echo $this->Form->control('description');
            echo $this->Form->control('name');
            echo $this->Form->control('delivery_date');
            echo $this->Form->control('production_time');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

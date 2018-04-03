<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrdersProvidersStep $ordersProvidersStep
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Orders Providers Steps'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Providers'), ['controller' => 'Providers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Provider'), ['controller' => 'Providers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Steps'), ['controller' => 'Steps', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Step'), ['controller' => 'Steps', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ordersProvidersSteps form large-9 medium-8 columns content">
    <?= $this->Form->create($ordersProvidersStep) ?>
    <fieldset>
        <legend><?= __('Add Orders Providers Step') ?></legend>
        <?php
            echo $this->Form->control('state');
            echo $this->Form->control('order_id', ['options' => $orders]);
            echo $this->Form->control('provider_id', ['options' => $providers]);
            echo $this->Form->control('step_id', ['options' => $steps]);
            echo $this->Form->control('note');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

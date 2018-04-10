<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Production Blocks'), ['controller' => 'ProductionBlocks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Production Block'), ['controller' => 'ProductionBlocks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Working Times'), ['controller' => 'WorkingTimes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Working Time'), ['controller' => 'WorkingTimes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-10 medium-9 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('password');
            echo $this->Form->control('type');
            echo $this->Form->control('function');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

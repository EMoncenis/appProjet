<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Step $step
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $step->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $step->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Steps'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Orders Providers Steps'), ['controller' => 'OrdersProvidersSteps', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Orders Providers Step'), ['controller' => 'OrdersProvidersSteps', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="steps form large-9 medium-8 columns content">
    <?= $this->Form->create($step) ?>
    <fieldset>
        <legend><?= __('Edit Step') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

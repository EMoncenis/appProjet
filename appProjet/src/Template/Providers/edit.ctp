<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Provider $provider
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $provider->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $provider->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Providers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Orders Providers Steps'), ['controller' => 'OrdersProvidersSteps', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Orders Providers Step'), ['controller' => 'OrdersProvidersSteps', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="providers form large-9 medium-8 columns content">
    <?= $this->Form->create($provider) ?>
    <fieldset>
        <legend><?= __('Edit Provider') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('delivery_time');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

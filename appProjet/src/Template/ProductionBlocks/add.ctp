<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductionBlock $productionBlock
 */
?>

<div class="productionBlocks form large-9 medium-8 columns content">
    <?= $this->Form->create($productionBlock) ?>
    <fieldset>
        <legend><?= __('Add Production Block') ?></legend>
        <?php
            echo $this->Form->control('start');
            echo $this->Form->control('end');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('order_id', ['options' => $orders]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

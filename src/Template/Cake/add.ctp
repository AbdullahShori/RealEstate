<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cake $cake
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cake'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cake form large-9 medium-8 columns content">
    <?= $this->Form->create($cake) ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $property
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Properties'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="properties form large-9 medium-8 columns content">
    <?= $this->Form->create($property,array('type'=>'file')) ?>
    <fieldset>
        <legend><?= __('Add Property') ?></legend>
        <?php
            echo $this->Form->control('Name');
            echo $this->Form->control('file', ['label' => false, 'class' => 'form-control', 'type' => 'file']) ;
            echo $this->Form->control('Description');
            echo $this->Form->control('Price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

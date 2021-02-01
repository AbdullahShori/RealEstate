<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $property
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $property->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $property->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Properties'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="properties form large-9 medium-8 columns content">
    <?= $this->Form->create($property) ?>
    <fieldset>
        <legend><?= __('Edit Property') ?></legend>
        <?php
            echo $this->Form->control('Name');
            echo $this->Form->control('Image');
            echo $this->Form->control('Description');
            echo $this->Form->control('Price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

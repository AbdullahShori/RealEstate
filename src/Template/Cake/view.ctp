<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cake $cake
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cake'), ['action' => 'edit', $cake->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cake'), ['action' => 'delete', $cake->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cake->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cake'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cake'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cake view large-9 medium-8 columns content">
    <h3><?= h($cake->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($cake->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cake->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($cake->description)); ?>
    </div>
</div>

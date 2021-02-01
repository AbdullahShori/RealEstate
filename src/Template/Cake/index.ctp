<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cake[]|\Cake\Collection\CollectionInterface $cake
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<nav class="large-2 medium-4 columns" id="actions-sidebar"  style="background-color:rgb(0,0,0,0.9);">
    <ul class="side-nav">
        <li class="heading"><?= __('Pont of Sale') ?></li>
        <li><?= $this->Html->link(__('Add Product'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Logout'),['controller' => 'Users','action' => 'logout']) ?></li>
    </ul>
</nav>
<div class="cake index large-10 medium-8 columns content">
    <h3><?= __('Product') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cake as $cake): ?>
            <tr>
                <td><?= $this->Number->format($cake->id) ?></td>
                <td><?= h($cake->name) ?></td>
                <td><?= h($cake->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cake->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cake->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cake->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cake->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

</body>
</html>

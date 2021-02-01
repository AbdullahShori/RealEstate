<?php echo $this->HTML->css('style.css');?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $properties
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Property'), ['action' => 'add']) ?></li>
        <ul>
        <li style="border:1px solid white;"><?= $this->Html->link(__('Logout')
          ,['controller' => '../users', 'action' => 'login']) ?></li>
    </ul>
</nav>
<div class="properties index large-9 medium-8 columns content">
    <h3><?= __('Properties') ?></h3>
    <div class='col-md-4'>
<div style="margin-right:40%;">
    <form action="<?php ['controller' =>'Search','action' => 'index'] ?> " method="get">
   
        <div class ="input-group">
            <input type="search" name="q" class="form-control"/>
            <div class="input-group-prepend">
                <button class="btn btn-primary input -group-text" type="submit">search</button>
            </div> </div>
        </div>        
</form>

</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Price') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($properties as $property): ?>
            <tr>
                <td><?= $this->Number->format($property->id) ?></td>
                <td><?= h($property->Name) ?></td>
                <td><?= $this->Html->image( $property->Image, ['border' => '0', 'data-src' => $property->image, 'class' => 'img-responsive']); ?></td>
                <td><?= h($property->Price) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $property->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $property->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $property->id], ['confirm' => __('Are you sure you want to delete # {0}?', $property->id)]) ?>
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

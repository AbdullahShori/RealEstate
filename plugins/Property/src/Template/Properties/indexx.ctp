<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $products
 */
?>
<?= $this->Html->css('base.css') ?>
<?= $this->Html->css('style.css') ?>
<?= $this->Html->css('nav.css') ?>

<body style="background-color: #202020;">
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>

    </ul>
</nav>
<div class="products index large-9 medium-8 columns content">
    <h3 style="color:rgb(165 165 165);"><?= __('Games') ?></h3>

    <div class="row">
    <?php foreach ($products as $product): ?>
  <div style="width:20%;display:inline-block;color:white;">

                
                <div class="" style="padding:0px 0px 0px 20px"><?= $this->Html->image( $product->image, ['data-src' => $product->image, 'class' => 'imag']); ?></div>
                <div class=""><?= $this->Html->Link(__($product->name),['action' => 'view',$product->id]) ?></div>
                <div class="product">Price<?= h($product->price) ?>$</div>
                <div class="">Release Date <?= h($product->relese) ?></div>
               
                <div class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
                </div>
          
 
  </div>
  
  <?php endforeach; ?>
 
</div>

</div>
</body>
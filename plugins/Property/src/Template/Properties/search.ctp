<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $products
 */
?>

<?= $this->Html->css('nav.css') ?>


<div class="header">
<h3 style="background-color:#04b704; color:black; padding:10px;"><?= __('Properties') ?>
    <ul style="display:flex; float:right; margin-right:5%;list-style-type:none;">
        <li style="margin-right:0px; background-color:#04b704; padding:10px; color:black;"><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?></li>
        <li style="margin-left:50px; background-color:#04b704; padding:10px; color:black;"><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li style="margin-left:50px; background-color:#04b704; padding:10px; color:black;"><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li style="margin-left:50px; background-color:#04b704; padding:10px; color:black;"><?= $this->Html->link(__('Log out'), ['controller' => '../users', 'action' => 'login']) ?></li>
    </ul></h3>
</div>
<body class="background">
<div class="products index large-9 medium-8 columns content">
    <center>
        <div class='col-md-4' style="margin-left:40%;">
    <form action="<?php echo $this->url->build(['action'=>'search']) ?>" method="get">
        <div class ="input-group">
            <input type="search" name="q" class="form-control" placeholder="Search" value="<?= $search; ?>" >
            <div class="input-group-prepend">
                <button class="btn btn-primary input -group-text" type="submit">search</button>
            </div>
        </div>        
</form>
</center>
</div>
    <div class="row">
    <?php foreach ($properties as $property): ?>
  <div style="width:20%;display:inline-block;color:white; margin-left:10%;">
<center>
                
                <div class="" style="padding:0px 0px 0px 20px">
                <span style="color: #000;"><?php echo $property->Name; ?></span>
                <?= $this->Html->image( $property->Image, ['border' => '0', 'data-src' => $property->Image, 'class' => 'imag']); ?></div>
                <div class=""><?= $this->Html->Link(__($property->name),['action' => 'view',$property->id]) ?></div>
               
                <div class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $property->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $property->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $property->id], ['confirm' => __('Are you sure you want to delete # {0}?', $property->id)]) ?>
                </div>
                </center>      
 
  </div>
  
  <?php endforeach; ?>
 
</div>

</div>
</body>
<footer style="background-color:#6b6b6b; margin-top:100px;">
    JAWAB HA
</footer>
<?= $this->Html->css('abc.css') ?>
<nav class="large-2 medium-3 columns" id="actions-sidebar" style="background:rgba(0,0,0,0.9)">
    <ul class="side-nav">
        <li class="heading"><?= __('Point of Sale') ?></li>
        
        <div class="dropdown">
            <p class="dropbtn">Products Management</p>
            <div class="dropdown-content">
                <?= $this->Html->link(__('New Product'), ['plugin' => 'ShowProducts' ,'controller' => 'Products','action' => 'add']) ?>
                <?= $this->Html->link(__('List of Product'), ['plugin' => 'ShowProducts' ,'controller' => 'Products','action' => 'index']) ?>
            </div>
        </div>
        <div class="dropdown">
            <p class="dropbtn">Categories</p>
            <div class="dropdown-content">
                <?= $this->Html->link(__('List of Categories'), ['plugin' => 'Categories' ,'controller' => 'categories','action' => 'index']) ?>
                <?= $this->Html->link(__('Add Categories'), ['plugin' => 'Categories' ,'controller' => 'categories','action' => 'add']) ?>
            </div>
        </div>
        </br>
        <div class="dropdown">
            <p class="dropbtn">Sales Report</p>
            <div class="dropdown-content">
                <?= $this->Html->link(__('Daily'), ['plugin' => 'Report' ,'controller' => 'Report','action' => 'index']) ?>
                <?= $this->Html->link(__('Monthly'), ['plugin' => 'Report' ,'controller' => 'Report','action' => 'monthly']) ?>
                
            </div>
        </div>

        <div class="dropdown">
            <p class="dropbtn">Customer Management</p>
            <div class="dropdown-content">
                <?= $this->Html->link(__('List of Customer'), ['plugin' => 'CustomerManagement' ,'controller' => 'Customer','action' => 'index']) ?>
                <?= $this->Html->link(__('Add Cutomer'), ['plugin' => 'CustomerManagement' ,'controller' => 'Customer','action' => 'add']) ?>
            </div>
        </div>
        <div class="dropdown">
            <p class="dropbtn">Employees Management</p>
            <div class="dropdown-content">
                <?= $this->Html->link(__('List of Employees'), ['plugin' => 'EmployeeManagement' ,'controller' => 'Employees','action' => 'index']) ?>
                <?= $this->Html->link(__('Add Employee'), ['plugin' => 'EmployeeManagement' ,'controller' => 'Employees','action' => 'add']) ?>
            </div>
        </div>
        
    </ul>
</nav>
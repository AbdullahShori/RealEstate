<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>  
<?= $this->Html->css('abc.css') ?> 
</head>
<body    style="background-color:rgb(0,0,0,0.9);">

    <div class="users form register"   style="background-color:rgb(0,0,0,0.);">
        <?= $this->Form->create($user) ?>
 
            <legend><?= __('Register Admin') ?></legend>
            <?php
                echo $this->Form->control('Name');
                echo $this->Form->control('Email');
                echo $this->Form->control('Password');
            ?>
        <?= $this->Html->link(__('Click Here to Login'),['controller' => 'Users','action' => 'login']) ?>
        <?= $this->Form->button(__('Register')) ?>
        <?= $this->Form->end() ?>
    </div>
</body>
</html>


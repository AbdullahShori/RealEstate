
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Page</title>
    <?= $this->Html->css('abc.css') ?>

</head>
<body class="body">
    <div class="login"> 
        <h1 id="h1">Login</h1>
        <?= $this->Form->create() ?>
        <?= $this->Form->control('Email') ?>
        <?= $this->Form->control('Password') ?>
        <?= $this->Form->button('Login') ?>
        <?= $this->Html->link(__('Register'),['controller' => 'Users','action' => 'add']) ?>
        <?= $this->Form->end() ?>
    </div>
</body>
</html>



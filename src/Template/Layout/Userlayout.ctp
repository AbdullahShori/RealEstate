<!DOCTYPE html>
<html lang="en">
<head>
<?= $this->Html->charset(); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style>
        .main{
            margin-top:30px;
        }
    </style>

</head>
<body>

    <div class="container clearfix main">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>

</body>
</html>

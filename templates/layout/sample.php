<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      <?= $this->fetch('title') ?>
    </title>
    <?php
      echo $this->fetch('meta');
      echo $this->Html->css('sample.css');
      echo $this->fetch('css');
      echo $this->fetch('script');
    ?>
</head>
<body>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
</body>
</html>
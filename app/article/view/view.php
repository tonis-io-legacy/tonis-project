<?php $this->layout('layout/layout') ?>

<?php $this->start('body') ?>
    <h1>View Article</h1>
    #<?=$article['id']?> <?=$article['title']?>
<?php $this->stop() ?>

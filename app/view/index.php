<?php $this->layout('layout/layout') ?>

<?php $this->start('body') ?>
    <h1>Article List</h1>
    <hr>

    <?php foreach ($articles as $article) : ?>
        <div><?=$article['id']?>: <?=$article['title']?></div>
    <?php endforeach; ?>
<?php $this->stop() ?>

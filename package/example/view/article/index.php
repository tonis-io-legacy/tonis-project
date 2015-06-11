<?php $this->layout('layout::layout') ?>

<?php $this->start('body') ?>
    Article List
    <hr>

    <?php foreach ($articles as $article) : ?>
        <div><?=$article['id']?>: <?=$article['title']?></div>
    <?php endforeach; ?>
<?php $this->stop() ?>

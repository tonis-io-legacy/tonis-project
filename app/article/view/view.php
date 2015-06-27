<?php $this->layout('layout/layout') ?>

<?php $this->start('body') ?>
    <h1>View Article</h1>
    <?php if (isset($article)) : ?>
        #<?=$article['id']?> <?=$article['title']?>
    <?php else : ?>
        No article found.
    <?php endif; ?>
<?php $this->stop() ?>

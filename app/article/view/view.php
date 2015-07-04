<?php $this->layout('article::layout/layout') ?>

<?php $this->start('body') ?>
    <h1>View Article</h1>

    <p><a href="<?=$this->url('article.list')?>" class="btn btn-primary">Back to list</a></p>

    <p>#<?=$article['id']?> <?=$article['title']?></p>
<?php $this->stop() ?>

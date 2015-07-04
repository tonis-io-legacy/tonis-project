<?php $this->layout('article::layout/layout') ?>
<?php $this->start('body') ?>
    <h1>Article List</h1>
    <hr>

    <?php foreach ($articles as $article) : ?>
        <div>
            <a href="<?=$this->url('article.view', ['article_id' => $article['id']])?>">
                <?=$article['id']?>: <?=$article['title']?>
            </a>
        </div>
    <?php endforeach; ?>
<?php $this->stop() ?>

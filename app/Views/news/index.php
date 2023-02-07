<h2><?= esc($title) ?></h2>

<button class="btn btn-primary mb-4" onclick="location.href='<?php echo base_url(); ?>/news/create'">Create
    Article</button>

<?php if (!empty($news) && is_array($news)) : ?>

<?php foreach ($news as $news_item) : ?>

<div class="card w-50 m-4" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?= esc($news_item['title']) ?></h5>
        <p class="card-text"><?= esc($news_item['body']) ?></p>
        <a class="btn btn-secondary" href="<?= base_url() ?>/news/<?= esc($news_item['slug'], 'url') ?>">View
            article</a>
    </div>
</div>


<?php endforeach ?>

<?php else : ?>

<h3>No News</h3>

<p>Unable to find any news for you.</p>

<?php endif ?>
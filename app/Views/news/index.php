<div class="container text-center">

    <button class="btn btn-success px-4 my-3" onclick="location.href='<?php echo base_url(); ?>/news/create'">Create
        Article</button>

    <?php if (!empty($news) && is_array($news)) : ?>

<div class="container d-flex justify-content-center flex-wrap">

    <?php foreach ($news as $news_item) : ?>

    <div class="card w-45 m-2" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= esc($news_item['title']) ?></h5>
            <p class="card-text"><?= esc($news_item['body']) ?></p>
            <a class="btn btn-secondary" href="<?= base_url() ?>/news/<?= esc($news_item['slug'], 'url') ?>">View
                article</a>
        </div>
    </div>


    <?php endforeach ?>

    </div>

    <?php else : ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

    <?php endif ?>
</div>
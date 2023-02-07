<div class="container text-center d-flex justify-content-center">

    <?= session()->getFlashdata('error') ?>
    <?= validation_list_errors() ?>


    <form class="form-group w-50" action="<?= base_url() ?>/news/create" method="post">
        <?= csrf_field() ?>
        <div class="form-group row m-2">
            <label class="col-sm-2 col-form-label" for="title">Title</label>
            <div class="col-sm-10">
                <input class="form-control" type="input" name="title" value="<?= set_value('title') ?>">
            </div>
        </div>
        <div class="form-group row m-2">
            <label class="col-sm-2 col-form-label" for="body">Text</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
            </div>
        </div>

        <input class="btn btn-primary" type="submit" name="submit" value="Create news item">
    </form>
</div>
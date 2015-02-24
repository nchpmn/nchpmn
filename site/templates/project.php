    <div class="col-sm-5">
        <?php $cover = $page->cover(); ?>
        <?php if($image = $page->image(strval($cover))): ?>
            <img class="img-responsive" src="<?php echo $image->url() ?>">
        <?php endif ?>
    </div>
    <div class="col-sm-7">
        <h1><?php echo $page->title() ?></h1>
        <?php echo $page->text()->kirbytext() ?>
    </div>
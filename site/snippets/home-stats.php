<section id="stats" style="background-image:url(
        <?php $photo = $data->photo(); ?>
        <?php if($image = $data->image(strval($photo))): ?>
            <?php echo $image->url() ?>
        <?php endif ?>
        )">
    <div class="container">
        <div class="row text-center" style="color:<?php echo $data->colour() ?>">
            <?php foreach($data->stats()->yaml() as $item): ?>
                <div class="col-xs-6 col-sm-3 stat">
                    <div class="row"><span><?php echo $item['amount'] ?></span></div>
                    <div class="row"><?php echo $item['caption'] ?></div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section><!-- End callout -->
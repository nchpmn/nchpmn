<section id="callout" style="background-image:url(
        <?php $photo = $data->photo(); ?>
        <?php if($image = $data->image(strval($photo))): ?>
            <?php echo $image->url() ?>
        <?php endif ?>
        )">
    <div class="container">
        <div class="row text-center">
            <h4><?php echo $data->header() ?></h4>
            <a class="btn btn-primary" href="<?php echo $data->buttonURL() ?>"><?php echo $data->button() ?></a>
        </div>
    </div>
</section><!-- End callout -->
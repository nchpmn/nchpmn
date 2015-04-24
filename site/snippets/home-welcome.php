<section id="welcome" class="clearfix">

    <div class="image-container hidden-xs col-sm-3 col-md-5" style="background-image:url(
        <?php $photo = $data->photo(); ?>
        <?php if($image = $data->image(strval($photo))): ?>
            <?php echo $image->url() ?>
        <?php endif ?>
        )">
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-4 col-md-6 col-md-offset-6 col-lg-5 col-lg-offset-6">
                <h3 class="text-center"><span><?php echo $data->title() ?></span></h3>
                <?php echo kirbytext($data->text()) ?>
                </div>
        </div>
    </div>
    
</section><!-- End welcome -->
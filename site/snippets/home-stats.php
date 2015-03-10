<section id="stats" style="background-image:url(
        <?php $photo = $data->photo(); ?>
        <?php if($image = $data->image(strval($photo))): ?>
            <?php echo $image->url() ?>
        <?php endif ?>
        )">
    <div class="container">
        <div class="row text-center">
            <div class="col-xs-6 col-sm-3">
                <div class="row"><span>70+</span></div>
                <div class="row">Short Films</div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="row"><span>15</span></div>
                <div class="row">TVCs</div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="row"><span>40</span></div>
                <div class="row">Corporate</div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="row"><span>1</span></div>
                <div class="row">Feature Film</div>
            </div>
        </div>
    </div>
</section><!-- End callout -->
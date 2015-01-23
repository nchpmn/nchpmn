<section id="blog">
    <h3 class="text-center"><a href="blog"><span>Blog</span></a></h3>
    <div class="owl-carousel">
        <?php foreach(page('blog')->children()->visible()->flip()->limit(3) as $item): ?>
            <div class="item">
                <a href="<?php echo $item->url() ?>">
                    <?php $cover = $item->cover(); ?>
                    <?php if($image = $item->image(strval($cover))): ?>
                        <img class="img-responsive" src="<?php echo $image->url() ?>">
                    <?php endif ?>
                    <div class="blog-description">
                        <h4><?php echo $item->title() ?></h4>
                        <span><?php echo $item->date('j M Y') ?></span>
                    </div>
                </a>
            </div>
        <?php endforeach ?>
</section><!-- End blog -->
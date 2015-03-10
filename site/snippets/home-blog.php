<section id="blog">
    <h3 class="text-center"><a href="blog"><span><?php echo $data->title() ?></span></a></h3>
    <div class="container">
        <div class="row">
            <?php $items = page('blog')->children()->visible()->flip()->limit(strval($data->number())) ?>
            <?php $first = $items->first() ?>
            
            <?php foreach($items as $item): ?>
                <?php if($item == $first): ?>
                    <div class="post col-sm-6">
                        <a href="<?php echo $item->url() ?>">
                            <?php $cover = $item->cover(); ?>
                            <?php if($image = $item->image(strval($cover))): ?>
                                <img class="img-responsive" src="<?php echo $image->url() ?>">
                            <?php endif ?>
                        </a>
                        <div class="blog-description">
                            <h4><?php echo $item->title() ?></h4>
                            <?php echo kirbytext($item->leading()->excerpt(200)) ?>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="post col-xs-6">
                        <a class="col-sm-6" href="<?php echo $item->url() ?>">
                            <?php $cover = $item->cover(); ?>
                            <?php if($image = $item->image(strval($cover))): ?>
                                <img class="img-responsive" src="<?php echo $image->url() ?>">
                            <?php endif ?>
                        </a>
                        <div class="blog-description col-sm-6">
                            <h4><?php echo $item->title() ?></h4>
                            <?php echo kirbytext($item->leading()->excerpt(200)) ?>
                        </div>
                    </div>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </div>
</section><!-- End blog -->
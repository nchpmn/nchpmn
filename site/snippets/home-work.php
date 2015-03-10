<section id="work">
    <div class="container">
        <div class="row">
            <h3 class="text-center"><a href="work.html"><span><?php echo $data->title() ?></span></a></h3>
            <div id="filters" class="text-center hidden-xs">
                <a href="#" class="current btn btn-link btn-lg">All</a>
                <?php foreach(explode(',',$data->tags()) as $tag): ?>
                    <a href=<?php echo "#".$tag ?> class="btn btn-link btn-lg"><?php echo $tag ?></a>
                <?php endforeach ?>
            </div>
        </div>
        <div class="portfolioContainer">
            <?php foreach(page('work')->children()->visible()->flip()->limit(strval($data->number())) as $item): ?>
                <div class="<?php foreach(explode(',',$item->tags()) as $i): ?><?php echo $i ?><?php endforeach ?> col-xs-6 col-lg-4" data-content="<?php echo $item->url() ?>">
                    <a class="colio-link" href="#">
                        <div class="work-description text-center">
                            <h4><?php echo $item->title() ?></h4>
                            <span><?php echo $item->role() ?></span>
                        </div>
                        <?php $cover = $item->cover(); ?>
                        <?php if($image = $item->image(strval($cover))): ?>
                            <img class="img-responsive" src="<?php echo $image->url() ?>">
                        <?php endif ?>
                    </a>
                </div>
            <?php endforeach ?>
        </div>

    </div>
</section><!-- End work -->
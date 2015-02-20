<section id="work">
    <div class="container">
        <div class="row text-center">
            <h3 class="text-center"><a href="work.html"><span>Work</span></a></h3>
            <div class="portfolioFilter text-center hidden-xs">
                <a href="#" data-filter="*" class="current btn btn-link btn-lg">All</a>
                <a href="#" data-filter=".film" class="btn btn-link btn-lg">Film</a>
                <a href="#" data-filter=".tvc" class="btn btn-link btn-lg">TVC</a>
                <a href="#" data-filter=".sport" class="btn btn-link btn-lg">Sport</a>
            </div>
            
            <div class="portfolioContainer">
                <?php foreach(page('work')->children()->visible()->flip()->limit(9) as $item): ?>
                    <div class="<?php echo $item->category() ?> col-xs-6 col-lg-4">
                        <a href="<?php echo $item->url() ?>">
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
    </div>
</section><!-- End work -->
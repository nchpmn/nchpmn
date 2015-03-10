<?php snippet('header') ?>

    <div class="container">
        <div class="row">
            <h1 class="text-center"><a href="work.html"><span>Work</span></a></h1>
            <div id="filters" class="text-center hidden-xs">
                <a href="#" class="current btn btn-link btn-lg">All</a>
                <a href="#film" class="btn btn-link btn-lg">Film</a>
                <a href="#tvc" class="btn btn-link btn-lg">TVC</a>
                <a href="#sport" class="btn btn-link btn-lg">Sport</a>
            </div>
        </div>
            
        <div class="portfolioContainer">
            <?php foreach(page('work')->children()->visible()->flip()->limit(9) as $item): ?>
                <div class="<?php echo $item->category() ?> col-xs-6 col-lg-4" data-content="<?php echo $item->url() ?>">
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
<?php snippet('footer') ?>
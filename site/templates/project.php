<?php snippet('header', array('bodyclass' => 'work-single')) ?>

<header id="cover" class="jumbotron cover owl-carousel">
    <div class="item video-responsive">
        <iframe src="//player.vimeo.com/video/114730775" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    <?php foreach($page->files() as $image): ?>
        <div class="item">
            <img class="img-responsive" src="<?php echo $image->url() ?>">
        </div>
    <?php endforeach ?>  

</header>


<article>
    <div class="container">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-2 post-content">
                <div class="clearfix">
                    <h1><?php echo $page->title() ?></h1>
                    <span class="pull-left"><?php echo $page->role() ?></span>
                    <span class="pull-right"><?php echo $page->year('j Y') ?></span>
                </div>
                
                <?php echo $page->text()->kirbytext() ?>
            </div>
            <div class="col-xs-10 col-xs-offset-1 col-md-3 col-xs-offset-5">
                <dl>
                    <dt>Production Company</dt>
                    <dd><?php echo $page->company() ?></dd>
                    <dt>Client</dt>
                    <dd><?php echo $page->client() ?></dd>
                    <?php foreach($page->crew()->yaml() as $person): ?>
                        <dt><?php echo $person['role'] ?></dt>
                        <dd><?php echo $person['name'] ?></dd>
                    <?php endforeach ?>
                </dl>
            </div>
        </div>
    </div>
</article>




<?php snippet('prevnext') ?>



<?php snippet('footer') ?>
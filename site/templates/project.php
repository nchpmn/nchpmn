<?php snippet('header', array('bodyclass' => 'work-single')) ?>

<header id="cover" class="jumbotron cover owl-carousel">
    <?php if($page->videoSource() == "youtube"): ?>
        <!-- YOUTUBE -->
        <div class="video-responsive item">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $page->videoID(); ?>?showinfo=0&autohide=1&autoplay=0&controls=2&modestbranding=1" frameborder="0" allowfullscreen></iframe>
        </div>
    <?php elseif($page->videoSource() == "vimeo"): ?>
        <!-- VIMEO -->
        <div class="video-responsive item">
            <iframe src="http://player.vimeo.com/video/<?php echo $page->videoID(); ?>?portrait=0&title=0&badge=0&byline=0&color=ed8046" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>    
    <?php endif; ?>
    
    <?php foreach($page->projectImages()->split() as $image): ?>
        <div class="item">
            <img class="img-responsive" src="<?php echo $page->files()->get($image)->url() ?>">
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
                    <span class="pull-right"><?php echo $page->date('Y', 'year')?></span>
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
<?php snippet('header', array('bodyclass' => 'blog-link blog-single')) ?>

<article>
    <div class="container">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 text-center">
                <h1><?php echo $page->title() ?></h1>
                <div class="meta">
                    <span><i class="fa fa-play"></i> &nbsp;&nbsp;&mdash;&nbsp;&nbsp; 
                    <?php foreach(explode(',',$page->tags()) as $t): ?><a href="<?php echo $page->parent()->url() ?>/tag:<?php echo $t ?>"><span><?php echo "#".$t ?></span></a><?php endforeach ?>&nbsp;&nbsp;&mdash;&nbsp;&nbsp;
                    <?php echo $page->date('j M Y') ?></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 media">
                <?php if($page->source() == "youtube"): ?>
                    <!-- YOUTUBE -->
                    <div class="video-responsive item">
                        <iframe width="1280" height="720" src="https://www.youtube.com/embed/<?php echo $page->videoid(); ?>?showinfo=0&autohide=1&autoplay=0&controls=2&modestbranding=1" frameborder="0" allowfullscreen></iframe>
                    </div>
                <?php elseif($page->source() == "vimeo"): ?>
                    <!-- VIMEO -->
                    <div class="video-responsive item">
                        <iframe src="http://player.vimeo.com/video/<?php echo $page->videoid(); ?>?portrait=0&title=0&badge=0&byline=0&color=ed8046" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                    </div>    
                <?php endif; ?>
            </div>
            <div class="col-sm-8 col-sm-offset-2">
                <?php echo $page->text()->kirbytext() ?>
            </div>            
        </div>    
    </div>
</article>

<?php snippet('prevnext') ?>


<?php snippet('footer') ?>